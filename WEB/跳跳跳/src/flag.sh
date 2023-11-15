#!/bin/sh
sed -i "s/flag{testflag}/$GZCTF_FLAG/" /var/www/html/index.php 
export FLAG=""
