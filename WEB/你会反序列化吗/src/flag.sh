#!/bin/sh
sed -i "s/flag{testflag}/$GZCTF_FLAG/" /flag
export GZCTF_FLAG="flag{this_no_flag}"
