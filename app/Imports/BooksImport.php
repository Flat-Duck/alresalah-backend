<?php

namespace App\Imports;

use App\Book;
use App\Level;
use App\Publisher;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Throwable;

class BooksImport implements ToModel, WithHeadingRow, SkipsOnError
{
    use Importable, SkipsErrors;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Book(
            [
                'level_id' => Level::firstOrCreate(['name' => $row['level']])->id,
                'title' => $row['title'],
                'ISBN' => $row['isbn'],
                'edition' => $row['edition'],
                'format' => $row['format'],
                'publisher_id' => Publisher::firstOrCreate(['Name' => $row['publisher']])->id,
                'Author' => $row['author'],
                'quantity' => $row['qty'],
                'price' => $row['price'],
                'sale_price' => $row['on_sale'],
                'description' => $row['discription'],
                'featured' => $row['featured'],
                'cover_image' => $row['isbn'].".jpg",
                'on_sale' => $row['on_sale']
                ]);
    //    GetBooksCoverImages::dispatch($row[5]);
    //    dd($book);
    //     return $book;



        
    //     // if($row[3] == ""){
    //     //     return null;
    //     // }
    //     $level = 1;
    //     $book = new Book();
    //     $book->level_id = Level::firstOrCreate(['Name' => $row['level']])->id;
    //     $book->title = $row['title'];
    //     $book->ISBN = $row['isbn'];
    //     $book->edition = $row['edition'];
    //     $book->format = $row['format'];
    //     $book->publisher_id = Publisher::firstOrCreate(['Name' => $row['publisher']])->id;
    //     $book->Author = $row['author'];
    //     $book->quantity = $row['qty'];
    //     $book->price = $row['price'];
    //     $book->sale_price = $row['on_sale'];
    //     $book->description = $row['description'];
    //     $book->featured = $row['featured'];
    //     $book->cover_image = $row[5].".jpg";
    //     $book->on_sale = $row['on_sale'];
    // //    GetBooksCoverImages::dispatch($row[5]);
    // //    dd($book);
    //     return $book;

    }
    // public function onError(Throwable $error)
    // {
    //     # code...
    // }
}
