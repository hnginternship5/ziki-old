<?php
include 'includes/config.php';
require_once 'config.php';
require_once __DIR__ . '/vendor/autoload.php';
require_once 'functions/rss.php';
extract($_SESSION);

$data = file_get_contents("posts.json");
$posts = json_decode($data, true);

header('Content-Type: application/rss+xml');
// Show an RSS feed with the 30 latest posts
$content = "<h2>Welcome</h2><p>dhbcjkhcjkckj</p>";
$post = get_posts($content);
$name = "Adroit"; $email ="adroit@mail.com";
$site_url = "me.tech";
generate_rss($post, $name, $email, $site_url);



