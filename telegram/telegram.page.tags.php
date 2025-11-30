<?php
/* ====================
[BEGIN_COT_EXT]
Code=telegram
Hooks=page.tags
[END_COT_EXT]
==================== */

defined('COT_CODE') or die('Wrong URL');

require_once cot_langfile('telegram', 'plug');
require_once cot_incfile('telegram', 'plug');

Resources::linkFileFooter('plugins/telegram/js/telegram.js', 'js');
