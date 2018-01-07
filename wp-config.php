<?php
error_reporting(E_ALL); ini_set('display_errors', 1);

/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsen, du kan kopiera denna fil direkt till
 * "wp-config.php" och fylla i värdena.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för MySQL
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define('DB_NAME', 'autossilniki-wp-KI6IxIbJ');

/** MySQL-databasens användarnamn */
define('DB_USER', '97MJGj9Mx0SL');

/** MySQL-databasens lösenord */
define('DB_PASSWORD', 'kuiolsx92!');

/** MySQL-server */
define('DB_HOST', 'localhost');

/** Teckenkodning för tabellerna i databasen. */
define('DB_CHARSET', 'utf8mb4');

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'JQY$kyIiWJzm4%5!MRqJ<R0e?;yzg/MG_~mG#J`9h$MG,Bbj5S(/W&voC.@r9yh,');
define('SECURE_AUTH_KEY',  '}JB9A|R_Im@>*QJ7EG;;GpTciAMmWUSJ!?FV})#~fPcSq%,/D`9Vg.l8r(CecAPC');
define('LOGGED_IN_KEY',    'z.Dl:,{H[|+@LBYovlq;q+*-+`RbF_![rl5O+E<cY]%>j9)cy~4Lon~@emRE)A,5');
define('NONCE_KEY',        'JK?8D}-6]|F{WP8I(54<)Lkg<]_&?/|D28@e0reE$Sp120;w5+J[HZYBmf1ObxUD');
define('AUTH_SALT',        '5Nr*Z]S|]lrw~}R9Re2mHwm7U.q3`@I;jt:(!2q37UQaSk4i;1h*+h0V?m3;rg4<');
define('SECURE_AUTH_SALT', '|xIoKh}z.Cv^2lI<{mQWSrMyeU`1;Y+Hpzz0SZX[DzvSW)_C:ycYiJ8?gs4`a}|.');
define('LOGGED_IN_SALT',   ')OB1#:n 3T~u 4~p-3O#A.ZIyT*JOm/&yDq>|Q7|%_2C``}e_)@U>.@}bxF(3!14');
define('NONCE_SALT',       'EmN-`6KxcVhPrE5Iq@<O4H:f#lJ~YmlKZKPeJ0ytr;_N`&D32g:4tYi]Eq~EG>)U');

/**#@-*/

/**
 * Tabellprefix för WordPress Databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Endast siffror, bokstäver och understreck!
 */
$table_prefix  = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det är rekommderat att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */ 
define('WP_DEBUG', true);
define('WP_MEMORY_LIMIT', '512M');

/** Absoluta sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');