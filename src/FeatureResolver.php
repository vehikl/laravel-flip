<?php

namespace Vehikl\LaravelFlip;

interface FeatureResolver
{
    /**
     * @param string $feature Feature name to be resolved
     * @return null|string The Fully Qualified Name of the feature
     */
    public function resolve(string $feature) : ?string;
}
