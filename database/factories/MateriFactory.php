<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Materi;
use App\User;
use Faker\Generator as Faker;

$factory->define(Materi::class, function (Faker $faker) {
    $users = User::all()->toArray();
    $rand = rand(1,10);

    return [
        'judul' => $faker->sentence,
        'pengarang' => $users[$rand]['name'],
        'tipe' => $faker->word,
        'deskripsi' => $faker->text($maxNbChars = 100),
        'tgl_publish' => now(),
        'user_id' => $users[$rand]['id'],
    ];
});