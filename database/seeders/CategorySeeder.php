<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categories::create([
            'eng_name' => 'Events',
            'dan_name' => 'Events',
            'status'=> 'publish',        
        ]);
        Categories::create([
            'eng_name' => 'Feed and supplements',
            'dan_name' => 'Foder og tilskud',
            'status'=> 'publish',        
        ]);
        
        Categories::create([
            'eng_name' => 'Fold',
            'dan_name' => 'Fold',
            'status'=> 'publish',        
        ]);
        
        Categories::create([
            'eng_name' => 'Life-style',
            'dan_name' => 'Livsstil',
            'status'=> 'publish',        
        ]);
        
        Categories::create([
            'eng_name' => 'Media',
            'dan_name' => 'Medier',
            'status'=> 'publish',        
        ]);
        
        Categories::create([
            'eng_name' => 'Beauty and fashion',
            'dan_name' => 'Mode og skønhed',
            'status'=> 'publish',        
        ]);
        Categories::create([
            'eng_name' => 'Careproducts',
            'dan_name' => 'Plejeprodukter',
            'status'=> 'publish',        
        ]);
        Categories::create([
            'eng_name' => 'Travels',
            'dan_name' => 'Rejser',
            'status'=> 'publish',        
        ]);
        
        Categories::create([
            'eng_name' => 'Ridning stables and tracks',
            'dan_name' => 'Ridehus og bane',
            'status'=> 'publish',        
        ]);
        
        Categories::create([
            'eng_name' => 'Consulting',
            'dan_name' => 'Rådgivning',
            'status'=> 'publish',        
        ]);

        Categories::create([
            'eng_name' => 'Stable',
            'dan_name' => 'Stald',
            'status'=> 'publish',        
        ]);

        Categories::create([
            'eng_name' => 'Terapy',
            'dan_name' => 'Terapi',
            'status'=> 'publish',        
        ]);

        Categories::create([
            'eng_name' => 'Transport',
            'dan_name' => 'Transport',
            'status'=> 'publish',        
        ]);

        Categories::create([
            'eng_name' => 'Training',
            'dan_name' => 'Træning',
            'status'=> 'publish',        
        ]);

        Categories::create([
            'eng_name' => 'Others',
            'dan_name' => 'Øvrige',
            'status'=> 'publish',        
        ]);
    }
}
