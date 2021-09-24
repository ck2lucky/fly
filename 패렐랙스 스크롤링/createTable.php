<?php

    $db_host = "localhost"; 
    $db_user = "ck2lucky"; 
    $db_passwd = "wprkfk!1";
    $db_name = "ck2lucky"; 

    $conn = mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

    if (mysqli_connect_errno($conn)) {

        echo "데이터베이스 연결 실패: " . mysqli_connect_error();

    } else {

        echo "데이터베이스 연결 성공";

    }

    // table 만들기
    $sql = "CREATE TABLE emp 

    (

        empno int(4) not null auto_increment,
        ename varchar(10),
        job varchar(9),
        mgr int(4),
        hiredate date,
        sal int(7),
        comm int(7),
        deptno int(2),
        PRIMARY KEY(empno)

    ) charset = utf8";


    if (mysqli_query($conn, $sql)){

        echo "성공적으로 테이블을 만들었습니다.<br/>";

    } else {

        echo "테이블 생성 오류 : " . mysqli_error($conn);
        exit;

    }

?>