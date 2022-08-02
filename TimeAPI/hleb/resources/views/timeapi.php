<?php
$request = json_decode(file_get_contents('php://input'), true);
GetTime($request["params"]);

function GetTime($request)
{
    if($request == "sqltime, unixtime"){
        $response = array(
            "jsonrpc" => "2.0",
            "resultsql" => "",
            "resultunix" => ""
        );
        $response["resultsql"] = sqltime();
        $response["resultunix"] = unixtime();
        print_r(json_encode($response));
        return json_encode($response);
    }else{
      echo "Неверные параметры запроса!";
      return 404;
    }
}

function sqltime()
{
    $time = new DateTime();
    return($time->format('Y-m-d H:i:s'));
}

function unixtime()
{
    $time = new DateTime();
    return($time->getTimestamp());
}