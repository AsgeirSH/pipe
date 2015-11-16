<?php
error_reporting(E_ALL);
echo 'pipe';
# This is the main file for pipe, the lightweight server admin panel
# This file loads the configuration resource, 
# fetches the necessary information from log files and other server resources, 
# and then renders a template with bootstrap.

require_once 'config.php';
require_once 'functions.php';

$view_data = array();

# UPTIME
$view_data['uptime'] = uptime();
# CPU-load


# Render
render($view_data);

?>