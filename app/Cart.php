<?php

namespace App;

use App\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use Searchable;

    protected $fillable = ['user_id'];

    protected $searchableFields = ['*'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function books()
    {
        return $this->belongsToMany(Book::class);
    }
}
