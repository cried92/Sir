<?php

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

$this->beginPage();
?>
<html>
    <head>
        <title>Video school</title>
        <?php $this->head(); ?>
    </head>
    <body>
    <?php $this->beginBody(); ?>
    <?php
    NavBar::begin([
        'brandLabel' => 'ITVDN',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-default navbar-fixed-top'
        ]
    ]);
    $items = [
            ['label' => 'Join', 'url' =>['/site/join']],
            ['label' => 'Login', 'url' =>['/site/login']]
    ];
    echo  Nav::widget([
        'options'=> ['class' => 'navbar-nav navbar-right'],
        'items' => $items
    ]),
    NavBar::end();
    ?>
    <div class="container" style="...">
        <?= $content ?>
    </div>
    <?php $this->endBody(); ?>
    </body>
</html>
<?php $this->endPage(); ?>
