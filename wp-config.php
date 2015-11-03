<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
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
define('DB_NAME', 'wordpress393');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '+3f[pu!PW3*XI<kO]@}+-7{Pd-4)_uu8MGFtg3ohm+irdmO0OAX:mVd|[7V!N+n.');
define('SECURE_AUTH_KEY',  'LZ69szrBRz]5YDKP1*>p+gvw$q1}jb,jU[!%T.`5 EU=?rrw+$?ltX %9to@D74C');
define('LOGGED_IN_KEY',    '!gM9B?4Fx/X(7@8)3F]+H0ZheU4X|r3rQ_-/HyHI;NX`lMsr$G.bA7d%I 00O+Dc');
define('NONCE_KEY',        '^D5:#V)?tn?wx=TShA|2D-`+<js>..L1lPxTYjb)t%8B/z[x?S^Dz(JF7]ZkmC[6');
define('AUTH_SALT',        'hnxMbe&d4.ThgGJ6MP([JmC(B,evur%4MEIYZ3+5Vwgz=]cDo!-T?{5*a/FxCAcG');
define('SECURE_AUTH_SALT', 'lKpFp^jiyYHg|PDGb@.y}$TmH_b3XBJNnxf|j<GiJ[H[,Dn-OYO)-tDbdjYM?%TG');
define('LOGGED_IN_SALT',   'dQ>!pn(wBF<!PYnxP){%D:yv#u8=ha2:{mY]uF%Z):^C}E||,5Jwp/!P)T.ET~ks');
define('NONCE_SALT',       '9W|cmjk,`Pa5sF?Gs=jHH-i.(4ETsEH4I_-,&ZnZFO1URu*0XJ+;=4]bXRis4P.b');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * ローカル言語 - このパッケージでは初期値として 'ja' (日本語 UTF-8) が設定されています。
 *
 * WordPress のローカル言語を設定します。設定した言語に対応する MO ファイルが
 * wp-content/languages にインストールされている必要があります。たとえば de_DE.mo を
 * wp-content/languages にインストールし WPLANG を 'de_DE' に設定すると、ドイツ語がサポートされます。
 */
define('WPLANG', 'ja');

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
