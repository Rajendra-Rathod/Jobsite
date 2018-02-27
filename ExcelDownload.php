
<?php
require_once 'Classes/PHPExcel.php';
		$tmpfname = "test5.xls";
		$excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
		$excelObj = $excelReader->load($tmpfname);
	
                $excel = PHPExcel_IOFactory::createWriter($excelObj, 'Excel5');

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="test5.xls"');
header('Cache-Control: max-age=0');
ob_end_clean();
$excel->save('php://output');

                
                
?>

