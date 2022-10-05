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
        // if($row[3] == ""){
        //     return null;
        // }
        $level = Level::firstOrCreate(['name' => $row[3]])->id;
        $book = new Book();
        $book->level_id = $level;
        $book->title = $row[4];
        $book->ISBN = $row[5];
        $book->edition = $row[6];
        $book->format = $row[7];
        $book->publisher_id = Publisher::firstOrCreate(['Name' => $row[8]])->id;//$row[0],,//$row[0];
        $book->Author = $row[9];
        $book->quantity = $row[10];
        $book->price = $row[11];
        $book->sale_price = $row[12];
        $book->description = $row[13];
        $book->featured = 1;//$row[14];
        $book->cover_image = "";
        $book->on_sale = 1;

    //    dd($book);
        return $book;
    }
}
