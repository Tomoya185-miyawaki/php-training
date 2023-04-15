<?php

declare(strict_types=1);

if (! function_exists('view')) {
    /**
     * ページを描画する
     *
     * @param string $path
     * @param array $variables
     * @return void
     */
    function view(string $path, array $variables = [])
    {
        $main = $variables;
        require(__DIR__ . '/../../resources/' . $path . '.php');
    }
}

if (! function_exists('headLayout')) {
    /**
     * Headのレイアウトを読みこむ
     *
     * @return void
     */
    function headLayout(string $title)
    {
        $main = $title;
        require(__DIR__ . '/../../resources/layout/head.php');
    }
}

if (! function_exists('headerLayout')) {
    /**
     * ヘッダーのレイアウトを読みこむ
     *
     * @return void
     */
    function headerLayout()
    {
        require(__DIR__ . '/../../resources/layout/header.php');
    }
}
