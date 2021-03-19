@echo off

echo minio login
setx MINIO_ROOT_USER admin
setx MINIO_ROOT_PASSWORD password

echo encontar PATH local
set mypath=%cd%

echo iniciar minio server ....
%mypath%\minio\minio.exe server c:\Data
