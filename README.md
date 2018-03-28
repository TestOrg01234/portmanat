# Portmanat Checkout

- Portmanat Checkout Laravel inteqrasiyası üçün paket
- Paket istifadə üçün quraşdırmadan sonra *portmanat* konfiqurasiya faylını redaktə edib partner məlumatlarınızı qeyd edin
- *PortmanatController* controllerində 3 method var: result,success, failed
- *result* methodu portmanat göndərdiyi ödəniş məlumatlarını qebul edir.
- *success*  ödəniş uğurlu olduqda portmanat tərəfindən yönləndirilən methoddur.
- *failed*  ödəniş uğursuz olduqda portmanat tərəfindən yönləndirilən methoddur.
# Quraşdırılmaq qaydası
*Aşağıdakı composer komandasını çalışdırmaq lazımdır*

<pre>
composer require eminalishov/portmanat
</pre>
`app/config.app` faylında **providers** siyahısına əlavə edin
<pre>
Alishov\Portmanat\PortmanatServiceProvider::class,
</pre>
və `app/config.app` faylında **aliases** siyahısına əlavə edin
<pre>
'Portmanat' => Alishov\Portmanat\Facade\Portmanat::class,
</pre>
Database məlumatlarını yerinə yazın və artisan komandasını çalışdırın. 
<pre>
php artisan migrate
</pre>
*payments* adlı table yaranacaq. Bu portmanat loglarını saxlamaq üçündür.
<pre>
php artisan vendor:publish
</pre>
Bu fayllar yaranacaq (*eyni ünvanda olmamasına diqqət edin*)
- app/Http/Controllers/PortmanatController.php
- config/portmanat.php
# Konfiqurasiya
*config/portmanat.php* faylı aşağıdakı kimidir:
<pre>

return [
    "p_id" => 15785,
    "s_id" => 12418,
    "key" => "testucun",
    "success_url" => "/payment/portmanat/success",
    "failed_url" => "/payment/portmanat/failed",
    "result_url" => "/payment/portmanat/result",
   ]
</pre>
- *p_id, s_id, key* portmanat tərəfindən təqdim edilir (partner paneldə)
- *success_url* uğurlu ödənişdən sonra portmanat bu linkə yönləndirir
- *failed_url* uğursuz ödənişdən sonra portmanat bu linkə yönləndirir
- *result_url* ödəniş məlumatları bu linkə göndərilir
