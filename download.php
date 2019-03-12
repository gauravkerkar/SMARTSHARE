<?php
$db = new PDO("mysql:host=localhost;dbname=smartshare","root","");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $stat = $db->prepare("select * from sem_one_notes where id=?");
    $stat->bindParam(1, $id);
    $stat->execute();
    $data = $stat->fetch();

    $file = 'media/'.$data['file'];

    if(file_exists($file)){
        header('Content-Description:  File Transfer');
        header('Content-Type:  application/octet-stream');
        header('Expires: 0');
        header('Cache-Control: '.data['cache']);
        header('Pragma: public');
        header('Content-Length: '.filesize('admin/upload' . $file['file']));
        readfile('admin/upload/' . $file['file']);
       exit;
    }
}
?>