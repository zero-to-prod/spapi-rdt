<?php

namespace Zerotoprod\SpapiRdt\Contracts;

/**
 * Call the Tokens API to get a Restricted Data Token (RDT) for restricted resources.
 *
 * @link https://github.com/zero-to-prod/spapi-rdt
 * @see  https://developer-docs.amazon.com/sp-api/docs/tokens-api-v2021-03-01-reference
 */
interface SpapiRdtInterface
{
    /**
     * Returns Restricted Data Tokens for the Orders API.
     *
     * @link https://github.com/zero-to-prod/spapi-rdt
     */
    public function orders(): OrdersInterface;
}