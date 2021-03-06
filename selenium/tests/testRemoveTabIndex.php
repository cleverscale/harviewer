<?php
require_once("config.php");

// Compute proper URLs for includes resources (depends on config.php).
// Don't forget on trailinig slash.
$scriptsURL = $harviewer_base."scripts/";
$cssURL = $harviewer_base."css/";
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>HTTP Archive Viewer Test</title>
</head>
<body class="harBody">
    <div id="content" version="Test"></div>
    <!--[if IE]><script type="text/javascript" src="<?php echo $scriptsURL; ?>excanvas/excanvas.js"></script><![endif]-->
    <script src="<?php echo $scriptsURL; ?>jquery.js"></script>
    <script data-main="<?php echo $scriptsURL; ?>harViewer" src="<?php echo $scriptsURL; ?>require.js"></script>
    <script type="text/javascript">
    $("#content").bind("onViewerPreInit", function(event)
    {
        var viewer = event.target.repObject;
        viewer.removeTab("About");
        viewer.removeTab("Schema");
    });
    </script>
    <link rel="stylesheet" href="<?php echo $cssURL; ?>harViewer.css" type="text/css"/>
</body>
</html>
