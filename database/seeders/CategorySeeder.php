<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Category::factory(10)->create();

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create(['name' => 'Programming', 'slug' => 'programming']);
        Category::create(['name' => 'Data Science', 'slug' => 'data-science']);
        Category::create(['name' => 'Cyber Security', 'slug' => 'cyber-security']);
        Category::create(['name' => 'Artificial Intelligence', 'slug' => 'artificial-intelligence']);
        Category::create(['name' => 'Cloud Computing', 'slug' => 'cloud-computing']);
        Category::create(['name' => 'UI/UX Design', 'slug' => 'ui-ux-design']);
        Category::create(['name' => 'DevOps', 'slug' => 'devops']);
        Category::create(['name' => 'Mobile Development', 'slug' => 'mobile-development']);
        Category::create(['name' => 'Game Development', 'slug' => 'game-development']);
        Category::create(['name' => 'Software Testing', 'slug' => 'software-testing']);


    }
}
