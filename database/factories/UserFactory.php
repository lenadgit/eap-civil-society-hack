<?php

use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => Str::random(10),
    ];
});

$factory->define(App\Models\Admin::class, function (Faker $faker) {
    return [
        'name' => 'Javid Abbasov',
        'email' => 'lut_milcey@mail.ru',
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => Str::random(10),
    ];
});

$factory->define(App\Models\Faq::class, function (Faker $faker) {
    $fakeQuestion = $faker->sentence(3);
    $fakeAnswer = $faker->realText();

    $name = [
        'az' => $fakeQuestion,
        'en' => $fakeQuestion,
        'ru' => $fakeQuestion,
    ];

    $answer = [
        'az' => $fakeAnswer,
        'en' => $fakeAnswer,
        'ru' => $fakeAnswer,
    ];

    return [
        'question' => $name,
        'answer'   => $answer,
    ];
});

$factory->define(App\Models\Feedback::class, function (Faker $faker) {
    return [
        'image'    => $faker->imageUrl($width = 120, $height = 120),
        'feedback' => $faker->text(100),
        'name'     => $faker->name(),
        'position' => $faker->jobTitle(),
    ];
});

$factory->define(App\Models\Partner::class, function (Faker $faker) {

    $name = [
        'az' => $faker->text(5),
        'en' => $faker->text(5),
    ];

    return [
        'image'    => $faker->imageUrl($width = 120, $height = 120),
        'name' => $name,
        'url' => $faker->url,
    ];
});

$factory->define(App\Models\Article::class, function (Faker $faker) {
    return [
        'image'             => $faker->imageUrl($width = 550, $height = 309),
        'title'             => $faker->text($maxNbChars = 50),
        'description'       => $faker->text(2000),
        'slug'              => $faker->slug(),
        'status'            => $faker->randomElement($array = ['PUBLISHED', 'DRAFT']),
    ];
});

$factory->define(App\Models\ArticleCategory::class, function (Faker $faker) {

    $name = [
        'az' => $faker->text(10),
        'en' => $faker->text(10),
    ];

    $slug = [
        'az' => $faker->slug,
        'en' => $faker->slug,
    ];

    return [
        'name'     => $name,
        'slug'     => $slug,
    ];
});

$factory->define(App\Models\Page::class, function (Faker $faker) {
    $images = [];
    for($i = 0; $i < 20; $i++) {
        array_push($images, $faker->imageUrl());
    }

    $title = [
        'az' => $faker->text(5),
        'en' => $faker->text(5),
    ];

    $short_description = [
        'az' => $faker->text(50),
        'en' => $faker->text(50),
    ];

    $slug = [
        'az' => $faker->slug,
        'en' => $faker->slug,
    ];
    $body = [
        'az' => $faker->text(100),
        'en' => $faker->text(100),
    ];

    $type = ['portfolio', 'services', 'page'];



    return [
        'key'    => $faker->word . uniqid(),
        'type' => $type[rand(0, 2)],
        'title' => $title,
        'icon'    => $faker->imageUrl($width = 120, $height = 120),
        'short_description' => $short_description,
        'slug' => $slug,
        'body' => $body,
        'images' => $images,
    ];
});

$factory->define(App\Models\Slider::class, function (Faker $faker) {
    return [
        'small_title' => $faker->text(10),
        'big_title' => $faker->text(6),
        'text' => $faker->text(20),
        'button_label' => 'Read More',
        'button_url' => $faker->url,
        'image' => $faker->imageUrl($width = 1920, $height = 801),
    ];
});

$factory->define(App\Models\Application::class, function (Faker $faker) {
    return [
        'full_name'  => $faker->firstName . ' ' . $faker->lastName,
        'email'       => $faker->email,
        'phone'       => $faker->phoneNumber,
        'message'    => $faker->text(100),
    ];
});