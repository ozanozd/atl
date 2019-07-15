<?php
/**
 * WordPress için taban ayar dosyası.
 *
 * Bu dosya şu ayarları içerir: MySQL ayarları, tablo öneki,
 * gizli anahtaralr ve ABSPATH. Daha fazla bilgi için
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php düzenleme}
 * yardım sayfasına göz atabilirsiniz. MySQL ayarlarınızı servis sağlayıcınızdan edinebilirsiniz.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri sunucunuzdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'atl' );

/** MySQL veritabanı kullanıcısı */
define( 'DB_USER', 'atltech06' );

/** MySQL veritabanı parolası */
define( 'DB_PASSWORD', 'XXVI.sk.2006' );

/** MySQL sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * Eşsiz doğrulama anahtarları.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'pa0tq<!-es}9xn>07iW~T9KqkCf3;W`qPW7uXCvqM(TkQTj$Loa=;pz`~neu&[^]' );
define( 'SECURE_AUTH_KEY',  'jd!lqzj+Y5r-`O}@t/ZdqrK_{ nT?G=2#[(8lD!+-C&#M@zU%;,k$ *51[12h6HT' );
define( 'LOGGED_IN_KEY',    'qU|rn8Hc ZJyG_r_:!h>9~>alb`T ~qdfO4$N< Y*m7q1oOtbV!67;8&,WM.^i~+' );
define( 'NONCE_KEY',        'O}l)yM, _vOj-B6C@>8=k~6wf=a~^&spY91N1rCj]?0-mUSXo`dX?-O;q^]#5Q(B' );
define( 'AUTH_SALT',        'G$m9(]$k.>2h3pIZ4ODV&pRnnKXc7DnuJ}<!<9Y`8.:Hc3&k+bgJF8lgpxVQ^/i=' );
define( 'SECURE_AUTH_SALT', 'JZPMZwQm }khQ@jt288AO@=KO(di/!6IPR@9CAh&z$+@{;Lkmg)aC0J^wmm.ur%G' );
define( 'LOGGED_IN_SALT',   'lhj)^#.GHg.<2R?c2y`FNu]%Itf3(odn=eRzPArU=*,.[]:|W8Wm9+{J_,O_`/Rn' );
define( 'NONCE_SALT',       '~Bo8>>rr,$J{#pc7T9C}[mfG[H[),-7B|I<@oI9c$TE5-fJ7o)5bNKxHS,$b)bK|' );
/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 */
define('WP_DEBUG', false);

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** WordPress değişkenlerini ve yollarını kurar. */
require_once(ABSPATH . 'wp-settings.php');
