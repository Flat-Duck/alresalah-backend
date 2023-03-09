<?php

namespace App\Models;

use App\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    use Searchable;

    protected $fillable = ['Name'];

    protected $searchableFields = ['*'];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
