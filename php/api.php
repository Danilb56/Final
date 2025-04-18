<?php
// Подключение к БД
$conn = new mysqli('localhost', 'root', '', 'food');
if ($conn->connect_error) die("Ошибка: " . $conn->connect_error);
$conn->set_charset("utf8");

header('Content-Type: application/json');

$action = $_GET['action'] ?? '';

if ($action == 'get') {
    $name = $_GET['name'] ?? '%';
    $type = $_GET['type'] ?? '%';
    $stmt = $conn->prepare("SELECT * FROM restaurants WHERE name LIKE ? AND type LIKE ? LIMIT 10");
    $name = "%$name%";
    $stmt->bind_param('ss', $name, $type);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    echo json_encode($result);
} elseif ($action == 'add') {
    $data = json_decode(file_get_contents('php://input'), true);
    $stmt = $conn->prepare("INSERT INTO restaurants (name, type) VALUES (?, ?)");
    $stmt->bind_param('ss', $data['name'], $data['type']);
    $success = $stmt->execute();
    echo json_encode(['success' => $success]);
} elseif ($action == 'types') {
    $result = $conn->query("SELECT DISTINCT type FROM restaurants")->fetch_all(MYSQLI_ASSOC);
    echo json_encode(array_column($result, 'type'));
}
?>