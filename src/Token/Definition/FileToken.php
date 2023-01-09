<?php

declare(strict_types=1);

namespace Terminal42\NotificationCenterBundle\Token\Definition;

use Terminal42\NotificationCenterBundle\Token\TokenInterface;

class FileToken extends AbstractTokenDefinition
{
    public const DEFINITION_NAME = 'file';

    public function getDefinitionName(): string
    {
        return self::DEFINITION_NAME;
    }

    public function createToken(string $tokenName, mixed $value): TokenInterface
    {
        return $this->createTokenWithAllowedTypes(
            $tokenName,
            $value,
            ['null', 'string']
        );
    }
}
