<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach(range(1,15) as $index)
        {
            Article::create([
                'body' => $faker->paragraph($nbSentences = 3),
                'user_id' =>$faker->numberBetween($min = 1, $max = 5),
                'publish' => 1
            ]);
        }
    }
}
