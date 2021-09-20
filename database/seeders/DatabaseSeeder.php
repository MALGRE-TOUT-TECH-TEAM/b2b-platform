<?php

namespace Database\Seeders;

use App\Models\User;
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
        // This class is used to call all the seeders. When adding a new seeder, add it inside the square brackets. 
        $this->call([UserSeeder::class, AdvertisementSeeder::class, CategorySeeder::class, AudienceSeeder::class]);
        
    }
}
