<?php
use GuzzleHttp\Client;
require 'vendor/autoload.php';


$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'http://httpbin.org',
    // You can set any number of default request options.
    'timeout'  => 2.0,
]);
$supplierid='2738';
// Create a client with a base URI
$client = new GuzzleHttp\Client(['base_uri' => 'https://api.trendyol.com/sapigw/suppliers/'.$supplierid.'/v2/products']);
// Send a request to https://foo.com/api/test
$response = $client->request('GET', 'test');
// Send a request to https://foo.com/root
$response = $client->request('GET', '/root');
use GuzzleHttp\Psr7\Request;
$headers=['X-Foo' => 'Bar'];
$body = 'Hello!';
$request = new Request('HEAD', 'http://httpbin.org/head', $headers, $body);
$promise = $client->sendAsync($request);