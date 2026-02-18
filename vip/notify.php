<?php

$merchantKey = '8ae5508f73c84e808aaaae3fefcaad82';
$method_name = 'UPI';

function connectToDatabase()
{
    $host = 'localhost';
    $dbname = 'u196661280_nwww';
    $username = 'u196661280_nwww';
    $password = '6dw;PZIX+';
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        logError('Error: Could not connect. ' . $e->getMessage());
        die("Error: Could not connect. Please check error.log for details.");
    }
}

function executeSQL($pdo, $sql, $params = [])
{
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    } catch (PDOException $e) {
        logError('SQL Error: ' . $e->getMessage());
        return null;
    }
}

function updateBalance($pdo, $userId, $amount)
{
    logInfo('UserID: ' . $userId);
    $sql = "SELECT deposit_balance FROM users WHERE id = ?";
    $stmt = executeSQL($pdo, $sql, [$userId]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $currentBalance = $row['deposit_balance'];

    $newBalance = $currentBalance + $amount;

    $sql = "UPDATE users SET deposit_balance = ? WHERE id = ?";
    executeSQL($pdo, $sql, [$newBalance, $userId]);
}

function updateUserTransaction($pdo, $userId, $method_name, $order_id, $transaction_id, $amount, $transDate)
{
    $sql = "INSERT INTO deposits (user_id, method_name, order_id, transaction_id, amount, charge_amount, final_amount, date, feedback, status)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    executeSQL($pdo, $sql, [$userId, $method_name, $order_id, $transaction_id, $amount, 0, $amount, $transDate, 'approved by admin', 'approved']);
}

function validateSignature($requestData, $merchantKey)
{
    $sign = $requestData['sign'];

    unset($requestData['sign']);
    unset($requestData['signType']);

    ksort($requestData);

    $queryString = '';
    foreach ($requestData as $key => $value) {
        if (!empty($value) && $key !== 'sign' && $key !== 'sign_type') {
            $queryString .= $key . '=' . $value . '&';
        }
    }
    $queryString = rtrim($queryString, '&');

    $queryString .= '&key=' . $merchantKey;

    $generatedSign = md5($queryString);

    return ($sign === $generatedSign);
}

function getUserIdFromOrderNo($orderNumber)
{
    // $orderNumber2 = 'ORDER1715598770';
    $userId = substr($orderNumber, 11);
    return $userId;
}

function processPaymentNotification($pdo, $requestData, $merchantKey, $method_name)
{
    $oriAmount = $requestData['oriAmount'];
    $orderNo = $requestData['orderNo'];
    $mchOrderNo = $requestData['mchOrderNo'];
    $orderDate = urldecode($requestData['orderDate']);

    $validSignature = validateSignature($requestData, $merchantKey);
    if (!$validSignature) {
        // logError('Invalid signature for payment notification: ' . json_encode($requestData));

        http_response_code(400); // Bad Request
        return;
    }

    $userId = getUserIdFromOrderNo($mchOrderNo);
    if ($userId !== null) {
        updateUserTransaction($pdo, $userId, $method_name, $orderNo, generateRandomString(10), $oriAmount, $orderDate);
        updateBalance($pdo, $userId, $oriAmount);

        http_response_code(200); // OK
        return json_encode(['success' => true]);
    } else {
        logError('User ID not found for order number: ' . $mchOrderNo);
        http_response_code(404); // Not Found
        return json_encode(['success' => false, 'error' => 'User ID not found']);
    }
}

function generateRandomString($length = 6)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

function logError($message)
{
    file_put_contents('error.log', 'Error: ' . $message . PHP_EOL, FILE_APPEND);
}

function logInfo($message)
{
    file_put_contents('error.log', 'Info: ' . $message . PHP_EOL, FILE_APPEND);
}

$requestData = $_POST;
$pdo = connectToDatabase();
$response = processPaymentNotification($pdo, $requestData, $merchantKey, $method_name);
if ($response) {
    header('Content-Type: application/json');
    echo $response;
}
