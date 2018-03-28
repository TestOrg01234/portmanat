<?php

namespace App\Http\Controllers;

use Portmanat;

class PortmanatController extends Controller
{
    public function result() {
        Portmanat::check([
            'test' => FALSE, //test TRUE olarsa test sorğularda proses davam edəcək
            'db_log' => TRUE, //db`də payments`ə loglar  yazılacaq 
            'file_log' => TRUE, //log fayla yazılacaq 
        ]);
        //aşağı yalnız doğrulanmış sorğular gələcək
        $pm = Portmanat::pmdata();
        $o_id = $pm->getOid();
        $amount = $pm->getAmount(); 
        //aşağıda əməliyyat apara bilərsiz
        
        return 1;
    }
    
    public function success() {
        //uğurlu ödənişdən sonra istifadəçi bura yönələcək
        return 'Ödəniş uğurla həyata keçirildi';
    }
    
    public function failed() {
        //uğursuz ödənişdən sonra istifadəçi bura yönələcək
        return 'Uğursuz ödəniş cəhdi';
    }
}
