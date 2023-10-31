<?php
session_start();

// destroy sesion
session_unset();
session_destroy();

header("Location: login.php");