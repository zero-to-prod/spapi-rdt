<?php

namespace Tests\Unit;

use Tests\TestCase;
use Zerotoprod\SpapiRdt\SpapiRdt;
use Zerotoprod\SpapiRdt\Support\Testing\SpapiRdtFake;
use Zerotoprod\SpapiRdt\Support\Testing\SpapiRdtResponseFactory;

class FakeResponseTest extends TestCase
{
    /** @test */
    public function fakes_response(): void
    {
        SpapiRdtFake::fake(
            SpapiRdtResponseFactory::factory(['response' => ['restrictedDataToken' => 'rdt']])
                ->make()
        );

        $response = SpapiRdt::from('access_token', 'targetApplication')
            ->orders()
            ->getOrders();

        self::assertEquals('rdt', $response['response']['restrictedDataToken']);
    }

    /** @test */
    public function asError(): void
    {
        SpapiRdtFake::fake(
            SpapiRdtResponseFactory::factory(['response' => ['restrictedDataToken' => 'rdt']])
                ->asError()
                ->make()
        );

        $response = SpapiRdt::from('access_token', 'targetApplication')
            ->orders()
            ->getOrders();

        self::assertEquals('Unauthorized', $response['response']['errors'][0]['code']);
    }
}