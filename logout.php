<?php
include('dbcon.php');
include('session.php');

 session_destroy();
header('location:index.html');
