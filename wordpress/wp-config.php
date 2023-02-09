<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '@TQE +>814VE#S_nu}K2Hy>]>Fb=_lpo62{7Sf^WQV%g3,yP[Nj8luq5efl*Gx~;' );
define( 'SECURE_AUTH_KEY',  '(5~_AwJ8l=pr:?~Z3SvBo>9PgHE)&K$HJPr,49E8v(M{oF3P+o[G&_qg*]+ux1^L' );
define( 'LOGGED_IN_KEY',    'GuEc)L&`cek+q?&hm8$gglP`u|=SwXm[@Nr}oyQQWy1c^q~4@_YN^XxkrL?d=E}/' );
define( 'NONCE_KEY',        '9JPXwAk?RWlhVfNpTpm-5FDm1F[7eI9|?l9AG$ko+]LKBRrDf+o)>8:d|MZq/,7$' );
define( 'AUTH_SALT',        'FHMfZ{,O-^.IW7Ea]smoXm0ci%%#,@|@K8{9jlU!HJK)+xN_Hi#e:bin?!CYv]g^' );
define( 'SECURE_AUTH_SALT', '4u8FL=6V~Zcgq~f.]<%yXCdB7bynQ)2Z3<hQ}4Fl},%9*ps1Dcnsdug{MW=BQ^Lj' );
define( 'LOGGED_IN_SALT',   '~[9y}D>yjA}G%+xcS;ve(]]HX[l7587qXNZ%@?=BWI{s/TVkSQVNR&^qc)25n@=;' );
define( 'NONCE_SALT',       's:a[H8fLs_.]9KE@7:z_j8[O?%W<?`RA@x4cIHHq.AY2Uu{b;lw:b0E4nQeb<2zG' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
