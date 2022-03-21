<?php
require 'vendor/autoload.php';

class IntegrationsTest extends IntegrationTestCase {
    public function test_index() {
        $response = $this->make_request("GET", "/");
        $this->assertEquals("200", $response->getStatusCode());
        $this->assertEquals("Hello World!", $response->getBody()->getContents());
        $this->assertStringContainsString("text/html", $response->getHeader('Content-Type')[0]);
    }
}