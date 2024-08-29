<?php

include '../config/config.php';

$host = $var_host;
$user = $var_user;
$pass = $var_pass;
$db = $var_db;

try {
  $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  echo "Connected successfully";
}
catch(PDOException $e){
  echo "Connection failed: " . $e->getMessage();
}

function addUserToDatabase($pdo,$discord_id,$discord_avatar){
    $sql = "INSERT INTO users (discord_id,discord_avatar) VALUES (:discord_id,:discord_avatar)";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'discord_id'=>$discord_id,
            'discord_avatar'=>$discord_avatar,
        ]);
        echo 'inserted successfully';
    } catch (Exception $e) {
        echo $e;
    }
}

function getUserFromDatabase($pdo,$discord_id){
    $sql = "SELECT * FROM users WHERE discord_id=:discord_id";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'discord_id'=>$discord_id,
        ]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data;
    } catch (Exception $e) {
        echo $e;
    }
}

function getAllUsersFromDatabase($pdo){
    $sql = "SELECT * FROM users";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    } catch (Exception $e) {
        echo $e;
    }
}

function getDutyTimeByLicenseIdentifier($pdo, $license_identifier) {
    $sql = "SELECT SUM(time_on_duty) as total_time_on_duty FROM duty_logs WHERE license_identifier = :license_identifier";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['license_identifier' => $license_identifier]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data['total_time_on_duty'] ?? 0;
    } catch (Exception $e) {
        echo $e;
    }
}

$license_identifier = 'license:2e31f99ac6dd7ffa3bdf0365e7d300fb4f888250';
$total_time_on_duty = getDutyTimeByLicenseIdentifier($pdo, $license_identifier);

$hours = floor($total_time_on_duty / 60);
$minutes = $total_time_on_duty % 60;