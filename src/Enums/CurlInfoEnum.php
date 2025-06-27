<?php

declare(strict_types=1);

namespace Curl\Enums;

enum CurlInfoEnum
{
    /**
     * Time in seconds it took from the start until the SSL/SSH connect/handshake to the remote host was completed
     * @link https://php.net/manual/en/function.curl-getinfo.php
     * @since 5.5
     */
    case APPCONNECT_TIME;

    /**
     * Time, in microseconds, it took from the start until the SSL/SSH connect/handshake to the remote host was completed
     * @link https://www.php.net/manual/en/function.curl-getinfo.php
     * @since 7.3
     */
    case APPCONNECT_TIME_T;

    /**
     * Default built-in CA certificate path.
     * @since 8.3
     */
    case CAINFO;

    /**
     * Default built-in CA path string.
     * @since 8.3
     */
    case CAPATH;

    /**
     * TLS certificate chain
     * @link https://php.net/manual/en/function.curl-getinfo.php
     * @since 5.5
     */
    case CERTINFO;

    /**
     * Info on unmet time conditional
     * @link https://php.net/manual/en/function.curl-getinfo.php
     * @since 5.5
     */
    case CONDITION_UNMET;

    /**
     * Time in seconds it took to establish the connection
     * @link https://www.php.net/manual/en/function.curl-getinfo.php
     */
    case CONNECT_TIME;

    /**
     * Total time taken, in microseconds, from the start until the connection to the remote host (or proxy) was completed
     * @link https://www.php.net/manual/en/function.curl-getinfo.php
     * @since 7.3
     */
    case CONNECT_TIME_T;

    /**
     * Content length of download, read from <em>Content-Length: field</em>
     * @link https://www.php.net/manual/en/function.curl-getinfo.php
     */
    case CONTENT_LENGTH_DOWNLOAD;

    /**
     * The content-length of the download. This is the value read from the Content-Type: field. -1 if the size isn't known
     * @link https://www.php.net/manual/en/function.curl-getinfo.php
     * @since 7.3
     */
    case CONTENT_LENGTH_DOWNLOAD_T;

    /**
     * Specified size of upload
     * @link https://www.php.net/manual/en/function.curl-getinfo.php
     */
    case CONTENT_LENGTH_UPLOAD;

    /**
     * The specified size of the upload. -1 if the size isn't known
     * @link https://www.php.net/manual/en/function.curl-getinfo.php
     * @since 7.3
     */
    case CONTENT_LENGTH_UPLOAD_T;

    /**
     * Content-Type: of the requested document. <b>NULL</b> indicates server did not send valid Content-Type: header
     * @link https://www.php.net/manual/en/function.curl-getinfo.php
     */
    case CONTENT_TYPE;

    /**
     * All known cookies
     * @link https://php.net/manual/en/function.curl-getinfo.php
     * @since 5.5
     */
    case COOKIELIST;

    /**
     * Unprocessed protocol data received from the peer. Even if the data is encoded or compressed, it is not provided decoded nor decompressed to this callback.
     * @since 8.4
     */
    case DATA_IN;

    /**
     * Protocol data sent to the peer.
     * @since 8.4
     */
    case DATA_OUT;

    /**
     * Get the last used HTTP method.
     * @since 8.2
     */
    case EFFECTIVE_METHOD;

    /**
     * Last effective URL
     * @link https://www.php.net/manual/en/function.curl-getinfo.php
     */
    case EFFECTIVE_URL;

    /**
     * Remote time of the retrieved document, with the <b>CURLOPT_FILETIME</b> enabled;
     * if -1 is returned the time of the document is unknown
     * @link https://www.php.net/manual/en/function.curl-getinfo.php
     */
    case FILETIME;

    /**
     * Remote time of the retrieved document (as Unix timestamp),
     * an alternative to <b>CURLINFO_FILETIME</b> to allow systems with 32 bit long variables to extract dates
     * outside of the 32bit timestamp range
     * @link https://www.php.net/manual/en/function.curl-getinfo.php
     * @since 7.3
     */
    case FILETIME_T;

    /**
     * Entry path in FTP server
     * @link https://php.net/manual/en/function.curl-getinfo.php
     * @since 5.5
     */
    case FTP_ENTRY_PATH;

    /**
     * Header (or header-like) data received from the peer.
     * @since 8.4
     */
    case HEADER_IN;

