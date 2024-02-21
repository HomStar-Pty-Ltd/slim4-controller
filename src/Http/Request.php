<?php

namespace Homstar\Slim4Controller\Http;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ServerRequestFactoryInterface as SlimRequest;

/**
 * Request
 *
 * This class represents an HTTP request. It manages
 * the request method, URI, headers, cookies, and body
 * according to the PRS-7 standard.
 *
 * @link https://github.com/php-fig/http-message/blob/master/src/MessageInterface.php
 * @link https://github.com/php-fig/http-message/blob/master/src/RequestInterface.php
 * @link https://github.com/php-fig/http-message/blob/master/src/ServerRequestInterface.php
 */
class Request extends SlimRequest implements ServerRequestInterface
{
    /**
     * Get a cookie, or a default value if not set
     *
     * @param string $name Name of the cookie
     * @param string $defaultValue If none exist, use this value
     * @return string
     */
    public function getCookie($name, $defaultValue=null)
    {
        $cookies = $this->getCookieParams();

        return array_key_exists($name, $cookies) ? $cookies[$name] : $defaultValue;
    }

	public function getServerParams() {}
	public function getCookieParams() {}
	public function withCookieParams(array $cookies) {}
	public function getQueryParams() {}
	public function withQueryParams(array $query) {}
	public function getUploadedFiles() {}
	public function withUploadedFiles(array $uploadedFiles) {}
	public function getParsedBody() {}
	public function withParsedBody($data) {}
	public function getAttributes() {}
	public function getAttribute($name, $default=null) {}
	public function withAttribute($name, $value) {}
	public function withoutAttribute($name) {}
	public function getRequestTarget() {}
	public function withRequestTarget($requestTarget) {}
	public function getMethod() {}
	public function withMethod($method) {}
	public function getUri() {}
	public function withUri($uri, $preserveHost=false) {}
	public function getProtocolVersion() {}
	public function withProtocolVersion($version) {}
	public function getHeaders() {}
	public function hasHeader($name) {}
	public function getHeader($name) {}
	public function getHeaderLine($name) {}
	public function withHeader($name, $value) {}
	public function withAddedHeader($name, $value) {}
	public function withoutHeader($name) {}
	public function getBody() {}
	public function withBody($body) {}
	public function getRequest() {}
}
