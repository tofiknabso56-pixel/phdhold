<?php

$merchant_id = '888008104';
$secret_key = '8ae5508f73c84e808aaaae3fefcaad82';

$bank_code = 'IDPT0001';
$pay_type = "102";

$amount_inr = isset($_GET['amount']) ? $_GET['amount'] : 100;

$userId = isset($_GET['userId']) ? $_GET['userId'] : null;

$notify_url = 'https://crombook.site/vip/notify.php';
$page_url = 'https://crombook.site/vip/success';

class PaymentAPI
{

    private $base_url;
    private $merchant_id;
    private $secret_key;

    public function __construct($base_url, $merchant_id, $secret_key)
    {
        $this->base_url = $base_url;
        $this->merchant_id = $merchant_id;
        $this->secret_key = $secret_key;
    }

    public function makePayment($order_no, $amount, $notify_url, $page_url, $bank_code, $pay_type)
    {
        $data = array(
            'version' => '1.0',
            'mch_id' => $this->merchant_id,
            'notify_url' => $notify_url,
            'page_url' => $page_url,
            'mch_order_no' => $order_no,
            'pay_type' => $pay_type,
            'trade_amount' => $amount,
            'order_date' => date('Y-m-d H:i:s'),
            'bank_code' => $bank_code,
            'goods_name' => 'Deposit',
            'sign_type' => 'MD5',
            'mch_return_msg' => 'Automatic Deposit'
        );

        $data['sign'] = $this->generateSignature($data);

        return $this->sendRequest($this->base_url . '/pay/web', $data);
    }

    public function generateSignature($data)
    {
        ksort($data);

        $queryString = '';
        foreach ($data as $key => $value) {
            if (!empty($value) && $key !== 'sign' && $key !== 'sign_type') {
                $queryString .= $key . '=' . $value . '&';
            }
        }

        $queryString = rtrim($queryString, '&');

        $queryString .= '&key=' . $this->secret_key;

        $signature = md5($queryString);

        return $signature;
    }

    private function sendRequest($url, $data)
    {
        $options = array(
            'http' => array(
                'method' => 'POST',
                'header' => "Content-type: application/x-www-form-urlencoded\r\n" .
                    "Content-Encoding: gzip\r\n",
                'content' => http_build_query($data),
                'timeout' => 15 * 60
            )
        );
        $context = stream_context_create($options);
        return file_get_contents($url, false, $context);
    }

    private function generateRandomString($length = 6)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randomString;
    }

    public function generateOrderNumber($userId)
    {
        $randomDigits = $this->generateRandomString(6);
        return 'ORDER' . $randomDigits . $userId;
    }
}

$paymentAPI = new PaymentAPI('https://pay.sunpayonline.xyz', $merchant_id, $secret_key);

if ($userId !== null) {
    $order_no = $paymentAPI->generateOrderNumber($userId);
    $response = $paymentAPI->makePayment($order_no, $amount_inr, $notify_url, $page_url, $bank_code, $pay_type);
} else {
    echo 'Payment request failed. UserID Is Required';
}

$responseData = json_decode($response, true);

if ($responseData['respCode'] === 'SUCCESS' && $responseData['tradeResult'] === '1') {
    header('Location: ' . $responseData['payInfo']);
    exit;
} else {
    echo 'Payment request failed.';
}
