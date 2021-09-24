<?php

    $db_host = "localhost"; 
    $db_user = "ck2lucky"; 
    $db_passwd = "wprkfk!1";
    $db_name = "ck2lucky"; 

    // MySQL - DB 접속.

    $conn = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);
    if (mysqli_connect_errno()){
        echo "MySQL 연결 오류: " . mysqli_connect_error();
        exit;

    } else {
        echo "DB : \"$db_name\"에 접속 성공.";
    }

    // 문자셋 설정, utf8.
    mysqli_set_charset($conn,"utf8");


    // 테이블 삭제.
    $sql = "DROP TABLE emp";
    if (mysqli_query($conn, $sql)){
        echo "테이블 삭제 완료: $sql";
    } else {
        echo "테이블 삭제 오류: " . mysqli_error($conn);
    }

    mysqli_close($conn); // MySQL 연결 종료.

?>