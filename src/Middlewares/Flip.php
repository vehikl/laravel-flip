<?php

namespace Vehikl\LaravelFlip\Middlewares;

use Closure;
use Illuminate\Support\Collection;
use Symfony\Component\HttpFoundation\Request;
use Vehikl\LaravelFlip\FeatureResolver;

class Flip
{
    private $resolver;

    public function __construct(FeatureResolver $resolver)
    {
        $this->resolver = $resolver;
    }

    public function handle(Request $request, Closure $next)
    {
        Collection::make($request->headers->all())->filter(function ($_, string $header) {
            return starts_with($header, 'x-flip');
        })->each(function ($state, string $header) {
            $feature = $this->resolver->resolve(str_after($header, 'x-flip-'));
            $this->forceFeatureState($feature, strtolower($state[0]));
        });

        return $next($request);
    }

    private function forceFeatureState(string $feature, string $state) : void
    {
        switch ($state) {
            case 'on':
                $feature::alwaysOn();
                break;
            case 'off':
                $feature::alwaysOff();
                break;
        }
    }
}
