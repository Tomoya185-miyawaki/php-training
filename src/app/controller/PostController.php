<?php

declare(strict_types=1);

namespace App\Controller;

final class PostController
{
    /**
     * ブログ投稿ページ
     *
     * @return void
     */
    public function create()
    {
        $main = [
            'title' => 'ブログ作成ページ',
        ];
        return view('post/create', $main);
    }
}