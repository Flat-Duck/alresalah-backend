<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
    //    $this->call(ProviderTableSeeder::class);
      //  $this->call(ServiceTableSeeder::class);
        //$this->call(AdminsTableSeeder::class);
        $this->call(BookSeeder::class);
        //$this->call(CartSeeder::class);
        //$this->call(CategorySeeder::class);
        //$this->call(LevelSeeder::class);
        //$this->call(OrderSeeder::class);
    //    $this->call(PublisherSeeder::class);
  //      $this->call(TagSeeder::class);
//        $this->call(UserSeeder::class);
    }
}
