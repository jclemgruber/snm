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

use Faker\Factory as Faker;


$factory->define(App\User::class, function ($faker) {
    static $password;

    $faker = Faker::create('pt_BR');
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'cpf' => $faker->randomNumber(6),
        'login_type' => 'normal'
    ];
});

$factory->define(App\Model\InstituicaoTipo::class, function ($faker) {
	$faker = Faker::create('pt_BR');
    return [
        'name' => $faker->word,
    ];
});

$factory->define(App\Model\Regiao::class, function ($faker) {
	$faker = Faker::create('pt_BR');
    return [
        'name' => $faker->word,
    ];
});

$factory->define(App\Model\Uf::class, function ($faker) {
	$faker = Faker::create('pt_BR');
    return [
        'name' => $faker->state,
        'abbreviation' => $faker->stateAbbr,
        'regiao_id' => $faker->numberBetween(1,5),
    ];
});

$factory->define(App\Model\Cidade::class, function ($faker) {
    $faker = Faker::create('pt_BR');
    return [
        'name' => $faker->city,
    ];
});

$factory->define(App\Model\Tema::class, function ($faker) {
    $faker = Faker::create('pt_BR');
    return [
        'name' => $faker->sentence(),
        'subscription_start_date' => $faker->dateTime(),
        'subscription_end_date' => $faker->dateTime(),
        'event_start_date' => $faker->dateTime(),
        'event_end_date' => $faker->dateTime(),
        'before_subscription_page' => $faker->text(),
        'after_subscription_page' => $faker->text()
    ];
});