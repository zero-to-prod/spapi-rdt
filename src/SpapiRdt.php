<?php

namespace Zerotoprod\SpapiRdt;

use Zerotoprod\Container\Container;
use Zerotoprod\SpapiRdt\Contracts\OrdersInterface;
use Zerotoprod\SpapiRdt\Contracts\SpapiRdtInterface;
use Zerotoprod\SpapiRdt\Support\Testing\SpapiRdtFake;
use Zerotoprod\SpapiRdt\Tokens\Orders;
use Zerotoprod\SpapiTokens\Contracts\SpapiTokensInterface;
use Zerotoprod\SpapiTokens\SpapiTokens;

/**
 * Create Restricted Data Tokens for Amazons Selling Partner API (SPAPI).
 *
 * Call the Tokens API to get a Restricted Data Token (RDT) for restricted resources.
 *
 * @link https://github.com/zero-to-prod/spapi-rdt
 * @see  https://developer-docs.amazon.com/sp-api/docs/tokens-api-v2021-03-01-reference
 */
class SpapiRdt implements SpapiRdtInterface
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
    public static function from(SpapiTokensInterface $SpapiTokens): SpapiRdtInterface
    {
        return Container::getInstance()->has(SpapiRdtFake::class)
            ? Container::getInstance()->get(SpapiRdtFake::class)
            : new self($SpapiTokens);
    }

    /**
     * Returns Restricted Data Tokens for the Orders API.
     *
     * @link https://github.com/zero-to-prod/spapi-rdt
     */
    public function orders(): OrdersInterface
    {
        return Orders::from($this->SpapiTokens);
    }
}