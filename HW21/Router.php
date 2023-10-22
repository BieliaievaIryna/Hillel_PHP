<?php

class Router
{
    private array $routes = [];

    /**
     * @param string $url
     * @param array $handler
     * @return void
     */
    public function addRoute(string $url, array $handler): void
    {
        $this->routes[$url] = $handler;
    }

    /**
     * @return void
     * @throws Exception
     */
    public function processRoute(): void
    {
        $reqUrl = $this->getReqUri();
        $reqMethod = $this->getReqMethod();

        foreach ($this->routes as $url => $route) {
            if ($url === $reqUrl) {
                foreach ($route as $method => $handler) {
                    if ($method === $reqMethod) {
                        [$handlerFile, $handlerMethod] = $this->processHandler($handler);
                        $fullHandlerFile = __DIR__ . "/Controllers/$handlerFile.php";
                        $this->existHandler($fullHandlerFile);

                        require_once $fullHandlerFile;
                        $objectHandler = new $handlerFile;
                        $this->existMethod($objectHandler, $handlerMethod);
                        $objectHandler->$handlerMethod();
                        return;
                    }
                }
            }
        }
        http_response_code(404);
        exit;
    }

    /**
     * @param string $fullHandlerFile
     * @return void
     * @throws Exception
     */
    private function existHandler (string $fullHandlerFile): void
    {
        if (!file_exists($fullHandlerFile)) {
            throw new Exception("Invalid controller provided!");
        }
    }

    /**
     * @param object $objectHandler
     * @param string $handlerMethod
     * @return void
     * @throws Exception
     */
    private function existMethod (object $objectHandler, string $handlerMethod): void
    {
        if (!method_exists($objectHandler, $handlerMethod)) {
            throw new Exception("Invalid method provided!");
        }
    }

    /**
     * @param string $handler
     * @return array
     */
    private function processHandler (string $handler): array
    {
        return explode('@', $handler);
    }

    /**
     * @return string
     */
    private function getReqUri(): string
    {
        return $_SERVER['REQUEST_URI'];
    }

    /**
     * @return string
     */
    private function getReqMethod(): string
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}