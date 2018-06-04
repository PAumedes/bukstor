<?php

use Illuminate\Database\Seeder;
use App\author;

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
        $authors = factory(Author::class)->times(10)->create();
    }
}
