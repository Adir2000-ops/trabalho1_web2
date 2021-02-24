<?php
    
    require_once './lib/html.class.php';
    require_once './lib/head.class.php';
    require_once './lib/body.class.php';
    require_once './lib/h1.class.php';
    require_once './lib/script.class.php';
    require_once ('./lib/link.class.php');

    $html = new html('en');

    $head = new head('Hello, world!');

    $body = new body();

    $h1 = new h1('Hello, world!', '');

    $cript = new script('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js', [
        'integrity'   => 'sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0',
        'crossorigin' => 'anonymous',
    ]);

    $link = new Link('http://unidavi.edu.br','Unidavi','_blank','btn');
    echo $link->getLink();

    $link2 = new Link('http://google.com.br','Google','_blank','btn');
    echo $link2->getLink();



    $body->arrayElements($h1);
    $body->arrayElements($cript);
    $html->arrayElements($head);
    $html->arrayElements($body);

    echo $html;