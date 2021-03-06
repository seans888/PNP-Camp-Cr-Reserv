<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        
        'brandLabel' => Html::img('@web/images/pnp1.png'),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Facilities', 'url' => ['/site/facilities']],     
        //['label' => 'Personnel', 'url' => ['/site/personnel']],                    
/*        ['label' => 'Contact', 'url' => ['/site/contact']],
*/    ];
    if (Yii::$app->user->isGuest) {
        //$menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];

    }elseif (!Yii::$app->user->isGuest) {
        $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],    
        ['label' => 'About', 'url' => ['/site/about']],    
        ['label' => 'Facilities', 'url' => ['/site/facilities']],
        // ['label' => 'Reservation', 'url' => ['/site/reservation']],
        ['label' => 'Personnel', 'url' => ['/site/personnel']],     
        ['label' => 'Contact', 'url' => ['/site/contact']],
        ['label' => 'Profile', 'url' => ['/site/profile']],
    ];

   /* $menuItems[] = ['label' => 'Facilities', 'url' => ['/site/facilities']];
        $menuItems[] = ['label' => 'Reservation', 'url' => ['/site/reservation']];
        $menuItems[] = ['label' => 'Personnel', 'url' => ['/site/personnel']];*/

        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton('Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link', 'data'=>['confirm' => 'Are you sure you want to logout?',
                    'method' => 'post',],
                ]

            )
            . Html::endForm()
            . '</li>';
    }
     else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy;  <?= date('Y') ?> - NoSleepCode</p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
