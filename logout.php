<?php
session_start();
session_destroy();//destroys the session
header("location: index.php");
