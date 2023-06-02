<?php
use yii\helpers\Html;
?>

<?php foreach ($tovary as $tovar): ?>
    <p>
        <?= Html::encode("{$tovar->id} ({$tovar->articul})") ?>:
        <?= $tovar->name . ' ' . $tovar->types->typeName ?>
    </p>

<?php endforeach; ?>


