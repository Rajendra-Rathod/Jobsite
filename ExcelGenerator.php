<?php

require_once 'Classes/PHPExcel.php';

class ExcelGenerator{

    
   
 public static function GenerateExcel($filname)
   {
   
$excel=new PHPExcel();
$R=1;
 $excel->setActiveSheetIndex(0);
 
 $excel->getActiveSheet()->getColumnDimension('A')->setWidth('10');
$excel->getActiveSheet()->getColumnDimension('B')->setWidth('20');
$excel->getActiveSheet()->getColumnDimension('C')->setWidth('25');
 $excel->getActiveSheet()->getColumnDimension('D')->setWidth('15');
 $excel->getActiveSheet()->getColumnDimension('E')->setWidth('20');
 $excel->getActiveSheet()->getColumnDimension('F')->setWidth('15');
 $excel->getActiveSheet()->getColumnDimension('G')->setWidth('15');

 $excel->getActiveSheet()->setCellValue('A'.$R, "IDs")->getStyle('A1')->getFont()->setBold(true);         
$excel->getActiveSheet()->setCellValue('B'.$R, "Name")->getStyle('B1')->getFont()->setBold(true);
$excel->getActiveSheet()->setCellValue('C'.$R, "Email")->getStyle('C1')->getFont()->setBold(true);
$excel->getActiveSheet()->setCellValue('D'.$R, "Contact")->getStyle('D1')->getFont()->setBold(true);
$excel->getActiveSheet()->setCellValue('E'.$R, "Qualification")->getStyle('E1')->getFont()->setBold(true); 
$excel->getActiveSheet()->setCellValue('F'.$R, "Course")->getStyle('F1')->getFont()->setBold(true); 
$excel->getActiveSheet()->setCellValue('G'.$R, "Specialization")->getStyle('G1')->getFont()->setBold(true);



$excel = PHPExcel_IOFactory::createWriter($excel, 'Excel5');
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="SortList.xlsx"');
header('Cache-Control: max-age=0');
$excel->save('php://output');

$excel->save($filname);

   
    }
    
    
    
    
    
}

ExcelGenerator::GenerateExcel("SortList.xls");
?>

