<?php

namespace App\Controller;

use PHPUnit\Framework\TestCase;

class ApiControllerTest extends TestCase
{

    public function test_hello_world(): void
    {
        $controller = new ApiController();
        $response = $controller->hello();
        $content = $response->getContent();

        $msg = json_decode($content, true)["msg"];
        $expected = "Hello world!";

        $this->assertEquals($expected, $msg);
    }
}
