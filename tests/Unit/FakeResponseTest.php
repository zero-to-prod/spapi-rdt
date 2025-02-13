<?php

namespace Tests\Unit;

use Tests\TestCase;
use Zerotoprod\SpapiRdt\SpapiRdt;
use Zerotoprod\SpapiRdt\Support\Testing\SpapiResponseFactory;

class FakeResponseTest extends TestCase
{
    /** @test */
    public function fakes_response(): void
    {
        SpapiRdt::fake(
            SpapiResponseFactory::ok(['response' => ['restrictedDataToken' => 'rdt']])
        );

        $response = SpapiRdt::from('access_token', 'targetApplication')
            ->orders()
            ->getOrders();

        self::assertEquals('rdt', $response['response']['restrictedDataToken']);
    }
}