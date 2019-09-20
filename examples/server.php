#!/usr/bin/env php
<?php

$http = new Swoole\Http\Server("0.0.0.0", 9501);
$http->on(
    "request",
    function (Swoole\Http\Request $request, Swoole\Http\Response $response) {
        $response->end(
            <<<EOT
                <pre>
                In this example we start an HTTP/1 server.
                </pre>
            EOT
        );
    }
);
$http->start();
