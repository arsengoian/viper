<?php
/**
 * Created by PhpStorm.
 * User: Арсен
 * Date: 03.11.2017
 * Time: 19:00
 */

namespace App\Models;

use Viper\Core\Model\AsyncModel;
use Viper\Core\Model\Model;
use Viper\Core\Model\Traits\Depictable;

/**
 * Class Client
 *
 * Async model means the data will be stored on application termination,
 * when the response has already been sent to the user.
 *
 * The framework syncs the model structure as defined in models/Client.yaml
 * with the correspondent database table and updates any changes
 *
 * Every model has to have a .yaml file with correspondent DB structure
 *
 * @package App\Models
 */
class Client extends Model
{
    use Depictable;
}