<?php
$conn = msqli_connect('localhost', 'root', '', 'login-system');

if(!$conn){
	echo "failed to connect!";
};
