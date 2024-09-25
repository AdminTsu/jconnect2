<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once dirname(__FILE__) . '/tcpdf/tcpdf.php';

class Pdf extends TCPDF
{ 
	function __construct() { 
		parent::__construct(); 
	}

	//Page header
    public function Header() {
        // Logo
        $image_file = '<img src="/resources/assets/img/logo/Logo_jconnect_new.png" alt="test alt attribute" style="width: 60px;" border="0" />';
        $this->SetY(10);
		$isi_header="
			<table width=\"100%\">
				<tr>
					<td width=\"70%\">".$image_file."</td>
				</tr>
			</table><hr>
		";
					// <td rowspan=2 colspan=2>JConnect<br>www.jconnect.co.id</td>
		$this->writeHTML($isi_header, true, false, false, false, '');
    }

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        // Page number
        $this->writeHTML('<hr>', true, false, false, false, '');
        // $this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'L', 0, '', 0, false, 'T', 'M');
        $this->SetFillColor(255, 255, 255);
        $this->MultiCell(90,5,'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(),0,'L',1,0,'','',true);
		$this->MultiCell(90,5,'www.jconnect.co.id',0,'R',0,1,'','',true);
    }
}
/*Author:Tutsway.com */
/* End of file Pdf.php */
/* Location: ./application/libraries/Pdf.php */