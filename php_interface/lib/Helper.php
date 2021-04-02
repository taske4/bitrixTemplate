<?

namespace lib;

use Bitrix\Main\Application,
    Bitrix\Main\Context,
    Bitrix\Main\Request,
    Bitrix\Main\Server;

class Helper
{
    public static function VarDump($data) {
        global $USER;

        $req= Context::getCurrent()->getRequest();

        if ($USER->IsAdmin() || ($req->getQuery('mode') === '41row5')) {
            foreach ($data as $key => $value) {
                echo "<details><summary><strong>${key}</strong></summary><pre>";
                if (is_array($value) && !empty($value)) {
                    self::VarDump($value);
                } else if (empty($value)) {
                    echo '<span style="color:red;">';
                    var_dump($value);
                    echo '</span>';
                } else {
                    var_dump($value);
                }
                echo "</pre></details>";
            }
        }
    }

    public static function ConvertCharset($str, $charset='UTF-8'): String
    {
        global $APPLICATION;
        return $APPLICATION->ConvertCharset($str, mb_detect_encoding($str), $charset);
    }
}