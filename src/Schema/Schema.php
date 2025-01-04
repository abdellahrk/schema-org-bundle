<?php

namespace Abdellahramadan\SchemaOrgBundle\Schema;

use Abdellahramadan\SchemaOrgBundle\Schema\Intangible\Audience;
use Abdellahramadan\SchemaOrgBundle\Schema\Intangible\Service;
use Abdellahramadan\SchemaOrgBundle\Schema\Intangible\StructuredValue\ContactPoint\PostalAddress;
use Abdellahramadan\SchemaOrgBundle\Schema\Place\AdministrativeArea;
use Abdellahramadan\SchemaOrgBundle\Schema\Thing\CreativeWork;
use Abdellahramadan\SchemaOrgBundle\Schema\Thing\Event;
use Abdellahramadan\SchemaOrgBundle\Schema\Thing\Person;

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

    public function service(): Service
    {
        return new Service();
    }

    public function event(): Event
    {
        return new Event();
    }

    public function creativeWork(): CreativeWork
    {
        return new CreativeWork();
    }

    public function person(): Person
    {
        return new Person();
    }

    public function administrativeArea(): AdministrativeArea
    {
        return new AdministrativeArea();
    }

    public function postalAddress(): PostalAddress
    {
        return new PostalAddress();
    }

    public function audience(): Audience
    {
        return new Audience();
    }
}