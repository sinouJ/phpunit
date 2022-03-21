<?php
require 'vendor/autoload.php';

class IntegrationsTest extends IntegrationTestCase {
    // public function test_index() {
    //     $response = $this->make_request("GET", "/");
    //     $this->assertEquals("200", $response->getStatusCode());
    //     $this->assertEquals("Hello World!", $response->getBody()->getContents());
    //     $this->assertStringContainsString("text/html", $response->getHeader('Content-Type')[0]);
    // }

    /**
     * @dataProvider provider
     */
    public function test_hello($name) {
        $response = $this->make_request("GET", "/hello.php?name=$name");
        $this->assertEquals("200", $response->getStatusCode());
        $this->assertEquals("<h2>Hello $name</h2>", $response->getBody()->getContents());
        $this->assertStringContainsString("text/html", $response->getHeader('Content-Type')[0]);
    }

    public function provider() {
        return [
            ['Test'],
            ['Doe'],
            ['Dodo']
        ];
    }
}