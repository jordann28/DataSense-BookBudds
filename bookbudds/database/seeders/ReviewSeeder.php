<?php
namespace Database\Seeders;
use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Assuming you have a relationship between Users and Review models,
        // you can use the "for" method to associate reviews with users.
        Review::factory()->count(50)->for(User::factory())->create();
    }
}

