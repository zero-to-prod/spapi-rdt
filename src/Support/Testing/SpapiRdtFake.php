<?php

namespace Zerotoprod\SpapiRdt\Support\Testing;

use Zerotoprod\SpapiRdt\Contracts\OrdersInterface;
use Zerotoprod\SpapiRdt\Contracts\SpapiRdtInterface;

class SpapiRdtFake implements SpapiRdtInterface
{
    /**
     * @var array
     */
    private $response;

    public function __construct(array $response = [])
    {
        $this->response = $response;
    }

    public function orders(): OrdersInterface
    {
        return new OrdersFake($this->response);
    }
}