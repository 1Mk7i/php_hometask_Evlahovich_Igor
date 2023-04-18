<?php

namespace Phpcourse\Myproject\Classes\Rendering;

use Latte;


class Rendering{
    public function __construct(array $news){
        $latte = new Latte\Engine;
        $latte->setTempDirectory('/tempdir');

        $mainParams = ['name' => 'Bobrik'];
        $latte->render('templates/default/index.latte', $mainParams);

        $templateVars = ['news' => $news];
        $latte->render('templates/default/news.latte', $templateVars);

    }
}
