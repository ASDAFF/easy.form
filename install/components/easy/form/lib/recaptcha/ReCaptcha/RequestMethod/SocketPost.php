<?php
/**
 * Copyright (c) 2019 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

namespace ReCaptcha\RequestMethod;

use ReCaptcha\RequestMethod;
use ReCaptcha\RequestParameters;

/**
 * Sends a POST request to the reCAPTCHA service, but makes use of fsockopen()
 * instead of get_file_contents(). This is to account for people who may be on
 * servers where allow_furl_open is disabled.
 */
class SocketPost implements RequestMethod
{
    /**
     * reCAPTCHA service host.
     * @const string
     */
    const RECAPTCHA_HOST = 'www.google.com';

    /**
     * @const string reCAPTCHA service path
     */
    const SITE_VERIFY_PATH = '/recaptcha/api/siteverify';

    /**
     * @const string Bad request error
     */
    const BAD_REQUEST = '{"success": false, "error-codes": ["invalid-request"]}';

    /**
     * @const string Bad response error
     */
    const BAD_RESPONSE = '{"success": false, "error-codes": ["invalid-response"]}';

    /**
     * Socket to the reCAPTCHA service
     * @var Socket
     */
    private $socket;

    /**
     * Constructor
     *
     * @param \ReCaptcha\RequestMethod\Socket $socket optional socket, injectable for testing
     */
    public function __construct(Socket $socket = null)
    {
        if (!is_null($socket)) {
            $this->socket = $socket;
        } else {
            $this->socket = new Socket();
        }
    }

    /**
     * Submit the POST request with the specified parameters.
     *
     * @param RequestParameters $params Request parameters
     * @return string Body of the reCAPTCHA response
     */
    public function submit(RequestParameters $params)
    {
        $errno = 0;
        $errstr = '';

        if (false === $this->socket->fsockopen('ssl://' . self::RECAPTCHA_HOST, 443, $errno, $errstr, 30)) {
            return self::BAD_REQUEST;
        }

        $content = $params->toQueryString();

        $request = "POST " . self::SITE_VERIFY_PATH . " HTTP/1.1\r\n";
        $request .= "Host: " . self::RECAPTCHA_HOST . "\r\n";
        $request .= "Content-Type: application/x-www-form-urlencoded\r\n";
        $request .= "Content-length: " . strlen($content) . "\r\n";
        $request .= "Connection: close\r\n\r\n";
        $request .= $content . "\r\n\r\n";

        $this->socket->fwrite($request);
        $response = '';

        while (!$this->socket->feof()) {
            $response .= $this->socket->fgets(4096);
        }

        $this->socket->fclose();

        if (0 !== strpos($response, 'HTTP/1.1 200 OK')) {
            return self::BAD_RESPONSE;
        }

        $parts = preg_split("#\n\s*\n#Uis", $response);

        return $parts[1];
    }
}
