<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Field;
use App\Models\Pupuk;
use App\Models\Divisi;
use App\Models\Estate;
use App\Models\Semester;
use App\Models\DataPemupukan;
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

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Estate::factory(5)->create();
        Divisi::factory(25)->create();
        Field::factory(50)->create();
        Semester::factory(100)->create();
        DataPemupukan::factory(500)->create();
        Pupuk::factory(6)->create();
    }
}
