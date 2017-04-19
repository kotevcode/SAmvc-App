<?php
namespace App\Controllers;

use SAmvc\Framework\Controller;
use App\Models\Page;

class PagesController extends Controller {

  public $_type = 'page';

  function index($url=false)
  {
    $this->view->set('page',Page::find($url));

    $this->view->render('header');
    $this->view->render('pages/index');
    $this->view->render('footer');
  }

}
