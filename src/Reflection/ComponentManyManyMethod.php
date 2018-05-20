<?php declare(strict_types = 1);

namespace SilbinaryWolf\SilverstripePHPStan\Reflection;

use SilbinaryWolf\SilverstripePHPStan\ClassHelper;
use SilbinaryWolf\SilverstripePHPStan\Type\DataListType;
use PHPStan\Reflection\ClassReflection;
use PHPStan\Reflection\MethodReflection;
use PHPStan\Type\Type;
use PHPStan\Type\ObjectType;

class ComponentManyManyMethod implements MethodReflection
{

    /**
     *
     *
     * @var string
     */
    private $name;

    /**
     *
     *
     * @var \PHPStan\Reflection\ClassReflection
     */
    private $declaringClass;

    /**
     *
     *
     * @var DataListType
     */
    private $returnType;

    public function __construct(string $name, ClassReflection $declaringClass, ObjectType $type)
    {
        $this->name = $name;
        $this->declaringClass = $declaringClass;
        $this->returnType = new DataListType(ClassHelper::ManyManyList, $type);
    }

    public function getDeclaringClass(): ClassReflection
    {
        return $this->declaringClass;
    }

    public function getPrototype(): MethodReflection
    {
        return $this;
    }

    public function isStatic(): bool
    {
        return false;
    }

    public function getParameters(): array
    {
        return [];
    }

    public function isVariadic(): bool
    {
        return false;
    }

    public function isPrivate(): bool
    {
        return false;
    }

    public function isPublic(): bool
    {
        return true;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getReturnType(): Type
    {
        return $this->returnType;
    }
}