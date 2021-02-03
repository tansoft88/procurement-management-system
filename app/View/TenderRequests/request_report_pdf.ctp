<?php
App::import('Vendor','tcpdf/tcpdf');
$tcpdf = new TCPDF();
$textfont = 'helvetica';
 
$tcpdf->SetAuthor("Julia Holland");
$tcpdf->SetAutoPageBreak(true);
 
$tcpdf->setPrintHeader(false);
$tcpdf->setPrintFooter(false);
 
$tcpdf->SetTextColor(0, 0, 0);
$tcpdf->SetFont($textfont,'',9);
 
$tcpdf->AddPage();
$date=date('d/m/Y');

// set background image
$img_file = APP . 'webroot/img/logo_steward.png';
$tcpdf->Image($img_file, 50, 50, '100', '100', '', '', '', false, 300, '', false, false, 0);


// create some HTML content

$htmlcontent = "<div align = 'center'>

<h2>Steward Bank Procurement System</h2><br><hr>
<h2>Tender Request Report </h2><br><hr>
<h3>Tender Category: $category_name</h3> <br><hr>
<b>Date:</b> $date<br><hr>";
$htmlcontent .= "<table>
		  <tr>
			<th><b>#</b></th>
			<th><b>Tender category</b></th>
			<th><b>Tender code</b></th>
			<th><b>Tender title</b></th>
			<th><b>Tender specification</b></th>
			<th><b>Due date</b></th>
			<th><b>Tender status</b></th>
			<th><b>Department</b></th>
		  </tr>";
					  
foreach ($tenderRequests as $tenderRequest){
	$htmlcontent .= "<tr><td align='center'>".$tenderRequest['TenderRequest']['id']."</td><td align='center'>".$tenderRequest['TenderCategory']['category_name']."</td><td align='center'>".$tenderRequest['TenderRequest']['tender_code']."</td><td align='center'>".$tenderRequest['TenderRequest']['tender_title']."</td><td align='center'>".$tenderRequest['TenderRequest']['tender_specification']."</td><td align='center'>".$tenderRequest['TenderRequest']['due_date']."</td><td align='center'>".$tenderRequest['TenderStatus']['status']."</td><td align='center'>".$tenderRequest['Department']['name']."</td></tr>";
		 }
	$htmlcontent .= "</table>";
// output the HTML content
$tcpdf->writeHTML($htmlcontent, true, 0, true, 0);
$tcpdf->Output('TenderRequest_main.pdf', 'D');
?>