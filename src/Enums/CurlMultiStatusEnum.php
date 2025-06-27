<?php

declare(strict_types=1);

namespace Curl\Enums;

use Curl\Exceptions\InvalidConstantException;

enum CurlMultiStatusEnum
{
    /**
     * An easy handle already added to a multi handle was attempted to get added a second time.
     * @link https://www.php.net/manual/en/function.curl-multi-exec.php
     * @link https://curl.haxx.se/libcurl/c/libcurl-errors.html
     */
    case CURLM_ADDED_ALREADY;

    /**
     * An easy handle was not good/valid. It could mean that it isn't an easy handle at all,
     * or possibly that the handle already is in use by this or another multi handle.
     * @link https://www.php.net/manual/en/function.curl-multi-exec.php
     * @link https://curl.haxx.se/libcurl/c/libcurl-errors.html
     */
    case CURLM_BAD_EASY_HANDLE;

    /**
     * The passed-in handle is not a valid CURLM handle.
     * @link https://www.php.net/manual/en/function.curl-multi-exec.php
     * @link https://curl.haxx.se/libcurl/c/libcurl-errors.html
     */
    case CURLM_BAD_HANDLE;

    /**
     * This is not really an error. It means you should call {@see curl_multi_exec()} again without doing select() or similar in between.
     * Before version 7.20.0 this could be returned by {@see curl_multi_exec()}, but in later versions this return code is never used.
     * @link https://www.php.net/manual/en/function.curl-multi-exec.php
     * @link https://curl.haxx.se/libcurl/c/libcurl-errors.html
     */
    case CURLM_CALL_MULTI_PERFORM;

    /**
     * libcurl' internal error.
     * @link https://www.php.net/manual/en/function.curl-multi-exec.php
     * @link https://curl.haxx.se/libcurl/c/libcurl-errors.html
     */
    case CURLM_INTERNAL_ERROR;

    /**
     * Things are fine.
     * @link https://www.php.net/manual/en/function.curl-multi-exec.php
     * @link https://curl.haxx.se/libcurl/c/libcurl-errors.html
     */
    case CURLM_OK;

    /**
     * Out of memory error.
     * @link https://www.php.net/manual/en/function.curl-multi-exec.php
     * @link https://curl.haxx.se/libcurl/c/libcurl-errors.html
     */
    case CURLM_OUT_OF_MEMORY;

    public function value(): int
    {
        return match ($this) {
            self::CURLM_ADDED_ALREADY => CURLM_ADDED_ALREADY,
            self::CURLM_BAD_EASY_HANDLE => CURLM_BAD_EASY_HANDLE,
            self::CURLM_BAD_HANDLE => CURLM_BAD_HANDLE,
            self::CURLM_CALL_MULTI_PERFORM => CURLM_CALL_MULTI_PERFORM,
            self::CURLM_INTERNAL_ERROR => CURLM_INTERNAL_ERROR,
            self::CURLM_OK => CURLM_OK,
            self::CURLM_OUT_OF_MEMORY => CURLM_OUT_OF_MEMORY,
        };
    }

    public function errorString(): string
    {
        return \curl_multi_strerror($this->value());
    }

    /**
     * Given a CURLM_* status code, return the enum.
     *
     * @param int $curlMStatus A <b>CURLM_*</b> status code.
     * @return self
     * @throws InvalidConstantException
     */
    public static function fromConstant(int $curlMStatus): self
    {
        return match ($curlMStatus) {
            CURLM_ADDED_ALREADY => self::CURLM_ADDED_ALREADY,
            CURLM_BAD_EASY_HANDLE => self::CURLM_BAD_EASY_HANDLE,
            CURLM_BAD_HANDLE => self::CURLM_BAD_HANDLE,
            CURLM_CALL_MULTI_PERFORM => self::CURLM_CALL_MULTI_PERFORM,
            CURLM_INTERNAL_ERROR => self::CURLM_INTERNAL_ERROR,
            CURLM_OK => self::CURLM_OK,
            CURLM_OUT_OF_MEMORY => self::CURLM_OUT_OF_MEMORY,
            default => throw new InvalidConstantException(),
        };
    }
}
