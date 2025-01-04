<?php

namespace Abdellahramadan\SchemaOrgBundle\Schema;

use Abdellahramadan\SchemaOrgBundle\Schema\Intangible\Service;

class Schema implements SchemaInterface
{
    private ?BaseType $baseType = null;
    public function getType(): BaseType|null
    {
        return $this->baseType ?? null;
    }

    public function setBaseType(BaseType $type): void
    {
        $this->baseType = $type;
    }

    public function thing(): Thing
    {
        return new Thing();
    }

    public static function service(): Service
    {
        return new Service();
    }
}