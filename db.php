<?php
/* Cố gắng kết nối máy chủ MySQL. Giả sử bạn đang chạy MySQL
Máy chủ có cài đặt mặc định (user là 'root' và không có mật khẩu) */
try{
    $pdo = new PDO("mysql:host=localhost;dbname=demo", "root", "");
    // Thiết lập PDO erorr thành Ngoại lệ
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Không thể kết nối. " . $e->getMessage());
}
 
// Cố gắng thực thi câu lệnh INSERT
try{
    // Chuẩn bị câu lệnh INSERT
    $sql = "INSERT INTO persons (first_name, last_name, email) VALUES (:first_name, :last_name, :email)";
    $stmt = $pdo->prepare($sql);
    
    // Ràng buộc tham số
    $stmt->bindParam(':first_name', $first_name, PDO::PARAM_STR);
    $stmt->bindParam(':last_name', $last_name, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    
    /* Thiết lập giá trị tham số và thực thi
    câu lệnh 1 lần nữa để chèn một hàng khác */
    $first_name = "Hermione";
    $last_name = "Granger";
    $email = "hermionegranger@mail.com";
    $stmt->execute();
    
    /* Thiết lập giá trị tham số và thực thi
    câu lệnh 1 lần nữa để chèn một hàng */
    $first_name = "Ron";
    $last_name = "Weasley";
    $email = "ronweasley@mail.com";
    $stmt->execute();
    
    echo "Chèn bản ghi thành công.";
} catch(PDOException $e){
    die("ERROR: Không thể chuẩn bị / thực thi truy vấn: $sql. " . $e->getMessage());
}
 
// Đóng câu lệnh
unset($stmt);
 
// Đóng kết nối
unset($pdo);
?>