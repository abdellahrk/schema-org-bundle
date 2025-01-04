<?php

namespace Abdellahramadan\SchemaOrgBundle\Schema;

use Abdellahramadan\SchemaOrgBundle\Schema\Intangible\Service;
use Abdellahramadan\SchemaOrgBundle\Schema\Thing\CreativeWork;
use Abdellahramadan\SchemaOrgBundle\Schema\Thing\Event;

class Thing extends BaseType
{
    public array $properties = [];
    public function serviceOutput(Service $service): Service
    {
        $this->setProperty('serviceOutput', $this->parseChild($service));
        return $service;
    }

    public function identifier(string $identifier): static
    {
        $this->setProperty('identifier', $identifier);
        return $this;
    }

    public function sameAs(string $sameAs): static
    {
        $this->setProperty('sameAs', $sameAs);
        return $this;
    }
}