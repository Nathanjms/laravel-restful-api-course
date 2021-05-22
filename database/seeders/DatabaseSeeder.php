<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Petition;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AuthorSeeder::class,
            PetitionSeeder::class,
        ]);
    }
}
