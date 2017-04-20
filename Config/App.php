<?php
namespace App\Config;

use SAmvc\Framework\Env;
use SAmvc\Services\Debug;

/**
 *
 */
class App
{
  public static function init()
  {
    // debug it
    if(Env::get('debug')){Debug::reporting( E_ALL );}
  }
}
