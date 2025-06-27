<?php

declare(strict_types=1);

namespace Curl\Enums;

enum CurlMultiOptionEnum
{

    /**
     * Pass a number that specifies the chunk length threshold for pipelining in bytes.
     * @link https://www.php.net/manual/en/function.curl-multi-setopt.php
     * @since 7.0.7
     */
    case CHUNK_LENGTH_PENALTY_SIZE;

    /**
     * Pass a number that specifies the size threshold for pipelining penalty in bytes.
     * @link https://www.php.net/manual/en/function.curl-multi-setopt.php
     * @since 7.0.7
     */
    case CONTENT_LENGTH_PENALTY_SIZE;

    /**
     * @since 8.2
     */
    case MAX_CONCURRENT_STREAMS;

    /**
     * Pass a number that specifies the maximum number of connections to a single host.
     * @link https://www.php.net/manual/en/function.curl-multi-setopt.php
     * @since 7.0.7
     */
    case MAX_HOST_CONNECTIONS;

    /**
     * Pass a number that specifies the maximum number of requests in a pipeline.
     * @link https://www.php.net/manual/en/function.curl-multi-setopt.php
     * @since 7.0.7
     */
    case MAX_PIPELINE_LENGTH;

    /**
     * Pass a number that specifies the maximum number of simultaneously open connections.
     * @link https://www.php.net/manual/en/function.curl-multi-setopt.php
     * @since 7.0.7
     */
    case MAX_TOTAL_CONNECTIONS;

    /**
     * Pass a number that will be used as the maximum amount of simultaneously open connections that libcurl may cache.
     * By default the size will be enlarged to fit four times the number of handles added via {@see curl_multi_add_handle()}.
     * When the cache is full, curl closes the oldest one in the cache to prevent the number of open connections from increasing.
     * @link https://www.php.net/manual/en/function.curl-multi-setopt.php
     * @since 5.5
     */
    case MAXCONNECTS;

    /**
     * As of cURL 7.43.0, the value is a bitmask.
     * Pass 1 to enable or 0 to disable.
     * Enabling pipelining on a multi handle will make it attempt to perform HTTP Pipelining as far as possible for transfers
     * using this handle. This means that if you add a second request that can use an already existing connection,
     * the second request will be "piped" on the same connection.
     * Pass 2 to try to multiplex the new transfer over an existing HTTP/2 connection if possible.
     * Pass 3 instructs cURL to ask for pipelining and multiplexing independently of each other.
     * As of cURL 7.62.0, setting the pipelining bit has no effect.
     * Instead of integer literals, you can also use the <b>CURLPIPE_*</b> constants if available.
     * @link https://www.php.net/manual/en/function.curl-multi-setopt.php
     * @since 5.5
     */
    case PIPELINING;

    /**
     * Pass a <em>callable</em> that will be registered to handle server pushes and should have the following signature:
     *  <b>parent_ch</b>
     *   The parent cURL handle (the request the client made).
     *  <b>pushed_ch</b>
     *   A new cURL handle for the pushed request.
     *  <b>headers</b>
     *   The push promise headers.
     *   The push function is supposed to return either <b>CURL_PUSH_OK</b> if it can handle the push,
     *   or <b>CURL_PUSH_DENY</b> to reject it.
     * @link https://www.php.net/manual/en/function.curl-multi-setopt.php
     * @since 7.1
     */
    case PUSHFUNCTION;

    public function value(): int
    {
        return match ($this) {
            self::CHUNK_LENGTH_PENALTY_SIZE => CURLMOPT_CHUNK_LENGTH_PENALTY_SIZE,
            self::CONTENT_LENGTH_PENALTY_SIZE => CURLMOPT_CONTENT_LENGTH_PENALTY_SIZE,
            self::MAX_CONCURRENT_STREAMS => CURLMOPT_MAX_CONCURRENT_STREAMS,
            self::MAX_HOST_CONNECTIONS => CURLMOPT_MAX_HOST_CONNECTIONS,
            self::MAX_PIPELINE_LENGTH => CURLMOPT_MAX_PIPELINE_LENGTH,
            self::MAX_TOTAL_CONNECTIONS => CURLMOPT_MAX_TOTAL_CONNECTIONS,
            self::MAXCONNECTS => CURLMOPT_MAXCONNECTS,
            self::PIPELINING => CURLMOPT_PIPELINING,
            self::PUSHFUNCTION => CURLMOPT_PUSHFUNCTION,
        };
    }
}
