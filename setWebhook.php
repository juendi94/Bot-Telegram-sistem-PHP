<?php
$botToken = 'Isi_dengan_token_bot_telegramMu';
$webhookUrl = 'https://antanet.000webhostapp.com/telegram/antapay/antapay.php';

$apiUrl = "https://api.telegram.org/bot{$botToken}/setWebhook?url={$webhookUrl}";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);

// Cek hasil permintaan
if ($result === false) {
    echo "Failed to set webhook.";
} else {
    echo "Webhook has been set successfully.";
}
