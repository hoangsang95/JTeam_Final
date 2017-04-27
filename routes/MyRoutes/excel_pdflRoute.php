<?php

Route::get('exportUser', 'ExcelController@exportUser');
Route::get('exportProduct', 'ExcelController@exportProduct');
Route::get('exportContact', 'ExcelController@exportContact');
Route::get('exportSlide', 'ExcelController@exportSlide');
Route::get('exportCate', 'ExcelController@exportCate');
Route::get('exportWareHouse', 'ExcelController@exportWareHouse');

Route::get('deleteAll', 'ExcelController@deleteAll');

Route::get('pdfExportUser', 'PDFController@pdfExportUser');
Route::get('pdfExportProduct', 'PDFController@pdfExportProduct');
Route::get('pdfExportSlide', 'PDFController@pdfExportSlide');
Route::get('pdfExportContact', 'PDFController@pdfExportContact');
Route::get('pdfExportCate', 'PDFController@pdfExportCate');
Route::get('pdfExportWareHouse', 'PDFController@pdfExportWareHouse');

Route::post('importExcelUser', 'ExcelController@importExcelUser');
Route::post('importExcelProduct', 'ExcelController@importExcelProduct');