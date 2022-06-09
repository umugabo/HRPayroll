<?php
// The function header by sending raw excel
header("Content-type: application/vnd-ms-word");
// Defines the name of the export file "codelution-export.xls"
header("Content-Disposition: attachment; filename=question.doc");
// Add data table
include 'question.php';
?>