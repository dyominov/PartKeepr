<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'partkeepr.listener.request_exception' shared service.

return $this->services['partkeepr.listener.request_exception'] = new \PartKeepr\CoreBundle\EventListener\RequestExceptionListener(${($_ = isset($this->services['doctrine_reflection_deletion_service']) ? $this->services['doctrine_reflection_deletion_service'] : $this->load('getDoctrineReflectionDeletionServiceService.php')) && false ?: '_'});