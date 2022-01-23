<?php
session_start();

if(!$_SESSION['login']) {
	header('Location: website/index.html');
	exit();
}