<?php

namespace Zerotoprod\SpapiRdt\Tokens;

use Zerotoprod\SpapiRdt\Contracts\OrdersInterface;
use Zerotoprod\SpapiTokens\Contracts\SpapiTokensInterface;
use Zerotoprod\SpapiTokens\SpapiTokens;

/**
 * Call the Tokens API to get a Restricted Data Token (RDT) for restricted resources.
 *
 * The Selling Partner API for Tokens provides a secure way to access a customer's PII
 * (Personally Identifiable Information). You can call the Tokens API to get a
 * Restricted Data Token (RDT) for one or more restricted resources that you
 * specify. The RDT authorizes subsequent calls to restricted operations
 * that correspond to the restricted resources that you specified.
 *
 * For more information, see the Tokens API Use Case Guide.
 *
 * @link https://github.com/zero-to-prod/spapi-rdt
 * @see  https://developer-docs.amazon.com/sp-api/docs/tokens-api-v2021-03-01-reference
 */
class Orders implements OrdersInterface
{
    /**
     * @var SpapiTokens
     */
    private $SpapiTokens;

    /**
     * Instantiate this class.
     *
     * @link https://github.com/zero-to-prod/spapi-rdt
     * @see  https://developer-docs.amazon.com/sp-api/docs/tokens-api-v2021-03-01-reference
     */
    private function __construct(SpapiTokensInterface $SpapiTokens)
    {
        $this->SpapiTokens = $SpapiTokens;
    }

    /**
     * A helper method for instantiation.
     *
     * @link https://github.com/zero-to-prod/spapi-rdt
     * @see  https://developer-docs.amazon.com/sp-api/docs/tokens-api-v2021-03-01-reference
     */
    public static function from(SpapiTokensInterface $SpapiTokens): OrdersInterface
    {
        return new self($SpapiTokens);
    }

    /**
     * @inheritDoc
     * @link https://github.com/zero-to-prod/spapi-rdt
     */
    public function getOrders(array $dataElements = ['buyerInfo', 'shippingAddress'], array $options = []): array
    {
        return $this->SpapiTokens
            ->createRestrictedDataToken(
                '/orders/v0/orders',
                $dataElements,
                $options
            );
    }

    /**
     * @inheritDoc
     * @link https://github.com/zero-to-prod/spapi-rdt
     */
    public function getOrder(
        string $order_id,
        array $dataElements = ['buyerInfo', 'shippingAddress'],
        array $options = []
    ): array {
        return $this->SpapiTokens
            ->createRestrictedDataToken(
                "/orders/v0/orders/$order_id",
                $dataElements,
                $options
            );
    }

    /**
     * @inheritDoc
     * @link https://github.com/zero-to-prod/spapi-rdt
     */
    public function getOrderBuyerInfo(string $order_id, array $options = []): array
    {
        return $this->SpapiTokens
            ->createRestrictedDataToken(
                "/orders/v0/orders/$order_id/buyerInfo",
                [],
                $options
            );
    }

    /**
     * @inheritDoc
     * @link https://github.com/zero-to-prod/spapi-rdt
     */
    public function getOrderAddress(string $order_id, array $options = []): array
    {
        return $this->SpapiTokens
            ->createRestrictedDataToken(
                "/orders/v0/orders/$order_id/address",
                [],
                $options
            );
    }

    /**
     * @inheritDoc
     * @link https://github.com/zero-to-prod/spapi-rdt
     */
    public function getOrderItems(string $order_id, array $dataElements = [], array $options = []): array
    {
        return $this->SpapiTokens
            ->createRestrictedDataToken(
                "/orders/v0/orders/$order_id/orderItems",
                $dataElements,
                $options
            );
    }

    /**
     * @inheritDoc
     * @link https://github.com/zero-to-prod/spapi-rdt
     */
    public function getOrderItemsBuyerInfo(string $order_id, array $dataElements = [], array $options = []): array
    {
        return $this->SpapiTokens
            ->createRestrictedDataToken(
                "/orders/v0/orders/$order_id/orderItems/buyerInfo",
                $dataElements,
                $options
            );
    }
}