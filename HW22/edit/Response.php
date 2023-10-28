<?php

class Response
{
    private string $content;
    private int $statusCode;
    private string $contentType;

    /**
     * @param string $content
     * @param int $statusCode
     * @param string $contentType
     */
    public function __construct(string $content = '', int $statusCode = 200, string $contentType = 'text/html')
    {
        $this->setContent($content);
        $this->setStatusCode($statusCode);
        $this->setContentType($contentType);
    }

    /**
     * @param string $content
     * @return void
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * @param int $statusCode
     * @return void
     */
    public function setStatusCode(int $statusCode): void
    {
        $this->statusCode = $statusCode;
    }

    /**
     * @param string $contentType
     * @return void
     */
    public function setContentType(string $contentType): void
    {
        $this->contentType = $contentType;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @return int
     */
    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    /**
     * @return string
     */
    public function getContentType(): string
    {
        return $this->contentType;
    }

    /**
     * @param string $content
     * @param string $contentType
     * @return void
     */
    public function sendResponse(string $content, string $contentType): void
    {
        $this->setContent($content);
        $this->setContentType($contentType);

        header('Content-Type: ' . $this->getContentType());
        http_response_code($this->getStatusCode());
        echo $this->getContent();
    }
}