    /**
     * <b>TRUE</b> to track the handle's request string
     * @link https://www.php.net/manual/en/function.curl-getinfo.php
     * @since 5.1.3
     */
    case HEADER_OUT;

    /**
     * Total size of all headers received
     * @link https://www.php.net/manual/en/function.curl-getinfo.php
     */
    case HEADER_SIZE;

    /**
     * As of PHP 5.5.0 and cURL 7.10.8, this is a legacy alias of <b>CURLINFO_RESPONSE_CODE</b>.
     * @link https://www.php.net/manual/en/function.curl-getinfo.php
     */
    case HTTP_CODE;

    /**
     * The CONNECT response code
     * @link https://php.net/manual/en/function.curl-getinfo.php
     * @since 5.5
     */
    case HTTP_CONNECTCODE;

    /**
     * The version used in the last HTTP connection. The return value will be one of the defined
     * @link https://www.php.net/manual/en/function.curl-getinfo.php
     * @since 7.3
     */
    case HTTP_VERSION;

    /**
     * Bitmask indicating the authentication method(s) available according to the previous response
     * @link https://php.net/manual/en/function.curl-getinfo.php
     * @since 5.5
     */
    case HTTPAUTH_AVAIL;

    /**
     * The last enum value in the underlying CURLINFO enum in libcurl
     * @link https://php.net/manual/en/curl.constants.php
     */
    case LASTONE;

    /**
     * Local (source) IP address of the most recent connection
     * @link https://www.php.net/manual/en/function.curl-getinfo.php
     * @since 5.4.7
     */
    case LOCAL_IP;

    /**
     * Local (source) port of the most recent connection
     * @link https://www.php.net/manual/en/function.curl-getinfo.php
     * @since 5.4.7
     */
    case LOCAL_PORT;

    /**
     * Time in seconds until name resolving was complete
     * @link https://www.php.net/manual/en/function.curl-getinfo.php
     */
    case NAMELOOKUP_TIME;

    /**
     * Time in microseconds from the start until the name resolving was completed
     * @link https://www.php.net/manual/en/function.curl-getinfo.php
     * @since 7.3
     */
    case NAMELOOKUP_TIME_T;

    /**
     * Number of connections curl had to create to achieve the previous transfer
     * @link https://php.net/manual/en/function.curl-getinfo.php
     * @since 5.5
     */
    case NUM_CONNECTS;

    /**
     * Errno from a connect failure. The number is OS and system specific.
     * @link https://php.net/manual/en/function.curl-getinfo.php
     * @since 5.5
     */
    case OS_ERRNO;

    /**
     * Time it took from the start until the last byte is sent, in microseconds.
     * @since 8.4
     */
    case POSTTRANSFER_TIME_T;

    /**
     * Time in seconds from start until just before file transfer begins
     * @link https://www.php.net/manual/en/function.curl-getinfo.php
     */
    case PRETRANSFER_TIME;

    /**
     * Time taken from the start until the file transfer is just about to begin, in microseconds
     * @link https://www.php.net/manual/en/function.curl-getinfo.php
     * @since 7.3
     */
    case PRETRANSFER_TIME_T;

    /**
     * IP address of the most recent connection
     * @link https://www.php.net/manual/en/function.curl-getinfo.php
     * @since 5.4.7
     */
    case PRIMARY_IP;

    /**
     * Destination port of the most recent connection
     * @link https://www.php.net/manual/en/function.curl-getinfo.php
     * @since 5.4.7
     */
    case PRIMARY_PORT;

    /**
     * Private data associated with this cURL handle, previously set with the <b>CURLOPT_PRIVATE</b> option of {@see curl_getinfo()}
     * @link https://www.php.net/manual/en/function.curl-getinfo.php
     * @since 5.2.4
     */
    case PRIVATE;

    /**
     * The protocol used in the last HTTP connection. The returned value will be exactly one of the <b>CURLPROTO_*</b> values
     * @link https://www.php.net/manual/en/function.curl-getinfo.php
     * @since 7.3
     */
    case PROTOCOL;

    /**
     * The detailed (SOCKS) proxy error code when the most recent transfer returned a <b>CURLE_PROXY</b> error. The
     * returned value will be exactly one of the <b>CURLPX_*</b> values. The error code will be <b>CURLPX_OK</b> if no
     * response code was available.
     * @since 8.2
     */
    case PROXY_ERROR;

