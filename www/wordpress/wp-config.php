<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wordpress');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'root');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'rmbkKLIIpl ,j_~Stlk6nass2$ne5Y2BZs%Cj#S,Yo5Yf4}W0@Wvy{d|Bkc3ANT^');
define('SECURE_AUTH_KEY',  'q~f(Sn--D1+*{3qux8&gD/HIXOw%YBp0D fcL=>@uj%r|mjY`!`uHXKr|x)0QeU)');
define('LOGGED_IN_KEY',    '-D/UV:k]o?OU7V^(*`{2?X$F(NR0}3IL&4wvTfnij,Mw6}8HC(vJKflX1-^GOL1:');
define('NONCE_KEY',        'w@K^ J4PTj@6]ks2DvFp#m~6&2_TBh-QGmB7-U3UN}V43I)xdpVijI)5_Z$gisw-');
define('AUTH_SALT',        '?A3%MmBh[y2rv*I#yqZtXlQJmtcIY[/z[H-v(TB5r:U;6Mj}6~J#-~8!b?75xPh}');
define('SECURE_AUTH_SALT', 'Z6nYK3Me>}e+NaOJ+2%)F{!!0tQs-l.f:O 9OODiVK_}H5j$&~:iYD7+1pQ7:SM$');
define('LOGGED_IN_SALT',   'Hu64O2^*Vfwup.@WP.z*)<xxjnLVSt=QKzxr``1$VW^`#H+n;>[z0D)w?:Yy{SmL');
define('NONCE_SALT',       '~90:SMpo,2uOvW]%56/w|+~([UXFaEn]uvHP;~0*rq8}SfAV!Ag,W:b@g~Z|^vV0');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
