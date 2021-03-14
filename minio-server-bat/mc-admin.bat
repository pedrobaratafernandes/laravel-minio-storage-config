echo encontar PATH local
set mypath=%cd%

echo iniciar mc config....
cd %mypath%\minio

echo start a new cmd
start cmd /c mc update
pause