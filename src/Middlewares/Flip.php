<?php

namespace Vehikl\LaravelFlip\Middlewares;

use Closure;
use Illuminate\Support\Collection;
use Symfony\Component\HttpFoundation\Request;

class Flip
{
    public function handle(Request $request, Closure $next)
    {
        Collection::make($request->headers->all())->filter(function ($_, string $header) {
            return starts_with($header, 'X-Flip');
        })->each(function ($value, string $header) {
            $feature = str_after($header, 'X-Flip-');
            $feature::alwaysOn();
        });

        return $next($request);
    }
}
