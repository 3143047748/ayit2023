#!/bin/sh	
sed -i "s/flag{testflag}/$GZCTF_FLAG/" /var/www/html/execute.php
export FLAG=""	

