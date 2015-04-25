<?php

/**
*
* @package - mChat
* @version $Id: info_acp_mchat.php
* @copyright (c) 2010 RMcGirr83 ( http://www.rmcgirr83.org/ )
* @copyright (c) 2009 phpbb3bbcodes.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters for use
// ’ » “ ” …


$lang = array_merge($lang, array(

	// UMIL stuff
	'ACP_MCHAT_CONFIG'				=> 'Nastavenia',
	'ACP_CAT_MCHAT'					=> 'mChat',
	'ACP_MCHAT_TITLE'				=> 'Mini-Chat',
	'ACP_MCHAT_TITLE_EXPLAIN'		=> 'Mini chat (aka “shout box”) pre Vaše fórum',
	'MCHAT_TABLE_DELETED'			=> 'Tabuľka mChatu bola úspešne vymazaná',
	'MCHAT_TABLE_CREATED'			=> 'Tabuľka mChatu bola úspešne vytvorená',
	'MCHAT_TABLE_UPDATED'			=> 'Tabuľka mChatu bola úspešne aktualizovaná',
	'MCHAT_NOTHING_TO_UPDATE'		=> 'Nič....pokračujem',
	'UCP_CAT_MCHAT'					=> 'Predvoľby mChatu',
	'UCP_MCHAT_CONFIG'				=> 'Predvoľby uživateľa mChatu',

	// ACP entries
	'ACP_MCHAT_RULES'				=> 'Pravidlá',
	'ACP_MCHAT_RULES_EXPLAIN'		=> 'Sem vložte pravidlá fóra.  Každé pravidlo na nový riadok.<br />Môžete vložiť maximálne 255 znakov.<br /><strong>Tento vzkaz môže byť preložený.</strong> (musíte upravit súbor mchat_lang.php a prečítať si inštrukcie).',
	'LOG_MCHAT_CONFIG_UPDATE'		=> '<strong>Aktualizované nastavenia mChatu </strong>',
	'MCHAT_CONFIG_SAVED'			=> 'Nastavenia Mini Chatu boli aktualizované',
	'MCHAT_TITLE'					=> 'Mini-Chat',
	'MCHAT_VERSION'					=> 'Verzia:',
	'MCHAT_ENABLE'					=> 'Povoliť mChat MOD',
	'MCHAT_ENABLE_EXPLAIN'			=> 'Globálne povoliť alebo zakázať mChat.',
	'MCHAT_AVATARS'					=> 'Zobraziť avatary',
	'MCHAT_AVATARS_EXPLAIN'			=> 'Ak vyberiete Áno, bude povolené zobrazenie zmenšených avatarov',	
	'MCHAT_ON_INDEX'				=> 'mChat na Indexe',
	'MCHAT_ON_INDEX_EXPLAIN'		=> 'Povoliť zobrazenie mChatu na Indexe.',
	'MCHAT_INDEX_HEIGHT'			=> 'Výška na Indexe',
	'MCHAT_INDEX_HEIGHT_EXPLAIN'	=> 'Výška chatovacieho boxu v pixeloch na Indexe fóra.<br /><em>Môžete použiť hodnotu od 50 do 1000</em>.',
	'MCHAT_LOCATION'				=> 'Poloha na Fóre',
	'MCHAT_LOCATION_EXPLAIN'		=> 'Vyberte polohu mChatu na Indexe.',
	'MCHAT_TOP_OF_FORUM'			=> 'Nahore na Fóre',
	'MCHAT_BOTTOM_OF_FORUM'			=> 'Dole na Fóre',
	'MCHAT_REFRESH'					=> 'Aktualizácia',
	'MCHAT_REFRESH_EXPLAIN'			=> 'Počet sekúnd pred tím, než sa chat automaticky aktualizuje.<br /><em>Môžete použiť čas od 5 do 60 sekúnd</em>.',
	'MCHAT_PRUNE'					=> 'Povoliť prečistenie',
	'MCHAT_PRUNE_EXPLAIN'			=> 'Zvoľte Áno pre povolené funkcie prečistenia.<br /><em>K prečisteniu dojde len pokiaľ je uživateľ na vlastnej stránke alebo na Archíve</em>.',
	'MCHAT_PRUNE_NUM'				=> 'Prečisťovacie číslo',
	'MCHAT_PRUNE_NUM_EXPLAIN'		=> 'Počet vzkazov, ktoré chcete ponechať v chate.',	
	'MCHAT_MESSAGE_LIMIT'			=> 'Obmedzenie vzkazov',
	'MCHAT_MESSAGE_LIMIT_EXPLAIN'	=> 'Maximálny počet vzkazov zobrazených v boxe chate.<br /><em>Je doporučené od 10 do 30</em>.',
	'MCHAT_MESSAGE_NUM'				=> 'Počet vzkazov na obsahu fóra',
	'MCHAT_MESSAGE_NUM_EXPLAIN'	=> 'Maximálny počet vzkazov, ktoré budú zobrazené v okne chatu, ktoré je na obsahu (indexe) fóra.<br /><em>Je doporučený počet od 10 do 50</em>.',
	'MCHAT_ARCHIVE_LIMIT'			=> 'Obmedzenie Archívu',
	'MCHAT_ARCHIVE_LIMIT_EXPLAIN'	=> 'Maximálny počet vzkazov na stránku zobrazených na stránke Archívu.<br /> <em>Je doporučený počet od 25 do 50</em>.',
	'MCHAT_FLOOD_TIME'				=> 'Časové obmedzenie',
	'MCHAT_FLOOD_TIME_EXPLAIN'		=> 'Doba v sekundách, po ktorú uživateľ musí počkat pred tým, než pošle do chatu daľší vzkaz.<br /><em>Je doporučené od 5 do 30, pre vypnutie funkcie vložte 0</em>.',
	'MCHAT_MAX_MESSAGE_LENGTH'			=> 'Maximálna dĺžka vzkazu',
	'MCHAT_MAX_MESSAGE_LENGTH_EXPLAIN'	=> 'Maximálny počet povolených znakov na poslaný vzkaz.<br /><em>Je doporučený počet od 100 do 500, pro vypnutie funkcie vložte 0</em>.',
	'MCHAT_CUSTOM_PAGE'				=> 'Vlastná stránka',
	'MCHAT_CUSTOM_PAGE_EXPLAIN'		=> 'Povoliť použitie samostatnej stránky pre mChat',
	'MCHAT_CUSTOM_HEIGHT'			=> 'Výška na vlastnej stránke',
	'MCHAT_CUSTOM_HEIGHT_EXPLAIN'	=> 'Výška chatovacieho boxu v pixeloch na samostatnej stránke mChatu.<br /><em>Môžete použiť hodnotu od 50 do 1000</em>.',
	'MCHAT_DATE_FORMAT'				=> 'Formát dátumu',
	'MCHAT_DATE_FORMAT_EXPLAIN'		=> 'Použitá syntax je zhodná s funkciou PHP <a href="http://www.php.net/date">date()</a>.',
	'MCHAT_CUSTOM_DATEFORMAT'		=> 'Vlastné…',
	'MCHAT_WHOIS'					=> 'Whois',
	'MCHAT_WHOIS_EXPLAIN'			=> 'Umožniť zobraziť chatujúcich uživateľov',
	'MCHAT_WHOIS_REFRESH'			=> 'Whois obnovenie',
	'MCHAT_WHOIS_REFRESH_EXPLAIN'	=> 'Počet sekúnd pred tím, než sa whois štatistiky obnovia.<br /><em>Môžete použiť čas od 30 do 300 sekúnd</em>.',
	'MCHAT_BBCODES_DISALLOWED'		=> 'Nepovolené BBKódy',
	'MCHAT_BBCODES_DISALLOWED_EXPLAIN'	=> 'Sem môžete vložiť BBKódy, ktoré <strong>nechcete</strong> použiť v vzkazoch.<br />Oddeľte BBKódy vertikálnou linkou, napríklad: <br />b|i|u|code|list|list=|flash|quote a/alebo %smeno vlastného BBKódu%s',
	'MCHAT_STATIC_MESSAGE'			=> 'Statický vzkaz',
	'MCHAT_STATIC_MESSAGE_EXPLAIN'	=> 'Tu môžete definovať statický vzkaz, ktorý sa zobrazí uživateľom chatu. HTML tagy sú povolené.<br />Pre vypnutie funkcie nechte prázdne.  Môžete použiť maximálne 255 znakov.<br /><strong>Tento vzkaz môže byť preložený.</strong>  (musíte upraviť súbor mchat_lang.php file a prečítať si inštrukcie).',
	'MCHAT_USER_TIMEOUT'			=> 'Časový limit uživateľa',
	'MCHAT_USER_TIMEOUT_EXPLAIN'	=> 'Vložte množstvo času v sekundách pokiaľ session uživateľa v chate neskončí. Vložte 0 pre časový limit bez obmedzenia.<br /><em>Ste obmedzení %snastavením dĺžky session fóra%s , ktorá je momentálne nastavená na %s sekúnd</em>',
	'MCHAT_OVERRIDE_SMILIE_LIMIT'	=> 'Potlačiť obmedzenia smajlíkov',
	'MCHAT_OVERRIDE_SMILIE_LIMIT_EXPLAIN'	=> 'Vyberte Áno pre potlačenie obmedzenie limitu smajlíkov fórom vo vzkazoch v chatu',
	'MCHAT_OVERRIDE_MIN_POST_CHARS'	=> 'Potlačiť obmedzenie minima znakov',
	'MCHAT_OVERRIDE_MIN_POST_CHARS_EXPLAIN'	=> 'Vyberte Áno pre potlačenie nastavení minima znakov fórom vo vzkazoch v chate',
	'MCHAT_NEW_POSTS'				=> 'Zobraziť nové príspevky',
	'MCHAT_NEW_POSTS_EXPLAIN'		=> 'Vyberte Áno pre povolenie zobrazovania nových príspevkov z fóra v boxu sa vzkazy chatu<br /><strong>Musíte mať nainštalovaný doplnok pre posielanie upozornení na nové príspevky</strong> (Nachádza sa v adresári contrib v download módu).',
	'MCHAT_MAIN'					=> 'Hlavné nastavenia',
	'MCHAT_STATS'					=> 'Kto chatuje',
	'MCHAT_STATS_INDEX'				=> 'Štatistiky na Indexe',
	'MCHAT_STATS_INDEX_EXPLAIN'		=> 'Zobraziť, kto chatuje v štatistikách fóra',
	'MCHAT_MESSAGES'				=> 'Nastavenie vzkazov',
	'MCHAT_PAUSE_ON_INPUT'			=> 'Pozastaviť pri písaní',
	'MCHAT_PAUSE_ON_INPUT_EXPLAIN'	=> 'Pokiaľ nastavíte Áno, chat sa nebude automaticky aktualizovať, keď uživateľ bude vkladať vzkaz',
	
	// error reporting
	'MCHAT_NEEDS_UPDATING'	=> 'mChat mód potrebuje aktualizovať.  Upozornite, prosím, zakladateľa fóra, aby navštívil tuto sekciu a spustil aktualizáciu.',
	'MCHAT_WRONG_VERSION'	=> 'Je nainštalovaná zlá verzia módu.  Prosím, spustite %sinštalátor%s k aktualizácii na novú verziu modifikácie.',
	'WARNING'	=> 'Varovanie',
	'TOO_LONG_DATE'		=> 'Vložený formát dátumu je príliš dlhý.',
	'TOO_SHORT_DATE'	=> 'Vložený formát dátumu je příliš krátký.',
	'TOO_SMALL_REFRESH'	=> 'Hodnota pro aktualizace je příliš nízká.',
	'TOO_LARGE_REFRESH'	=> 'Hodnota pro aktualizace je příliš vysoká.',
	'TOO_SMALL_MESSAGE_LIMIT'	=> 'Hodnota omezení vzkazů je příliš nízká.',
	'TOO_LARGE_MESSAGE_LIMIT'	=> 'Hodnota omezení vzkazů je příliš vysoká.',
	'TOO_SMALL_ARCHIVE_LIMIT'	=> 'Hodnota omezení Archivu je příliš nízká.',
	'TOO_LARGE_ARCHIVE_LIMIT'	=> 'Hodnota omezení Archivu je příliš vysoká.',
	'TOO_SMALL_FLOOD_TIME'	=> 'Hodnota časového omezení je příliš nízká.',
	'TOO_LARGE_FLOOD_TIME'	=> 'Hodnota časového omezení je příliš vysoká.',
	'TOO_SMALL_MAX_MESSAGE_LNGTH'	=> 'Hodnota maximální délky vzkazu je příliš nízká.',
	'TOO_LARGE_MAX_MESSAGE_LNGTH'	=> 'Hodnota maximální délky vzkazu je příliš vysoká.',
	'TOO_SMALL_MAX_WORDS_LNGTH'	=> 'Hodnota maximální délky slov je příliš nízká.',
	'TOO_LARGE_MAX_WORDS_LNGTH'	=> 'Hodnota maximální délky slov je příliš nízká.',
	'TOO_SMALL_WHOIS_REFRESH'	=> 'Hodnota whois obnovení je příliš nízká.',
	'TOO_LARGE_WHOIS_REFRESH'	=> 'Hodnota whois obnovení je příliš vysoká.',	
	'TOO_SMALL_INDEX_HEIGHT'	=> 'Hodnota výšky na Indexu je příliš nízká.',
	'TOO_LARGE_INDEX_HEIGHT'	=> 'Hodnota výšky na Indexu je příliš vysoká.',
	'TOO_SMALL_CUSTOM_HEIGHT'	=> 'Hodnota výšky na vlastní stránce je příliš nízká.',
	'TOO_LARGE_CUSTOM_HEIGHT'	=> 'Hodnota výšky na vlastní stránce je příliš vysoká.',
	'TOO_SHORT_STATIC_MESSAGE'	=> 'Hodnota statického vzkazu je příliš nízká.',
	'TOO_LONG_STATIC_MESSAGE'	=> 'Hodnota statického vzkazu je příliš vysoká.',	
	'TOO_SMALL_TIMEOUT'	=> 'Hodnota časového limitu uživatele je příliš nízká.',
	'TOO_LARGE_TIMEOUT'	=> 'Hodnota časového limitu uživatele je příliš vysoká.',
	
));

?>
