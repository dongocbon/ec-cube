<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.prsd_f7' shared service.

return $this->services['service_locator.prsd_f7'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['cartPurchaseFlow' => function () {
    return ${($_ = isset($this->services['eccube.purchase.flow.cart']) ? $this->services['eccube.purchase.flow.cart'] : $this->load('getEccube_Purchase_Flow_CartService.php')) && false ?: '_'};
}]);