    /**
     * The result of the certificate verification that was requested (using the <b>CURLOPT_PROXY_SSL_VERIFYPEER</b> option).
     * Only used for HTTPS proxies
     * @link https://www.php.net/manual/en/function.curl-getinfo.php
     * @since 7.3
     */
    case PROXY_SSL_VERIFYRESULT;

    /**
     * Bitmask indicating the proxy authentication method(s) available according to the previous response
     * @link https://php.net/manual/en/function.curl-getinfo.php
     * @since 5.5
     */
    case PROXYAUTH_AVAIL;

    /**
     * Number of redirects, with the <b>CURLOPT_FOLLOWLOCATION</b> option enabled
     * @link https://www.php.net/manual/en/function.curl-getinfo.php
     */
    case REDIRECT_COUNT;

    /**
     * Time in seconds of all redirection steps before final transaction was started,
     * with the <b>CURLOPT_FOLLOWLOCATION</b> option enabled
     * @link https://www.php.net/manual/en/function.curl-getinfo.php
     */
    case REDIRECT_TIME;

    /**
     * Total time, in microseconds,
     * it took for all redirection steps include name lookup, connect, pretransfer and transfer before final transaction was started
     * @link https://www.php.net/manual/en/function.curl-getinfo.php
     * @since 7.3
     */
    case REDIRECT_TIME_T;

    /**
     * With the <b>CURLOPT_FOLLOWLOCATION</b> option disabled:
     *   redirect URL found in the last transaction, that should be requested manually next.
     * With the <b>CURLOPT_FOLLOWLOCATION</b> option enabled:
     *   this is empty. The redirect URL in this case is available in <b>CURLINFO_EFFECTIVE_URL</b>
     * @link https://www.php.net/manual/en/function.curl-getinfo.php
     * @since 5.3.7
     */
    case REDIRECT_URL;

    /**
     * The <b>Referer</b> header.
     * @since 8.2
     */
    case REFERER;

    /**
     * Total size of issued requests, currently only for HTTP requests
     * @link https://www.php.net/manual/en/function.curl-getinfo.php
     */
    case REQUEST_SIZE;

    /**
     * The last response code
     * @link https://php.net/manual/en/function.curl-getinfo.php
     * @since 5.5
     */
    case RESPONSE_CODE;

    /**
     * The information from the Retry-After header, or zero if there was no valid header.
     * @since 8.2
     */
    case RETRY_AFTER;

    /**
     * Next RTSP client CSeq
     * @link https://php.net/manual/en/function.curl-getinfo.php
     * @since 5.5
     */
    case RTSP_CLIENT_CSEQ;

    /**
     * Recently received CSeq
     * @link https://php.net/manual/en/function.curl-getinfo.php
     * @since 5.5
     */
    case RTSP_CSEQ_RECV;

    /**
     * Next RTSP server CSeq
     * @link https://php.net/manual/en/function.curl-getinfo.php
     * @since 5.5
     */
    case RTSP_SERVER_CSEQ;

    /**
     * RTSP session ID
     * @link https://php.net/manual/en/function.curl-getinfo.php
     * @since 5.5
     */
    case RTSP_SESSION_ID;

    /**
     * The URL scheme used for the most recent connection
     * @link https://www.php.net/manual/en/function.curl-getinfo.php
     * @since 7.3
     */
    case SCHEME;

    /**
     * Total number of bytes downloaded
     * @link https://www.php.net/manual/en/function.curl-getinfo.php
     */
    case SIZE_DOWNLOAD;

    /**
     * Total number of bytes that were downloaded.
     * The number is only for the latest transfer and will be reset again for each new transfer
     * @link https://www.php.net/manual/en/function.curl-getinfo.php
     * @since 7.3
     */
    case SIZE_DOWNLOAD_T;

    /**
     * Total number of bytes uploaded
     * @link https://www.php.net/manual/en/function.curl-getinfo.php
     */
    case SIZE_UPLOAD;

    /**
     * Total number of bytes that were uploaded
     * @link https://www.php.net/manual/en/function.curl-getinfo.php
     * @since 7.3
     */
    case SIZE_UPLOAD_T;

    /**
     * Average download speed
     * @link https://www.php.net/manual/en/function.curl-getinfo.php
     */
    case SPEED_DOWNLOAD;

