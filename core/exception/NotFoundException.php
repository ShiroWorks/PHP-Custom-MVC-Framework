<?php
/**
 * User: ShiroWorks
 * Date: 7/25/2020
 * Time: 11:43 AM
 */

namespace app\core\exception;


/**
 * Class NotFoundException
 *
 * @author  Vilmos Szabó <szabomediaweb@gmail.com>
 * @package app\core\exception
 */
class NotFoundException extends \Exception
{
    protected $message = 'Page not found';
    protected $code = 404;
}