<?php
date_default_timezone_set('Europe/Stockholm');
$debug="NONE!";
    
/*--------------------------------------------------------------------------------
     Create Database and insert item
----------------------------------------------------------------------------------*/    

// Updated database! - id is varchar 32 so we can store uuids of different kinds if need be
// New feature: Each row contains one element not one day - this is so we can synch more effectively using ids
$log_db = new PDO('sqlite:./datalog_db.db');
$log_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$log_db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$sql = 'CREATE TABLE IF NOT EXISTS datalog(id INTEGER PRIMARY KEY,datum TIMESTAMP,phpdatum TIMESTAMP,itemid text,pageurl text,userid text);';
$log_db->exec($sql);

if(isset($_POST['itemid'])){
        $itemid=$_POST['itemid'];
}else{
        $itemid="UNK";
}
if(isset($_POST['pageurl'])){
        $pageurl=$_POST['pageurl'];
}else{
        $pageurl="UNK";
}     
if(isset($_POST['datum'])){
        $datum=$_POST['datum'];
}else{
        $datum="";
}          
if(isset($_POST['userid'])){
        $userid=$_POST['userid'];
}else{
        $userid="UNK";
}
     
$query = $log_db->prepare('INSERT INTO datalog(datum,phpdatum,itemid,pageurl,userid) VALUES (:datum,CURRENT_TIMESTAMP,:itemid,:pageurl,:userid)');
$query->bindParam(':datum', $datum);
$query->bindParam(':itemid', $itemid);
$query->bindParam(':pageurl', $pageurl);

if(!$query->execute()) {
        $error=$query->errorInfo();
        $debug="Error:\nImporting schedule element from history!\n".$error[2];
}    

?>