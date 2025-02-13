<?php

namespace Zerotoprod\SpapiRdt\Contracts;

interface OrdersInterface
{
    public function getOrders(array $dataElements = ['buyerInfo', 'shippingAddress'], array $options = []): array;

    public function getOrder(string $order_id, array $dataElements = ['buyerInfo', 'shippingAddress'], array $options = []): array;

    public function getOrderBuyerInfo(string $order_id, array $options = []): array;

    public function getOrderAddress(string $order_id, array $options = []): array;

    public function getOrderItems(string $order_id, array $dataElements = [], array $options = []): array;

    public function getOrderItemsBuyerInfo(string $order_id, array $dataElements = [], array $options = []): array;
}