<?php

namespace Abdellahramadan\SchemaOrgBundle\Schema;

use Abdellahramadan\SchemaOrgBundle\Schema\Intangible\Service;

interface SchemaInterface
{
    public function setBaseType(BaseType $type): void;
    public function thing(): Thing;
    public static function service(): Service;

    public function getType(): BaseType|null;

//    private function setType(BaseType $type): void;

}