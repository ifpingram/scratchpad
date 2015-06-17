<?php
namespace Stats;

require('./log.php');
require('./report.php');

$log = new Log();
$report = new Report();
?>

    <a href="/2/index.php?action=log_click">Click me!</a>

    <br /><br />

    <a href="/2/index.php?action=view_report">View super report!</a>

<?php

if(@$_GET['action'] == 'log_click')
{
    $log->log_click();
}
elseif(@$_GET['action'] == 'view_report')
{
    $report->view_clicks();
}

?>



<br /><br /><br /><a href="/">index</a>