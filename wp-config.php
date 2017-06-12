<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'diquantum');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '4oPcUpm?kgsE1+&:6_#7HS2shA&~r5|:tMo]7RI x`B-va2b&0Yb]G*4(FO;;dDv');
define('SECURE_AUTH_KEY',  'Kh)ewqjK(:+*45GI<t~*vgf2cZ>(hM1Q%:h3?+L`U.[2]6UB;|}8XNN_?Tj6Rd;,');
define('LOGGED_IN_KEY',    'oq*1^gI}/2_)$U70+@V>WqsIK7aToy`Gk)-v>`(-3|K^TY~L.:wli;,{=,ZCA@`A');
define('NONCE_KEY',        'm_b7ot8aYkoBeU[8lDzB@|cc^%jMI sxH}AtB>[s]9ces]`$_aU4$4}NN!t4;d8X');
define('AUTH_SALT',        'Xvnf$m j+?oI?%NO/<b6(CUbssgn9LZsxDN#Db!whH0jjhd_xqp2|@[oim2!?VQz');
define('SECURE_AUTH_SALT', '%=6K-#_PFDJC~Lv$8,(<^Gd!Y:(]doy@.Gt~5!Sy+4HMw%LFNL,8Q[~-&W4[h))C');
define('LOGGED_IN_SALT',   'OV.<~l@N]WDvP2Yf<v^Jcm; !c&DwOX.j!B/:YeA>I%=dHE>VIIx,z/u$X%l `@N');
define('NONCE_SALT',       'E1:?Pr9S7=zDd6}lUIg|Y+/+WK^3R_M1w7)?0@J6<2)cnW+P&q)7_x*F0%BwMxIR');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');