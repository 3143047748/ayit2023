<?php
echo("第一关：你是本地管理员吗？(懂啥是XFF吗？)");
if (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && $_SERVER['HTTP_X_FORWARDED_FOR'] === '127.0.0.1') {
    echo("</br>");
    echo("恭喜你完成了第一关，继续继续~~~");
    echo("</br>");
    echo("第二关：你的UA是513666吗？");
    if (isset($_SERVER['HTTP_USER_AGENT']) && strpos($_SERVER['HTTP_USER_AGENT'], '513666') !== false){
        echo("</br>");
        echo("最后一关了，学弟学妹别急，加油！！");
        echo('</br>');
        echo("你是来自ctf.com吗？");
        if (isset($_SERVER['HTTP_ORIGIN']) && strpos($_SERVER['HTTP_ORIGIN'], 'ctf.com') !== false){
            echo("</br>");

            echo("flag{testflag}");
        }
        else{
            //echo("你不是来自ctf.com");
        }
    }
    else{
       // echo("你的UA不是513666");
    }
} else {
    // X-Forwarded-For不是'127.0.0.1'，执行其他操作
    //echo "你现在不是本地管理员。。。";
}
?>
