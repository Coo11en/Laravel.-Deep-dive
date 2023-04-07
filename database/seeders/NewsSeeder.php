<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('news')->insert($this->getData());

    }

    private function getData():array
    {
        $data = [];

        for ($i=0; $i<10; $i++) {
            $data[] = [
                'title' => fake('ru_RU')->realText('20'),
                'id_category' => fake('ru_RU')->numberBetween(0, 5),
                'id_source' => fake('ru_RU')->numberBetween(0, 10),
                'author' => fake('ru_RU')->name(),
                'digestNews' => fake('ru_RU')->realText('100'),
                'description' => fake('ru_RU')->realText('200'),
                'created_at' => now()->timezone('Europe/Moscow'),
                'updated_at' => now()->timezone('Europe/Moscow')
            ];
        }

        return $data;
    }
}
