<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error text-center">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="alert">
        <h2><?= nl2br(Html::encode($message)) ?></h2>
    </div>
    <p>
        The above error occurred while the Web server was processing your request.
    </p>
    <p>
        Please contact us if you think this is a server error. Thank you.
    </p>
    <a class="btn btn-danger" style="text-decoration: none" href="<?= Yii::$app->request->referrer ?>">返回</a>
</div>
