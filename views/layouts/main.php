<?php
/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
                'brandLabel' => Html::img('@web/img/logo.png'),
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-default navbar-fixed-top',
                ],
            ]);

            $menuItems = [
                    ['label' => '<i class="fa fa-home"></i> Inicio', 'url' => ['/site/index']],
                    ['label' => '<i class="fa fa-info-circle"></i> Acerca de', 'url' => ['/site/about']],
            ];

            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => '<i class="fa fa-sign-in-alt"></i> Iniciar sesi&oacute;n', 'url' => ['/site/login']]
                ;
            } else {
                if (Yii::$app->user->identity->isAdmin()) {
                    $menuItems[] = [
                        'label' => '<i class="fa fa-cogs"></i> Administrar',
                        'items' => [
                                ['label' => '<i class="fa fa-list-ul"></i> Colecciones', 'url' => ['/cellar/index']],
                                ['label' => '<i class="fa fa-globe-americas"></i> Pa&iacute;ses', 'url' => ['/country/index']],
                                ['label' => '<i class="fa fa-stamp"></i> Marcas', 'url' => ['/brand/index']],
                                ['label' => '<i class="fa fa-glass-martini-alt"></i> Tipos de bebidas', 'url' => ['/category/index']],
                                ['label' => '<i class="fa fa-cocktail"></i> Bebidas', 'url' => ['/product/index']],
                        ],
                    ];
                    $menuItems[] = [
                        'label' => '<i class="fa fa-shield-alt"></i> Seguridad',
                        'items' => [
                                ['label' => '<i class="fa fa-user-friends"></i> Usuarios', 'url' => ['/user/index']],
                                ['label' => '<i class="fa fa-user-shield"></i> Roles', 'url' => ['/role/index']],
                            '<li class="divider"></li>',
                                ['label' => '<i class="fa fa-cog"></i> Configuraci&oacute;n', 'url' => ['/app-config/index']],
                        ],
                    ];
                }
                $menuItems[] = [
                    'label' => '<i class="fa fa-user-circle"></i> Mi cuenta',
                    'items' => [
                        '<li class="dropdown-header">' . Yii::$app->user->identity->username . '</li>',
                        '<li class="divider"></li>',
                            ['label' => '<i class="fa fa-lock"></i> Cambiar contrase&ntilde;a', 'url' => '#'],
                        '<li>' . Html::beginForm(['/site/logout'], 'post') . Html::submitButton('<i class="fa fa-sign-out-alt"></i> Cerrar sesi&oacute;n', ['class' => 'btn btn-link logout']) . Html::endForm() . '</li>'
                    ],
                ];
            }

            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'encodeLabels' => false,
                'items' => $menuItems,
            ]);
            NavBar::end();
            ?>

            <div class="container">
                <?=
                Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
                ?>
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <p class="pull-left">&copy; FD Systems <?= date('Y') ?></p>
            </div>
        </footer>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
