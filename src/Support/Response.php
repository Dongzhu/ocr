<?php

namespace Godruoyi\OCR\Support;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Psr7\Response as GuzzleHttpResponse;

class Response extends GuzzleHttpResponse
{
    /**
     * Create response from psr response.
     *
     * @param  GuzzleHttpResponse $response
     *
     * @return self
     */
    public static function createFromGuzzleHttpResponse(GuzzleHttpResponse $response)
    {
        return new static(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody(),
            $response->getProtocolVersion(),
            $response->getReasonPhrase()
        );
    }

    /**
     * Response to array
     *
     * @return array
     */
    public function toArray(): array
    {
        $this->getBody()->rewind();
        $body = (string) $this->getBody();

        if (empty($body)) {
            return [];
        }

        $response = json_decode($body, true);

        if (json_last_error() != JSON_ERROR_NONE) {
            return [];
        }

        return $response;
    }

    /**
     * Response to json string.
     *
     * @return string
     */
    public function toJson()
    {
        $this->getBody()->rewind();

        return (string) $this->getBody();
    }
}