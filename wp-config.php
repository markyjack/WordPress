<?php
/**
 * WordPress���������ļ���
 *
 * ����ļ�����װ���������Զ�����wp-config.php�����ļ���
 * �����Բ�ʹ����վ������Ҫ�ֶ���������ļ���
 * ��������Ϊ��wp-config.php����Ȼ�����������Ϣ��
 *
 * ���ļ�������������ѡ�
 *
 * * MySQL����
 * * ��Կ
 * * ���ݿ����ǰ׺
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

$_SERVER['HTTPS'] = 'on';
define('FORCE_SSL_LOGIN', true);
define('FORCE_SSL_ADMIN', true);

// ** MySQL ���� - ������Ϣ����������ʹ�õ����� ** //
/** WordPress���ݿ������ */
// ** MySQL settings - You can get this info from your web host ** //
$db = parse_url($_ENV["DATABASE_URL"]);

/** The name of the database for WordPress */
define('DB_NAME', trim($db["path"],'/'));

/** MySQL database username */
define('DB_USER', $db["user"]);

/** MySQL database password */
define('DB_PASSWORD', $db["pass"]);

/** MySQL hostname */
define('DB_HOST', $db["host"]);

/** �������ݱ�ʱĬ�ϵ����ֱ��� */
define('DB_CHARSET', 'utf8');

/** ���ݿ��������͡��粻ȷ��������� */
define('DB_COLLATE', '');

/**#@+
 * �����֤��Կ���Ρ�
 *
 * �޸�Ϊ�����һ�޶����ִ���
 * ����ֱ�ӷ���{@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org��Կ���ɷ���}
 * �κ��޸Ķ��ᵼ������cookiesʧЧ�������û����������µ�¼��
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

/**#@-*/

/**
 * WordPress���ݱ�ǰ׺��
 *
 * ���������ͬһ���ݿ��ڰ�װ���WordPress��������Ϊÿ��WordPress����
 * ��ͬ�����ݱ�ǰ׺��ǰ׺��ֻ��Ϊ���֡���ĸ���»��ߡ�
 */
$table_prefix  = 'wp_';

/**
 * ������ר�ã�WordPress����ģʽ��
 *
 * �����ֵ��Ϊtrue��WordPress����ʾ�������ڿ�������ʾ��
 * ǿ�ҽ������������ڿ�������������WP_DEBUG��
 *
 * Ҫ��ȡ���������ڵ��Ե���Ϣ�������Codex��
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* ���ˣ��벻Ҫ�ټ����༭���뱣�汾�ļ���ʹ����죡 */

/** WordPressĿ¼�ľ���·���� */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** ����WordPress�����Ͱ����ļ��� */
require_once(ABSPATH . 'wp-settings.php');