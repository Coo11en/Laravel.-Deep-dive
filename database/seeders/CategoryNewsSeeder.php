<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryNewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categoriesNews')->insert($this->getData());
    }

    private function getData():array
    {
        $data = [];

        for ($i=0; $i<5; $i++) {
            $data[] = [
                'title' => fake('ru_RU')->realText('20'),
                'description' => fake('ru_RU')->realText('200'),
                'image' => fake('ru_RU')->imageUrl(),
                'created_at' => now()->timezone('Europe/Moscow'),
                'updated_at' => now()->timezone('Europe/Moscow')
            ];
        }

        return $data;
    }
}
