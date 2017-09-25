<?php
ob_start();
session_start();

include ("includes/db_connect.php");

if (isset ($_GET['bruger_id']))
{

}

header ("Location: index.php");  exit;