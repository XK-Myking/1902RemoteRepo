<?php

// $_FILES 使用预定义变量接收前端参数
// 
// 数组形式
// 
// 接收数据信息,并没有将文件上传至数据库
// 
// 实际操作中,上传文件操作,需要将制定的文件,上传至服务器等制定的文件夹中
// 
// 通过 move_uploaded_file() 
// 函数来上传文件,到指定的文件夹
// 

echo '<pre>';
print_r($_FILES);
echo '</pre>';

move_uploaded_file($_FILES['file']['tmp_name'] , 'file/1.png');
