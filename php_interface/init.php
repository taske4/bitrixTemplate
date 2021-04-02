<?

require_once $_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/include/constants.php';

if (file_get_contents(COMPOSER_AUTOLOAD_FILE)) {
    require_once $_SERVER['DOCUMENT_ROOT'] . COMPOSER_AUTOLOAD_FILE;
} else {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/autoload.php';
}

require_once $_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/include/event.php';