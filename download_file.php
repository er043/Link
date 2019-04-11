<?php

$directory = "/home/ak252/public_html/jpg/paper.jpg";
$mimetype = "image/jpg";
$filename= basename($directory);
$filepath=$directory.$filename;
header("Content-Type:".$mimetype);
header('Content-Disposition: attachment;filename="'.$filename.'"');
header("Content-Transfer-Encoding: binary ");
header("Content-Length: ".filesize($filepath));
readfile($filepath);