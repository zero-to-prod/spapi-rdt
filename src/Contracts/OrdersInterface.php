<?php

namespace Zerotoprod\SpapiRdt\Contracts;

interface OrdersInterface
{
    /**
     * Creates a Restricted Data Token.
     *
     * @param  array  $dataElements  `['buyerInfo', 'shippingAddress']`
     * @param  array  $options       Merge curl options
     *
     * @return array{
     *  info: array{
     *      url: string,
     *      content_type: string,
     *      http_code: int,
     *      header_size: int,
     *      request_size: int,
     *      filetime: int,
     *      ssl_verify_result: int,
     *      redirect_count: int,
     *      total_time: float,
     *      namelookup_time: float,
     *      connect_time: float,
     *      pretransfer_time: float,
     *      size_upload: int,
     *      size_download: int,
     *      speed_download: int,
     *      speed_upload: int,
     *      download_content_length: int,
     *      upload_content_length: int,
     *      starttransfer_time: float,
     *      redirect_time: float,
     *      redirect_url: string,
     *      primary_ip: string,
     *      certinfo: array,
     *      primary_port: int,
     *      local_ip: string,
     *      local_port: int,
     *      http_version: int,
     *      protocol: int,
     *      ssl_verifyresult: int,
     *      scheme: string,
     *      appconnect_time_us: int,
     *      connect_time_us: int,
     *      namelookup_time_us: int,
     *      pretransfer_time_us: int,
     *      redirect_time_us: int,
     *      starttransfer_time_us: int,
     *      total_time_us: int
     *  },
     *  error: string,
     *  headers: array{
     *      Server: string,
     *      Date: string,
     *      Content-Type: string,
     *      Content-Length: string,
     *      Connection: string,
     *      'x-amz-rid': string,
     *      'x-amzn-RateLimit-Limit': string,
     *      'x-amzn-RequestId': string,
     *      'x-amz-apigw-id': string,
     *      'X-Amzn-Trace-Id': string,
     *      Vary: string,
     *      'Strict-Transport-Security': string
     *  },
     *  response: array{
     *     expiresIn?: int,
     *     restrictedDataToken?: string,
     *     errors?: array{array{
     *          code: string,
     *          message: string,
     *          details: string
     *     }}
     *   }
     * }
     * @link https://github.com/zero-to-prod/spapi-rdt
     * @see  https://developer-docs.amazon.com/sp-api/docs/tokens-api-v2021-03-01-reference
     */
    public function getOrders(array $dataElements = ['buyerInfo', 'shippingAddress'], array $options = []): array;

    /**
     * Creates a Restricted Data Token.
     *
     * @param  string  $order_id      Amazon Order ID
     * @param  array   $dataElements  `['buyerInfo', 'shippingAddress']`
     * @param  array   $options       Merge curl options
     *
     * @return array{
     *  info: array{
     *      url: string,
     *      content_type: string,
     *      http_code: int,
     *      header_size: int,
     *      request_size: int,
     *      filetime: int,
     *      ssl_verify_result: int,
     *      redirect_count: int,
     *      total_time: float,
     *      namelookup_time: float,
     *      connect_time: float,
     *      pretransfer_time: float,
     *      size_upload: int,
     *      size_download: int,
     *      speed_download: int,
     *      speed_upload: int,
     *      download_content_length: int,
     *      upload_content_length: int,
     *      starttransfer_time: float,
     *      redirect_time: float,
     *      redirect_url: string,
     *      primary_ip: string,
     *      certinfo: array,
     *      primary_port: int,
     *      local_ip: string,
     *      local_port: int,
     *      http_version: int,
     *      protocol: int,
     *      ssl_verifyresult: int,
     *      scheme: string,
     *      appconnect_time_us: int,
     *      connect_time_us: int,
     *      namelookup_time_us: int,
     *      pretransfer_time_us: int,
     *      redirect_time_us: int,
     *      starttransfer_time_us: int,
     *      total_time_us: int
     *  },
     *  error: string,
     *  headers: array{
     *      Server: string,
     *      Date: string,
     *      Content-Type: string,
     *      Content-Length: string,
     *      Connection: string,
     *      'x-amz-rid': string,
     *      'x-amzn-RateLimit-Limit': string,
     *      'x-amzn-RequestId': string,
     *      'x-amz-apigw-id': string,
     *      'X-Amzn-Trace-Id': string,
     *      Vary: string,
     *      'Strict-Transport-Security': string
     *  },
     *  response: array{
     *     expiresIn?: int,
     *     restrictedDataToken?: string,
     *     errors?: array{array{
     *          code: string,
     *          message: string,
     *          details: string
     *     }}
     *   }
     * }
     * @link https://github.com/zero-to-prod/spapi-rdt
     * @see  https://developer-docs.amazon.com/sp-api/docs/tokens-api-v2021-03-01-reference
     */
    public function getOrder(string $order_id, array $dataElements = ['buyerInfo', 'shippingAddress'], array $options = []): array;

