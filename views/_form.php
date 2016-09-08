<?php
/**
 * @package   yii2-export
 * @author    Anang Pratika <anang.pratika@gmail.com>
 * @copyright Copyright &copy; Anang Pratika, 2016
 * @version   1.0.0
 *
 * Export Submission Form
 *
 * Author: Anang Pratika
 * Copyright: 2016, Anang Pratika
 */
use yii\helpers\Html;

/**
 * @var array  $options
 * @var string $exportTypeParam
 * @var string $exportType
 * @var string $exportRequestParam
 * @var string $exportColsParam
 * @var string $colselFlagParam
 * @var string $columnSelectorEnabled
 */
echo Html::beginForm('', 'post', $options);
echo Html::hiddenInput($exportTypeParam, $exportType);
echo Html::hiddenInput($exportRequestParam, 1);
echo Html::hiddenInput($exportColsParam, '');
echo Html::hiddenInput($colselFlagParam, $columnSelectorEnabled);
echo Html::endForm();
