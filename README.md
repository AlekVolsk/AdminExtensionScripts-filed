# AdminExtensionScripts Joomla extension filed

### EN:

A field for Joomla extensions that allows you to add additional css styles and js scripts to the administrative part of the extension. Designed primarily for modules and plugins.

**Usage**:<br>
Add the field files to the /files<br>folder
In the xml-description of your extension, add the field: '<field name= "fieldname" type= "adminextensionscripts" script= " 1 "styles=" 1 "label=" addfieldpath= "extension_path/fields" /> " <br>
Set the `script` parameter to the value **1** to connect scripts or to a value **0** not to connect them.<br>
Set the `styles` parameter to the value **1** to connect styles or to a value **0** not to connect them.

### RU:

Поле для расширений Joomla, позволяющее добавлять для административной части расширения дополнительные css-стили и js-скрипты. Предназначено преимущественно для модулей и плагинов.

**Использование**:<br>
Добавьте файлы поля в папку /fileds<br>
В xml-описание вашего расширения добавьте поле: `<field name="fieldname" type="adminextensionscripts" script="1" styles="1" label="" addfieldpath="extension_path/fields" />`<br>
Установите параметр `script` в значение **1** для подключения скриптов или в значение **0**, чтобы не подключать их.<br>
Установите параметр `styles` в значение **1** для подключения стилей или в значение **0**, чтобы не подключать их.
