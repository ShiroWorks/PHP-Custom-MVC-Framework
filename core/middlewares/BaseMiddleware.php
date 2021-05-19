<?php
/**
 * User: ShiroWorks
 * Date: 7/25/2020
 * Time: 11:33 AM
 */

namespace app\core\middlewares;


/**
 * Class BaseMiddleware
 *
 * @author  Vilmos Szabó <szabomediaweb@gmail.com>
 * @package app\core
 */
abstract class BaseMiddleware
{
    abstract public function execute();
}