    /**
     * The average download speed in bytes/second that curl measured for the complete download
     * @link https://www.php.net/manual/en/function.curl-getinfo.php
     * @since 7.3
     */
    case SPEED_DOWNLOAD_T;

    /**
     * Average upload speed
     * @link https://www.php.net/manual/en/function.curl-getinfo.php
     */
    case SPEED_UPLOAD;

    /**
     * The average upload speed in bytes/second that curl measured for the complete upload
     * @link https://www.php.net/manual/en/function.curl-getinfo.php
     * @since 7.3
     */
    case SPEED_UPLOAD_T;

    /**
     * SSL/TLS (binary) data received from the peer.
     * @since 8.4
     */
    case SSL_DATA_IN;

    /**
     * SSL/TLS (binary) data sent to the peer.
     * @since 8.4
     */
    case SSL_DATA_OUT;

    /**
     * OpenSSL crypto-engines supported
     * @link https://php.net/manual/en/function.curl-getinfo.php
     * @since 5.5
     */
    case SSL_ENGINES;

    /**
     * Result of SSL certification verification requested by setting <b>CURLOPT_SSL_VERIFYPEER</b>
     * @link https://www.php.net/manual/en/function.curl-getinfo.php
     */
    case SSL_VERIFYRESULT;

    /**
     * Time in seconds until the first byte is about to be transferred
     * @link https://www.php.net/manual/en/function.curl-getinfo.php
     */
    case STARTTRANSFER_TIME;

    /**
     * Time, in microseconds, it took from the start until the first byte is received
     * @link https://www.php.net/manual/en/function.curl-getinfo.php
     * @since 7.3
     */
    case STARTTRANSFER_TIME_T;

    /**
     * Informational text.
     * @since 8.4
     */
    case TEXT;

    /**
     * Total transaction time in seconds for last transfer
     * @link https://www.php.net/manual/en/function.curl-getinfo.php
     */
    case TOTAL_TIME;

    /**
     * Total time in microseconds for the previous transfer, including name resolving, TCP connect etc.
     * @link https://www.php.net/manual/en/function.curl-getinfo.php
     * @since 7.3
     */
    case TOTAL_TIME_T;

