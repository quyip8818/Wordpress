<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'wordpress');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'aaf65451bbb7');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'W{//-bdhL)tx+kfkJ=ZQeJsZ5?H%EJ>5<2fZ8?vtK|+/tVLs6SFZ5fNCHRd%V8 I');
define('SECURE_AUTH_KEY',  '+ds[|i_rb!96cB9FU|GplCHkWxs+{rM0)0!)[#n4@mduIJ;|t+JzUJBkT3.3h;<0');
define('LOGGED_IN_KEY',    'LP$+I;s#nbs(|&(:/(0w@dWL7GKn(7,_z>F:cKU4QkK.(4(~?>Ka-UzD>AX5vFf^');
define('NONCE_KEY',        '9)f#GH*FGSVjG$/i.k*gC|U&la|5MAh<mKz+xoY&}87 5;^/w7IeMnN$+LQ#o_>G');
define('AUTH_SALT',        'Lckji/Ik#p-.VLz}>jK[ Du;B<7I9S-cN]@9Bs0-+l[x8lqwm-]ae+n%o_x[aieG');
define('SECURE_AUTH_SALT', '.LE|AH>HD*`f-T;bm?:Y0W>tk71m9a[y,958}k9GsJnrk|&r}iqzO>+Cg,;;=q*0');
define('LOGGED_IN_SALT',   'i%+u+C|WX{57r89&x6coH<M=x#Z%>:W}@(.Q}nQaj?!/dh/c}t^F|G&n{6w(Mmg2');
define('NONCE_SALT',       'y:[;?`[q,c0(}:az+KY{FWrzkrkpy` kS=:|6Pl_cwp9v5`zR:>37R&g|)U:E=YB');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'mywps_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
