<?php

require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

function getConnection() {
    $url = "mongodb://";
    $dbhost = "localhost:27017";
    $dbuser = "sli_lipi_user";
    $dbpass = "slilipi2014";
    $dbname = "sli_lipi";
    $url .= $url . $dbuser . ":" . $dbpass . "@" . $dbhost . "/" . $dbname;
    try {
        $dbh = new MongoClient($url);
        $db = $dbh->selectCollection($dbname, "notif_coll");
        return $db;
    } catch (MongoConnectionException $exception) {
        $app->response()->status(400);
        $app->response()->header('X-Status-Reason', $exception->getMessage());
    }
}

$authKey = function ($route) {
    $app = \Slim\Slim::getInstance();
    $routeParams = $route->getParams();
    if ($routeParams["id"] == "") {
        $app->halt(401);
    }
};

$app->get('/notif/:id', $authKey, function($id) use($app) {
    $db = getConnection();
    $query = array("notif_to" => $id);
    $cursor = $db->find($query);
    $app->response()->header('Content-Type', 'application/json');
    echo '{"data": ' . json_encode($cursor) . '}';
});

$app->run();