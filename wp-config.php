<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'cms-v1-20190910' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':3S=^>yGzO&-Rz]M[j@|8@)<xmntG0!d<yR0I_NdB*iQUAGt<bebt|x_D[r+94dY' );
define( 'SECURE_AUTH_KEY',  'hK}0!%G+Zw%so)%:o`Uo|/OEZSa5]G>=<fwkiY~]*l8R^+8EphQ3$U^^T<rwvf,b' );
define( 'LOGGED_IN_KEY',    'U[O@luZ6~$n}=C-hJ8s!;4q!#:gi w>0;4ml]Kk<4)Tpf@loMtllI#6OC(o/.@Y.' );
define( 'NONCE_KEY',        ')(c&?v|RA;<]w:WY~srmrN7j8mV|Tr:!xb6,H;+jipnE!XtV{Rgk2L/@~.ptgl|C' );
define( 'AUTH_SALT',        'ZAc)AAO7<$g,A;Gx /_6T ^GB{VN2y9~sKAiE5%RV.)zqQ,DJ($^UCQcF$taOe| ' );
define( 'SECURE_AUTH_SALT', '+s*O83{C:Ex!Os 3~@6l^nlSjS8VKgz(o9dSk(=aQNw5%=HGv=~DL.N@Ab_[!B=3' );
define( 'LOGGED_IN_SALT',   'd6VEMKLpI%1TTiQ3zLf0GwQte>[|, U|jh<(COT0p,INg*e6q{!FF%Fd(<(n:B=E' );
define( 'NONCE_SALT',       '6p.0:$u}@5,WXH;S7DEX%7CI^a[J.]_jJQUPec{VXQNJ0:-HjS2hzsUd?I5G5DwV' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
