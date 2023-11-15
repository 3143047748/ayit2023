<!DOCTYPE html>
<html>
<head>
    <title>My Flag Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
            padding: 20px;
        }

        .flag-container {
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 600px;
            margin: 0 auto;
        }

        h1 {
            color: #333;
        }
    </style>
</head>
<body>
<div class="flag-container">
    <h1>Welcome to My Flag Page</h1>
    <p>Here is your flag:</p>
    <?php
    // Include the flag content from flag.php

    echo "<p>flag在flag.php文件里。</p>";
    ?>
</div>
</body>
</html>