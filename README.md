CKEditor for Yii 2
==================

CKEditor — WYSIWYG editor for web sites.


Installation
------------
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require zertex/yii2-zx-ckeditor "dev-master"
```
or add

```json
"zertex/yii2-zx-ckeditor" : "dev-master"
```

to the require section of your application's `composer.json` file.


Usage
-----

```php
use zertex\ckeditor\CKEditor;
use yii\helpers\Html;

CKEditor::widget([
    'editorOptions' => [
        'preset' => 'full', // basic, standard, full - feature not required
        'inline' => false, // false by default
    ]
]);

## ActiveForm

echo $form->field($post, 'content')->widget(CKEditor::className(),[
    'editorOptions' => [
        'preset' => 'full',
        'inline' => false,
    ],
]);
```

Links
-----

CKEditor Api - http://docs.ckeditor.com/
CKEditor examples - http://nightly.ckeditor.com/
