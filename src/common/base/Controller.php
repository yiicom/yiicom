<?php

namespace yiicom\common\base;

use yiicom\common\traits\ModelTrait;

class Controller extends \yii\web\Controller
{
    use ModelTrait;

	public function actions()
	{
		return [
			'error' => [
				'class' => \yii\web\ErrorAction::class,
			]
		];
	}
}
