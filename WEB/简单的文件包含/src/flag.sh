#!/bin/sh	
sed -i "s/flag{testflag}/$GZCTF_FLAG/" /var/www/html/flag.php 
export FLAG=""	
rm -f /flag.sh