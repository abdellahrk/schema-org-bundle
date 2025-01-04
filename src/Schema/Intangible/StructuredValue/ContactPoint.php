<?php

namespace Abdellahramadan\SchemaOrgBundle\Schema\Intangible\StructuredValue;

use Abdellahramadan\SchemaOrgBundle\Schema\BaseType;
use Abdellahramadan\SchemaOrgBundle\Schema\Place\AdministrativeArea;
use Abdellahramadan\SchemaOrgBundle\Schema\Thing\Place;

class ContactPoint extends BaseType
{
    public array $properties = [];

    public function areaServed(string|AdministrativeArea|Place|GeoShape $areaServed): static
    {
        if (is_string($areaServed)) {
            $this->setProperty('areaServed', $areaServed);
            return $this;
        }

        $this->setProperty('areaServed', $this->parseChild($areaServed));
        return $this;
    }
}