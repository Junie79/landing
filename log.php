<?php
	if (isset($_GET)) {
		file_put_contents('log.txt', date('d/m/Y') . ' | ' . $_GET['name'] . ' | ' . $_GET['uid'] . PHP_EOL, FILE_APPEND | LOCK_EX)
	}
