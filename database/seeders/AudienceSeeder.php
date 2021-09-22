<?php

namespace Database\Seeders;

use App\Models\Audience;
use Illuminate\Database\Seeder;

class AudienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Audience::create([
            'eng_name' => 'All horse interesed',
            'dan_name' => 'Alle heste interesserede',
            'status'=> 'publish',        
        ]);
        Audience::create([
            'eng_name' => 'Pro rider',
            'dan_name' => 'Pro ryttere',
            'status'=> 'publish',        
        ]);
        
        Audience::create([
            'eng_name' => 'Icelander rider',
            'dan_name' => 'Islænder ryttere',
            'status'=> 'publish',        
        ]);
        
        Audience::create([
            'eng_name' => 'Hobby rider',
            'dan_name' => 'Hobby ryttere',
            'status'=> 'publish',        
        ]);
        
        Audience::create([
            'eng_name' => 'Others',
            'dan_name' => 'Øvrige',
            'status'=> 'publish',        
        ]);
    }
}
