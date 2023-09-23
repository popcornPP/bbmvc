<?php

namespace app\core\Request;

class Request
{
    public function __construct(
        public readonly array $server,
        public readonly array $get,
        public readonly array $post,
        public readonly string $uri,
        public readonly string $method,
        public readonly array $files,
        public readonly array $cookie
    ) {
    }

    public static function getAll(): static
    {
        return  new static(
            $_SERVER,
            $_GET,
            $_POST,
            $_SERVER["REQUEST_URI"],
            $_SERVER["REQUEST_METHOD"],
            $_FILES,
            $_COOKIE,
        );
    }

    public function getServer(): array
    {
        return $this->server;
    }
    public function getGet(): array
    {
        return $this->get;
    }
    public function getPost(): array
    {
        return $this->post;
    }
    public function getUri(): string
    {
        return $this->uri;
    }
    public function getMethod(): string
    {
        return $this->method;
    }
    public function getFiles(): array
    {
        return $this->files;
    }
    public function getCookie(): array
    {
        return $this->cookie;
    }
}
