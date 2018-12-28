<?php

namespace Fabistron\Containers;

use Plenty\Plugin\Templates\Twig;

class FabistronItemListContainer3
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('Fabistron::Containers.ItemLists.ItemList3', ["item" => $arg[0]]);
    }
}