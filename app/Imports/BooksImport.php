<?php

namespace App\Imports;

use App\Jobs\GetBooksCoverImages;
use App\Models\Book;
use App\Models\Category;
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
           // dd($row);
            $book = Book::create(
            [
                'title' => $row['title'],
                'ISBN' => $row['isbn'],
                'format' => $row['format'],
                'description' => $row['description'],
                'edition' => $row['edition'],
                'level_id' => Level::firstOrCreate(['name' => $row['level']])->id,
                'publisher_id' => Publisher::firstOrCreate(['Name' => $row['publisher']])->id,
                'Author' => $row['author'],
                'quantity' => $row['quantity'],
                'price' => $row['price'],
                'sale_price' => $row['sale_price'],
                'on_sale' => $row['on_sale'],
                'featured' => $row['featured'],
                'cover_image' => $row['isbn'].".jpg",

            ]);
            $main = Category::firstOrCreate(['name' => $row['main_categoty']]);
            $sub_1 = Category::firstOrCreate(['parent_id' => $main->id, 'name' => $row['sub_category_1']]);
            $sub_2 = Category::firstOrCreate(['parent_id' => $main->id, 'name' => $row['sub_category_2']]);
            $book->categories()->attach([$main->id,$sub_1->id,$sub_2->id]);

           // dd($book);
            GetBooksCoverImages::dispatch($book->ISBN);

        }
    }
}
