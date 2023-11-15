<?php
highlight_file(__FILE__);
if (isset($_POST['a']) and isset($_POST['b'])) {
if ($_POST['a'] != $_POST['b'])
if (md5($_POST['a']) == md5($_POST['b']))
    eval($_GET['c']);
else
print 'Wrong.';
}
//哪些字符串MD5加密后以0e开头呢？？