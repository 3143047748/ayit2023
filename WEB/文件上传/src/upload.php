<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   if (isset($_FILES['file'])) {
       $uploadDir = 'uploads/'; // 上传目录
       $uploadedFile = $uploadDir . basename($_FILES['file']['name']);

       // 检查文件类型
       $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
       $fileExtension = strtolower(pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION));

       if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadedFile)) {
           echo "文件上传成功，你已经将文件上传到/uploads目录下。";
       } else {
           echo "文件上传失败.";
       }
   }
}
?>