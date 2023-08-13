<?php

$token = 'isi_dengan_bot_telegramMu';
$apiUrl = "https://api.telegram.org/bot{$token}/sendMessage";

// Fungsi untuk mengirim pesan menggunakan metode cURL
function sendMessage($chatId, $message, $replyMarkup = null) {
    global $apiUrl;

    $data = array(
        'chat_id' => $chatId,
        'text' => $message,
        'reply_markup' => $replyMarkup
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

    return $result;
}

// Fungsi untuk menangani perintah /start
function handleStartCommand($chatId) {
    $message = "Hi! my Name is Juendi. How can I assist you?";

    // Membuat inline keyboard dengan beberapa tombol link
    $keyboard = [
        [
            ['text' => 'Facebook', 'url' => 'https://www.facebook.com/MisterUen'],
            ['text' => 'Instagram', 'url' => 'https://www.instagram.com/MisterUen'],
            ['text' => 'TikTok', 'url' => 'https://www.tiktok.com/@misteruen'],
        ],
        [
            ['text' => 'Telegram', 'url' => 'https://t.me/misteruen'],
            ['text' => 'Blog', 'url' => 'https://kanguen.blogspot.com'],
            ['text' => 'Twitter', 'url' => 'https://www.twitter.com/misteruen'],
        ],
        [
            ['text' => 'YouTube', 'url' => 'https://www.youtube.com/@juendiofficial'],
            ['text' => 'Snapchat', 'url' => 'https://www.snapchat.com/add/cikaretbanten?share_id=tjk_qqTBe_c&locale=id-ID'],
            ['text' => 'Skype', 'url' => 'https://join.skype.com/invite/yAWLbNjq5nkS'],
        ],
        [
            ['text' => 'Discord', 'url' => 'https://discord.gg/nzFWTD7g'],
            ['text' => 'Reddit', 'url' => 'https://www.reddit.com/u/Immediate_Steak4706'],
            ['text' => 'Medium', 'url' => 'https://medium.com/@juendi'],
        ],
        [
            ['text' => 'Pinterest', 'url' => 'https://pin.it/1uARNCh'],
            ['text' => 'Github', 'url' => 'https://github.com/juendi94'],
            ['text' => 'Bussines', 'url' => 'https://chat.whatsapp.com/JWoxdLiUYzH9q058o6APxo'],
        ],
        [
            ['text' => 'HelpDesk', 'url' => 'https://t.me/helpdesk_juendibot'],
            ['text' => 'AntaPay Pulsa', 'url' => 'https://t.me/antapaybot'],
            ['text' => 'Live Chat', 'url' => 'https://tawk.to/chat/649c5a6594cf5d49dc605c43/1h41c28d6'],
        ],
        [
            ['text' => 'CekID', 'url' => 'https://t.me/tgChekIDbot'],
            ['text' => 'WA Center', 'url' => 'https://wa.me/6282246257079'],
            ['text' => 'Gift Me Coffee', 'url' => 'https://www.paypal.me/juendi94'],
        ],
        [
            ['text' => 'GiftMe ☕', 'url' => 'https://m.dana.id/s/catalogue/qzjg9fan'],
            ['text' => '#ShopeeWithMe', 'url' => 'https://shopee.co.id/sidetacv'],
            ['text' => '#PayWithMe', 'url' => 'https://app.midtrans.com/payment-links/1691256272622?utm_source=MM'],
        ],
    ];

    $replyMarkup = buildInlineKeyboard($keyboard);

    sendMessage($chatId, $message, $replyMarkup);
}

// Fungsi untuk menangani perintah lain yang tidak dikenali
function handleOtherCommands($chatId, $text) {
    // Membuat inline keyboard dengan beberapa tombol link
    $keyboard = [];
    switch ($text) {
        case '/whatsapp':
            $whatsappNumber = '+6282246257079';
            $keyboard = [
                [
                    ['text' => 'Contact WhatsApp', 'url' => "https://wa.me/$whatsappNumber"]
                ]
            ];
            break;
        case '/facebook':
            $facebookUrl = 'https://www.facebook.com/MisterUen';
            $keyboard = [
                [
                    ['text' => 'Facebook', 'url' => $facebookUrl]
                ]
            ];
            break;
        case '/instagram':
            $instagramUrl = 'https://www.instagram.com/MisterUen';
            $keyboard = [
                [
                    ['text' => 'Instagram', 'url' => $instagramUrl]
                ]
            ];
            break;
        case '/tiktok':
            $tiktokUrl = 'https://www.tiktok.com/@misteruen';
            $keyboard = [
                [
                    ['text' => 'TikTok', 'url' => $tiktokUrl]
                ]
            ];
            break;
        case '/telegram':
            $telegramUrl = 'https://t.me/misteruen';
            $keyboard = [
                [
                    ['text' => 'Telegram', 'url' => $telegramUrl]
                ]
            ];
            break;
            case '/twitter':
            $twitterUrl = 'https://www.twitter.com/misteruen';            $keyboard = [
                [
                    ['text' => 'Twitter', 'url' => $twitterUrl]
                ]
            ];
            break;
case '/youtube':
            $youtubeUrl = 'https://www.youtube.com/@juendiofficial';
$keyboard = [
                [
                    ['text' => 'Youtube', 'url' => $youtubeUrl]
                ]
            ];
            break;
case '/snapchat':
            $snapchatUrl = 'https://www.snapchat.com/add/cikaretbanten?share_id=tjk_qqTBe_c&locale=id-ID';
          $keyboard = [
                [
                    ['text' => 'Snapchat', 'url' => $snapchatUrl]
                ]
            ];
            break;

        case '/skype':
            $skypeUrl = 'https://join.skype.com/invite/yAWLbNjq5nkS';
$keyboard = [
                [
                    ['text' => 'Skype', 'url' => $skypeUrl]
                ]
            ];
            break;
        case '/discord':
            $discordUrl = 'https://discord.gg/nzFWTD7g';
$keyboard = [
                [
                    ['text' => 'Discord', 'url' => $discordUrl]
                ]
            ];
            break;
        case '/reddit':
            $redditUrl = 'https://www.reddit.com/u/Immediate_Steak4706';
$keyboard = [
                [
                    ['text' => 'Reddit', 'url' => $redditUrl]
                ]
            ];
            break;
        case '/medium':
            $mediumUrl = 'https://medium.com/@juendi';
$keyboard = [
                [
                    ['text' => 'Medium', 'url' => $mediumUrl]
                ]
            ];
            break;
        case '/pinterest':
            $pinterestUrl = 'https://pin.it/1uARNCh';
$keyboard = [
                [
                    ['text' => 'Pinterest', 'url' => $pinterestUrl]
                ]
            ];
            break;
        case '/github':
            $githubUrl = 'https://github.com/juendi94';
$keyboard = [
                [
                    ['text' => 'Github', 'url' => $githubUrl]
                ]
            ];
            break;
case '/bussines':
            $bussinesUrl = 'https://chat.whatsapp.com/JWoxdLiUYzH9q058o6APxo';
            $keyboard = [
                [
                    ['text' => 'Bussines', 'url' => $bussinesUrl]
                ]
            ];
            break;

case '/blog':
            $blogUrl = 'https://kanguen.blogspot.com';
            $keyboard = [
                [
                    ['text' => 'Blog', 'url' => $blogUrl]
                ]
            ];
            break;
            
case '/tgcekidbot':
            $tgcekidbotUrl = 'https://t.me/tgChekIDbot';
            $keyboard = [
                [
                    ['text' => 'Cek ID', 'url' => $tgcekidbotUrl]
                ]
            ];
            break;  

case '/helpdesk':
            $helpdeskUrl = 'https://t.me/helpdesk_juendibot';
            $keyboard = [
                [
                    ['text' => 'Help Desk', 'url' => $helpdeskUrl]
                ]
            ];
            break;
            
case '/antapaybot':
            $antapaybotUrl = 'https://t.me/antapaybot';
            $keyboard = [
                [
                    ['text' => 'Anta Pulsa Payment', 'url' => $antapaybotUrl]
                ]
            ];
            break;           

case '/livechat':
            $livechatUrl = 'https://tawk.to/chat/649c5a6594cf5d49dc605c43/1h41c28d6';
            $keyboard = [
                [
                    ['text' => 'Live Chat', 'url' => $livechatUrl]
                ]
            ];
            break;
            
        // Add more cases for other commands with their respective URLs
        // ...
        default:
            // Jika pesan tidak mengandung perintah, teruskan ke akun @misteruen
            forwardMessageToMisterUEN($chatId, $text);
            return;
    }

    // Kirim inline keyboard sebagai balasan
    $replyMarkup = json_encode(['inline_keyboard' => $keyboard]);
    sendMessage($chatId, "Click to connect with Mr.Juendi 👇", $replyMarkup);
}


// Fungsi untuk meneruskan pesan ke akun @misteruen
function forwardMessageToMisterUEN($chatId, $text) {
    // Ganti ID Telegram dan username @misteruen sesuai dengan informasi Anda
    $misterUENId = '6105732050';
    $message = "Message from user $chatId:\n$text";
    sendMessage($misterUENId, $message);
}


// Ambil data dari permintaan
$update = json_decode(file_get_contents('php://input'), true);
// Fungsi untuk membangun inline keyboard
function buildInlineKeyboard($keyboard) {
    return json_encode(['inline_keyboard' => $keyboard]);
}


// Periksa apakah data valid
if (isset($update['message'])) {
    $message = $update['message'];
    $chatId = $message['chat']['id'];
    $text = $message['text'];

    // Periksa apakah pesan mengandung perintah /start
    if ($text === '/start') {
        handleStartCommand($chatId);
    } else {
        // Tangani perintah lain yang tidak dikenali
        handleOtherCommands($chatId, $text);
    }
}
?>
