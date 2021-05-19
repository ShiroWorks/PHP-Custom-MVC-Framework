<?php
/**
 * User: ShiroWorks
 * Date: 7/7/2020
 * Time: 10:53 AM
 */

namespace app\core;


/**
 * Class Response
 *
 * @author  Vilmos Szabó <szabomediaweb@gmail.com>
 * @package app\core
 */
class Response
{
    public function statusCode(int $code)
    {
        http_response_code($code);
    }

    public function redirect($url)
    {
        header("Location: $url");
    }
}