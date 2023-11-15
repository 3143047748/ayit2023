#!/bin/sh
# Add your startup script
#!/bin/sh
sed -i "s/flag{pwntestflag}/$GZCTF_FLAG/" /home/ctf/flag
export GZCTF_FLAG=""
# DO NOT DELETE
/etc/init.d/xinetd start;
sleep infinity;
