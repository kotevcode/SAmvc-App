<?php
namespace App\Controllers;

use SAmvc\Framework\Controller;

class ErrorController extends Controller {

  function index()
  {
    $this->view->render('header');
    $this->view->render('errors/index');
    $this->view->render('footer');
  }

}
