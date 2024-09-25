<?php
require_once APPPATH."/third_party/PHPExcel.php"; 
 
class Libexcel extends PHPExcel { 
    public function __construct() { 
      parent::__construct(); 
    }
    public function bangunexcel($parameter){
    	$bentuk = 1;
    	$alphas = range("A", "Z");
    	$objPHPExcel = new PHPExcel();
    	$sNAMESS = "";
    	$arrColumn[] = '';
    	foreach ($parameter as $key => $value) {
    		${$key}=$value;
    	}
			if(!isset($col)){
				echo "Definisi Kolom tidak ada!";
				die();
			}else{
				$jumlahKolom = count($col);
				if($jumlahKolom==0){
					echo "Definisi Kolom tidak ada!";
					die();
				}else{
					if($jumlahKolom>26){
						$alphas = $this->createColumnsArray("c");
					}
				}
			}
			
			$objPHPExcel->setActiveSheetIndex(0);
			$objPHPExcel->getActiveSheet()->setTitle($sNAMESS);
			$objPHPExcel->getActiveSheet()->getRowDimension(1)->setRowHeight(55);
			$loop = 1;
			$arrKolom =0;
			foreach ($col as $colvalue) {
				foreach ($colvalue as $keycol => $valuecol) {
					${$keycol}=$valuecol;
				}
				if(isset($nilai)){
					if($nilai!=""){
						$arrColumn[] = $nilai;
						$objPHPExcel->getActiveSheet()->setCellValue($alphas[$arrKolom]."1", $nilai);
					}
				}
				if($bentuk==1){
					if(isset($fontsize)){
						if($fontsize!=0){
							$objPHPExcel->getActiveSheet()->getStyle($alphas[$arrKolom]."1")->getFont()->setSize($fontsize);
						}
					}
					if(isset($bold)){	
						if($bold){
							$objPHPExcel->getActiveSheet()->getStyle($alphas[$arrKolom]."1")->getFont()->setBold(true);
						}
					}
					$classvertical = PHPExcel_Style_Alignment::VERTICAL_CENTER;
					if(isset($valign)){	
						switch ($valign) {
							case 'top':
								$classvertical = PHPExcel_Style_Alignment::VERTICAL_TOP;
								break;
							case 'bottom':
								$classvertical = PHPExcel_Style_Alignment::VERTICAL_BOTTOM;
								// $objPHPExcel->getActiveSheet()->getStyle($alphas[$arrKolom]."1")->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_BOTTOM);
								break;
						}
					}
					$objPHPExcel->getActiveSheet()->getStyle($alphas[$arrKolom]."1")->getAlignment()->setVertical($classvertical);

					$classhorizontal = PHPExcel_Style_Alignment::HORIZONTAL_LEFT;
					if(isset($halign)){	
						switch ($halign) {
							case 'center':
								$classhorizontal = PHPExcel_Style_Alignment::HORIZONTAL_CENTER;							
								break;
							case 'right':
								$classhorizontal = PHPExcel_Style_Alignment::HORIZONTAL_RIGHT;
								break;
						}
					}
					$objPHPExcel->getActiveSheet()->getStyle($alphas[$arrKolom]."1")->getAlignment()->setHorizontal($classhorizontal);				
				}
				$loop++;
				$arrKolom++;
			}
			if(isset($rsl)){
				$nomor = 1;
				$rowloc = 2;
				if(is_array($rsl)){
					foreach ($rsl as $key => $value) {
						$colloc=0;
						$arrKolom =0;
						unset($arrFielddetail);
						foreach ($col as $colvalue) {
							foreach ($colvalue as $keycol => $valuecol) {
								$ketemu = false;
								if($keycol=="namanya"){
									if($valuecol=="nomor"){
										$valueval = $nomor;	
									}else{
										$valueval = $value->$valuecol;	
									}
									if($bentuk==1){
										$objPHPExcel->getActiveSheet()->setCellValue($alphas[$arrKolom].$rowloc, $valueval);
										$objPHPExcel->getActiveSheet()->getColumnDimension($alphas[$arrKolom])->setAutoSize(true);
									}else{
										if(isset($arrFielddetail)){
											$arrFielddetail = array_merge($arrFielddetail, array($valueval));	
										}else{
											$arrFielddetail = array($valueval);
										}									
									}
									$ketemu = true;
									
								}
								if($keycol=="format" && $bentuk==1){
									switch ($valuecol) {
										case 'datetime':
											$objPHPExcel->getActiveSheet()->getStyle($alphas[$arrKolom].$rowloc)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_DATE_DDMMYYYY);
											break;
										case 'angkakoma':
											$objPHPExcel->getActiveSheet()->getStyle($alphas[$arrKolom].$rowloc)->getNumberFormat()->setFormatCode('_(#,##0.00_);_(\(#,##0.00\);_("-"??_);_(@_)');
											break;
									}
								}
							}
							$arrKolom++;			
						}
						if($bentuk!=1){
							$arrField[] = $arrFielddetail;	
						}
						
						$rowloc++;
						$nomor++;
					}
				}
			}
			// echo "<pre>";
			// print_r($arrEny);
			// echo "</pre>";
			// die();
			// format date
			// $objPHPExcel->getActiveSheet()->getStyle('D1')->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_DATE_YYYYMMDDSLASH)

