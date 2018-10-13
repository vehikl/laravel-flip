<?php

namespace Vehikl\LaravelFlip\Middlewares;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;
use Vehikl\LaravelFlip\FeatureResolver;

class FlipTest extends TestCase
{
    /** @test */
    public function itTurnsAFeatureOn(): void
    {
        $flip = new Flip($this->resolver());

        $someFeature = new SomeFeature($this);
        $this->assertFalse($someFeature->isAlwaysOn());

        $request = Request::create('/some/url');
        $request->headers->add(['X-Flip-SomeFeature' => "on"]);

        $flip->handle($request, function ($request) use ($someFeature) {
            $this->assertTrue($someFeature->isAlwaysOn(), "The feature is not on.");
        });
    }

    /** @test */
    public function itTurnsAFeatureOff()
    {
        $flip = new Flip($this->resolver());
        SomeFeature::alwaysOn();

        $someFeature = new SomeFeature($this);
        $this->assertTrue($someFeature->isAlwaysOn());

        $request = Request::create('/some/url');
        $request->headers->add(['X-Flip-SomeFeature' => "off"]);

        $flip->handle($request, function ($_) use ($someFeature) {
            $this->assertFalse($someFeature->isAlwaysOn(), "The feature is not off.");
        });
    }

    private function resolver(): FeatureResolver
    {
        return new class() implements FeatureResolver
        {

            public function resolve(string $feature): ?string
            {
                return SomeFeature::class;
            }
        };
    }
}
