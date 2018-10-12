<?php

namespace Vehikl\LaravelFlip\Middlewares;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;
use Throwable;

class FlipTest extends TestCase
{
    /** @test */
    public function itTurnsAFeatureOn() : void
    {
        $flip = new Flip();

        $someFeature = new SomeFeature($this);
        $this->assertFalse($someFeature->isAlwaysOn());

        $request = Request::create('/some/url');
        $request->headers->add(['X-Flip-SomeFeature' => "on"]);

        $flip->handle($request, function ($request) use ($someFeature) {
            $this->assertTrue($someFeature->isAlwaysOn(), "The feature is not on.");
        });


    }
}
