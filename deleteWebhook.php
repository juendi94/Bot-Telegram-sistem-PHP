<?php

$token = 'isi_token_bot_kamu';
$apiUrl = "https://api.telegram.org/bot{$token}/setWebhook";

// Data untuk menghapus webhook
$data = array(
    'url' => '' // Set URL menjadi kosong atau null untuk menghapus webhook
);

$options = array(
    'http' => array(
        'method' => 'POST',
        'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
        'content' => http_build_query($data),
    ),
);

$context = stream_context_create($options);
$result = file_get_contents($apiUrl, false, $context);

// Cek hasil dari permintaan
if ($result === false) {
    // Terjadi kesalahan dalam menghapus webhook
    echo "Error: " . print_r(error_get_last(), true);
} else {
    // Webhook berhasil dihapus
    echo "Webhook has been removed successfully.";
}
?>
