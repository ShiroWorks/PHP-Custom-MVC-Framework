<?php
/**
 * User: ShiroWorks
 * Date: 7/8/2020
 * Time: 8:56 AM
 */

namespace app\controllers;


use app\core\Controller;

/**
 * Class AboutController
 *
 * @author  Vilmos Szabó <szabomediaweb@gmail.com>
 * @package app\controllers
 */
class AboutController extends Controller
{
    public function index()
    {
        return $this->render('about');
    }
}