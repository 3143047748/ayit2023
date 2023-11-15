#!/bin/sh
sed -i "s/flag{testflag}/$GZCTF_FLAG/" /var/www/html/flag.php
export GZCTF_FLAG="flag{this_no_flag}"
