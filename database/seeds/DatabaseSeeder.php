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
        factory(\App\Models\Article::class, 30)->create();
        factory(\App\Models\ArticleCategory::class, 10)->create();
        factory(\App\Models\Page::class, 5)->create();


        $this->call([
            SettingsTableSeeder::class,
            LanguageTableSeeder::class,
        ]);
    }
}
