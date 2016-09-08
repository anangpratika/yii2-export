<?php
/**
 * @package   yii2-export
 * @author    Anang Pratika <anang.pratika@gmail.com>
 * @copyright Copyright &copy; Anang Pratika, 2016
 * @version   1.0.0
 *
 * Export Submission View
 *
 * Author: Anang Pratika
 * Copyright: 2016, Anang Pratika
 */

use yii\helpers\Html;

/**
 * @var string $icon
 * @var string $file
 * @var string $href
 */
?>
<div class="alert alert-success alert-dismissible" role="alert" style="margin:10px 0">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <strong><?= Yii::t('anexport', 'Exported File') ?>: </strong>
    <span class="h4" data-toggle="tooltip" title="<?= Yii::t('anexport', 'Download exported file') ?>">
        <?= Html::a("<i class='{$icon}'></i> {$file}", $href, ['class' => 'label label-success']) ?>
    </span>
</div>