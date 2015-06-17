<?php

require('./stats.php');

$stats = new Stats();
?>

<a href="/1/index.php?action=log_click">Click me!</a>

<br /><br />

<a href="/1/index.php?action=view_report">View super report!</a>

<?php

if(@$_GET['action'] == 'log_click')
{
    $stats->log_click();
}
elseif(@$_GET['action'] == 'view_report')
{
    $stats->view_clicks();
}

?>

<br /><br /><br /><a href="/">index</a>