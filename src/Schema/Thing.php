<?php

namespace Abdellahramadan\SchemaOrgBundle\Schema;

use Abdellahramadan\SchemaOrgBundle\Schema\Intangible\Service;

class Thing extends BaseType
{
    public array $properties = [];
    public function serviceOutput(Service $service): Service
    {
        $this->setProperty('serviceOutput', $this->parseChild($service));
        return $service;
    }
}