<?php

namespace App;

use App\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use Searchable;

    protected $fillable = ['name'];

    protected $searchableFields = ['*'];

    public function books()
    {
        return $this->belongsToMany(Book::class);
    }
}
