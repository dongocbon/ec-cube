<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.request_matcher.t59h6fb' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/RequestMatcherInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/RequestMatcher.php';

return $this->services['security.request_matcher.t59h6fb'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/'.$this->getEnv('string:ECCUBE_ADMIN_ROUTE').'/');
