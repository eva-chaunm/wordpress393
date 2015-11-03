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
define('AUTH_KEY',         'ko}rs7YG=-g3n.]m*:S7U`C6[u*H=*2oP|RE7iCH)MTT2Od8w4^<g@4o#E+nJ?s?');
define('SECURE_AUTH_KEY',  'Eg,qd7`krqG!-*i0$J:m1[3s~l*610?@$P|atrL&`Vu-SK]~=5}j`4)x;<~X%hK>');
define('LOGGED_IN_KEY',    'NzAp?EM4ur&E2JX*|62RmV5<jrJyt}f|Dzy<$J>>WyhnBadoKwF,$D`|2X5>Fu1g');
define('NONCE_KEY',        'nt+c5**a+zae;ym7ESNRS-(+!B[<)ENaoUN|io(.K6xRrJ0I|AnX.Z]MG?qxI3S[');
define('AUTH_SALT',        '?!r2(GXWoB:Z4SEHbACru7FG[lzrJgn`SJ$emYsq@]Uw:-*mD*nI3Msm(+ORL-Ta');
define('SECURE_AUTH_SALT', '?[;|pG+(bWPSPxtKF<KUK}+:IT]y9& <c8jOKPl6)mCvKE|.n2+6Jnftm=Em`Dz>');
define('LOGGED_IN_SALT',   ')?MP,`&L90l,bQjIu?eKIkA=6y>t%3aV&,nt aw3j?Q-?q*-1R0&u0(W!=N#}m[C');
define('NONCE_SALT',       'Ecq-Pd%;U_%ycKA~R(Kykq(|6e>|u{Epc5gQ&PO MT9MfMv+|$Jb=T/;j(]:i#B)');

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
