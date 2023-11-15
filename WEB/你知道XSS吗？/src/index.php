<!DOCTYPE html><!--STATUS OK--><html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<script>
let arg;
window.onload = function(){
            //屏蔽键盘事件
            document.onkeydown = function (){
                var e = window.event || arguments[0];
                //F12
                if(e.keyCode == 123){
                    return false;
                //Ctrl+Shift+I
                }else if((e.ctrlKey) && (e.shiftKey) && (e.keyCode == 73)){
                    return false;
                //Shift+F10
                }else if((e.shiftKey) && (e.keyCode == 121)){
                    return false;
                //Ctrl+U
                }else if((e.ctrlKey) && (e.keyCode == 85)){
                    return false;
                }
            };
            //屏蔽鼠标右键
            document.oncontextmenu = function (){
                return false;
            }
        }

        window.alert = function() {
    confirm("完成的不错！");
    var arg = prompt("b=宇宙的终极答案(请www.baidu.com搜);\n\ra=lg(10000);\n\r那么b-a-35=?");
    if (arg == 3) {
        // 使用AJAX发送请求到服务器
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "execute.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // 请求成功，获取服务器返回的响应
                var response = xhr.responseText;
                // 在页面中显示服务器返回的响应
                document.write(response);
            }
        };
        // 发送请求，并将用户输入的值作为参数传递给服务器
        xhr.send("input=" + arg);
    } else {
        document.write("<br>你不会算数都不会吧！！继续加油吧！(⊙﹏⊙)")
    }
}
</script>
<title>欢迎来到这里！</title>
</head>
<body>
<h1 align=center>GET传一个name哦</h1>
<?php 
ini_set("display_errors", 0);
$str = $_GET["name"];
echo "<h2 align=center>欢迎用户".$str."</h2>";
?>
<center><img src=777.gif></center>
<?php 
echo "<h3 align=center>你了解XSS吗</h3>";
?>
</body>
</html>




