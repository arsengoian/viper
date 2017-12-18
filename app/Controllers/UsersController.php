<?php
/**
 * Created by PhpStorm.
 * User: Арсен
 * Date: 03.11.2017
 * Time: 19:02
 */

namespace App\Controllers;


use Viper\Core\RedirectView;
use Viper\Core\Routing\Controller;
use Viper\Core\Routing\Methods\POST;
use Viper\Core\Viewable;
use App\Models\Client;
use Viper\Support\Required;

class UsersController extends Controller implements POST
{
    /**
     * API function - adds user on request. Respongs to POST requests to /user
     * Overall, controllers are adapted to routes automatically unless configured otherwise in routes files
     * @param array ...$args
     * @return null|Viewable
     */
    public function post (...$args): ?Viewable
    {
        $v = new Required($this -> params());
        $v -> email('email');
        Client::registerWithImages($this -> params(), $this -> files());
        return new RedirectView('/');
    }
}