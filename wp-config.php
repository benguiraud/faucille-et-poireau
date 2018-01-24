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
define('DB_NAME', 'faucille-et-poireau');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'acs123');

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
define('AUTH_KEY',         'Y:Fr$$|yL  )7W3L}{r*Pq*J%L48I(~1K ,f2TJiRP1+RxFUWZwOo+)=*;$V]v2V');
define('SECURE_AUTH_KEY',  '!Xd@HtpD>*osLs,-m^IY,MPkKWmX7$p:Di1QEx+@X7.4oLBJ/56ffc)BF{xXD9}F');
define('LOGGED_IN_KEY',    '}E!!{hi?(|vdt<UGM{(_!k5$UE-.Wh|mc#Q@E+|a[%/fh54q9ai{Z9By/sr@UZVu');
define('NONCE_KEY',        '6?tX65sStQ;E)$5dn7gajryN-~7zlho*Krj*90QoX/>om3Gq3t{-F?^*w~Srt99L');
define('AUTH_SALT',        '1<()&V~tB+A:eug_06E0gS=u+b%-V:BhL#Z)fjr%<V/>lzw!wWfY:b|]x~-#h:nW');
define('SECURE_AUTH_SALT', '-Ai<s!c^dRwzA^f8ZGun(t!aOJ9Bu`yh}^L;14z&K$>i`MUS?w&:;AN3hLzGM{>v');
define('LOGGED_IN_SALT',   '?mXU_/Kf#M>MPyCyEt,%4(BoSX5&eGk/ynP!h^dG{9xkFE7$@_yT;?{e~NH#-{tc');
define('NONCE_SALT',       'J7z/`[=J0GQ#!k 0=h}x7.hg2MInTZg)~G?a+}TTgdrs )K0O,p-(Po2rCg_xW<(');
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