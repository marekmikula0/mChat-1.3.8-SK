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
	'MCHAT_ADD'					=> 'Poslat',
	'MCHAT_ANNOUNCEMENT'		=> 'Oznámení',
	'MCHAT_ARCHIVE'				=> 'Archiv',	
	'MCHAT_ARCHIVE_PAGE'		=> 'Archiv Mini-Chatu',	
	'MCHAT_BBCODES'				=> 'BBCody',
	'MCHAT_CLEAN'				=> 'Pročistit',
	'MCHAT_CLEANED'				=> 'Všechny vzkazy byly úspěšně smazány',
	'MCHAT_CLEAR_INPUT'			=> 'Resetovat',
	'MCHAT_COPYRIGHT'			=> '&copy; <a href="http://www.rmcgirr83.org/">RMcGirr83.org</a>',
	'MCHAT_CUSTOM_BBCODES'		=> 'Vlastní BBCody',
	'MCHAT_DELALLMESS'			=> 'Smazat všechny vzkazy?',
	'MCHAT_DELCONFIRM'			=> 'Opravdu chcete smazat?',
	'MCHAT_DELITE'				=> 'Smazat',
	'MCHAT_EDIT'				=> 'Upravit',
	'MCHAT_EDITINFO'			=> 'Upravte vzkaz a klikněte na OK',
	'MCHAT_ENABLE'				=> 'Omlouvám se, ale Mini-Chat není momentálně dostupný',	
	'MCHAT_ERROR'				=> 'Chyba',	
	'MCHAT_FLOOD'				=> 'Nemůžete poslat vzkaz tak brzy po vašem posledním vzkazu',	
	'MCHAT_FOE'					=> 'Tuto zprávu odeslal uživatel <strong>%1$s</strong>, který je v současné době ve vašem seznamu ignorovaných.',
	'MCHAT_HELP'				=> 'Pravidla mChatu',
// uncomment and translate the following line for languages for the rules in the chat area
// <br /> signifies a new line, see above for Unicode characters to use
	//'MCHAT_RULES'				=> 'Nepoužívat vulgarity<br />Nevkládejte reklamu na váš web<br />Nepsat několik vzkazů za sebou<br />Nepsat nesmyslné vzkazy<br />Neposílejte vzkazy složené jen ze smajlíků',	
	'MCHAT_HIDE_LIST'			=> 'Skrýt seznam',	
	'MCHAT_HOUR'				=> 'hodinu ',
	'MCHAT_HOURS'				=> 'hodin',
	'MCHAT_IP'	            	=> 'IP whois pro',
	
	'MCHAT_MINUTE'				=> 'minuta ',
	'MCHAT_MINUTES'				=> 'minut ',
	'MCHAT_MESS_LONG'			=> 'Váš vzkaz je příliš dlouhý.\nMaximální délka vzkazu je %s znaků',	
	'MCHAT_NO_CUSTOM_PAGE'		=> 'Vlastní stránka mChatu není momentálně aktivovaná!',	
	'MCHAT_NOACCESS'			=> 'Nemáte oprávnění k chatování v mChatu',
	'MCHAT_NOACCESS_ARCHIVE'	=> 'Nemáte oprávnění k zobrazení archivu',	
	'MCHAT_NOJAVASCRIPT'		=> 'Váš prohlížeč nepodporuje JavaScript nebo máte JavaScript zakázán',		
	'MCHAT_NOMESSAGE'			=> 'Žádné vzkazy',
	'MCHAT_NOMESSAGEINPUT'		=> 'Nevložil(a) jste žádný vzkaz',
	'MCHAT_NOSMILE'				=> 'Smajlíci nenalezeni',
	'MCHAT_NOTINSTALLED_USER'	=> 'mChat není nainstalován. Upozorněte prosím, zakladatele fóra.',
	'MCHAT_NOT_INSTALLED'		=> 'V databázi mChatu chybí data.<br />Prosím, spusťte %sinstalátor%s pro provedení změn v databázi, které jsou nutné pro funkci modifikace.',
	'MCHAT_OK'					=> 'OK',
	'MCHAT_PAUSE'				=> 'Pozastaveno',
	'MCHAT_LOAD'				=> 'Načítání',      
	'MCHAT_PERMISSIONS'			=> 'Změnit oprávnění uživatelů',
	'MCHAT_REFRESHING'			=> 'Aktualizuji...',
	'MCHAT_REFRESH_NO'			=> 'Automatická aktualizace chatu je vypnutá',
	'MCHAT_REFRESH_YES'			=> 'Aktualizace chatu probíhá každých <strong>%d</strong> sekund',
	'MCHAT_RESPOND'				=> 'Odpovědět uživateli',
	'MCHAT_RESET_QUESTION'		=> 'Vyčistit prostor pro psaní?',
	'MCHAT_SESSION_OUT'			=> 'Chat session vypršela',	
	'MCHAT_SHOW_LIST'			=> 'Zobrazit seznam',
	'MCHAT_SECOND'				=> 'sekunda ',
	'MCHAT_SECONDS'				=> 'sekund ',
	'MCHAT_SESSION_ENDS'		=> 'Chat session skončí v',
	'MCHAT_SMILES'				=> 'Smajlíci',

	'MCHAT_TOTALMESSAGES'		=> 'Celkový počet vzkazů: <strong>%s</strong>',
	'MCHAT_USESOUND'			=> 'Použít zvuk?',
	
// uncomment and translate the following line for languages for the static message in the chat area
//	'STATIC_MESSAGE'			=> 'Sema napište cokoliv chcete',
	// whois chatting stuff

	'MCHAT_ONLINE_USERS_TOTAL'			=> 'Momentálně zde chatuje <strong>%d</strong> uživatelů ',
	'MCHAT_ONLINE_USER_TOTAL'			=> 'Momentálně zde chatuje <strong>%d</strong> uživatel ',
	'MCHAT_NO_CHATTERS'					=> 'Nikdo nechatuje',
	'MCHAT_ONLINE_EXPLAIN'				=> 'založeno na uživatelích aktivních za poslední %s',
	
	'WHO_IS_CHATTING'			=> 'Kdo chatuje',
	'WHO_IS_REFRESH_EXPLAIN'	=> 'Aktualizuje se každých <strong>%d</strong> sekund',
	'MCHAT_NEW_TOPIC'			=> '<strong>Nové téma</strong>',		
	
	// UCP
	'UCP_PROFILE_MCHAT'	=> 'Nastavení mChatu',
	
	'DISPLAY_MCHAT' 	=> 'Zobrazit mChat na Indexu',
	'SOUND_MCHAT'		=> 'Povolit zvuk v mChatu',
	'DISPLAY_STATS_INDEX'	=> 'Zobrazit statistiky "Kdo chatuje" na Indexu',
	'DISPLAY_NEW_TOPICS'	=> 'Zobrazit nová témata v chatu',
	'DISPLAY_AVATARS'	=> 'Zobrazit avátary v chatu',
	'CHAT_AREA'		=> 'Typ vstupního pole',
	'CHAT_AREA_EXPLAIN'	=> 'Vyberte, jaký typ vstupního pole pro psaní do chatu chcete používat:<br />jednořádkové pole nebo<br />víceřádkové pole',
	'INPUT_AREA'		=> 'Víceřádkové pole',
	'TEXT_AREA'			=> 'Jednořádkové pole',	
	
	// ACP
	'USER_MCHAT_UPDATED'	=> 'Uživatelovo nastavení mChatu bylo aktualizováno',
));
?>
