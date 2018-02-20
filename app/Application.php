<?php
/**
 * Created by PhpStorm.
 * User: Арсен
 * Date: 31.10.2017
 * Time: 20:44
 */

namespace App;

use App\Filters\BladeFilter;
use Viper\Core\FilterCollection;
use App\Filters\Authorization;
use Viper\Core\Routing\Filters\LocalizationFilter;

class Application extends \Viper\Core\Application
{
    /**
     * Defines the list of filters to be run
     * before any controller actions
     * @return FilterCollection
     */
    protected function declareFilters (): FilterCollection
    {
        return new FilterCollection([
            LocalizationFilter::class,
            Authorization::class,

            BladeFilter::class
        ]);
    }
}