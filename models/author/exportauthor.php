<?php

include '../../config/connection.php';

$authors = executeQuery("SELECT * FROM author");
$author = $authors[0];
var_dump($author);

$wordApp = new COM("Word.Application");
$wordApp->Visible = true;

$wordApp->Documents->Add();
$wordApp->Selection->TypeText("$author->full_name \n $author->short_desc \n $author->long_desc");
$wordApp->Documents[1]->SaveAs("AboutAuthor.doc");

header("Location: ../../index.php?page=admin&ap=home");
