<?php

namespace Abdellahramadan\SchemaOrgBundle\Schema;

use Abdellahramadan\SchemaOrgBundle\Schema\Thing\CreativeWork;
use Abdellahramadan\SchemaOrgBundle\Schema\Thing\Event;

class BaseType
{

    public function __toString(): string
    {
        return get_class($this);
    }

    public function getType(): string
    {
        return (new \ReflectionClass($this))->getShortName();
    }
    public function setProperty(string $name, string|array|object $value): void
    {
        $this->properties[$name] = $value;
    }

    public function getProperties(): array
    {
        return $this->properties;
    }

    public function getProperty(string $name): mixed
    {
        return $this->properties[$name] ?? null;
    }

    public function setName(string $value): static
    {
        $this->setProperty('name', $value);
        return $this;
    }

    public function setAlternateName(string $value): static
    {
        $this->setProperty('alternateName', $value);
        return $this;
    }

    public function setUrl(string $value): BaseType
    {
        $this->setProperty('url', $value);
        return $this;
    }
    public function setDescription(string $value): static
    {
        $this->setProperty('description', $value);
        return $this;
    }

    public function subjectOf(Event|CreativeWork|BaseType $subjectOf): static
    {
        $this->setProperty('subjectOf', $this->parseChild($subjectOf));
        return $this;
    }

    public function render(): string|null
    {
        return '<script type="application/ld+json">'.
            '"'.json_encode($this->parse(), JSON_PRETTY_PRINT).'"'.
           '</script>';
    }

    private function parse(): array
    {
        return [
            "@context" => "https://schema.org",
            "@type" =>  $this->getType(),]+
            $this->getProperties()
        ;
    }

    public function parseChild(BaseType $child): array
    {
        $properties = get_class_vars($child);
        return [
                "@type" =>  $child->getType(),]+
            $child->getProperties()
            ;
    }
}