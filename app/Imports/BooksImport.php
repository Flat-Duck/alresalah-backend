<?php

namespace App\Imports;

use App\Jobs\GetBooksCoverImages;
use App\Models\Book;
use App\Models\Level;
use App\Models\Publisher;

use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsOnError;

use Carbon\Carbon;
// use Illuminate\Database\Eloquent\Collection;



// use Maatwebsite\Excel\Concerns\ToCollection;
// use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
// use App\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\ToCollection;

use Throwable;

class BooksImport implements ToCollection, WithHeadingRow, SkipsOnError
{
    use Importable, SkipsErrors;
    // /**
    // * @param Model $model
    // */
    // public function model(array $row)
    // {
        
    // }
    public function collection(Collection $rows)
    {
            
        foreach ($rows as $row) {
            $book = Book::create( 
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
            
           // dd($book);
            GetBooksCoverImages::dispatch($book->ISBN);
          
        }
    }
}
