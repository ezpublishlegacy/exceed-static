<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Next</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<link rel="shortcut icon" href="images/favicon.ico" />

		<!--[if lt IE 9]>
    		<script src="js/html5.js"></script>
    		<style type="text/css">header,section,article,aside,nav,footer{margin: 0}</style>
             <link rel="stylesheet" href="css/ie-legacy.css" />
		<![endif]-->

        <link rel="stylesheet" href="css/lib/bootstrap.min.css">
        <link rel="stylesheet" href="../extension/ezexceed/design/ezexceed/stylesheets/eze.css" />
        <link rel="stylesheet" href="css/lib/font-awesome.css">
        <link rel="stylesheet" href="css/lib/select2/select2.css">
        <link rel="stylesheet" href="css/lib/custom-theme/jquery-ui-1.8.24.custom.css">
        <link rel="stylesheet" href="css/lib/jquery.timepicker.css">

        
        <style type="text/css">
            .switcher { position: absolute; margin: 0; list-style: none; bottom: 50px; right: 0; width: 110px; background: #000;z-index: 9999999; border-top-left-radius: 4px; border-bottom-left-radius: 4px }
            .switcher li a { color: #fff; font-size: 11px; display: block; padding: 2px 10px}
            .switcher li a:hover { background: #fafafa; color: #000 } .switcher li a:active { background: cyan; }
        </style>


	</head>
    <body class="eze" style="background: url(img/site.jpg) top center">

        <ul class="switcher">
            <li><a href="?nostack">Toolbar</a></li>
            <li><a href="?view=block">Block Settings</a></li>
            <li><a href="?view=keymedia-browse">KeyMedia Browse</a></li>
            <li><a href="?view=keymedia-crop">KeyMedia Crop</a></li>
            <li><a href="?logged-out">Logged out</a></li>
            <li><a href="?refresh">Refresh!</a></li>
            <!--<li><a href="?dashboard">Dashboard</a></li>
            <li><a href="?view=attributes">Object edit</a></li>
            <li><a href="?view=table">Data table</a></li>
            
            <li><a href="?view=sitemap">Sitemap</a></li>
            <li><a href="?view=layout">Layout</a></li>
            <li><a href="?addcontent">Modal: Create</a></li>
            <li><a href="?activity">Modal: Activity</a></li>
            <li><a href="?publish">Modal: Publish</a></li>
            <li><a href="?preview">Modal: Preview</a></li> -->
        </ul>

        <?php if (!isset($_GET['notoolbar'])) include_once('raw/raw-toolbar.php'); ?> 
        <?php if (!isset($_GET['nopencils'])) include_once('raw/raw-pencils.php'); ?>
        <?php if (!isset($_GET['nopencils'])) include_once('raw/raw-timeline.php'); ?>
        <?php 
            if (!isset($_GET['nostack'])) {
        ?>
        <section class="eze-bigmodal">
            <section class="eze-modal-content">
                <?php include_once('raw/raw-stack.php'); ?>

                <section class="stack-item move-in last" style="top:62px">
                    <header>
                        <h1>
                            <div class="iconwrap"><img class="icon-32" src="img/128x128/Documents 128x128.png" /><img class="icon-16" src="img/16x16/Layout 16x16.png" /></div>
                            Fifth and last level
                        </h1><div class="eze-autosave"><p>√ All changes saved</p><button class="go-back"><img src="images/icons/stack-go-back.png" /> Go back</button></div>
                        <!--<div class="eze-autosave saving">
                            <p><img src="images/stack-loader.gif" class="icon-16" /> Saving…</p>
                            <button class="go-back disabled">Go back</button>
                        </div>-->
                        

                    </header>
                    <section class="eze-stack-content">

                        <?php
                            switch ($_GET['view']) {
                                case 'table':
                                    include_once('raw/raw-table.php');
                                    break;
                                case 'keymedia-browse':
                                    include_once('raw/raw-keymedia-browse.php');
                                    break;
                                case 'keymedia-crop':
                                    include_once('raw/raw-keymedia-crop.php');
                                    break;
                                case 'sitemap':
                                    include_once('raw/raw-sitemap.php');
                                    break;
                                case 'layout':
                                    include_once('raw/raw-layout.php');
                                    break;
                                case 'block':
                                    include_once('raw/raw-block.php');
                                    break;
                                case 'attributes':
                                default:
                                    include_once('raw/raw-attributes.php');
                                    include_once('raw/raw-object-sidebar.php');
                                    break;
                            }
                        ?>

                    </section>
                </section>
            </section>
        </section>

            <?php 
                if (isset($_GET['addcontent']))
                    include_once('raw/raw-modal-add-content.php');
                if (isset($_GET['activity']))
                    include_once('raw/raw-modal-activity.php');
                if (isset($_GET['publish']))
                    include_once('raw/raw-modal-publish.php');
                if (isset($_GET['preview']))
                    include_once('raw/raw-modal-preview.php');
                if (isset($_GET['dashboard']))
                    include_once('raw/raw-modal-dashboard.php');
                if (isset($_GET['logged-out']))
                    include_once('raw/raw-logged-out.php');
            ?>
            <?php } ?>

        <?php include_once('raw/raw-modal-single-edit.php'); ?>
            <?php 
            if (isset($_GET['refresh']))
                include_once('raw/raw-refresh.php');
            ?>
        <script type="text/javascript" src="js/jquery-1.8.2.min.js "></script>
        <script type="text/javascript" src="js/jquery.mousewheel.js"></script>
        <script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/select2.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.8.24.custom.min.js"></script>
        <script type="text/javascript" src="js/jquery.timepicker.js"></script>
        <script type="text/javascript">
        $(document).ready(function() { $(".select2").select2(); });
        $(document).ready(function(){$('input.timepicker').timepicker({});});
            $('#example').popover('hide');
            $(function() {$( ".datepicker" ).datepicker();});
            $(function() {
                var availableTags = [
                    "ActionScript",
                    "AppleScript",
                    "Asp",
                    "BASIC",
                    "C",
                    "C++",
                    "Clojure",
                    "COBOL",
                    "ColdFusion",
                    "Erlang",
                    "Fortran",
                    "Groovy",
                    "Haskell",
                    "Java",
                    "JavaScript",
                    "Lisp",
                    "Perl",
                    "PHP",
                    "Python",
                    "Ruby",
                    "Scala",
                    "Scheme"
                ];
                $( ".autocomplete" ).autocomplete({
                    source: availableTags
                });
            });
    </script>

        <!-- Scroll Pane, shoud use ::-webkit-scrollbar for modern browsers http://www.webkit.org/blog/363/styling-scrollbars/ 
        <script type="text/javascript">$(function(){$('.scroll-pane').jScrollPane();});</script>
        <script type="text/javascript">$(function(){$('.scroll-pane2').jScrollPane();});</script>
        <link rel="stylesheet" href="css/lib/jquery.jscrollpane.css">  -->
    </body>
</html>
