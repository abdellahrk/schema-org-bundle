<?php

namespace Abdellahramadan\SchemaOrgBundle\Schema;

use Abdellahramadan\SchemaOrgBundle\Schema\Intangible\Audience;
use Abdellahramadan\SchemaOrgBundle\Schema\Intangible\Service;
use Abdellahramadan\SchemaOrgBundle\Schema\Intangible\StructuredValue\ContactPoint\PostalAddress;
use Abdellahramadan\SchemaOrgBundle\Schema\Place\AdministrativeArea;
use Abdellahramadan\SchemaOrgBundle\Schema\Thing\CreativeWork;
use Abdellahramadan\SchemaOrgBundle\Schema\Thing\Event;
use Abdellahramadan\SchemaOrgBundle\Schema\Thing\Person;

interface SchemaInterface
{
    public function setBaseType(BaseType $type): void;
    public function thing(): Thing;
    public function service(): Service;

    public function creativeWork(): CreativeWork;

    public function event(): Event;

    public function person(): Person;
    public function administrativeArea(): AdministrativeArea;
    public function postalAddress(): PostalAddress;
    public function audience(): Audience;

    public function getType(): BaseType|null;

//    private function setType(BaseType $type): void;

}