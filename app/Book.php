<?php

namespace App;

use App\Scopes\Searchable;
use Illuminate\Support\Facades\Http;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Book extends Model
{
    use Searchable;
    use SoftDeletes;

    protected $fillable = [
        'cover_image',
        'title',
        'ISBN',
        'edition',
        'format',
        'level_id',
        'Author',
        'quantity',
        'price',
        'sale_price',
        'description',
        'featured',
        'on_sale',
        'publisher_id',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'featured' => 'boolean',
        'on_sale' => 'boolean',
    ];

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function carts()
    {
        return $this->belongsToMany(Cart::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public static function getImageUrlByISBN($ISBN){
        $filename = $ISBN.".jpg";       
        $contents = $this->getImageFromUrl(2, $ISBN);
        if(!$contents){            
            //$contents = $this->getImageFromUrl(2, $ISBN);
            $filename = "defualt.jpg";
        }else{
            Storage::disk('local')->put('public/'.$ISBN.'.jpg', $contents);
        }        
        $this->cover_image = $filename;
        $this->save();
        return $filename;
    }

    public function getImageFromUrl($number, $isbn)
    {
        
        if($number == 1){
            $url = "https://covers.openlibrary.org/b/isbn/".$isbn."-L.jpg";
        }else if($number == 2){
            $url = "https://pictures.abebooks.com/isbn/".$isbn."-us.jpg";
        }
        return @file_get_contents($url);        
    }
    
    public function doesHaveCover(){
        return \Str::endsWith($this->cover_image, ['.jpg', '.png'])? true : false;            
    }
}
