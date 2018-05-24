<?php
require_once ("database.php");
require_once("models/artical.php");
$article = articles_get($_GET['id']);
include ("views/article.php");
