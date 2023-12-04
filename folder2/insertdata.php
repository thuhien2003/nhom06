<html>
    <?php
    require 'connect.php';
//Thêm dữ liệu cho bảng categories
    $sql= "insert into categories ( category_name)
    values ('Chính trị  pháp luật')";
    $sql= "insert into categories ( category_name)
    values ('Khoa học công nghệ – Kinh tế')";
    $sql= "insert into categories ( category_name)
    values ('Văn học nghệ thuật')";
    $sql= "insert into categories ( category_name)
    values ('Sách thiếu nhi')";
    $sql= "insert into categories ( category_name)
    values ('Tâm lý, tâm linh, tôn giáo')";
   $sql= "insert into categories ( category_name)
    values ('Truyện, tiểu thuyết')";
    if ($conn ->query($sql)===true ){
        echo "Đã thêm dữ liệu cho bảng categories! <br>";
    }
    else{
        echo "Thêm dữ liệu không thành công!!". $sql. "<br>". $conn->error;
    }
// thêm dữ liệu cho bảng admins
    $sql= "insert into admins (name, password)
        values ('lecongtuyen','123456')";
    if ($conn ->query($sql)===true ){
        echo "Đã thêm dữ liệu cho bảng admins! <br>";
    }
    else{
        echo "Thêm dữ liệu không thành công!!". $sql. "<br>". $conn->error;
    }

// Thêm dữ liệu cho bảng products
    $image01='https://salt.tikicdn.com/cache/750x750/ts/product/d0/ba/09/17804041c2830c092d9b2278b8be9b58.jpg.webp';
    $image02='https://salt.tikicdn.com/cache/750x750/ts/product/35/b1/f1/d5baecdf38b4320edbfbc158f3e48215.png.webp';
    $image03='https://salt.tikicdn.com/cache/750x750/ts/product/04/b7/aa/6c2f6bba482bc2eae72d5d074ce07e75.png.webp';
    $sql= "insert into products ( admin_id,product_name,details, author,publishing_company,category_id, price, image_01,image_02, image_03)
    values ('1', 'Hoàng tử bé','Tác phẩm của một nhà văn và phi công Pháp nổi tiếng.','ANTOINE DE SAINT-EXUPÉRY','
    Nhà Xuất Bản Kim Đồng', '4','28.000','$image01', '$image02', '$image03' )";
   
    if ($conn ->query($sql)===true ){
        echo "Đã thêm dữ liệu cho bảng products! <br>";
    }
    else{
        echo "Thêm dữ liệu không thành công!!". $sql. "<br>". $conn->error;
    }

    // Đóng kết nối
    // $conn->close();

    ?>
</html>