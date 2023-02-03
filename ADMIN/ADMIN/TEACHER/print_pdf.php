elow and paste it into the blank file in your text editor and save it as print_pdf.php

<?php
	function generateRow(){
		 ob_start();
		$contents = '';
		$department = $_GET['department'];
		include_once('../../../connection/connection.php');
		$sql = "SELECT * FROM student WHERE year = '$department'";
 
		//use for MySQLi OOP
		$query = $conn->query($sql);
		while($row = $query->fetch_assoc()){
			$contents .= "
			<tr>
				<td>".$row['employee_no']."</td>
				<td>".$row['fname']."</td>
				<td>".$row['lname']."</td>
				<td>".$row['email']."</td>
			</tr>
			";
		}
		////////////////
 
		//use for MySQLi Procedural	
		// $query = mysqli_query($conn, $sql);
		// while($row = mysqli_fetch_assoc($query)){aa
		// 	$contents .= "
		// 	<tr>
		// 		<td>".$row['id']."</td>
		// 		<td>".$row['firstname']."</td>
		// 		<td>".$row['lastname']."</td>
		// 		<td>".$row['address']."</td>
		// 	</tr>
		// 	";
		// }
		////////////////
 
		return $contents;
	}
 
	require_once('tcpdf/tcpdf.php');  
    $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
    $pdf->SetCreator(PDF_CREATOR);  
    $pdf->SetTitle("");  
    $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
    $pdf->SetDefaultMonospacedFont('helvetica');  
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
    $pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
    $pdf->setPrintHeader(false);  
    $pdf->setPrintFooter(false);  
    $pdf->SetAutoPageBreak(TRUE, 10);  
    $pdf->SetFont('helvetica', '', 11);  
    $pdf->AddPage();  
    $content = '';  
    $content .= '
 
      	<h4>List Of Student</h4>
      	<table border="1" cellspacing="0" cellpadding="3">  
           <tr>  
                <th width="25%">STUDENTID</th>
				<th width="25%">FIRSTNAME</th>
				<th width="25%">LASTNAME</th>
				<th width="25%">EMAIL</th> 
           </tr>  
      ';  
    $content .= generateRow();  
    $content .= '</table>';  
    $pdf->writeHTML($content);  
    $pdf->Output('student.pdf', 'I');
 
 
?>