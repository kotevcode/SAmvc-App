<?php
namespace App\Config;

/**
 *
 */
class Aliases
{
  public static function get()
  {

    return
    [
      'Env'         => 'SAmvc\Framework\Env',
      'Session'     => 'SAmvc\Services\Session',
      'Cookie'      => 'SAmvc\Services\Cookie',
      'Folder'      => 'SAmvc\Services\Folder',
      'Hash'        => 'SAmvc\Services\Hash'
    ];

  }

  public static function init()
  {
    $aliases = self::get();
    foreach ($aliases as $alias => $class) {
      class_alias($class, $alias);
    }
  }
}
