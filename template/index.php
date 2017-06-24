<?php
    include "config.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>fis3-client</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <?php if ($debug) {?>
    <link rel="stylesheet" type="text/css" href="assets/css/main.css?v=<?php echo $v; ?>">
    <?php } else {?>
     <link rel="stylesheet" type="text/css" href="assets/css/main.min.css?v=<?php echo $v; ?>">
    <?php }?>
    <script type="text/javascript" src="js/dist/vendor.min.js"></script>
</head>

<body>
    <div id="app">
        <iframe src="https://zhangli254804018.github.io/fis3-client/"></iframe>
    </div>
</body>
<?php if ($debug) {?>
<script type="text/javascript" src="js/build/bundle.js?v=<?php echo $v; ?>"></script>
<?php } else {?>
<script type="text/javascript" src="js/build/bundle.min.js?v=<?php echo $v; ?>"></script>
<?php }?>
</html>