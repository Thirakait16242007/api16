<?php
    include('../config.db.php');
    $dataJSON = json_decode(file_get-contents('php//input' , true));
    $message = aray();

    // ประกาศตัวแปรสำหร้บเพิ่มข้อมูล
    $id_stu = $dataJSON['id_stu'];
    $name = $dataJSON['name'];
    $nname = $dataJSON['nname'];
    $age = $dataJSON['age'];
    $phone = $dataJSON['phone'];
    $address = $dataJSON['address'];
    $status = $dataJSON['status'];

    //เขียนคำสั่งในการเพิ่มข้อมูล
    $sql = "INSERT INTO members (id_stu,name,nname,age,phone,address,status)
    VALUES('$id_stu','$name','$nname','$age','$phone','$address','$status')";

    //รับคำสั่ง
    $qr_insert = mysqli_query($conn,sql);
    
    if($qr_insert){
        http_response_code(201);
        $message['status'] = "เพิ่มข้อมูลสำเร็จ";
    }else{
        http_response_code(422);
        $message['status'] = "เพิ่มข้อมูลไม่สำเร็จ";
    }

    echo json_encode($message);
    echo mysqli_error($conn);

?>