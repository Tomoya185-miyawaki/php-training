<?php

declare(strict_types=1);

namespace App\Controller;

final class NotFoundController
{
    /**
     * 404ページ
     *
     * @return void
     */
    public function index()
    {
        $main = [
            'title' => '404ページ',
        ];
        return view('notfound/404', $main);
    }
}