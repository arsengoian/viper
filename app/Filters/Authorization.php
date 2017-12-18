<?php
/**
 * Created by PhpStorm.
 * User: Арсен
 * Date: 31.10.2017
 * Time: 18:36
 */

namespace App\Filters;


use Viper\Core\Filter;

/**
 * Class Authorization
 * proceed function will be run on all requests
 * before any controller actions
 * @package App\Filters
 */
class Authorization extends Filter
{

    /**
     * Sets a dummy sample header for all users
     */
    public function proceed ()
    {
        header('X-Viper-Auth: 123456789');
        $dummy = $this -> app() -> getHeader('X-Viper-Auth'); // 123456789
    }
}