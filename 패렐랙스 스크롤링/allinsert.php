<?php
    
    $db_host = "localhost"; 
    $db_user = ""; 
    $db_passwd = "";
    $db_name = ""; 

    // MySQL - DB 접속.
    $conn = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);

    if (mysqli_connect_errno()){
        echo "MySQL 연결 오류: " . mysqli_connect_error();
        exit;
    } else {
        echo "DB : \"$db_name\"에 접속 성공.<br/>";
    }

    // 문자셋 설정, utf8.
    mysqli_set_charset($conn,"utf8");


    // 테이블에 값 쓰기.
    $sql = "INSERT INTO emp (empno, ename, job, mgr, hiredate, sal, comm, deptno)
        VALUES (NULL, '개나리', '사원', 7902, '2000-12-17', 200, 0, 20),
            (NULL, '진달래', '주임', 7698, '2001-12-15', 360, 0, 20),
            (NULL, '라일락', '주임', 7698, '2001-02-17', 355, 0, 30),
            (NULL, '손흥민', '과장', 7839, '2002-01-11', 400, 0, 30 ),
            (NULL, '박지성', '주임', 7698, '2000-07-12', 325, 0, 20),
            (NULL, '김연아', '사원', 7698, '2001-12-17', 225, 0, 10),
            (NULL, '무궁화', '사원', 7839, '2005-11-14', 200, 0, 10),
            (NULL, '홍길동', '부장', 7566, '2006-06-17', 450, 0,  20),
            (NULL, '송강호', '과장', 7566, '2018-09-17', 400, 0,  30),
            (NULL, '정우성', '대표', 7839, '2004-09-09', 500, 0,  30),
            (NULL, '김혜수', '사원', 7902, '2001-12-03', 200, 0,  20)
        ";

    if (mysqli_query($conn,$sql)){
        echo "테이블에 값 쓰기 완료: $sql<br/>";
    } else {
        echo "테이블에 값 쓰기 오류: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>