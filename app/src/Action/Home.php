<?php

namespace Fei\Service\Journey\Action;

use ObjectivePHP\Application\Action\RenderableAction;
use ObjectivePHP\Application\ApplicationInterface;
use ObjectivePHP\Application\View\Helper\Vars;

/**
 * Class Home
 *
 * @package Fei\Service\Journey\Action
 */
class Home extends RenderableAction
{
    /**
     * @inheritdoc
     */
    public function run(ApplicationInterface $app)
    {
        Vars::set('page.title', 'Objective PHP Project Template');
    }
}
