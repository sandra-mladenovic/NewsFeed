<?php

$excelApp = new COM("Excel.Application") or die ("Excel could not be started.");
$excelApp->Visible = true;

$excelFile = $excelApp->Workbooks->Add();

$worksheet = $excelFile->Worksheets("Sheet1");// ili List1 = zavisi od jezik windowsa


include '../../config/connection.php';

include "get-all.php";

$categories = getAllCategories();

$br = 0;
$count = count($categories);

for ($i = 1; $i <= $count; $i++) {
    if ($br == $count) break;

    $polje = $worksheet->Range("A" . $i);
    $polje->activate;

    $polje->Value = $categories[$br]->category;
    $br++;
}
try {
    $excelFile->_SaveAs("C:\\xampp\htdocs\Cateogires" . time() . ".xlsx");
    $excelFile->Saved=true;
    $excelFile->Save(); 
    $excelFile->Close;
    $excelApp->Workbooks->Close();
    $excelApp->Quit();
    header("Location: ../../index.php?page=admin&ap=home");
} catch (Exception $th) {
    header("Location: ../../index.php?page=admin&ap=home");
}


unset($polje);
unset($excelFile);
unset($excelApp);

