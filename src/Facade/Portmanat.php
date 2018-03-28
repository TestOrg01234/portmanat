<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Alishov\Portmanat\Facade;

use Illuminate\Support\Facades\Facade;
/**
 * Description of Portmanat
 *
 * @author Emin
 */
class Portmanat extends Facade{
    protected static function getFacadeAccessor() {
        return 'portmanat';
    }
}
