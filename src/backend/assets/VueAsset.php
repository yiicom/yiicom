<?php

namespace yiicom\commerce\backend\assets;

use yii\web\AssetBundle;

/**
 * @inheritdoc
 */
class VueAsset extends AssetBundle
{
    public $sourcePath = '@vendor/npm-asset/vue/dist';

    public $js = [
        ('dev' === YII_ENV) ? 'vue.js' : 'vue.min.js',
    ];
}