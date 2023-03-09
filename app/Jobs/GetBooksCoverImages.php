<?php

namespace App\Jobs;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class GetBooksCoverImages implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    
    private $isbn;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($ISBN)
    {
        $this->isbn = $ISBN;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $exists = Storage::disk('local')->exists('public/'.$this->isbn.'.jpg');
        if(!$exists){
            $this->getImageUrlByISBN($this->isbn);
        }else{
            $this->delete();
        }
    }
    public function getImageUrlByISBN($ISBN){        
        $contents = $this->getImageFromUrl(2, $ISBN);
        if(!$contents || strlen(!$contents) < 9000 ){
            $contents = $this->getImageFromUrl(1, $ISBN);       
        }
        Storage::disk('local')->put('public/'.$ISBN.'.jpg', $contents);
    }
    
    public function getImageFromUrl($number, $isbn)
    {
        if($number == 1){
            $url = "https://covers.openlibrary.org/b/isbn/".$isbn."-L.jpg";
        }else if($number == 2){
            $url = "https://pictures.abebooks.com/isbn/".$isbn."-us.jpg";
        }
        return @file_get_contents($url);        
    }
}
