#!/usr/bin/env php
<?php
/**
 * The example is to show how defer works in Swoole. It takes about 1 second to finish, and prints out "123456".
 *
 * How to run this script:
 *     docker exec -t  $(docker ps -qf "name=app") bash -c "./csp/defer.php"
 */

go(function () {
    echo "1";
    defer(function () {
        echo "6\n";
    });

    echo "2";
    defer(function () {
        echo "5";
    });

    echo "3";
    co::sleep(1);
    echo "4";
});