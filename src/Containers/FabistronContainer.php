<?php

namespace Fabistron\Containers;

use Plenty\Plugin\Templates\Twig;

class FabistronContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('Fabistron::Stylesheet');
    }
}