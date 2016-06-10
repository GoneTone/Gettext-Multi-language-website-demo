<?php
/*
  ��ު��� TechPlayer
  https://www.techplayer.org
*/
preg_match('/^([a-z\-]+)/i', $_SERVER['HTTP_ACCEPT_LANGUAGE'], $matches); // ���R HTTP_ACCEPT_LANGUAGE ���ݩ�
$lang = $matches[1]; // ���Ĥ@�y���]�m
$lang = strtolower($lang); // �ഫ���p�g
// �q�{�y�� & ����
$lang = $lang;
putenv('LANG=en_US');
setlocale(LC_ALL, $lang);

$lang = isset($_GET['lang']) ? $_GET['lang'] : $lang;

if ('en-us' == $lang) {
    putenv('LANG=en_US');
    setlocale(LC_ALL, 'en_US');
} else if ('zh-tw' == $lang) {
    putenv('LANG=zh_TW');
    setlocale(LC_ALL, 'zh_TW'); // bsd use zh_TW.BIG5
	header('Content-type: text/html; charset=big5');
} else if ('zh-cn' == $lang) {
    putenv('LANG=zh_CN');
    setlocale(LC_ALL, 'zh_CN'); // bsd use zh_CN.GBK
	header('Content-type: text/html; charset=gbk');
}

define('PACKAGE', 'demo');

// gettext �]�w
bindtextdomain(PACKAGE, 'lang'); // or $your_path/lang, ex: /var/www/test/lang
textdomain(PACKAGE);
?>