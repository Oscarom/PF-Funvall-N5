<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Item;
use App\Models\ItemListname;
use App\Models\Listname;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $categories = ["Fruits and vegetables","Meat and fish","Beverages"];

        //inserto cada elemento del arrgelo en la tabla categories
        foreach ($categories as $category) {
            DB::table("categories")->insert([
                "name" => $category
            ]);
        }
        //ejecuto el factory que crea los items
        Item::factory(15)->create();

        Listname::factory(5)->create();
        ItemListname::factory(15)->create();

    }
}
