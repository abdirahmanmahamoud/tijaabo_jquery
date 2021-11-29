<?php
header('content-type: application/json');
include 'conn.php';
session_start();
function reg($db){
    $data =array();
    extract($_POST);
    $s = "INSERT INTO `users`(`username`,`email`,`password`) VALUES('$username','$email','$password')";
    $r = $db->query($s);
    if($r){
        $data = array('status' => true,'data' => 'is sax hay ayaah u diwaangalisar');
    }else{
        $data = array('status' => false, 'data' => $db->error);
    }
    echo json_encode($data);
}

function lonig($db){
    extract($_POST);
    $data = array();
    $query = "SELECT * FROM users WHERE username ='$username' AND password = '$password'";
    $conn = mysqli_query($db,$query);
    $sax = (mysqli_num_rows($conn));
    if($sax){
        $data = array('status' => true,'data' => 'sax');
        $_SESSION['username'] = $username;
    }else{
        $data = array('status' => false,'data' => 'waa khalad username iyo password');
    }
    echo json_encode($data);
}

if(isset($_POST['dooq'])){
    $dooq = $_POST['dooq'];
    $dooq($db);
}else{
    echo json_encode(array('status' => false, 'data' => 'dooq ma jiro'));
}
?>
