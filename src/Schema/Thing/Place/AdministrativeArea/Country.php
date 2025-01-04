<?php

namespace Abdellahramadan\SchemaOrgBundle\Schema\Thing\Place\AdministrativeArea;

use Abdellahramadan\SchemaOrgBundle\Schema\BaseType;
use Abdellahramadan\SchemaOrgBundle\Schema\Intangible\StructuredValue\ContactPoint\PostalAddress;

class Country extends BaseType
{
    public array $properties = [];

    public function address(string|PostalAddress $address): static
    {
        if (is_string($address)) {
            $this->setProperty('address', $address);
            return $this;
        }

        $this->setProperty('address', $this->parseChild($address));
        return $this;
    }
}