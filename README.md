# AdminExtensionScripts Joomla extension filed

### EN:

A field for Joomla extensions that allows you to add additional css styles and js scripts to the administrative part of the extension. Designed primarily for modules and plugins.

**Usage**:<br>
Add the field files to the _/fileds_ folder <br>
In the xml-description of your extension, add the field:
```
<field name="fieldname" type="adminextensionscripts" script="1" styles="1" label="" addfieldpath="extension_path/fields" />
```
Set the `script` parameter to the value **1** to connect scripts or to a value **0** not to connect them.<br>
Set the `styles` parameter to the value **1** to connect styles or to a value **0** not to connect them.

Add the required scripts to the _adminextensionscripts.js_ file, add the required styles to the _adminextensionscripts.css_ file. Both files must be located next to the main field file.

### RU:

Поле для расширений Joomla, позволяющее добавлять для административной части расширения дополнительные css-стили и js-скрипты. Предназначено преимущественно для модулей и плагинов.

**Использование**:<br>
Добавьте файлы поля в папку _/fileds_ <br>
В xml-описание вашего расширения добавьте поле:
```
<field name="fieldname" type="adminextensionscripts" script="1" styles="1" label="" addfieldpath="extension_path/fields" />
```
Установите параметр `script` в значение **1** для подключения скриптов или в значение **0**, чтобы не подключать их.<br>
Установите параметр `styles` в значение **1** для подключения стилей или в значение **0**, чтобы не подключать их.

Добавьте необходимые скрипты в файл _adminextensionscripts.js_, добавьте необходимые стили в файл _adminextensionscripts.css_. Оба файла должны находится рядом с основным файлом поля.
