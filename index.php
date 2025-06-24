<?php 
include 'header.php';
$sql = "create index idx_first_name on users(first_name)";
$connection->query($sql);
echo "successfully index";

$sql = "create index idx_project_name on projects(project_name)";
$connection->query($sql);
echo "successfully project_name index";

?>