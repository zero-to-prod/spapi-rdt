<?php

namespace Zerotoprod\SpapiRdt\Support\Testing;

class SpapiResponseFactory
{
    public static function ok(array $merge = []): array
    {
        return array_merge([
            "info" => [
                "url" => "https://sellingpartnerapi-na.amazon.com/tokens/2021-03-01/restrictedDataToken",
                "content_type" => "application/json",
                "http_code" => 200,
                "header_size" => 516,
                "request_size" => 859,
                "filetime" => -1,
                "ssl_verify_result" => 0,
                "redirect_count" => 0,
                "total_time" => 0.514489,
                "namelookup_time" => 0.189293,
                "connect_time" => 0.275669,
                "pretransfer_time" => 0.376331,
                "size_upload" => 211,
                "size_download" => 1787,
                "speed_download" => 3476,
                "speed_upload" => 410,
                "download_content_length" => -1,
                "upload_content_length" => 211,
                "starttransfer_time" => 0.51441,
                "redirect_time" => 0,
                "redirect_url" => "",
                "primary_ip" => "44.215.139.122",
                "certinfo" => [],
                "primary_port" => 443,
                "local_ip" => "172.20.0.2",
                "local_port" => 59862,
            ],
            "error" => "",
            "headers" => [
                "Server" => "Server",
                "Date" => "Thu, 13 Feb 2025 15:20:05 GMT",
                "Content-Type" => "application/json",
                "Transfer-Encoding" => "chunked",
                "Connection" => "keep-alive",
                "X-Amz-Rid" => "8CGZF0YCV8JN3TADEKNR",
                "X-Amzn-Ratelimit-Limit" => "1.0",
                "X-Amzn-Requestid" => "0b1f9efd-b82e-4ce5-a440-8eb12dc3e086",
                "X-Amz-Apigw-Id" => "OPF0b1f9efdb82e",
                "X-Amzn-Trace-Id" => "Root=1-67ae0da5-0b1f9efdb82e4ce5",
                "Content-Encoding" => "gzip",
                "Vary" => "accept-encoding,Content-Type,Accept-Encoding,User-Agent",
                "Strict-Transport-Security" => "max-age=47474747; includeSubDomains; preload",
            ],
            "response" => [
                "expiresIn" => 3600,
                "restrictedDataToken" => "restrictedDataToken",
            ]
        ], $merge);
    }

    public static function error(array $merge = []): array
    {
        return array_merge([
            "info" => [
                "url" => "https://sellingpartnerapi-na.amazon.com/tokens/2021-03-01/restrictedDataToken",
                "content_type" => "application/json",
                "http_code" => 403,
                "header_size" => 481,
                "request_size" => 476,
                "filetime" => -1,
                "ssl_verify_result" => 0,
                "redirect_count" => 0,
                "total_time" => 0.387201,
                "namelookup_time" => 0.133997,
                "connect_time" => 0.208516,
                "pretransfer_time" => 0.295061,
                "size_upload" => 159,
                "size_download" => 206,
                "speed_download" => 532,
                "speed_upload" => 410,
                "download_content_length" => 206,
                "upload_content_length" => 159,
                "starttransfer_time" => 0.387106,
                "redirect_time" => 0,
                "redirect_url" => "",
                "primary_ip" => "44.215.139.122",
                "certinfo" => [],
                "primary_port" => 443,
                "local_ip" => "172.26.0.2",
                "local_port" => 51460,
                "http_version" => 2,
                "protocol" => 2,
                "ssl_verifyresult" => 0,
                "scheme" => "https",
                "appconnect_time_us" => 294838,
                "connect_time_us" => 208516,
                "namelookup_time_us" => 133997,
                "pretransfer_time_us" => 295061,
                "redirect_time_us" => 0,
                "starttransfer_time_us" => 387106,
                "total_time_us" => 387201,
            ],
            "error" => "",
            "headers" => [
                "Server" => "Server",
                "Date" => "Thu, 13 Feb 2025 01:44:16 GMT",
                "Content-Type" => "application/json",
                "Content-Length" => "206",
                "Connection" => "keep-alive",
                "X-Amz-Rid" => "03Z1QJTB86BH0Y1B67BB",
                "X-Amzn-Requestid" => "e4608cdf-8ca4-4471-9e53-e24c9497d588",
                "X-Amz-Apigw-Id" => "OPFe4608cdf8ca4",
                "X-Amzn-Trace-Id" => "Root=1-67ad4e70-e4608cdf8ca44471",
                "X-Amzn-Errortype" => "AccessDeniedException",
                "Vary" => "Content-Type,Accept-Encoding,User-Agent",
                "Strict-Transport-Security" => "max-age=47474747; includeSubDomains; preload",
            ],
            "response" => [
                "errors" => [
                    [
                        "code" => "Unauthorized",
                        "message" => "Access to requested resource is denied.",
                        "details" => "The access token you provided is revoked, malformed or invalid.",
                    ],
                ],
            ],
        ], $merge);
    }
}