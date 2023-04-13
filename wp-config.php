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
define( 'DB_NAME', 'claviarboutique' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '5IehuM%>a/}i%h_6Z&K?hFAW]^8>.Ee~D+h Lbu4D>Y&,gQz{=r0M_0Iw7Aa[iDU' );
define( 'SECURE_AUTH_KEY',  '7IY_Vvtjk]3zcuE;p>@TXCUT%$Bb*~fBu%?TB@/{^6)<uge(]%ZeXm@1XUC_-D}{' );
define( 'LOGGED_IN_KEY',    '-ZZl8n5Q sKzG933RH~7iXg}IFRLv0cHiw!p(+QS_m;1cVUzec56Ur%Q%A``cQyH' );
define( 'NONCE_KEY',        'T!s$J7,?-dc^by{7U%GfXa>ZKBth(ZW$4jI)q,;e4*mLd-ddj)9Fd43YT<Xxad1g' );
define( 'AUTH_SALT',        '(e$bz(&BjwiFH1]^[.26zgzPVTC$@~Vklv6YB^W%ST:tHIr8.b8<F<r[g5{G$H0 ' );
define( 'SECURE_AUTH_SALT', 'M6BJZw2[L z_oztB_BvR|=eSI;}V`!YAu`Ud@3VSqWu&MVWi-AC?ldFkff^k`:M*' );
define( 'LOGGED_IN_SALT',   '8IXd/sm@A.,dfmN;}HAh///7d?v7A`dz[+%f37^ a8EaTmrI?uKZIIOGXzi4j/v#' );
define( 'NONCE_SALT',       'JK{$EOHjz0NJ_&ctQ>w)(NI}W[&!..A][^#THuPg,xJ@H~Gf6 Q/4rz LKxWty+t' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
