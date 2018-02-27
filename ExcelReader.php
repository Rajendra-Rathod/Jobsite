
<?php
require_once 'Classes/PHPExcel.php';
		$tmpfname = "test.xls";
		$excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
		$excelObj = $excelReader->load($tmpfname);
		$worksheet = $excelObj->getSheet(0);
		$lastRow = $worksheet->getHighestRow();
		
                
                
                $excelObj = PHPExcel_IOFactory::createWriter($excelObj, 'Excel5');
		$excelObj->save('php://output')	;6e
?>

