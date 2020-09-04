<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Eccube\Controller\Admin\Setting\Shop\DeliveryController' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/Controller.php';
include_once $this->targetDirs[3].'/src/Eccube/Controller/AbstractController.php';
include_once $this->targetDirs[3].'/src/Eccube/Controller/Admin/Setting/Shop/DeliveryController.php';

$this->services['Eccube\\Controller\\Admin\\Setting\\Shop\\DeliveryController'] = $instance = new \Eccube\Controller\Admin\Setting\Shop\DeliveryController(${($_ = isset($this->services['Eccube\\Repository\\PaymentOptionRepository']) ? $this->services['Eccube\\Repository\\PaymentOptionRepository'] : $this->load('getPaymentOptionRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\DeliveryFeeRepository']) ? $this->services['Eccube\\Repository\\DeliveryFeeRepository'] : $this->load('getDeliveryFeeRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\Master\\PrefRepository']) ? $this->services['Eccube\\Repository\\Master\\PrefRepository'] : $this->load('getPrefRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\DeliveryRepository']) ? $this->services['Eccube\\Repository\\DeliveryRepository'] : $this->load('getDeliveryRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\DeliveryTimeRepository']) ? $this->services['Eccube\\Repository\\DeliveryTimeRepository'] : $this->load('getDeliveryTimeRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\Master\\SaleTypeRepository']) ? $this->services['Eccube\\Repository\\Master\\SaleTypeRepository'] : $this->load('getSaleTypeRepositoryService.php')) && false ?: '_'});

$instance->setEccubeConfig(${($_ = isset($this->services['Eccube\\Common\\EccubeConfig']) ? $this->services['Eccube\\Common\\EccubeConfig'] : ($this->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($this))) && false ?: '_'});
$instance->setEntityManager(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'});
$instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'});
$instance->setSession(${($_ = isset($this->services['session']) ? $this->services['session'] : $this->getSessionService()) && false ?: '_'});
$instance->setFormFactory(${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->load('getForm_FactoryService.php')) && false ?: '_'});
$instance->setEventDispatcher(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'});

return $instance;
