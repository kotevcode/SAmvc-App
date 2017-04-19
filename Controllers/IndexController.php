<?php
namespace App\Controllers;

use SAmvc\Framework\Controller;
use App\Models\Page;

class IndexController extends Controller {

  function index()
  {
    $this->view->set('pages',Page::all());

    $this->view->render('header');
    $this->view->render('index/index');
    $this->view->render('footer');
  }

}
