<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();
        
        $categories = array('Alimentos', 'Snacks', 'Farmapet', 'Cuidado e Higiene', 'Juguetes' ,'Accesorios');
        foreach($categories as $category){
            Category::create([
                'description' => $category
            ]);
        }
    }
}
