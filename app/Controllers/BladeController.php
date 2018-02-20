<?php
/**
 * Created by PhpStorm.
 * User: Арсен
 * Date: 03.11.2017
 * Time: 18:58
 */

namespace App\Controllers;


use Viper\Core\Routing\Controller;
use Viper\Core\Routing\Methods\GET;
use Viper\Core\View;
use Viper\Core\Viewable;
use App\Models\Client;

/**
 * Sample controller class
 * @package App\Controllers
 */
class BladeController extends Controller implements GET
{

    /**
     * Responds to DOMAIN/ request: see routes/get.yaml for more
     * @param array ...$args
     * @return null|Viewable
     */
    public function get (...$args): ?Viewable
    {
        $clients = Client::all();
        return new View('Home', ['clients' => $clients]);
    }

    /**
     * Responds to DOMAIN/add request: opens add page
     * @return null|Viewable
     */
    public function add(): ?Viewable
    {
        return new View('Home/Add');
    }
}