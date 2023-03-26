<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function categories(): array {
        return [
            1=>'Важные',
            2=>'Спорт',
            3=>'Политика',
            4=>'Экономика',
            5=>'Авто'
        ];
    }

    public function newses($i, $id): array {
        $newses = [
            'id' => ($i + 1),
            'title' => fake('ru_RU')->realText('20'),
            'category' => $this->categories()[$id],
            'author' => fake()->userName(),
            'digestNews' => fake('ru_RU')->realText('50'),
            'description' => fake('ru_RU')->realText('200'),
            'created_at' => fake('ru_RU')->date('d-m-y h:m', 'now')
        ];
        return $newses;
    }

    public function newsList($id): array {
        $news[] = null;
        for($i = 0; $i < 5; $i++) {
            $news[$i] = $this->newses($i, $id);
        };
        return $news;
    }

    public function news($id): array {
        $news[] = $this->newses(1, $id);
        return $news;
    }
}
