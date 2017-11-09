<?php

namespace Config;

use ObjectivePHP\Application\Config\ActionNamespace;
use ObjectivePHP\Application\Config\ApplicationName;
use ObjectivePHP\Application\Config\LayoutsLocation;

return [
    new ApplicationName('Journey'),
    new ActionNamespace('Fei\\Service\\Journey\\Action'),
    new LayoutsLocation('app/layouts'),
];
