<?php
/**
*
* @package mChat
* @version $Id: mchat_lang.php
* @copyright (c) RMcGirr83 ( http://www.rmcgirr83.org/ )
* @copyright (c) djs596 ( http://djs596.com/ ), (c) Stokerpiller ( http://www.phpbb3bbcodes.com/ )
* @copyright (c) By Shapoval Andrey Vladimirovich (AllCity) ~ http://allcity.net.ru/
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
**/

/**
* DO NOT CHANGE!
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
// Some characters you may want to copy&paste (Unicode characters):
// ’ » “ ” …
//

$lang = array_merge($lang, array(

	// MCHAT
	'MCHAT_ADD'					=> 'Poslať',
	'MCHAT_ANNOUNCEMENT'		=> 'Oznámenie',
	'MCHAT_ARCHIVE'				=> 'Archív',	
	'MCHAT_ARCHIVE_PAGE'		=> 'Archív Mini-Chatu',	
	'MCHAT_BBCODES'				=> 'BBKódy',
	'MCHAT_CLEAN'				=> 'Prečistiť',
	'MCHAT_CLEANED'				=> 'Všetky vzkazy boli úspešne zmazané',
	'MCHAT_CLEAR_INPUT'			=> 'Resetovať',
	'MCHAT_COPYRIGHT'			=> '&copy; <a href="http://www.rmcgirr83.org/">RMcGirr83.org</a>',
	'MCHAT_CUSTOM_BBCODES'		=> 'Vlastné BBKódy',
	'MCHAT_DELALLMESS'			=> 'Zmazať všetky vzkazy?',
	'MCHAT_DELCONFIRM'			=> 'Naozaj chcete zmazať?',
	'MCHAT_DELITE'				=> 'Zmazať',
	'MCHAT_EDIT'				=> 'Upraviť',
	'MCHAT_EDITINFO'			=> 'Upravte vzkaz a kliknite na OK',
	'MCHAT_ENABLE'				=> 'Ospravedlňujem sa, ale Mini-Chat nie je momentálne dostupný',	
	'MCHAT_ERROR'				=> 'Chyba',	
	'MCHAT_FLOOD'				=> 'Nemôžete poslať vzkaz tak skoro po Vašom poslednom vzkaze',	
	'MCHAT_FOE'					=> 'Túto správu odoslal uživateľ <strong>%1$s</strong>, ktorý je v súčasnej dobe vo Vašom zozname ignorovaných.',
	'MCHAT_HELP'				=> 'Pravidlá mChatu',
// uncomment and translate the following line for languages for the rules in the chat area
// <br /> signifies a new line, see above for Unicode characters to use
	//'MCHAT_RULES'				=> 'Nepoužívat vulgarity<br />Nevkládejte reklamu na váš web<br />Nepsat několik vzkazů za sebou<br />Nepsat nesmyslné vzkazy<br />Neposílejte vzkazy složené jen ze smajlíků',	
	'MCHAT_HIDE_LIST'			=> 'Skryť zoznam',	
	'MCHAT_HOUR'				=> 'hodinu',
	'MCHAT_HOURS'				=> 'hodín',
	'MCHAT_IP'	            	=> 'IP whois pre',
	
	'MCHAT_MINUTE'				=> 'minúta ',
	'MCHAT_MINUTES'				=> 'minút ',
	'MCHAT_MESS_LONG'			=> 'Váš vzkaz je príliš dlhý.\nMaximálna dĺžka vzkazu je %s znakov',	
	'MCHAT_NO_CUSTOM_PAGE'		=> 'Vlastná stránka mChatu není momentálne aktivovaná!',	
	'MCHAT_NOACCESS'			=> 'Nemáte oprávnenie k chatovániu v mChatu',
	'MCHAT_NOACCESS_ARCHIVE'	=> 'Nemáte oprávnenie k zobrazeniu archívu',	
	'MCHAT_NOJAVASCRIPT'		=> 'Váš prehliadač nepodporuje JavaScript alebo máte JavaScript zakázaný',		
	'MCHAT_NOMESSAGE'			=> 'Žiadne vzkazy',
	'MCHAT_NOMESSAGEINPUT'		=> 'Nevložil(a) ste žádný vzkaz',
	'MCHAT_NOSMILE'				=> 'Smajlíci neboli nájdený',
	'MCHAT_NOTINSTALLED_USER'	=> 'mChat není nainštalováný. Upozornite prosím, zakladateľa fóra.',
	'MCHAT_NOT_INSTALLED'		=> 'V databázi mChatu chybí data.<br />Prosím, spusťte %sinstalátor%s pro provedení změn v databázi, které jsou nutné pro funkci modifikace.',
	'MCHAT_OK'					=> 'OK',
	'MCHAT_PAUSE'				=> 'Pozastavené',
	'MCHAT_LOAD'				=> 'Načítávanie',      
	'MCHAT_PERMISSIONS'			=> 'Zmeniť oprávnenie uživateľov',
	'MCHAT_REFRESHING'			=> 'Aktualizujem...',
	'MCHAT_REFRESH_NO'			=> 'Automatická aktualizácia chatu je vypnutá',
	'MCHAT_REFRESH_YES'			=> 'Aktualizácia chatu prebieha každých <strong>%d</strong> sekúnd',
	'MCHAT_RESPOND'				=> 'Odpovedať uživateľovi',
	'MCHAT_RESET_QUESTION'		=> 'Vyčistiť priestor pre písanie?',
	'MCHAT_SESSION_OUT'			=> 'Chat session vypršala',	
	'MCHAT_SHOW_LIST'			=> 'Zobraziť zoznam',
	'MCHAT_SECOND'				=> 'sekunda ',
	'MCHAT_SECONDS'				=> 'sekúnd ',
	'MCHAT_SESSION_ENDS'		=> 'Chat session skončí v',
	'MCHAT_SMILES'				=> 'Smajlíci',

	'MCHAT_TOTALMESSAGES'		=> 'Celkový počet vzkazov: <strong>%s</strong>',
	'MCHAT_USESOUND'			=> 'Použiť zvuk?',
	
// uncomment and translate the following line for languages for the static message in the chat area
//	'STATIC_MESSAGE'			=> 'Sem napíšte čokoľvek chcete',
	// whois chatting stuff

	'MCHAT_ONLINE_USERS_TOTAL'			=> 'Momentálne tu chatuje <strong>%d</strong> uživateľov ',
	'MCHAT_ONLINE_USER_TOTAL'			=> 'Momentálne tu chatuje <strong>%d</strong> uživateľ ',
	'MCHAT_NO_CHATTERS'					=> 'Nikto nechatuje',
	'MCHAT_ONLINE_EXPLAIN'				=> 'založené na uživateľoch aktivných za posledných %s',
	
	'WHO_IS_CHATTING'			=> 'Kto chatuje',
	'WHO_IS_REFRESH_EXPLAIN'	=> 'Aktualizuje sa každých <strong>%d</strong> sekúnd',
	'MCHAT_NEW_TOPIC'			=> '<strong>Nová téma</strong>',		
	
	// UCP
	'UCP_PROFILE_MCHAT'	=> 'Nastavenia mChatu',
	
	'DISPLAY_MCHAT' 	=> 'Zobraziť mChat na Indexe',
	'SOUND_MCHAT'		=> 'Povoliť zvuk v mChatu',
	'DISPLAY_STATS_INDEX'	=> 'Zobraziť štatistiky "Kdo chatuje" na Indexe',
	'DISPLAY_NEW_TOPICS'	=> 'Zobraziť nové témy v chatu',
	'DISPLAY_AVATARS'	=> 'Zobraziť avatary v chatu',
	'CHAT_AREA'		=> 'Typ vstupného poľa',
	'CHAT_AREA_EXPLAIN'	=> 'Vyberte, aký typ vstupného poľa pre písanie do chatu chcete používať:<br />jednoriadkové pole alebo<br />viacriadkové pole',
	'INPUT_AREA'		=> 'Viacriadkové pole',
	'TEXT_AREA'			=> 'Jednoriadkové pole',	
	
	// ACP
	'USER_MCHAT_UPDATED'	=> 'Uživateľove nastavenia mChatu boli aktualizováné',
));
?>
