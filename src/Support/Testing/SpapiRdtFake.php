<?php

namespace Zerotoprod\SpapiRdt\Support\Testing;

use Zerotoprod\Container\Container;
use Zerotoprod\SpapiRdt\Contracts\OrdersInterface;
use Zerotoprod\SpapiRdt\Contracts\SpapiRdtInterface;

/**
 * @link https://github.com/zero-to-prod/spapi-rdt
 */
class SpapiRdtFake implements SpapiRdtInterface
{
    /**
     * @var array
     */
    private $response;

    /**
     * @link https://github.com/zero-to-prod/spapi-rdt
     */
    public function __construct(array $response = [])
    {
        $this->response = $response;
    }

    /**
     * @link https://github.com/zero-to-prod/spapi-rdt
     */
    public static function fake(array $response = [], ?SpapiRdtInterface $fake = null): SpapiRdtInterface
    {
        Container::getInstance()
            ->instance(
                __CLASS__,
                $instance = $fake ?? new SpapiRdtFake($response)
            );

        return $instance;
    }

    /**
     * @link https://github.com/zero-to-prod/spapi-rdt
     */
    public function orders(): OrdersInterface
    {
        return new OrdersFake($this->response);
    }
}