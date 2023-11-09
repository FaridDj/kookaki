<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'koukaki' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'koukaki' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'koukaki' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'V@bn_+w{F&@V^#xuy!hn[=_9E;|dSq>bfW8H_<XW:Xr,Vh{Z&nhTMB-Q#<,3sy!K' );
define( 'SECURE_AUTH_KEY',  '{5eW7VA}s>gx,h?g}xj;=cU#,37_iT}0GI2)k=bYh+0}[?b~Jr!{Cy~#E}/g9|uI' );
define( 'LOGGED_IN_KEY',    't;p(PbZpV$Bp(|I$utdUb,XM(Y+)C_7aozRZ:Mw~b@U:ww.&Yp@DXeM8H+y9:3x`' );
define( 'NONCE_KEY',        '@A&.?tFtsj9(t^,jcrts0.]_7m3fiTg2%1Bd;TdwW~b=CR@USP!GiRgC~,2HfXZA' );
define( 'AUTH_SALT',        'V/b`#v~f-Dq(mq3z&;ZCI/qLYH!T{ V,,6;K:]Z[-5zZuy(B`$0Ozhl~!`L(urOJ' );
define( 'SECURE_AUTH_SALT', 'rkP<<&ABT),pR6$_$IMIR`qC8]qB b!I`Z0)E=wP^&n]YT2MLmlGXx0_tZzcSRw-' );
define( 'LOGGED_IN_SALT',   'sOIE+e^Mrs1]@C6t]]lBEpagGE3nszei|6hP:c(P^i8i}I3+8SEv?ZkGq2NwCusM' );
define( 'NONCE_SALT',       '9eImUpko6ts6Lb|o{M]1=d +nwI}1]0cN_c@KM/to-SDe}<eh6*fq&O)-d Zq(b#' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
