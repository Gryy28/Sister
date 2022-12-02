<?php //Ip Saya 192.168.3.123
header("Content-Type: application/json; charset=utf-8");
$hasil=$_GET['a']+$_GET['b'];

$data = array(
    'status'=> 1,
    'data'=>array('a'=>floatval($_GET['a']),'b'=>floatval($_GET['b'])),
);

print json_encode($data);