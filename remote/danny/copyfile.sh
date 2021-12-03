echo "enter name of the file to be copied"
read filename
scp $filename danny@10.5.30.58:/home/danny/smt/
status=$?
if test $status -eq 0
then
	echo "file copy successful"
else 
	echo "file copy unsuccessful"
fi