    /**
     * Creates a Restricted Data Token.
     *
     * @param  string  $order_id  Amazon Order ID
     * @param  array   $options   Merge curl options
     *
     * @return array{
     *  info: array{
     *      url: string,
     *      content_type: string,
     *      http_code: int,
     *      header_size: int,
     *      request_size: int,
     *      filetime: int,
     *      ssl_verify_result: int,
     *      redirect_count: int,
     *      total_time: float,
     *      namelookup_time: float,
     *      connect_time: float,
     *      pretransfer_time: float,
     *      size_upload: int,
     *      size_download: int,
     *      speed_download: int,
     *      speed_upload: int,
     *      download_content_length: int,
     *      upload_content_length: int,
     *      starttransfer_time: float,
     *      redirect_time: float,
     *      redirect_url: string,
     *      primary_ip: string,
     *      certinfo: array,
     *      primary_port: int,
     *      local_ip: string,
     *      local_port: int,
     *      http_version: int,
     *      protocol: int,
     *      ssl_verifyresult: int,
     *      scheme: string,
     *      appconnect_time_us: int,
     *      connect_time_us: int,
     *      namelookup_time_us: int,
     *      pretransfer_time_us: int,
     *      redirect_time_us: int,
     *      starttransfer_time_us: int,
     *      total_time_us: int
     *  },
     *  error: string,
     *  headers: array{
     *      Server: string,
     *      Date: string,
     *      Content-Type: string,
     *      Content-Length: string,
     *      Connection: string,
     *      'x-amz-rid': string,
     *      'x-amzn-RateLimit-Limit': string,
     *      'x-amzn-RequestId': string,
     *      'x-amz-apigw-id': string,
     *      'X-Amzn-Trace-Id': string,
     *      Vary: string,
     *      'Strict-Transport-Security': string
     *  },
     *  response: array{
     *     expiresIn?: int,
     *     restrictedDataToken?: string,
     *     errors?: array{array{
     *          code: string,
     *          message: string,
     *          details: string
     *     }}
     *   }
     * }
     *
     * @link https://github.com/zero-to-prod/spapi-rdt
     * @see  https://developer-docs.amazon.com/sp-api/docs/tokens-api-v2021-03-01-reference
     */
    public function getOrderBuyerInfo(string $order_id, array $options = []): array;

    /**
     * Creates a Restricted Data Token.
     *
     * @param  string  $order_id  Amazon Order ID
     * @param  array   $options   Merge curl options
     *
     * @return array{
     *  info: array{
     *      url: string,
     *      content_type: string,
     *      http_code: int,
     *      header_size: int,
     *      request_size: int,
     *      filetime: int,
     *      ssl_verify_result: int,
     *      redirect_count: int,
     *      total_time: float,
     *      namelookup_time: float,
     *      connect_time: float,
     *      pretransfer_time: float,
     *      size_upload: int,
     *      size_download: int,
     *      speed_download: int,
     *      speed_upload: int,
     *      download_content_length: int,
     *      upload_content_length: int,
     *      starttransfer_time: float,
     *      redirect_time: float,
     *      redirect_url: string,
     *      primary_ip: string,
     *      certinfo: array,
     *      primary_port: int,
     *      local_ip: string,
     *      local_port: int,
     *      http_version: int,
     *      protocol: int,
     *      ssl_verifyresult: int,
     *      scheme: string,
     *      appconnect_time_us: int,
     *      connect_time_us: int,
     *      namelookup_time_us: int,
     *      pretransfer_time_us: int,
     *      redirect_time_us: int,
     *      starttransfer_time_us: int,
     *      total_time_us: int
     *  },
     *  error: string,
     *  headers: array{
     *      Server: string,
     *      Date: string,
     *      Content-Type: string,
     *      Content-Length: string,
     *      Connection: string,
     *      'x-amz-rid': string,
     *      'x-amzn-RateLimit-Limit': string,
     *      'x-amzn-RequestId': string,
     *      'x-amz-apigw-id': string,
     *      'X-Amzn-Trace-Id': string,
     *      Vary: string,
     *      'Strict-Transport-Security': string
     *  },
     *  response: array{
     *     expiresIn?: int,
     *     restrictedDataToken?: string,
     *     errors?: array{array{
     *          code: string,
     *          message: string,
     *          details: string
     *     }}
     *   }
     * }
     *
     * @link https://github.com/zero-to-prod/spapi-rdt
     * @see  https://developer-docs.amazon.com/sp-api/docs/tokens-api-v2021-03-01-reference
     */
    public function getOrderAddress(string $order_id, array $options = []): array;

