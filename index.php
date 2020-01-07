<h1>Index my-project1</h1>
<?php
require_once('setting.config.php');
require_once('connection.php');
echo "test index.php"."<br/>";

try{
    $database = new DBConnection($host);
    $sql = $database->dbc->prepare("select*from member");
    $sql->execute();
    foreach($sql as $row){
        echo "-".$row['mem_name']."<br/>";
    }
}
catch(PDOException $e){
    print "error:".$e->getMessage();
}
?>