			// $objPHPExcel->getActiveSheet()->setCellValue('B8', 'Some value');
			// format string
			// $objPHPExcel->getActiveSheet()->getCell("D".$z)->setValueExplicit($value ['EMP_NOMREK'], Cell_DataType::TYPE_STRING);
			// format nomor lain
			// $objPHPExcel->getActiveSheet()->getStyle('A1')->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1);

			// die();
			if($bentuk==1){
				header('Content-Type: application/vnd.ms-excel'); //mime type
				header('Content-Disposition: attachment;filename="'.$sFILNAM.'.xls"'); //tell browser what's the file name
				header('Cache-Control: max-age=0'); //no cache
				             
				//save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
				//if you want to save it as .XLSX Excel 2007 format
				$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');  
				//force user to download the Excel file without writing it to server's HD
				$objWriter->save('php://output');
			// $objWriter->save();
			}else{
				// output headers so that the file is downloaded rather than displayed
				header('Content-Type: text/csv; charset=utf-8');
				header('Content-Disposition: attachment; filename='.$sFILNAM.'.csv');
				// create a file pointer connected to the output stream
				$output = fopen('php://output', 'w');
				// output the column headings
				fputcsv($output, $arrColumn);
				// fetch the data
				foreach ($arrField as $valueval) {
					fputcsv($output, $valueval);
				}
				// foreach ($rsl as $key => $value) {
				// 	$colloc=0;
				// 	$arrKolom =0;
				// 	foreach ($col as $colvalue) {
				// 		foreach ($colvalue as $keycol => $valuecol) {
				// 			$ketemu = false;
				// 			if($keycol=="namanya"){
				// 				if($valuecol=="nomor"){
				// 					$valueval = $nomor;	
				// 				}else{
				// 					$valueval = $value->$valuecol;	
				// 				}
				// 				fputcsv($output, $valueval);
				// 			}
				// 		}
				// 	}
				// }
				// loop over the rows, outputting them
				// while ($row = mysql_fetch_assoc($rows)) fputcsv($output, $row);
			}
							
    }
    function createColumnsArray($end_column, $first_letters = ''){
		  $columns = array();
		  $length = strlen($end_column);
		  $letters = range('A', 'Z');

  		// Iterate over 26 letters.
		  foreach ($letters as $letter) {
	      // Paste the $first_letters before the next.
	      $column = $first_letters . $letter;
	      // Add the column to the final array.
	      $columns[] = $column;
	      // If it was the end column that was added, return the columns.
	      if ($column == strtoupper($end_column))
	          return $columns;
		  }

		  // Add the column children.
		  foreach ($columns as $column) {
	      // Don't itterate if the $end_column was already set in a previous itteration.
	      // Stop iterating if you've reached the maximum character length.
	      if (!in_array(strtoupper($end_column), $columns) && strlen($column) < $length) {
          $new_columns = $this->createColumnsArray(strtoupper($end_column), $column);
          // Merge the new columns which were created with the final columns array.
          $columns = array_merge($columns, $new_columns);
	      }
		  }

		  return $columns;
		}
}