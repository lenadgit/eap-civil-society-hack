<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Admin::class, 1)->create();
        factory(\App\Models\Faq::class, 10)->create();
        factory(\App\Models\Feedback::class, 6)->create();
        factory(\App\Models\Partner::class, 6)->create();
        factory(\App\Models\ArticleCategory::class, 10)->create();
        factory(\App\Models\Article::class, 30)->create();
        factory(\App\Models\Page::class, 5)->create();
        factory(\App\Models\Application::class, 8)->create();
        factory(\App\Models\Slider::class, 3)->create();


        /****** SEED CATEGORIES TABLE FOR PARENT_ID ******/
        $categories = \App\Models\ArticleCategory::all()->pluck('id');

        /****** END SEEDING ******/

        /****** SEED PIVOT TABLE ******/
        $categories = \App\Models\ArticleCategory::all();

        \App\Models\Article::all()->each(function ($article) use ($categories) {
            $article->categories()->attach(
                $categories->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
        /****** END SEEDING ******/

        $this->call([
            SettingsTableSeeder::class,
            LanguageTableSeeder::class,
        ]);


    }
}
