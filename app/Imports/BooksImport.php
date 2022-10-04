<?php

namespace App\Imports;

use App\Book;
use App\Level;
use App\Publisher;
use Maatwebsite\Excel\Concerns\ToModel;

class BooksImport implements ToModel
{
    /**
    * @param array $row
    *?q=9781932100884
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Book([
            
            'level_id' => Level::firstOrCreate(['name' => $row[3]])->id,
            'title'=> $row[4],
            'ISBN'=> $row[5],
            'edition'=> $row[6],
            'format'=> $row[7],
            'publisher_id'=> Publisher::firstOrCreate(['Name' => $row[8]])->id,//$row[0],,//$row[0],
            'Author'=> $row[9],
            'quantity'=> $row[10],
            'price'=> $row[11],
            'sale_price'=> $row[12],
            'description'=> $row[13],
            'featured'=> $row[14],
            'cover_image'=> Book::getImageUrlByISBN($row[5]),
            'on_sale'=> 1,

        ]);
    }
}
