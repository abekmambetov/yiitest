<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
?>

<?php $this->beginPage() ?>

<html>
<?php $this->beginBody() ?>
<body>

        <?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
