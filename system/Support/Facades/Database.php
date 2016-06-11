<?php
/**
 * Database - A Facade to the Database Connection.
 *
 * @author Virgil-Adrian Teaca - virgil@giulianaeassociati.com
 * @version 3.0
 */

namespace Support\Facades;

use Database\Connection;
use Support\Facades\Facade;


class Database
{
    /**
     * Magic Method for calling the methods on the default Connection instance.
     *
     * @param $method
     * @param $params
     *
     * @return mixed
     */
    public static function __callStatic($method, $params)
    {
        $app = Facade::getFacadeApplication();

        if(! is_null($app)) {
            $instance = $app['db'];
        } else {
            $instance = Connection::getInstance();
        }

        // Call the non-static method from the Connection instance.
        return call_user_func_array(array($instance, $method), $params);
    }
}
