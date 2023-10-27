<?php

class Response
{
    private mixed $content;

    /**
     * @param mixed $content
     */
    public function __construct(mixed $content)
    {
        $this->setContent($content);
    }

    /**
     * @param $content
     * @return void
     */
    public function setContent($content): void
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function getContent(): mixed
    {
        if ($_SERVER['CONTENT_TYPE'] === 'application/json') {
            $content = json_decode($this->content, true);
            if ($content === null) {
                throw new Exception('Invalid JSON');
            }
            return json_encode($content);
        } elseif ($_SERVER['CONTENT_TYPE'] === 'application/xml') {
            $content = simplexml_load_string($this->content);
            if ($content === false) {
                throw new Exception('Invalid XML');
            }
            return json_encode($content);
        } else {
            return $this->content;
        }
    }

    /**
     * @return string
     */
    public function getContentType(): string
    {
        return $_SERVER['CONTENT_TYPE'];
    }

    /**
     * @return int
     */
    public function getCodeResponse(): int
    {
        return http_response_code();
    }

    /**
     * @return void
     * @throws Exception
     */
    public function send(): void
    {
        echo "Content: " . $this->getContent() . PHP_EOL;
        echo 'Content-Type: ' . $this->getContentType() . PHP_EOL;
        echo 'Response-Code: ' . $this->getCodeResponse() . PHP_EOL;
    }
}