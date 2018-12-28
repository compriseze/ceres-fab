<?php

namespace Fabistron\Containers;

use Plenty\Plugin\Templates\Twig;

class FabistronItemListContainer2
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('Fabistron::Containers.ItemLists.ItemList2', ["item" => $arg[0]]);
    }
}