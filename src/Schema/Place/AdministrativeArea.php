<?php

namespace Abdellahramadan\SchemaOrgBundle\Schema\Place;

use Abdellahramadan\SchemaOrgBundle\Schema\BaseType;

class AdministrativeArea extends BaseType
{
    public array $properties = [];

    public function branchCode(string $branchCode): static
    {
        $this->setProperty('branchCode', $branchCode);
        return $this;
    }
}