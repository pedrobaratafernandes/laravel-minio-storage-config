echo encontar PATH local
set mypath=%cd%

echo iniciar mc config....
cd %mypath%\minio

echo start a new cmd
start cmd /c mc update
pause

echo set alias and host and login
mc alias set mycloud http://127.0.0.1:9000 admin password

echo set public my alias and bucket
mc policy set public mycloud/local