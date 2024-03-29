<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\AdminUser::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\SiteConfiguration::class, function (Faker\Generator $faker) {
    return [
        'locale' => 'ja',
        'name' => $faker->name,
        'title' => $faker->sentence,
        'keywords' => implode(',', $faker->words(5)),
        'description' => $faker->sentences(3, true),
        'ogp_image_id' => 0,
        'twitter_card_image_id' => 0,
    ];
});

$factory->define(App\Models\Image::class, function (Faker\Generator $faker) {
    return [
        'url' => $faker->imageUrl(),
        'title' => $faker->sentence,
        'is_local' => false,
        'entity_type' => '',
        'entity_id' => 0,
        'file_category_type' => '',
        's3_key' => '',
        's3_bucket' => '',
        's3_region' => '',
        's3_extension' => '',
        'media_type' => 'image/png',
        'format' => 'png',
        'file_size' => 0,
        'width' => 100,
        'height' => 100,
        'is_enabled' => true,
    ];
});

$factory->define(App\Models\Article::class, function (Faker\Generator $faker) {
    return [
        'slug' => $faker->word,
        'title' => $faker->sentence,
        'keywords' => implode(',', $faker->words(5)),
        'description' => $faker->sentences(3, true),
        'content' => $faker->sentences(3, true),
        'cover_image_id' => 0,
        'locale' => 'ja',
        'is_enabled' => true,
        'publish_started_at' => $faker->dateTime,
        'publish_ended_at' => $faker->dateTime,
    ];
});

$factory->define(App\Models\UserNotification::class, function (Faker\Generator $faker) {
    return [
        'user_id' => \App\Models\UserNotification::BROADCAST_USER_ID,
        'category_type' => \App\Models\UserNotification::CATEGORY_TYPE_SYSTEM_MESSAGE,
        'type' => \App\Models\UserNotification::TYPE_GENERAL_MESSAGE,
        'data' => [],
        'locale' => 'en',
        'content' => 'TEST',
        'read' => false,
    ];
});

$factory->define(App\Models\AdminUserNotification::class, function (Faker\Generator $faker) {
    return [
        'user_id' => \App\Models\AdminUserNotification::BROADCAST_USER_ID,
        'category_type' => \App\Models\AdminUserNotification::CATEGORY_TYPE_SYSTEM_MESSAGE,
        'type' => \App\Models\AdminUserNotification::TYPE_GENERAL_MESSAGE,
        'data' => [],
        'locale' => 'en',
        'content' => 'TEST',
        'read' => false,
    ];
});

$factory->define(App\Models\UserInformation::class, function (Faker\Generator $faker) {
    return [
        'id' => '',
        'user_id' => '',
        'fullname' => '',
        'phone_number' => '',
        'university' => '',
        'graduated_year' => '',
        'major' => '',
        'cv_id' => '',
    ];
});

$factory->define(App\Models\UserAnswer::class, function (Faker\Generator $faker) {
    return [
        'id' => '',
        'user_id' => '',
        'question_id' => '',
        'answer' => '',
    ];
});

$factory->define(App\Models\UserTest::class, function (Faker\Generator $faker) {
    return [
        'id' => '',
        'user_id' => '',
    ];
});

/* NEW MODEL FACTORY */
