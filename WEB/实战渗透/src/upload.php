<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 检查是否有文件被上传
    if (isset($_FILES["file"])) {
        $file = $_FILES["file"];

        // 检查是否上传成功
        if ($file["error"] === UPLOAD_ERR_OK) {
            $fileType = mime_content_type($file["tmp_name"]);

            // 检查文件内容是否包含 "php" 字段
            if (stripos($fileType, "php") === false) {
                // 允许上传，移动文件到 "uploads" 文件夹
                $uploadDir = "uploads/";
                $uploadPath = $uploadDir . $file["name"];
                move_uploaded_file($file["tmp_name"], $uploadPath);
                echo "文件上传成功！". "<br />";
                echo "Upload: /uploads/" . $_FILES["file"]["name"] . "<br />";
                echo "Type: " . $_FILES["file"]["type"] . "<br />";
                echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
            } else {
                echo "文件内容包含 'php' 字段，禁止上传！";
            }
        } else {
            echo "上传文件时出错：" . $file["error"];
        }
    } else {
        echo "没有上传文件。";
    }
}
?>
