<?

AddEventHandler("iblock", "OnBeforeIBlockElementAdd", array("MyClass", "OnBeforeIBlockElementAddHandler"));

class MyClass
{
    function OnBeforeIBlockElementAddHandler(&$arFields)
    {
        /*if (strlen($arFields["CODE"]) <= 0) {
            global $APPLICATION;
            $APPLICATION->throwException("Введите символьный код.");
            return false;
        }*/
    }
}