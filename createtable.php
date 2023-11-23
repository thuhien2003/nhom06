<html>
    <?php
    require 'connect.php';
    // Truy vấn SQL để tạo bảng admins
    $sql = "CREATE TABLE IF NOT EXISTS admins (
        admin_id INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(30) NOT NULL,
        password varchar(50) NOT NULL
    )";

    // Thực hiện truy vấn
    if ($conn->query($sql) === TRUE) {
        echo "<br>Bảng admins được tạo thành công!<br>";
    } else {
        echo "Lỗi khi tạo bảng admins: <br>" . $conn->error;
    }
    // Truy vấn SQL để tạo bảng users
    $sql = "CREATE TABLE IF NOT EXISTS users (
        user_id INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        user_name VARCHAR(20) NOT NULL,
        user_email VARCHAR(50) NOT NULL,
        user_password varchar(50) NOT NULL
    )";

    // Thực hiện truy vấn
    if ($conn->query($sql) === TRUE) {
        echo "Bảng users được tạo thành công!<br>";
    } else {
        echo "Lỗi khi tạo bảng users: <br>" . $conn->error;
    }
     // Truy vấn SQL để tạo bảng messages
     $sql = "CREATE TABLE IF NOT EXISTS messages (
        message_id INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        user_id INT(100) UNSIGNED NOT NULL,
        user_name VARCHAR(100) NOT NULL,
        user_email VARCHAR(50) NOT NULL,
        telephone_number INT(10) NOT NULL,
        massage varchar(500) NOT NULL,
        FOREIGN KEY (user_id) REFERENCES users(user_id)
    )";

    // Thực hiện truy vấn
    if ($conn->query($sql) === TRUE) {
        echo "Bảng messages được tạo thành công!<br>";
    } else {
        echo "Lỗi khi tạo bảng messages: <br>" . $conn->error;
    }

      // Truy vấn SQL để tạo bảng categories
      $sql = "CREATE TABLE IF NOT EXISTS categories (
        category_id INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        category_name varchar(200) not null
    )";

    // Thực hiện truy vấn
    if ($conn->query($sql) === TRUE) {
        echo "Bảng categorys được tạo thành công!<br>";
    } else {
        echo "Lỗi khi tạo bảng categorys: <br>" . $conn->error;
    }

    // Truy vấn SQL để tạo bảng products
    $sql = "CREATE TABLE IF NOT EXISTS products (
        product_id INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        admin_id int(100) UNSIGNED NOT NULL,
        product_name varchar(100)  NOT NULL,
        details varchar(500) NOT NULL,
        author varchar(100) not null,
        publishing_company varchar(100) not null,
        category_id INT (100) UNSIGNED not null,
        price int(10) NOT NULL,
        image_01 varchar(100) NOT NULL,
        image_02 varchar(100) NOT NULL,
        image_03 varchar(100) NOT NULL,
        FOREIGN KEY (admin_id) REFERENCES admins (admin_id),
        FOREIGN KEY (category_id) REFERENCES categories (category_id)
    )";

    // Thực hiện truy vấn
    if ($conn->query($sql) === TRUE) {
        echo "Bảng products được tạo thành công!<br>";
    } else {
        echo "Lỗi khi tạo bảng products: <br>" . $conn->error;
    }


    // Truy vấn SQL để tạo bảng orders
    $sql = "CREATE TABLE IF NOT EXISTS orders (
        order_id INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        user_id int(100) UNSIGNED NOT NULL,
        name varchar(20) NOT NULL,
        number varchar(10) NOT NULL,
        email varchar(50) NOT NULL,
        method varchar(50) NOT NULL,
        address varchar(500) NOT NULL,
        total_products varchar(100) NOT NULL,
        total_price int(100) NOT NULL,
        placed_on date NOT NULL DEFAULT current_timestamp(),
        payment_status varchar(20) NOT NULL DEFAULT 'pending',
        FOREIGN KEY (user_id) REFERENCES users(user_id)
    )";

    // Thực hiện truy vấn
    if ($conn->query($sql) === TRUE) {
        echo "Bảng orders được tạo thành công!<br>";
    } else {
        echo "Lỗi khi tạo bảng orders: <br>" . $conn->error;
    }

    // Truy vấn SQL để tạo bảng order_detail
      $sql = "CREATE TABLE IF NOT EXISTS order_detail (
        order_id INT(100) UNSIGNED NOT NULL,
        product_id int(100) UNSIGNED NOT NULL,
        quantity int(10) NOT NULL,
        PRIMARY KEY (order_id, product_id),
        FOREIGN KEY (order_id) REFERENCES orders (order_id),
        FOREIGN KEY (product_id) REFERENCES products (product_id)
    )";
    // Thực hiện truy vấn
    if ($conn->query($sql) === TRUE) {
        echo "Bảng order_detail được tạo thành công!<br>";
    } else {
        echo "Lỗi khi tạo bảng order_detail: <br>" . $conn->error;
    }

     // Thực hiện truy vấn
     if ($conn->query($sql) === TRUE) {
        echo "Bảng orders được tạo thành công!<br>";
    } else {
        echo "Lỗi khi tạo bảng orders: <br>" . $conn->error;
    }

    // Truy vấn SQL để tạo bảng cart
      $sql = "CREATE TABLE IF NOT EXISTS cart (
        cart_id INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        user_id int(100) UNSIGNED NOT NULL,
        product_name varchar(100) NOT NULL,
        product_price int(10) NOT NULL,
        quantity int(10) NOT NULL,
        product_image varchar(100) NOT NULL,
        FOREIGN KEY (user_id) REFERENCES users (user_id)
    )";
    // Thực hiện truy vấn
    if ($conn->query($sql) === TRUE) {
        echo "Bảng cart được tạo thành công!<br>";
    } else {
        echo "Lỗi khi tạo bảng cart: <br>" . $conn->error;
    }

    // Truy vấn SQL để tạo bảng cart_detail
    $sql = "CREATE TABLE IF NOT EXISTS cart_detail (
        cart_id INT(100) UNSIGNED NOT NULL,
        product_id int(100) UNSIGNED NOT NULL,
        quantity int(10) NOT NULL,
        PRIMARY KEY (cart_id, product_id),
        FOREIGN KEY (cart_id) REFERENCES cart (cart_id),
        FOREIGN KEY (product_id) REFERENCES products (product_id)
    )";
    // Thực hiện truy vấn
    if ($conn->query($sql) === TRUE) {
        echo "Bảng cart_detail được tạo thành công!<br>";
    } else {
        echo "Lỗi khi tạo bảng cart_detail: <br>" . $conn->error;
    }



    // Đóng kết nối
    // $conn->close();

    ?>
</html>