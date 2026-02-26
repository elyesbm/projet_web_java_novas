<?php

namespace App\Exception;

class AiApiException extends \RuntimeException
{
    /**
     * @param array<string, mixed>|null $providerResponse
     */
    public function __construct(
        string $message,
        private int $httpStatus = 503,
        private ?array $providerResponse = null,
        private ?string $rawResponse = null,
        ?\Throwable $previous = null
    ) {
        parent::__construct($message, 0, $previous);
    }

    public function getHttpStatus(): int
    {
        return $this->httpStatus;
    }

    /**
     * @return array<string, mixed>|null
     */
    public function getProviderResponse(): ?array
    {
        return $this->providerResponse;
    }

    public function getRawResponse(): ?string
    {
        return $this->rawResponse;
    }
}

