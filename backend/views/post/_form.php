<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tags')->textarea(['rows' => 6]) ?>
    <?php
    //1,AR的find方法
    //        $psObjs = \common\models\Poststatus::find()->all();
    //        $allStatus= \yii\helpers\ArrayHelper::map($psObjs,'id','name');
    //2，command对象方法
    //    $psArray = Yii::$app->db->createCommand('select id,name from poststatus')->queryAll();
    //    $allStatus = \yii\helpers\ArrayHelper::map($psArray, 'id', 'name');
    //3.QueryBuilder
    //$allStatus = (new \yii\db\Query())->select(['name', 'id'])->from('poststatus')->indexBy('id')->column();
    //4,
    //$allStatus = \common\models\Poststatus::find()->select(['name', 'id'])->from('poststatus')->indexBy('id')->column();
    ?>

    <?= $form->field($model, 'status')->dropDownList(\common\models\Poststatus::find()->select(['name', 'id'])->indexBy('id')->column(), ['prompt' => '请选择状态']) ?>

    <?= $form->field($model, 'author_id')->dropDownList(\common\models\Adminuser::find()->select(['nickname', 'id'])->indexBy('id')->column(), ['prompt' => '请选择作者']) ?>

    <div class="form-group">
        <!--        --><? //= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
        <?= Html::submitButton($model->isNewRecord ? '新增' : '保存', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
