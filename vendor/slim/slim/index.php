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
    $url .= $url . $dbuser . ":" . $dbpass . "@" . $dbhost;
    $dbh = new MongoClient("mongodb://localhost:27017");
    $db = $dbh->selectDB($dbname);
    $collection = new MongoCollection($db, 'notif_coll');
    return $collection;
}

$authKey = function ($route) {
    $app = \Slim\Slim::getInstance();
    $routeParams = $route->getParams();
    if ($routeParams["id"] == "") {
        $app->halt(401);
    }
};

$app->get('/notif/:id', $authKey, function($id) use($app) {
    try {
        $db = getConnection();
        $query = array("notif_to" => $id);
        $cursor = $db->find($query);
        $data = array();
        foreach ($cursor as $doc) {
            $data[] = array(
                'message' => $doc['message'],
                'category' => $doc['notif_cat'],
                'link' => $doc['notif_link']
            );
        }
        echo json_encode($data);
    } catch (MongoException $e) {
        $data = array("status" => "error", "message" => $e->getMessage());
        echo json_encode($data);
    }    
});

$app->post('/notif/', function() use ($app)  {
    try {
        $request = $app->request();
        $input = json_decode($request->getBody());
        $db = getConnection();
        $query = array("notif_to" => $input->id, "read_status" => 0);
        $cursor = $db->find($query);
        $total_notif = $db->count($query);
        $data = array();
        foreach ($cursor as $doc) {
            $data[] = array(
                'message' => $doc['message'],
                'category' => $doc['notif_cat'],
                'link' => $doc['notif_link']
            );
        }
        echo '{"total":'.$total_notif.', "data": ' . json_encode($data) . '}';
    } catch (MongoException $e) {
        $data = array("status" => "error", "message" => $e->getMessage());
        echo json_encode($data);
    }
});

$app->post('/notif/check', function() use ($app)  {
    try {
        $request = $app->request();
        $input = json_decode($request->getBody());
        $db = getConnection();
        $query = array("notif_to" => $input->id, "read_status" => 0);
        $total_notif = $db->count($query);
        $data = array("status" => "success", "total" => $total_notif);        
        echo json_encode($data);
    } catch (MongoException $e) {
        $data = array("status" => "error", "message" => $e->getMessage());
        echo json_encode($data);
    }
});

$app->put('/notif/update', function() use ($app)  {
    try {
        $request = $app->request();
        $input = json_decode($request->getBody());
        $db = getConnection();
        $new_data = array('$set' => array("read_status" => 1));
        $where = array("notif_to" => $input->id);
        $db->update($where, $new_data);
        $data = array("status" => "success");        
        echo json_encode($data);
    } catch (MongoException $e) {
        $data = array("status" => "error", "message" => $e->getMessage());
        echo json_encode($data);
    }
});

$app->run();