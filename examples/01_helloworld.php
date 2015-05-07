<?php
/**
 * @file 01_helloworld.php
 * Basic example of Hello World!
 * See how to create a ODS file from an array in:
 *   <https://github.com/SowerPHP/extension-general/blob/master/Utility/Spreadsheet/ODS.php>
 * @author Esteban De La Fuente Rubio, DeLaF (esteban[at]sasco.cl)
 * @version 2015-05-07
 */
date_default_timezone_set('America/Santiago');
include '../ods.php';
$ods = new \odsphpgenerator\ods();
$table = new \odsphpgenerator\odsTable('sheet');
$row = new \odsphpgenerator\odsTableRow();
$row->addCell(new \odsphpgenerator\odsTableCellString('Hello'));
$row->addCell(new \odsphpgenerator\odsTableCellString('World'));
$row->addCell(new \odsphpgenerator\odsTableCellString('!'));
$table->addRow($row);
$ods->addTable($table);
$ods->downloadOdsFile('01_helloworld.ods');
exit(0);
