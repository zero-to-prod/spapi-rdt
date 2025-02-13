<?php

namespace Zerotoprod\SpapiRdt;

use Zerotoprod\Container\Container;
use Zerotoprod\SpapiRdt\Contracts\OrdersInterface;
use Zerotoprod\SpapiRdt\Contracts\SpapiRdtInterface;
use Zerotoprod\SpapiRdt\Support\Testing\SpapiRdtFake;
use Zerotoprod\SpapiRdt\Tokens\Orders;

class SpapiRdt implements SpapiRdtInterface
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
     * @link https://developer-docs.amazon.com/sp-api/docs/tokens-api-v2021-03-01-reference
     */
    private function __construct(
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
     * @link https://developer-docs.amazon.com/sp-api/docs/tokens-api-v2021-03-01-reference
     */
    public static function from(
        string $access_token,
        ?string $targetApplication = null,
        string $base_uri = 'https://sellingpartnerapi-na.amazon.com/tokens/2021-03-01/restrictedDataToken',
        ?string $user_agent = null,
        array $options = []
    ): SpapiRdtInterface {
        return Container::getInstance()
            ->get(SpapiRdtFake::class) ?: new self($access_token, $targetApplication, $base_uri, $user_agent, $options);
    }

    /**
     * Returns Restricted Data Tokens for the Orders API.
     */
    public function orders(): OrdersInterface
    {
        return new Orders(
            $this->access_token,
            $this->targetApplication,
            $this->base_uri,
            $this->user_agent,
            $this->options
        );
    }

    public static function fake(array $response = [], ?SpapiRdtInterface $fake = null): SpapiRdtInterface
    {
        Container::getInstance()
            ->instance(
                SpapiRdtFake::class,
                $instance = $fake ?? new SpapiRdtFake($response)
            );

        return $instance;
    }
}