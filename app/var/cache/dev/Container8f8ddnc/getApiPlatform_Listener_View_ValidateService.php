<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'api_platform.listener.view.validate' shared service.

return $this->services['api_platform.listener.view.validate'] = new \ApiPlatform\Core\Bridge\Symfony\Validator\EventListener\ValidateListener(${($_ = isset($this->services['liip_functional_test.validator']) ? $this->services['liip_functional_test.validator'] : $this->getLiipFunctionalTest_ValidatorService()) && false ?: '_'}, ${($_ = isset($this->services['api_platform.metadata.resource.metadata_factory']) ? $this->services['api_platform.metadata.resource.metadata_factory'] : $this->getApiPlatform_Metadata_Resource_MetadataFactoryService()) && false ?: '_'});