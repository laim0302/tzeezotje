<?php

if (empty($_POST['date'])) {
	echo 'Enter date of your visit';
} elseif (empty($_POST['number'])) {
	echo 'Enter number of persons';
} elseif (empty($_POST['phone'])) {
	echo 'Enter your contact phone';
} else {
	echo 'SUCCESSFULL';
}
