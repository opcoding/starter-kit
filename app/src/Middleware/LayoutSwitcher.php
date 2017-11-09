<?php

namespace Fei\Service\Journey\Middleware;

use ObjectivePHP\Application\AbstractApplication;
use ObjectivePHP\Application\ApplicationInterface;
use ObjectivePHP\Application\Middleware\AbstractMiddleware;

/**
 * Class LayoutSwitcher
 *
 * @package Fei\Service\Journey\Middleware
 */
class LayoutSwitcher extends AbstractMiddleware
{
    /**
     * @param ApplicationInterface $app
     */
    public function run(ApplicationInterface $app)
    {
        /** @var AbstractApplication $app */
        $app->setParam('layout.name', 'layout');
    }
}
