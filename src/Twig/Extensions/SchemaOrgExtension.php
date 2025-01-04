<?php
namespace Abdellahramadan\SchemaOrgBundle\Twig\Extensions;

use Abdellahramadan\SchemaOrgBundle\Schema\BaseType;
use Abdellahramadan\SchemaOrgBundle\Schema\Schema;
use Abdellahramadan\SchemaOrgBundle\Schema\SchemaInterface;
use Abdellahramadan\SchemaOrgBundle\Schema\Thing;
use ReflectionProperty;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class SchemaOrgExtension extends AbstractExtension
{
    private SchemaInterface $schema;
    public function __construct(
         SchemaInterface $schema
    ) {
        $this->schema = $schema;
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('schema_org', [$this, 'renderSchemaOrg'], ['is_safe' => ['html']]),
        ];
    }

    public function renderSchemaOrg(): string|null
    {
        return $this->schema->getType() ? $this->schema->getType()->render() : null;
    }
}