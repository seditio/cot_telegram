<?php

function sedby_telegram_import() {
  $content = "\n";
  foreach ($_POST as $key => $value) {
    if ($value && $key != 'x') {
      $content .= "$key:  $value\n";
    }
  };
  $content .= "---\n";
  $content .= Cot::$L['Date'] . " / " . Cot::$L['Time'] . ": " . cot_date('H:i j F Y', Cot::$sys['now']) . "\n";
  $content .= "IP: " . $_SERVER['REMOTE_ADDR'] . "\n";

  /* === Hook === */
  foreach (cot_getextplugins('telegram.add.content') as $pl) {
    include $pl;
  }
  /* ===== */

  return $content;
};

function sedby_telegram_widget($tpl = 'telegram') {
  $t = new XTemplate(cot_tplfile($tpl, 'plug'));
  $t->parse();
  $output = $t->text();
	return $output;
};
