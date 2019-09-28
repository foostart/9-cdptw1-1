

<?php

$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);      
    require_once($dir_block.'/libs/lessc.inc.php');
}

$less = new lessc;
$less->compileFile('less/peopleShow-less.less', 'css/peopleShow-css.css');
$less->compileFile('less/slick.less', 'css/slick.css');
$less->compileFile('less/slick-theme.less', 'css/slick-theme.css');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>111balala4</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo $url_path?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $url_path?>/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $url_path?>/css/peopleShow-css.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path?>/css/custom-css.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path?>/css/slick.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path?>/css/slick-theme.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="js/slick.min.js" type="text/javascript"></script>
    <script src="js/peopleShow-js.js" type="text/javascript"></script>
  
</head>
<body>
    <?php include $dir_block.'/1115-content.php'; ?>
</body>
</html>