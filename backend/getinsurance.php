<?php

$q = intval($_GET['q']);



if ($q==1){
	echo "
	<label class='control-label' for='BPJS_NUMBER'><b>Bpjs Number</b></label>
	<input class='form-control1' type='text' name='BPJS_NUMBER' id='BPJS_NUMBER' />
	<br><br>
	
	
	<label class='control-label' for='BPJS_CLASS'><b>BPJS Class</b></label>
	<select class='form-control1' name='BPJS_CLASS' id='BPJS_CLASS'>";

	echo"<option value='KELAS I'>KELAS I</option>
	<option value='KELAS II'>KELAS II</option>
	<option value='KELAS III'>KELAS III</option>";
	

echo "</select><br><BR>";
				
	
	
}


if ($q==2){
	echo "

	<label class='control-label' for='PRIVATE_INSURANCE_CLASS'><b>Private Class</b></label>
<select class='form-control1' name='PRIVATE_INSURANCE_CLASS' id='PRIVATE_INSURANCE_CLASS'>";

echo	"</select><br><BR>";
				
	
	
}



if ($q==3){
	echo "

<label class='control-label' for='INSURANCE_COMPANY_NAME'><b>Insurance Company Name</b></label>
				<input class='form-control1' type='text' name='INSURANCE_COMPANY_NAME' id='INSURANCE_COMPANY_NAME' />
				<br><br> 
				<label class='control-label' for='POLICE_INSURANCE_NUMBER'><b>Police Insurance Number</b></label>
				<input class='form-control1' type='text' name='POLICE_INSURANCE_NUMBER' id='POLICE_INSURANCE_NUMBER' />
				<br><br> 
				<label class='control-label' for='INSURANCE_CARD_NUMBER'><b>Insurance Card Number</b></label>
				<input class='form-control1' type='text' name='INSURANCE_CARD_NUMBER' id='INSURANCE_CARD_NUMBER' />
				<br><br> ";

}


if ($q==4){
	echo "


<label class='control-label' for='COMPANY_NAME'><b>Company Name</b></label>
				<input class='form-control1' type='text' name='COMPANY_NAME' id='COMPANY_NAME' />
				<br><br> 
				<label class='control-label' for='EMPLOYEE_NUMBER'><b>Employee Number</b></label>
				<input class='form-control1' type='text' name='EMPLOYEE_NUMBER' id='EMPLOYEE_NUMBER' />
				<br><br>";

}





?>