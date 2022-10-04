<?php

namespace App\Jobs;
use App\Book;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class GetBooksCoverImages implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
private $book;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Book $booker)
    {
        $this->book = $booker;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
      //  dd($this->book);
        //if($book->doesHaveCover()){
            $this->book->getImageUrlByISBN();
        //}
    }
}
