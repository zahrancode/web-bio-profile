<?php
include "config.php";

$id = intval($_GET['id']);

$conn->query("UPDATE links SET clicks = clicks + 1 WHERE id=$id");

$link = $conn->query("SELECT url FROM links WHERE id=$id")->fetch_assoc();

header("Location: ".$link['url']);