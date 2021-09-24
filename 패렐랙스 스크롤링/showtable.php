<?php

    $db_host = "localhost"; 
    $db_user = "ck2lucky"; 
    $db_passwd = "wprkfk!1";
    $db_name = "ck2lucky"; 

    // MySQL - DB 접속.
    $conn = mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
    if (mysqli_connect_errno()){
        echo "MySQL 연결 오류: " . mysqli_connect_error();
        exit;
    } else {
        echo "DB : \"$db_name\"에 접속 성공.<br/>";
    }

    // 문자셋 설정, utf8.
    mysqli_set_charset($conn,"utf8"); 


    // 테이블 쿼리 후 내용 출력.
    $sql = "SELECT * FROM emp";

    if ($result = mysqli_query($conn, $sql)){

        echo "<table border='1' cellpadding='5'> <tr nowrap='' bgcolor='#e0e0e0'> 
            <th>사번</th> 
            <th>이름</th> 
            <th>직급</th> 
            <th>매니저정보</th>
            <th>입사일</th>
            <th>급여</th>
            <th>보너스</th>
            <th>부서코드</th>
            </tr>";
            
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td nowrap=''>" . $row['empno'] . "</td>";
            echo "<td nowrap='' bgcolor='#f4f0fa'>" . $row['ename'] . "</td>";
            echo "<td nowrap=''>" . $row['job'] . "</td>";
            echo "<td nowrap='' bgcolor='#f4f0fa'>" . $row['mgr'] . "</td>";
            echo "<td nowrap=''>" . $row['hiredate'] . "</td>";
            echo "<td nowrap='' bgcolor='#f4f0fa'>" . $row['sal'] . "</td>";
            echo "<td nowrap=''>" . $row['comm'] . "</td>";
            echo "<td nowrap='' bgcolor='#f4f0fa'>" . $row['deptno'] . "</td>";
            echo "</tr>";
        } 

        echo "</table>";

        mysqli_close($conn);

    } else {
        echo "테이블 쿼리 오류: " . mysqli_error($conn);
        exit;
    }

?>