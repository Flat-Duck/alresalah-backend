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

    public function getImageUrlByISBN(){
        //$isbn = ;      
        $url = "https://covers.openlibrary.org/b/isbn/".$this->isbn."-L.jpg";
        $contents = file_get_contents($url);
        Storage::disk('local')->put('public/'.$this->isbn.'.jpg', $contents);
        $filename = $this->isbn.".jpg";
        dd($this->isbn);
        $this->cover_image = $filename;
        $this->save();
        return $filename;
    }

    public function doesHaveCover(){
        return \Str::endsWith($this->cover_image, ['.jpg', '.png'])? true : false;            
    }
}
