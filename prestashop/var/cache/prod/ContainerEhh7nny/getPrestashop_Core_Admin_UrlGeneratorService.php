<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.admin.url_generator' shared service.

return $this->services['prestashop.core.admin.url_generator'] = ${($_ = isset($this->services['prestashop.core.admin.url_generator_factory']) ? $this->services['prestashop.core.admin.url_generator_factory'] : $this->load('getPrestashop_Core_Admin_UrlGeneratorFactoryService.php')) && false ?: '_'}->forSymfony();
