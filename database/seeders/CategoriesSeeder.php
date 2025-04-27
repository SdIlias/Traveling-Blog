<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => 'Adventure', 'backgroundColor' => '#3498db', 'textColor' => '#ffffff'],
            ['name' => 'Family Travel', 'backgroundColor' => '#2ecc71', 'textColor' => '#ffffff'],
            ['name' => 'Solo Travel', 'backgroundColor' => '#e74c3c', 'textColor' => '#ffffff'],
            ['name' => 'Couple Travel', 'backgroundColor' => '#9b59b6', 'textColor' => '#ffffff'],
            ['name' => 'Luxury Travel', 'backgroundColor' => '#27ae60', 'textColor' => '#ffffff'],
            ['name' => 'Eco-Friendly Travel', 'backgroundColor' => '#3498db', 'textColor' => '#ffffff'],
            ['name' => 'Budget Travel', 'backgroundColor' => '#e67e22', 'textColor' => '#ffffff'],
            ['name' => 'Adventure Travel', 'backgroundColor' => '#f39c12', 'textColor' => '#ffffff'],
            ['name' => 'Cultural Travel', 'backgroundColor' => '#34495e', 'textColor' => '#ffffff'],
            ['name' => 'Food Travel', 'backgroundColor' => '#16a085', 'textColor' => '#ffffff'],
            ['name' => 'Wellness Travel', 'backgroundColor' => '#e74c3c', 'textColor' => '#ffffff'],
            ['name' => 'Photography Travel', 'backgroundColor' => '#2980b9', 'textColor' => '#ffffff'],
            ['name' => 'Organized Tours', 'backgroundColor' => '#8e44ad', 'textColor' => '#ffffff'],
            ['name' => 'Train Travel', 'backgroundColor' => '#d35400', 'textColor' => '#ffffff'],
            ['name' => 'Weekend Getaways', 'backgroundColor' => '#c0392b', 'textColor' => '#ffffff'],
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category['name'],
                'backgroundColor' => $category['backgroundColor'],
                'textColor' => $category['textColor'],
            ]);
        }
    }
}
