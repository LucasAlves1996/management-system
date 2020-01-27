<?php

namespace MyFramework\Model;

use App\Connection;
use MyFramework\Model\Model;

class Container
{
    public static function getModel($model)
    {
        $class = "\\App\\Models\\".ucfirst($model);
        $conn = Connection::getDb();

        return new $class($conn);
    }
}

?>