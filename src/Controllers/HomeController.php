<?php

namespace App\Controllers;

use App\Logic\View;
use App\Models\Products;
use App\Models\Comments;

class HomeController {
    public function index() {
        $products = Products::All();
        $comments = Comments::find(['show_comment' => 1]);

        $view = new View('defaultLayout', 'page.tmp');
        $view->assignVariable('products', $products);
        $view->assignVariable('comments', $comments);
    }
}