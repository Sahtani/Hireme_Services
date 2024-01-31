<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
// use App\Models\categoryModel;
use Database\Factories\CategoryModelFactory;
use App\Models\categoryModel;

class CategorySeeder extends Seeder
{
    public function run()
    {
        categoryModel::factory(10)->create();
        // Your other seeders here
    }
}
