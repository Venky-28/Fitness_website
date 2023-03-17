<?php
session_save_path("sessionfiles");
session_start();
session_destroy();
header("location:index.html");
?>