    public function value(): int
    {
        return match ($this) {
            self::APPCONNECT_TIME => CURLINFO_APPCONNECT_TIME,
            self::APPCONNECT_TIME_T => CURLINFO_APPCONNECT_TIME_T,
            self::CAINFO => CURLINFO_CAINFO,
            self::CAPATH => CURLINFO_CAPATH,
            self::CERTINFO => CURLINFO_CERTINFO,
            self::CONDITION_UNMET => CURLINFO_CONDITION_UNMET,
            self::CONNECT_TIME => CURLINFO_CONNECT_TIME,
            self::CONNECT_TIME_T => CURLINFO_CONNECT_TIME_T,
            self::CONTENT_LENGTH_DOWNLOAD => CURLINFO_CONTENT_LENGTH_DOWNLOAD,
            self::CONTENT_LENGTH_DOWNLOAD_T => CURLINFO_CONTENT_LENGTH_DOWNLOAD_T,
            self::CONTENT_LENGTH_UPLOAD => CURLINFO_CONTENT_LENGTH_UPLOAD,
            self::CONTENT_LENGTH_UPLOAD_T => CURLINFO_CONTENT_LENGTH_UPLOAD_T,
            self::CONTENT_TYPE => CURLINFO_CONTENT_TYPE,
            self::COOKIELIST => CURLINFO_COOKIELIST,
            self::DATA_IN => CURLINFO_DATA_IN,
            self::DATA_OUT => CURLINFO_DATA_OUT,
            self::EFFECTIVE_METHOD => CURLINFO_EFFECTIVE_METHOD,
            self::EFFECTIVE_URL => CURLINFO_EFFECTIVE_URL,
            self::FILETIME => CURLINFO_FILETIME,
            self::FILETIME_T => CURLINFO_FILETIME_T,
            self::FTP_ENTRY_PATH => CURLINFO_FTP_ENTRY_PATH,
            self::HEADER_IN => CURLINFO_HEADER_IN,
            self::HEADER_OUT => CURLINFO_HEADER_OUT,
            self::HEADER_SIZE => CURLINFO_HEADER_SIZE,
            self::HTTP_CODE => CURLINFO_HTTP_CODE,
            self::HTTP_CONNECTCODE => CURLINFO_HTTP_CONNECTCODE,
            self::HTTP_VERSION => CURLINFO_HTTP_VERSION,
            self::HTTPAUTH_AVAIL => CURLINFO_HTTPAUTH_AVAIL,
            self::LASTONE => CURLINFO_LASTONE,
            self::LOCAL_IP => CURLINFO_LOCAL_IP,
            self::LOCAL_PORT => CURLINFO_LOCAL_PORT,
            self::NAMELOOKUP_TIME => CURLINFO_NAMELOOKUP_TIME,
            self::NAMELOOKUP_TIME_T => CURLINFO_NAMELOOKUP_TIME_T,
            self::NUM_CONNECTS => CURLINFO_NUM_CONNECTS,
            self::OS_ERRNO => CURLINFO_OS_ERRNO,
            self::POSTTRANSFER_TIME_T => CURLINFO_POSTTRANSFER_TIME_T,
            self::PRETRANSFER_TIME => CURLINFO_PRETRANSFER_TIME,
            self::PRETRANSFER_TIME_T => CURLINFO_PRETRANSFER_TIME_T,
            self::PRIMARY_IP => CURLINFO_PRIMARY_IP,
            self::PRIMARY_PORT => CURLINFO_PRIMARY_PORT,
            self::PRIVATE => CURLINFO_PRIVATE,
            self::PROTOCOL => CURLINFO_PROTOCOL,
            self::PROXY_ERROR => CURLINFO_PROXY_ERROR,
            self::PROXY_SSL_VERIFYRESULT => CURLINFO_PROXY_SSL_VERIFYRESULT,
            self::PROXYAUTH_AVAIL => CURLINFO_PROXYAUTH_AVAIL,
            self::REDIRECT_COUNT => CURLINFO_REDIRECT_COUNT,
            self::REDIRECT_TIME => CURLINFO_REDIRECT_TIME,
            self::REDIRECT_TIME_T => CURLINFO_REDIRECT_TIME_T,
            self::REDIRECT_URL => CURLINFO_REDIRECT_URL,
            self::REFERER => CURLINFO_REFERER,
            self::REQUEST_SIZE => CURLINFO_REQUEST_SIZE,
            self::RESPONSE_CODE => CURLINFO_RESPONSE_CODE,
            self::RETRY_AFTER => CURLINFO_RETRY_AFTER,
            self::RTSP_CLIENT_CSEQ => CURLINFO_RTSP_CLIENT_CSEQ,
            self::RTSP_CSEQ_RECV => CURLINFO_RTSP_CSEQ_RECV,
            self::RTSP_SERVER_CSEQ => CURLINFO_RTSP_SERVER_CSEQ,
            self::RTSP_SESSION_ID => CURLINFO_RTSP_SESSION_ID,
            self::SCHEME => CURLINFO_SCHEME,
            self::SIZE_DOWNLOAD => CURLINFO_SIZE_DOWNLOAD,
            self::SIZE_DOWNLOAD_T => CURLINFO_SIZE_DOWNLOAD_T,
            self::SIZE_UPLOAD => CURLINFO_SIZE_UPLOAD,
            self::SIZE_UPLOAD_T => CURLINFO_SIZE_UPLOAD_T,
            self::SPEED_DOWNLOAD => CURLINFO_SPEED_DOWNLOAD,
            self::SPEED_DOWNLOAD_T => CURLINFO_SPEED_DOWNLOAD_T,
            self::SPEED_UPLOAD => CURLINFO_SPEED_UPLOAD,
            self::SPEED_UPLOAD_T => CURLINFO_SPEED_UPLOAD_T,
            self::SSL_DATA_IN => CURLINFO_SSL_DATA_IN,
            self::SSL_DATA_OUT => CURLINFO_SSL_DATA_OUT,
            self::SSL_ENGINES => CURLINFO_SSL_ENGINES,
            self::SSL_VERIFYRESULT => CURLINFO_SSL_VERIFYRESULT,
            self::STARTTRANSFER_TIME => CURLINFO_STARTTRANSFER_TIME,
            self::STARTTRANSFER_TIME_T => CURLINFO_STARTTRANSFER_TIME_T,
            self::TEXT => CURLINFO_TEXT,
            self::TOTAL_TIME => CURLINFO_TOTAL_TIME,
            self::TOTAL_TIME_T => CURLINFO_TOTAL_TIME_T,
        };
    }
}
