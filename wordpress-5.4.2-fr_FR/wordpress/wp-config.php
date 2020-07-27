<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
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
define( 'DB_PASSWORD', 'sarcelles' );

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
define( 'AUTH_KEY',         '~PR<_HJc2n2pV8X.#j.3e1[_eH-KNz&R.eB=PF_zq/|D{83<1&.9fipOtot}Me&.' );
define( 'SECURE_AUTH_KEY',  '<EzFmk7HN;gAs9KU*7$:mkcUSdc97@1`[ 3Laj#a|$i ipQ3rCrGq`9Ua@_Y54s6' );
define( 'LOGGED_IN_KEY',    'LFt6P@EPGfpT;bKMLjCb4+3r%AOX{R/OvQ8F0!3*iGu{)[R!4*Hq[|W#-Liyai<i' );
define( 'NONCE_KEY',        '//l_t7;.L k_vz`[=O|VH2K;Pu_~bh{>fT?4qg~Sn;v[/n~pm28snRSA2*dIl`Q.' );
define( 'AUTH_SALT',        'BMhk_5.,)a}$Ts=}A0+Xl$gE1VvK*vB:W~IND%jn8Jh_UKf5d+]>mpNK8C&yJ]n&' );
define( 'SECURE_AUTH_SALT', ';YVD>*mvHU+@ejv:}15Bz+)/*cf!p5rKe`B-p7k[%!@lOa_KF%tdWvC).=;JxJJR' );
define( 'LOGGED_IN_SALT',   '.^Opers<0o}xnk>+M/.h80NW@OAxN&Nyk`I5Y,<&hfs=NKjNqa-Sf1v0 7C*uxSy' );
define( 'NONCE_SALT',       '()MA`^1~go^/6^]RpyjSl3*rUub_(as<J${x-L7&kE@#;rI)`NffSQet_,9 5jtX' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'halloween';

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
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
