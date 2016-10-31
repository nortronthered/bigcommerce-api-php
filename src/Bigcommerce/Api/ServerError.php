<?php

namespace Bigcommerce\Api;

/**
 * Raised when a server error (500+) is returned from the API.
 */
class ServerError extends Error
{
    public function __toString()
    {
        return "Client Error ({$this->code}): " . $this->message;
    }
}
