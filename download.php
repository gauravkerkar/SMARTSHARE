<?php
$db = new PDO("mysql:host=localhost;dbname=smartshare","root","");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $stat = $db->prepare("select * from files where id=?");
    $stat->bindParam(1, $id);
    $stat->execute();
    $data = $stat->fetch();

    $file = 'media/'.$data['filename'];

    if(file_exists($file)){
        header('Content-Description:  File Transfer');
        header('Content-Type:  application/octet-stream');
        header('Expires: 0');
        header('Cache-Control: '.data['cache']);
        header('Pragma: public');
        header('Content-Length: '.filesize('admin/upload' . $file['name']);
        readfile('admin/upload/' . $file['name']);
       exit;
    }
}