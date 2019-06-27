<?php
function connectDB(){
    //online
    /*
    $mysql_server_name='10.20.0.108';
    $mysql_username='mysql';
    $mysql_password='qlxtdatabase';
    $mysql_database='push';
    */

    $mysql_server_name='192.168.10.205';
    $mysql_username='mysql';
    $mysql_password='MhxzKhl';
    $mysql_database='newschematest';
    $conn = @mysql_pconnect($mysql_server_name,$mysql_username,$mysql_password);


    if(isset($_SESSION) && isset($_SESSION["ixuser"]) && $_SESSION["ixuser"] == "test@ixintui.com"){
        mysql_select_db("demo");
    }else if(isset($GLOBALS["userInfoStatistics"]) && $GLOBALS["userInfoStatistics"] === true){
        mysql_select_db("userInfoStatistics");
    }else if(isset($GLOBALS["timedtask"]) && $GLOBALS["timedtask"] === true){
        mysql_select_db("timedtask");
    }else{
        mysql_select_db($mysql_database);
    }
    mysql_query("SET NAMES 'utf8'");
    mysql_query("SET CHARACTER_SET_CLIENT=utf8");
    mysql_query("SET CHARACTER_SET_RESULTS=utf8");
}

connectDB();
$sql =  "select sum(TotalCount) from registerCount where TimeStamp >'2018-03-26 06:00:00'  and AppKey = 1260671838";
$result = mysql_query($sql);
$row = mysql_fetch_assoc($result);
var_dump($sql,$result,$row);exit;

?>
