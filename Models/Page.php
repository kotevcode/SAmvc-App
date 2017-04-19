<?php
namespace App\Models;

use SAmvc\Framework\Model;
use SAmvc\Services\DB;

class Page extends Model
{
  public static function all()
  {
    return DB::select('SELECT * FROM pages');
  }

  public static function find($url)
  {
    return DB::selectSingle(
      'SELECT * FROM pages WHERE url = :url',
      [
        'url' => $url
      ]
    );
  }
}