    /**
     * Creates a Restricted Data Token.
     *
     * @param  string  $order_id      Amazon Order ID
     * @param  array   $dataElements  `['buyerInfo']`
     * @param  array   $options       Merge curl options
     *
     * @return array{
     *  info: array{
     *      url: string,
     *      content_type: string,
     *      http_code: int,
     *      header_size: int,
     *      request_size: int,
     *      filetime: int,
     *      ssl_verify_result: int,
     *      redirect_count: int,
     *      total_time: float,
     *      namelookup_time: float,
     *      connect_time: float,
     *      pretransfer_time: float,
     *      size_upload: int,
     *      size_download: int,
     *      speed_download: int,
     *      speed_upload: int,
     *      download_content_length: int,
     *      upload_content_length: int,
     *      starttransfer_time: float,
     *      redirect_time: float,
     *      redirect_url: string,
     *      primary_ip: string,
     *      certinfo: array,
     *      primary_port: int,
     *      local_ip: string,
     *      local_port: int,
     *      http_version: int,
     *      protocol: int,
     *      ssl_verifyresult: int,
     *      scheme: string,
     *      appconnect_time_us: int,
     *      connect_time_us: int,
     *      namelookup_time_us: int,
     *      pretransfer_time_us: int,
     *      redirect_time_us: int,
     *      starttransfer_time_us: int,
     *      total_time_us: int
     *  },
     *  error: string,
     *  headers: array{
     *      Server: string,
     *      Date: string,
     *      Content-Type: string,
     *      Content-Length: string,
     *      Connection: string,
     *      'x-amz-rid': string,
     *      'x-amzn-RateLimit-Limit': string,
     *      'x-amzn-RequestId': string,
     *      'x-amz-apigw-id': string,
     *      'X-Amzn-Trace-Id': string,
     *      Vary: string,
     *      'Strict-Transport-Security': string
     *  },
     *  response: array{
     *     expiresIn?: int,
     *     restrictedDataToken?: string,
     *     errors?: array{array{
     *          code: string,
     *          message: string,
     *          details: string
     *     }}
     *   }
     * }
     *
     * @link https://github.com/zero-to-prod/spapi-rdt
     * @see  https://developer-docs.amazon.com/sp-api/docs/tokens-api-v2021-03-01-reference
     */
    public function getOrderItems(string $order_id, array $dataElements = [], array $options = []): array;

    /**
     * Creates a Restricted Data Token.
     *
     * @param  string  $order_id  Amazon Order ID
     * @param  array   $dataElements
     * @param  array   $options   Merge curl options
     *
     * @return array{
     *  info: array{
     *      url: string,
     *      content_type: string,
     *      http_code: int,
     *      header_size: int,
     *      request_size: int,
     *      filetime: int,
     *      ssl_verify_result: int,
     *      redirect_count: int,
     *      total_time: float,
     *      namelookup_time: float,
     *      connect_time: float,
     *      pretransfer_time: float,
     *      size_upload: int,
     *      size_download: int,
     *      speed_download: int,
     *      speed_upload: int,
     *      download_content_length: int,
     *      upload_content_length: int,
     *      starttransfer_time: float,
     *      redirect_time: float,
     *      redirect_url: string,
     *      primary_ip: string,
     *      certinfo: array,
     *      primary_port: int,
     *      local_ip: string,
     *      local_port: int,
     *      http_version: int,
     *      protocol: int,
     *      ssl_verifyresult: int,
     *      scheme: string,
     *      appconnect_time_us: int,
     *      connect_time_us: int,
     *      namelookup_time_us: int,
     *      pretransfer_time_us: int,
     *      redirect_time_us: int,
     *      starttransfer_time_us: int,
     *      total_time_us: int
     *  },
     *  error: string,
     *  headers: array{
     *      Server: string,
     *      Date: string,
     *      Content-Type: string,
     *      Content-Length: string,
     *      Connection: string,
     *      'x-amz-rid': string,
     *      'x-amzn-RateLimit-Limit': string,
     *      'x-amzn-RequestId': string,
     *      'x-amz-apigw-id': string,
     *      'X-Amzn-Trace-Id': string,
     *      Vary: string,
     *      'Strict-Transport-Security': string
     *  },
     *  response: array{
     *     expiresIn?: int,
     *     restrictedDataToken?: string,
     *     errors?: array{array{
     *          code: string,
     *          message: string,
     *          details: string
     *     }}
     *   }
     * }
     *
     * @link https://github.com/zero-to-prod/spapi-rdt
     * @see  https://developer-docs.amazon.com/sp-api/docs/tokens-api-v2021-03-01-reference
     */
    public function getOrderItemsBuyerInfo(string $order_id, array $dataElements = [], array $options = []): array;
}