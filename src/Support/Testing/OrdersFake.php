<?php

namespace Zerotoprod\SpapiRdt\Support\Testing;

use Zerotoprod\SpapiRdt\Contracts\OrdersInterface;

class OrdersFake implements OrdersInterface
{
    /**
     * @var array
     */
    private $response;

    public function __construct(array $response = [])
    {
        $this->response = $response;
    }

    public function getResponse(): array
    {
        return $this->response;
    }

    public function getBuyerInfo(): array
    {
        return $this->getResponse();
    }

    public function getShippingAddress(): array
    {
        return $this->getResponse();
    }

    public function getOrders(array $dataElements = ['buyerInfo', 'shippingAddress'], array $options = []): array
    {
        return $this->getResponse();
    }

    public function getOrder(string $order_id, array $dataElements = ['buyerInfo', 'shippingAddress'], array $options = []): array
    {
        return $this->getResponse();
    }

    public function getOrderBuyerInfo(string $order_id, array $options = []): array
    {
        return $this->getResponse();
    }

    public function getOrderAddress(string $order_id, array $options = []): array
    {
        return $this->getResponse();
    }

    public function getOrderItems(string $order_id, array $dataElements = [], array $options = []): array
    {
        return $this->getResponse();
    }

    public function getOrderItemsBuyerInfo(string $order_id, array $dataElements = [], array $options = []): array
    {
        return $this->getResponse();
    }
}