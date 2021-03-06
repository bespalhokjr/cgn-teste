<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'cgn-teste' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'vP41Hil`0Dn^5MF,|R.8KtMs76wkg V%(uC1aO+ZlEr|!~%hGtiT2 l`!|:8LD*)' );
define( 'SECURE_AUTH_KEY',  'IP) z%A&=gemut8L3*5M_,?Y(x(Q@j)fpx$)`29)}SywNIi]dZhfSB,0*6l{A%F*' );
define( 'LOGGED_IN_KEY',    'Tma$L13KW;G,Vh(mu(>OxY0=k>jY@$}Dffw|*~c<8dgMLlX=_lY @YjxsM&CCs2?' );
define( 'NONCE_KEY',        'V#vM,yF,&oypO%mV{Wx}%a5)B(%%01s22_x<w.H`)ew]EkJbN<ul=d|LS2GA|3LB' );
define( 'AUTH_SALT',        't+<9]?Zt_;Eg=BAvyO~.H5CAi0#Bm=NOO VCKEq12n$D_()bl-VRwHLZ q|xFsfl' );
define( 'SECURE_AUTH_SALT', ']McSC}H2@5u/_jx0o:FA/kHI$%W>x%peKwj><OxbLRz80&v;,a9|$`:h.!MBE;R ' );
define( 'LOGGED_IN_SALT',   'wE12[bpe~pVQCQNjhaB+%af#zj&NT{sAyMxKbf%W__JpGo W*2*YCeWE)bv/9[,@' );
define( 'NONCE_SALT',       ']!7&DY/O8Ik$q]YlmK.i)k?gj XKzURS7xabh:?WLuNg1iU1wfR$z8&?HH$1u&7g' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
