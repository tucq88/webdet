<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Web Development Essential Tools</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php /* CSS Lib */
echo HTML::style('css/bootstrap.css');
echo HTML::style('css/font-awesome.css');
echo HTML::style('css/custom.css');
?>
</head>
<body>
    <div class="container">
        <?php echo $content?>
    </div>
    <footer> </footer>
    
    <?php /* JS Lib */ 
        echo HTML::script('js/jquery-1.9.1.min.js');
        echo HTML::script('js/bootstrap.min.js');
        echo HTML::script('js/holder.js');
        echo HTML::script('js/masonry.pkgd.min.js');
        echo HTML::script('js/filteredMasonry.js');
        //echo HTML::script('js/isotope.pkgd.min.js');
        echo HTML::script('js/custom.js');
        
    ?>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 10]>
        <?php 
            echo HTML::script('js/html5shiv.js'); 
            echo HTML::script('js/placeholder.min.js');
        ?>
        <script type="text/javascript">
            $(function() {
                $('input, textarea').placeholder();
            });
        </script>
    <![endif]-->
</body>
</html>