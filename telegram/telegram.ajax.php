<?php
/* ====================
[BEGIN_COT_EXT]
Code=telegram
Hooks=ajax
[END_COT_EXT]
==================== */

defined('COT_CODE') or die('Wrong URL.');

require_once cot_langfile('telegram', 'plug');
require_once cot_incfile('telegram', 'plug');
require_once cot_incfile('telegram', 'plug', 'cfg.' . $cfg['plugin']['telegram']['code']);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $content = sedby_telegram_import();

  if (trim($content)) {
    $content = $L['telegram_message_from'] . " " . $telegram_title . ' ' . $content;
    $data = [
      'chat_id' => $telegram_chat_id,
      'text' => $content,
      'parse_mode' => 'HTML'
    ];
    $res = file_get_contents('https://api.telegram.org/bot' . $telegram_bot_token . '/sendMessage?' . http_build_query($data));

    $response = array(
      'status'  => true,
      'message' => $L['telegram_message_sent']
    );
  } else {
    $response = array(
      'status'  => false,
      'message' => $L['telegram_message_not_sent']
    );
  };

	cot_sendheaders('application/json', '200 OK');
	echo json_encode($response);
}
