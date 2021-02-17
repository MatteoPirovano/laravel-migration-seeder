<?php

use Illuminate\Database\Seeder;
use App\Blog;
use Faker\Generator as Faker;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 20; $i++) {
            $data= $faker->datetime();

            $blog = new Blog();
            $blog->title= $faker->sentence(11);
            $blog->subtitle= $faker->sentence(7);;
            $blog->author= $faker->name;
            $blog->text= $faker->text(200);
            $blog->created_at= $data;
            $blog->updated_at= $data;
            $blog->save();            
        }
    }
}
