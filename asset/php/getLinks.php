<?php

// エラーレポートをオンにする
ini_set("display_errors", 1);
error_reporting(E_ALL);

header('Content-Type: application/json; charset=UTF-8');

// DB接続設定
$host = 'localhost';
$dbname = 'toin_kagaku_home';
$dbuser = 'toin_kagaku_home';
$dbpass = 'toin_kagaku_home';

// DBへ接続
try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $dbuser, $dbpass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // SQL実行
  $stmt = $pdo->query("SELECT * FROM links");
  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

  // JSON形式で返す
  echo json_encode($rows);

} catch (PDOException $e) {
  echo json_encode(['error' => $e->getMessage()]);
}

?>