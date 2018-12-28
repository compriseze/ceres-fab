<?php

namespace Fabistron\Containers;

use Plenty\Plugin\Templates\Twig;

class FabistronItemListContainer1
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('Fabistron::Containers.ItemLists.ItemList1', ["item" => $arg[0]]);
    }
}