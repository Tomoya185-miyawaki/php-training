<?php

declare(strict_types=1);

namespace App\Router;

use App\Controller\PostController;
use App\Controller\NotFoundController;

final class Route
{
    /**
     * ルーティング処理
     *
     * @param string $uri
     * @param string $method
     * @return void
     */
    public function getRoute(string $uri, string $method)
    {
        try {
            match($uri) {
                '/post/create' => match($method) {
                    'GET' => $this->getControllerAction(PostController::class, 'create') // ブログ作成ページ
                }
            };
        } catch (\UnhandledMatchError) {
            $this->getControllerAction(NotFoundController::class, 'index');
        }
    }

    private function getControllerAction(string $controllerClass, string $action)
    {
        $controller = new $controllerClass();
        $controller->$action();
    }
}

