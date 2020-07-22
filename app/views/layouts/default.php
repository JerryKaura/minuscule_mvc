<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?=$this->siteTitle(); ?> </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=PROOT?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=PROOT?>css/custom.css">
    <script src="<?=PROOT?>js/jQuery-2.2.4.min.js"></script>
    <script src="<?=PROOT?>js/bootstrap.min.js"></script>
    <?php echo $this->content('head');?>

</head>
<body>
    <?php echo $this->content('body');?>
</body>
</html> 