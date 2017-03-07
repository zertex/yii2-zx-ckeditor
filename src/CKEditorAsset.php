<?php
/**
 * @copyright Copyright (c) 2017 Zertex Media
 * @link http://zertex.ru
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace zertex\ckeditor;

use yii\web\AssetBundle;

/**
 * CKEditorAsset
 *
 * @author Egorka <error-202@mail.ru>
 * @link http://zertex.ru/
 * @package zertex\ckeditor
 */
class CKEditorAsset extends AssetBundle
{
    public $sourcePath = '@vendor/ckeditor/ckeditor/';
    public $js = [
        'ckeditor.js',
        'adapters/jquery.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset'
    ];
}
