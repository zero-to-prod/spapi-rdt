<?php

namespace Zerotoprod\SpapiRdt\Support\Testing;

use Zerotoprod\SpapiRdt\Contracts\OrdersInterface;

/**
 * Fake RTD orders responses
 *
 * @link https://github.com/zero-to-prod/spapi-rdt
 */
class OrdersFake implements OrdersInterface
{
    /**
     * @var array
     */
    private $response;

    /** @link https://github.com/zero-to-prod/spapi-rdt */
    public function __construct(array $response = [])
    {
        $this->response = $response;
    }

    /**
     * @inheritDoc
     * @link https://github.com/zero-to-prod/spapi-rdt
     */
    public function getOrders(array $dataElements = ['buyerInfo', 'shippingAddress'], array $options = []): array
    {
        return $this->response;
    }

    /**
     * @inheritDoc
     * @link https://github.com/zero-to-prod/spapi-rdt
     */
    public function getOrder(string $order_id, array $dataElements = ['buyerInfo', 'shippingAddress'], array $options = []): array
    {
        return $this->response;
    }

    /**
     * @inheritDoc
     * @link https://github.com/zero-to-prod/spapi-rdt
     */
    public function getOrderBuyerInfo(string $order_id, array $options = []): array
    {
        return $this->response;
    }

    /**
     * @inheritDoc
     * @link https://github.com/zero-to-prod/spapi-rdt
     */
    public function getOrderAddress(string $order_id, array $options = []): array
    {
        return $this->response;
    }

    /**
     * @inheritDoc
     * @link https://github.com/zero-to-prod/spapi-rdt
     */
    public function getOrderItems(string $order_id, array $dataElements = [], array $options = []): array
    {
        return $this->response;
    }

    /**
     * @inheritDoc
     * @link https://github.com/zero-to-prod/spapi-rdt
     */
    public function getOrderItemsBuyerInfo(string $order_id, array $dataElements = [], array $options = []): array
    {
        return $this->response;
    }
}