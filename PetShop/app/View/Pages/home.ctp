<!DOCTYPE html>
<html lang="pt">
    <head>
        <title>Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #dfbebe;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 80vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

    </head>
    <body>

        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    PetShop
                </div>
                <div class="links">
									<?= $this->Html->link("Área Geral", array('controller'=>'produtos',
									'action'=>'index')); ?>
									<?= $this->Html->link("Área Cliente", array('controller'=>'clientes',
									'action'=>'index')); ?>
									<?= $this->Html->link("Área Administrativa", array('controller'=>'users',
									'action'=>'index')); ?>
                </div>
            </div>
        </div>

    </body>
</html>
