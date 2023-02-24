<?php

declare(strict_types=1);

namespace Laminas\ServiceManager\Tool;

final class AheadOfTimeCompiledFactory
{
    /**
     * @param class-string     $fullyQualifiedClassName
     * @param non-empty-string $containerConfigurationKey
     * @param non-empty-string $generatedFactory
     */
    public function __construct(
        public string $fullyQualifiedClassName,
        public string $containerConfigurationKey,
        public string $generatedFactory,
    ) {
    }
}
