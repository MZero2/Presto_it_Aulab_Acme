<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    
     
/**Seed the application's database.*/
  public function run(): void{// \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'prestoRevisor',
            'email' => 'revisore@gmail.com',
            'password' => Hash::make('password'),
            'is_revisor' => true,
        ],);

        \App\Models\User::factory()->create([
            'name' => 'Christian',
            'email' => 'utente@gmail.com',
            'password' => Hash::make('password'),
            'is_revisor' => false,
        ],);

        $categories = ['Motori', 'Abbigliamento', 'Arredamento', 'Tecnologia', 'Musica', 'Attrezzatura', 'Sport', 'Film'];

        foreach($categories as $category){
            Category::create([
                'name'=>$category,
            ]);
        }
    }



}