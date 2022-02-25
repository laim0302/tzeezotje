<?php

if (empty($_POST['name'])) {
	echo 'Input your name';
} elseif (empty($_POST['email'])) {
	echo 'Input your email';
} elseif (empty($_POST['request'])) {
	echo 'Enter your request';
} else {
	echo 'SUCCESSFULL';
}
