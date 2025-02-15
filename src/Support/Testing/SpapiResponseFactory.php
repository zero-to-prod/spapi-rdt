<?php

namespace Zerotoprod\SpapiRdt\Support\Testing;

use Zerotoprod\Factory\Factory;

/**
 * A factory for faking responses.
 *
 * @link https://github.com/zero-to-prod/spapi-rdt
 */
class SpapiResponseFactory
{
    use Factory;

    private function definition(): array
    {
        return [
            'info' => [
                'url' => 'https://sellingpartnerapi-na.amazon.com/tokens/2021-03-01/restrictedDataToken',
                'content_type' => 'application/json',
                'http_code' => 200,
                'header_size' => 516,
                'request_size' => 859,
                'filetime' => -1,
                'ssl_verify_result' => 0,
                'redirect_count' => 0,
                'total_time' => 0.514489,
                'namelookup_time' => 0.189293,
                'connect_time' => 0.275669,
                'pretransfer_time' => 0.376331,
                'size_upload' => 211,
                'size_download' => 1787,
                'speed_download' => 3476,
                'speed_upload' => 410,
                'download_content_length' => -1,
                'upload_content_length' => 211,
                'starttransfer_time' => 0.51441,
                'redirect_time' => 0,
                'redirect_url' => '',
                'primary_ip' => '44.215.139.122',
                'certinfo' => [],
                'primary_port' => 443,
                'local_ip' => '172.20.0.2',
                'local_port' => 59862,
            ],
            'error' => '',
            'headers' => [
                'Server' => 'Server',
                'Date' => 'Thu, 13 Feb 2025 15:20:05 GMT',
                'Content-Type' => 'application/json',
                'Transfer-Encoding' => 'chunked',
                'Connection' => 'keep-alive',
                'X-Amz-Rid' => '8CGZF0YCV8JN3TADEKNR',
                'X-Amzn-Ratelimit-Limit' => '1.0',
                'X-Amzn-Requestid' => '0b1f9efd-b82e-4ce5-a440-8eb12dc3e086',
                'X-Amz-Apigw-Id' => 'OPF0b1f9efdb82e',
                'X-Amzn-Trace-Id' => 'Root=1-67ae0da5-0b1f9efdb82e4ce5',
                'Content-Encoding' => 'gzip',
                'Vary' => 'accept-encoding,Content-Type,Accept-Encoding,User-Agent',
                'Strict-Transport-Security' => 'max-age=47474747; includeSubDomains; preload',
            ],
            'response' => [
                'expiresIn' => 3600,
                'restrictedDataToken' => 'restrictedDataToken',
            ]
        ];
    }

    /**
     * Returns an error response.
     *
     * @link https://github.com/zero-to-prod/spapi-rdt
     */
    public function asError(array $merge = []): self
    {
        return $this->set(
            'response',
            array_merge([
                'errors' => [
                    [
                        'code' => 'Unauthorized',
                        'message' => 'Access to requested resource is denied.',
                        'details' => 'The access token you provided is revoked, malformed or invalid.',
                    ],
                ],
            ],
                $merge
            )
        );
    }
}