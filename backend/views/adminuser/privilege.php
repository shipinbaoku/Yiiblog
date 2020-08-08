<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Adminuser;

/* @var $this yii\web\View */
/* @var $model common\models\Adminuser */
/** @var TYPE_NAME $id */
/** @var TYPE_NAME $AuthAssignmentsArray */
/** @var TYPE_NAME $allPrivilegesArray */
$model = Adminuser::findOne($id);
$this->title = '权限设置: ' . $model->username;
$this->params['breadcrumbs'][] = ['label' => '权限设置', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->username, 'url' => ['view', 'id' => $id]];
$this->params['breadcrumbs'][] = '权限设置';
?>
<div class="adminuser-privilege">

    <h1><?= Html::encode($this->title) ?></h1>
    <div class="adminuser-privilege-form">

        <?php $form = ActiveForm::begin(); ?>
        <?= Html::checkboxList('newPri', $AuthAssignmentsArray, $allPrivilegesArray); ?>
        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>

</div>
