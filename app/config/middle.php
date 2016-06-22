<?php
$app->add(new \Slim\Middleware\HttpBasicAuthentication([
    "path" => "/admin", /* or ["/admin", "/api"] */
    "realm" => "Protected",
    "secure" => false,
    "users" => [
        "root" => "liner",
        "user" => "password"
    ],
    "callback" => function ($request, $response, $arguments) {
        print_r($arguments);
    },
    "error" => function ($request, $response, $arguments) {
        $data = [];
        $data["status"] = "error";
        $data["message"] = $arguments["message"];
        return $response->write(json_encode($data, JSON_UNESCAPED_SLASHES));
    },
    "environment" => "REDIRECT_HTTP_AUTHORIZATION"
]));