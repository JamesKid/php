@echo off
if not "%2"=="snow" mshta vbscript:createobject("wscript.shell").run("""%~F0"" wind snow",vbhide)(window.close)&&exit 
echo 这是隐藏的，你看不到
echo 隐藏运行10秒后将创建一个文本文件
ping /n 1 /w 10000 9.9.9.9& cd.>wind.txt
exit
