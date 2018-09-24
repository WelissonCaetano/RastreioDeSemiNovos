<?php
namespace App\Models;

use Exception;

abstract class Model
{
    public function __set($name, $value)
    {
    }
}
