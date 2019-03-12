<?php
$db = new PDO("mysql:host=localhost;dbname=smartshare","root","");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $stat = $db->prepare("select * from sem_one_notes where id=?");
    $stat->bindParam(1, $id);
    $stat->execute();
    $data = $stat->fetch();

    $file = 'admin/upload/'.$data['file'];

    if(file_exists($file)){
        header('Content-Description: '. $data['description']);
        header('Content-Type: '.$data['type']);
        header('Content-Disposition: '.$data['disposition'].'; file="'.basename($file).'"');
        header('Expires: '.$data['expires']);
        header('Cache-Control: '.data['cache']);
        header('Pragma: '.$data['pragma']);
        header('Content-Length: '.filesize($file));
        readfile($file);
        exit;
    }
}
?>