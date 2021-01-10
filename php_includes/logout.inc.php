<?php

session_start();
$temp = $_SESSION['ref'];
session_unset();
session_destroy();

header("Location: $temp");
