<?php

namespace Zerotoprod\SpapiRdt\Support\Testing;

use Zerotoprod\Container\Container;
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

    public static function fake(array $response = [], ?SpapiRdtInterface $fake = null): SpapiRdtInterface
    {
        Container::getInstance()
            ->instance(
                __CLASS__,
                $instance = $fake ?? new SpapiRdtFake($response)
            );

        return $instance;
    }

    public function orders(): OrdersInterface
    {
        return new OrdersFake($this->response);
    }
}