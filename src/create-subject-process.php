<?php
 // Create connection
  include ('connection.php');
 global $conn;
    // Nếu không phải là sự kiện tạo thì không xử lý
    if (!isset($_POST['txtName'])){
        die('');
    }  
          
    
    header('Content-Type: text/html; charset=UTF-8');
    $subjectname   = addslashes($_POST['txtName']);
    $sotinchi   = addslashes($_POST['txtSoTinChi']);
    $sotietbt      = addslashes($_POST['txtSoTietBT']);
    $sotietlt      = addslashes($_POST['txtSoTietLT']);
    $sotietth   = addslashes($_POST['txtSoTietTH']);
    $sogiotuhoc        = addslashes($_POST['txtSoGioTuHoc']);
          
    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
    if (!$subjectname || !$sotinchi || !$sotietbt || !$sotietth || !$sogiotuhoc || !$sotietlt)
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
          
    //Lưu thông tin thành viên vào bảng
    @$addSubject = mysqli_query($conn,"
    INSERT INTO `monhoc` (ten_mh, sotinchi, sotiet_bt, sotiet_lt, sotiet_thtn, sogio_tuhoc)
    VALUES ('{$subjectname}','{$sotinchi}','{$sotietbt}','{$sotietlt}','{$sotietth}','{$sogiotuhoc}')");
                          
    //Thông báo quá trình lưu
    if ($addSubject)
        echo "Quá trình đăng ký thành công. <a href='/'>Về trang chủ</a>";
    else
        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='register.php'>Thử lại</a>";
?>