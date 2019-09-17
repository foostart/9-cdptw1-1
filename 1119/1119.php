<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>  
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-25-footer.less', 'css/type-25-footer.css');
        ?>
        <link href="css/type-25-footer.css" rel="stylesheet" type="text/css"/>

    </head>

    <body>
        <div class="type-25-footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="footer">
                        <div class="pull-right">
                            Gentelella - Bootstrap Admin Template by <a href="#">Colorlib</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>




