<?php
/**
 * Created by PhpStorm.
 * User: Арсен
 * Date: 20.02.2018
 * Time: 13:41
 */

namespace App\Filters;


use Blade\View;
use Viper\Core\Filter;

class BladeFilter extends Filter
{
    public function blackListRoutes (): ?array
    {
        return [
            '.*[\/]*user'   // Regexp supported!
        ];
    }

    public function proceed ()
    {
        View::bindErrorView('Error', 'exception');
        View::propagateVars([
            'myCustomVar' => 42
        ]);
    }
}