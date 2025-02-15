<?php

namespace Zerotoprod\SpapiRdt\Tokens;

use Zerotoprod\SpapiRdt\Contracts\OrdersInterface;
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
     * @var string|null
     */
    private $targetApplication;

    /**
     * @var string
     */
    private $base_uri;
    /**
     * @var string
     */
    private $access_token;
    /**
     * @var string|null
     */
    private $user_agent;
    /**
     * @var array
     */
    private $options;

    /**
     * Instantiate this class.
     *
     * @param  string       $access_token       The access token to create the RDT
     * @param  string|null  $targetApplication  The application ID for the target application to which access is being
     * @param  string       $base_uri           The URL for the api
     * @param  string|null  $user_agent         The user-agent for the request
     * @param  array        $options            Merge curl options
     *
     * @link https://github.com/zero-to-prod/spapi-rdt
     * @see  https://developer-docs.amazon.com/sp-api/docs/tokens-api-v2021-03-01-reference
     */
    public function __construct(
        string $access_token,
        ?string $targetApplication = null,
        string $base_uri = 'https://sellingpartnerapi-na.amazon.com/tokens/2021-03-01/restrictedDataToken',
        ?string $user_agent = null,
        array $options = []
    ) {
        $this->access_token = $access_token;
        $this->targetApplication = $targetApplication;
        $this->user_agent = $user_agent;
        $this->base_uri = $base_uri;
        $this->options = $options;
    }

    /**
     * A helper method for instantiation.
     *
     * @param  string       $access_token       The access token to create the RDT
     * @param  string|null  $targetApplication  The application ID for the target application to which access is being
     * @param  string       $base_uri           The URL for the api
     * @param  string|null  $user_agent         The user-agent for the request
     * @param  array        $options            Merge curl options
     *
     * @link https://github.com/zero-to-prod/spapi-rdt
     * @see  https://developer-docs.amazon.com/sp-api/docs/tokens-api-v2021-03-01-reference
     */
    public static function from(
        string $access_token,
        ?string $targetApplication = null,
        string $base_uri = 'https://sellingpartnerapi-na.amazon.com/tokens/2021-03-01/restrictedDataToken',
        ?string $user_agent = null,
        array $options = []
    ): self {
        return new self($access_token, $targetApplication, $base_uri, $user_agent, $options);
    }

    /**
     * @inheritDoc
     * @link https://github.com/zero-to-prod/spapi-rdt
     */
    public function getOrders(array $dataElements = ['buyerInfo', 'shippingAddress'], array $options = []): array
    {
        return SpapiTokens::createRestrictedDataToken(
            $this->access_token,
            '/orders/v0/orders',
            $dataElements,
            $this->targetApplication,
            $this->base_uri,
            $this->user_agent,
            array_merge($this->options, $options)
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
        return SpapiTokens::createRestrictedDataToken(
            $this->access_token,
            "/orders/v0/orders/$order_id",
            $dataElements,
            $this->targetApplication,
            $this->base_uri,
            $this->user_agent,
            array_merge($this->options, $options)
        );
    }

    /**
     * @inheritDoc
     * @link https://github.com/zero-to-prod/spapi-rdt
     */
    public function getOrderBuyerInfo(string $order_id, array $options = []): array
    {
        return SpapiTokens::createRestrictedDataToken(
            $this->access_token,
            "/orders/v0/orders/$order_id/buyerInfo",
            [],
            $this->targetApplication,
            $this->base_uri,
            $this->user_agent,
            array_merge($this->options, $options)
        );
    }

    /**
     * @inheritDoc
     * @link https://github.com/zero-to-prod/spapi-rdt
     */
    public function getOrderAddress(string $order_id, array $options = []): array
    {
        return SpapiTokens::createRestrictedDataToken(
            $this->access_token,
            "/orders/v0/orders/$order_id/address",
            [],
            $this->targetApplication,
            $this->base_uri,
            $this->user_agent,
            array_merge($this->options, $options)
        );
    }

    /**
     * @inheritDoc
     * @link https://github.com/zero-to-prod/spapi-rdt
     */
    public function getOrderItems(string $order_id, array $dataElements = [], array $options = []): array
    {
        return SpapiTokens::createRestrictedDataToken(
            $this->access_token,
            "/orders/v0/orders/$order_id/orderItems",
            $dataElements,
            $this->targetApplication,
            $this->base_uri,
            $this->user_agent,
            array_merge($this->options, $options)
        );
    }

    /**
     * @inheritDoc
     * @link https://github.com/zero-to-prod/spapi-rdt
     */
    public function getOrderItemsBuyerInfo(string $order_id, array $dataElements = [], array $options = []): array
    {
        return SpapiTokens::createRestrictedDataToken(
            $this->access_token,
            "/orders/v0/orders/$order_id/orderItems/buyerInfo",
            $dataElements,
            $this->targetApplication,
            $this->base_uri,
            $this->user_agent,
            array_merge($this->options, $options)
        );
    }
}