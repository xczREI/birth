
<?php include 'mycon.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate of Live Birth 2 </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<style>
			
	/* Global font size 10 as requested by client */
	.ctf-birth-back, .ctf-birth-back * {
		font-size: 10px !important;
	}
	.ctf-birth-back h4 {
		font-size: 12px !important;
	}
	.ctf-birth-back h6 {
		font-size: 10px !important;
	}
	.ctf-birth-back input, 
	.ctf-birth-back select, 
	.ctf-birth-back textarea,
	.ctf-birth-back label,
	.ctf-birth-back span,
	.ctf-birth-back option {
		font-size: 10px !important;
	}
	/* Header styling */
	.ctf-birth-back .affidavit-title {
		font-size: 16px !important;
		font-weight: bold;
	}
		
		</style>
</head>

<body>

<div class="ctf-birth-back pt-3" style="width:960px;margin: auto;">
	<!--birth form-->
	<div class="form" style="padding:0 15px 0 15px;">
		<!-- Affidavit of Acknowledgement--> 
		<div class="row"><!--grid of header-->
			<div class="col" style="border: 2px solid green;">
				<h6 style="padding-top:10px; line-height: 1.2;">
					<center><span class="affidavit-title">AFFIDAVIT OF ACKNOWLEDGEMENT/ADMISSION OF PATERNITY</span></center>
					<div style="text-align: center; margin-top: 5px;">
						<span>(For births on or after 3 August 1988)</span>
						&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
						<span>(For births on or after 3 August 1988)</span>
					</div>
				</h6>
				<h6 style="padding-top:10px;">&emsp;&emsp;&emsp;&emsp;I/We,
				<div class="custom-control custom-checkbox custom-control-inline" style="padding:0; width:42%; margin-right:0;">
					<input type="text" class="form-control form-control-sm" id="father_name" name="father_name" onkeypress="return isTextKey(event)">
				</div>
				and
				<div class="custom-control custom-checkbox custom-control-inline" style="padding: 0; width: 42%;margin-right: 0;">
					<input type="text" class="form-control form-control-sm" id="mother_name" name="mother_name" onkeypress="return isTextKey(event)">
				</div>
				,<br> of legal age, am/are the natural mother and/or father of
				<div class="custom-control custom-checkbox custom-control-inline mt-1" style="padding: 0; width: 53%;margin-right: 0;">
					<input type="text" class="form-control form-control-sm" id="child_name" name="child_name" onkeypress="return isTextKey(event)">
				</div>
				, who was born on
				<div class="custom-control custom-checkbox custom-control-inline mt-1" style="padding:0; width:24%; margin-right:0;">
					<!-- Format: DAY MONTH YEAR (e.g., 6 SEPTEMBER 2018) -->
					<input type="text" class="form-control form-control-sm" id="birth_date" name="birth_date">
				</div>
				at
				<div class="custom-control custom-checkbox custom-control-inline mt-1" style="padding:0; width:45%; margin-right:0;">
					<input type="text" class="form-control form-control-sm" id="birth_place" name="birth_place">
				</div>
				.
				</h6><br>
				<h6 style="letter-spacing: 0.5px;">&emsp;&emsp;&emsp;&emsp;I am / We are executing this affidavit to attest to the truthfulness of the foregoing statements and for purposes of acknowledging my/our child.</h6><br>
				<div class="row">
					<div class="col-6" align="center">
						<input type="text" class="form-control form-control-sm" style="background-color:white; border-top:none;border-left:none; border-right:none; border-color:green; border-radius:0; text-align:center;" id="father_sign" name="father_sign" onkeypress="return isTextKey(event)">
						<h6>(Signature Over Printed Name of Father)</h6>
					</div>
					<div class="col-6" align="center">
						<input type="text" class="form-control form-control-sm" style="background-color:white; border-top:none;border-left:none; border-right:none; border-color:green; border-radius:0; text-align:center;" id="mother_sign" name="mother_sign" onkeypress="return isTextKey(event)">
						<h6>(Signature Over Printed Name of Mother)</h6>
					</div>
				</div><br>
				<h6>&emsp;&emsp;&emsp;&emsp;<span style="font-weight: bold;">SUBSCRIBED AND SWORN</span> to before me this
					<div class="custom-control custom-checkbox custom-control-inline mt-1" style="padding:0; width:7%; margin-right:0;">
						<!-- Auto-fill with ordinal day (6th, 7th, etc.) -->
						<input type="text" class="form-control form-control-sm" name="ack_sworn_day" id="ack_sworn_day">
					</div>
					day of
					<div class="custom-control custom-checkbox custom-control-inline mt-1" style="padding:0; width:20%; margin-right:0;">
						<!-- Auto-fill with current month -->
						<input type="text" class="form-control form-control-sm" name="ack_sworn_month" id="ack_sworn_month" onkeypress="return isTextKey(event)">
					</div>
					,
					<div class="custom-control custom-checkbox custom-control-inline mt-1" style="padding:0; width:8%; margin-right:0;">
						<!-- Auto-fill with current year -->
						<input type="text" class="form-control form-control-sm" maxlength="4" name="ack_sworn_year" id="ack_sworn_year" onkeypress="return isNumberKey(event)">
					</div>
					by
					<div class="custom-control custom-checkbox custom-control-inline mt-1" style="padding:0; width:30%; margin-right:0;">
						<input type="text" class="form-control form-control-sm" id="ack_father_sworn" name="ack_sworn_father" onkeypress="return isTextKey(event)">
					</div>
					and
					<div class="custom-control custom-checkbox custom-control-inline mt-1" style="padding:0; width:30%; margin-right:0;">
						<input type="text" class="form-control form-control-sm" id="ack_mother_sworn" name="ack_sworn_mother" onkeypress="return isTextKey(event)">
					</div>
				, who exhibited to me 
				<input type="radio" id="gender1" name="birth_gender" value="his" hidden>
				<label id="gender1lbl" for="gender1">his</label>/
				<input type="radio" id="gender2" name="birth_gender" value="her" hidden>
				<label id="gender2lbl" for="gender2">her</label>
				CTC/valid ID
				<div class="custom-control custom-checkbox custom-control-inline mt-1" style="padding: 0; width: 30%;margin-right: 0;">
					<input type="text" class="form-control form-control-sm" name="ack_ctc" id="ack_ctc">
				</div>
				issued on
				<div class="custom-control custom-checkbox custom-control-inline mt-1" style="padding: 0; width: 25%;margin-right: 0;">
					<input type="text" class="form-control form-control-sm" name="ack_issued_on" id="ack_issued_on">
				</div>
				at
				<div class="custom-control custom-checkbox custom-control-inline mt-1" style="padding: 0; width: 25%;margin-right: 0;">
					<input type="text" class="form-control form-control-sm" name="ack_issued_at" id="ack_issued_at" onkeypress="return isTextKey(event)">
				</div>
				.
				</h6>
				<br><br>
				<div class="row">
					<div class="col-6" align="center">
						<input type="text" class="form-control form-control-sm" style="background-color: white;border-top:none;border-left:none;border-right:none;border-color: green;border-radius: 0;" name="ack_officer_sign" disabled>
						<h6>Signature of the Administering Officer</h6>
						<!-- Auto-fill from civil_name but editable -->
						<input type="text" class="form-control form-control-sm" id="ack_sworn_name" name="ack_sworn_name" onkeypress="return isTextKey(event)">
						<h6>Name in Print</h6>
					</div>
					<div class="col-6" align="center">
						
						<input type="text" class="form-control form-control-sm" id="ack_sworn_position" name="ack_sworn_position" onkeypress="return isTextKey(event)">
						<h6>Position/Title/Designation</h6>
					
						<input type="text" class="form-control form-control-sm" id="ack_sworn_address" name="ack_sworn_address"
						 onkeypress="return isTextKey(event)">
						<h6>Address</h6>
					</div>
				</div>
			</div>
		</div><!--close row-->

		<!-- Affidavit of Delayed Registration-->
		<div class="row">
			<div class="col" style="border: 2px solid green; border-top: none;">
				<h6 style="padding-top:10px; line-height: 1.2;" align="center">
					<span class="affidavit-title"><center>AFFIDAVIT FOR DELAYED REGISTRATION OF BIRTH</center></span>
					<span>(To be accomplished by the hospital/clinic administrator, father, mother, or guardian or the person himself if 18 years old or above.)</span>
				</h6>
				<h6 style="padding-top:10px;">&emsp;&emsp;&emsp;&emsp;I,
				<div class="custom-control custom-checkbox custom-control-inline" style="padding: 0; width: 50%;margin-right: 0;">
					<!-- Auto-fill from informant name (field 22) but editable -->
					<input type="text" class="form-control form-control-sm" id="late_name" name="late_name" onkeypress="return isTextKey(event)">
				</div>
				, of legal age, single/married/divorced/widow/widower, with residence and postal address at
				<div class="custom-control custom-checkbox custom-control-inline mt-1" style="padding: 0; width: 76%;margin-right: 0;">
					<!-- Auto-fill from informant address but editable -->
					<input type="text" class="form-control form-control-sm" id="late_address" name="late_address" onkeypress="return isTextKey(event)">
				</div>
				<div class="custom-control custom-checkbox custom-control-inline mt-1" style="padding: 0; width: 20%;margin-right: 0;">
					<input type="text" class="form-control form-control-sm" style="background-color: white;border-top:none;border-left:none;border-right:none;border-color: green;border-radius: 0;" disabled>
				</div>
				<span style="letter-spacing:0.5px;">after having been duly sworn in accordance with law, do hereby depose and say:</span>
				</h6>
				<h6>&emsp;&emsp;&emsp;&emsp;1.&emsp;That I am the applicant for the delayed registration of:<br>
				&emsp;&emsp;&emsp;&emsp;&emsp;
				<div class="custom-control custom-checkbox custom-control-inline" style="margin-right: 0;">
					<input type="checkbox" class="custom-control-input" id="my_birth" name="late_birth_type" value="my birth">
					<label class="custom-control-label" for="my_birth">&nbsp;my birth in</label>
				</div>
				<div class="custom-control custom-checkbox custom-control-inline mt-1" style="padding: 0;width: 38%;margin-right: 0;">
					<input type="text" class="form-control form-control-sm" id="bplace1" name="late_birth_in" onkeypress="return isTextKey(event)">
				</div>
				on
				<div class="custom-control custom-checkbox custom-control-inline mt-1" style="padding: 0;width: 38%;margin-right: 0;">
					<!-- Format: DAY MONTH YEAR -->
					<input type="text" class="form-control form-control-sm" id="bday1" name="late_birth_on">
				</div>
				&emsp;&emsp;&emsp;&emsp;&emsp;
				<div class="custom-control custom-checkbox custom-control-inline" style="margin-right: 0;">
					<input type="checkbox" class="custom-control-input" id="the_birth" name="late_birth_type2" value="the birth">
					<label class="custom-control-label" for="the_birth">&nbsp;the birth of</label>
				</div>
				<div class="custom-control custom-checkbox custom-control-inline mt-1" style="padding: 0;width: 32%;margin-right: 0;">
					<input type="text" class="form-control form-control-sm" id="childlatename" name="late_birth_of" onkeypress="return isTextKey(event)">
				</div>
				who was born in
				<div class="custom-control custom-checkbox custom-control-inline mt-1" style="padding: 0;width: 34%;margin-right: 0;">
					<input type="text" class="form-control form-control-sm" id="bplace2" name="late_birth_in2" onkeypress="return isTextKey(event)">
				</div>
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				<div class="custom-control custom-checkbox custom-control-inline mt-1" style="padding: 0;width: 28%;margin-right: 0;">
					<input type="text" class="form-control form-control-sm" style="background-color: white;border-top:none;border-left:none;border-right:none;border-color: green;border-radius: 0;" disabled>
				</div>
				on
				<div class="custom-control custom-checkbox custom-control-inline mt-1" style="padding: 0;width: 34%;margin-right: 0;">
					<!-- Format: DAY MONTH YEAR -->
					<input type="text" class="form-control form-control-sm" id="bday2" name="late_birth_on2">
				</div>
				.
				</h6>
				<h6>&emsp;&emsp;&emsp;&emsp;2.&emsp;That I/he/she was attended at birth by
				<div class="custom-control custom-checkbox custom-control-inline mt-1" style="padding: 0; width: 50%;margin-right: 0;">
					<!-- Auto-fill from attendant name but editable -->
					<input type="text" class="form-control form-control-sm" id="attend_birth_by" name="attend_birth_by">
				</div>
				who resides at
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				<div class="custom-control custom-checkbox custom-control-inline mt-1" style="padding: 0; width: 78%;margin-right: 0;">
					<input type="text" class="form-control form-control-sm" id="who_resides_at" name="who_resides_at" onkeypress="return isTextKey(event)">
				</div>
				.
				</h6>
				<h6>&emsp;&emsp;&emsp;&emsp;3.&emsp;That I/he/she is a citizen of
				<div class="custom-control custom-checkbox custom-control-inline mt-1" style="padding: 0; width: 50%;margin-right: 0;">
					<input type="text" class="form-control form-control-sm" id="late_citizen" name="late_citizen">
				</div>
				.
				</h6>
				<h6>&emsp;&emsp;&emsp;&emsp;4.&emsp;That my/his/her parents were&emsp;
				<div class="custom-control custom-checkbox custom-control-inline" style="margin-right: 0;">
					<input type="checkbox" class="custom-control-input" id="married" name="married_type">
					<label class="custom-control-label" for="married">&nbsp;married on</label>
				</div>
				<div class="custom-control custom-checkbox custom-control-inline mt-1" style="padding: 0; width: 30%;margin-right: 0;">
					
					<input type="text" class="form-control form-control-sm" id="married_txt1" name="married_on">
				</div>
				at
				<div class="custom-control custom-checkbox custom-control-inline mt-1" style="padding: 0; width: 35%;margin-right: 0;">
					<!-- Auto-fill from marriage_place (field 20b) but editable -->
					<input type="text" class="form-control form-control-sm" id="married_txt2" name="married_at" onkeypress="return isTextKey(event)">
				</div>
				<br>
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;
				<div class="custom-control custom-checkbox custom-control-inline" style="margin-right: 0;">
					<input type="checkbox" class="custom-control-input" id="not_married" name="married_type2" value="not married">
					<label class="custom-control-label" for="not_married">&nbsp;not married but I/he/she was acknowledged/not acknowledged by my/his/her</label>
				</div><br>
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp; 
				father whose name is
				<div class="custom-control custom-checkbox custom-control-inline" style="padding: 0; width: 45%;margin-right: 0;">
					<input type="text" class="form-control form-control-sm" id="not_married_txt" name="not_married_name" onkeypress="return isTextKey(event)">
				</div>
				.
				</h6>
				<h6>&emsp;&emsp;&emsp;&emsp;5.&emsp;That the reason for the delay in registering my/his/her birth was
				<div class="custom-control custom-checkbox custom-control-inline" style="padding: 0; width: 47%;margin-right: 0;">
					<!-- Default to NEGLIGENCE but editable -->
					<input type="text" class="form-control form-control-sm" name="late_reason_1">
				</div>
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				<div class="custom-control custom-checkbox custom-control-inline mt-1" style="padding: 0; width: 78%;margin-right: 0;">
					<input type="text" class="form-control form-control-sm" name="late_reason_2">
				</div>
				.
				</h6>
				<h6>&emsp;&emsp;&emsp;&emsp;6.&emsp;(For the applicant only)&emsp;That I am married to
				<div class="custom-control custom-checkbox custom-control-inline" style="padding: 0; width: 47%;margin-right: 0;">
					<input type="text" class="form-control form-control-sm" name="applicant_only" onkeypress="return isTextKey(event)">
				</div>
				.
				</h6>
				<h6>&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;(If the applicant is other than the document owner)&emsp;That I am the
				<div class="custom-control custom-checkbox custom-control-inline" style="padding: 0; width: 30%;margin-right: 0;">
					<!-- Auto-fill from rel_child (relationship to child from field 22) but editable -->
					<input type="text" class="form-control form-control-sm" id="applicant_relation" name="applicant_than_owner" onkeypress="return isTextKey(event)">
				</div>
				of the said person.
				</h6>
				<h6>&emsp;&emsp;&emsp;&emsp;7.&emsp;That I am executing this affidavit to attest to the truthfulness of the foregoing statements for all legal intents and purposes.</h6><br>
				
				<h6>&emsp;&emsp;&emsp;&emsp;In truth whereof, I have affixed my signature below this
				<div class="custom-control custom-checkbox custom-control-inline" style="padding: 0; width: 8%;margin-right: 0;">
					<input type="text" class="form-control form-control-sm" id="sign_day" name="sign_day">
				</div>
				day of
				<div class="custom-control custom-checkbox custom-control-inline mt-1" style="padding: 0; width: 18%;margin-right: 0;">
					<input type="text" class="form-control form-control-sm" id="sign_month" name="sign_month" onkeypress="return isTextKey(event)">
				</div>
				,
				<div class="custom-control custom-checkbox custom-control-inline mt-1" style="padding: 0; width: 8%;margin-right: 0;">
					<input type="text" class="form-control form-control-sm" maxlength="4" id="sign_year" name="sign_year" onkeypress="return isNumberKey(event)">
				</div>
				<div class="custom-control custom-checkbox custom-control-inline mt-1" style="padding: 0; width: 25%;margin-right: 0;">
					<input type="text" class="form-control form-control-sm" style="background-color: white;border-top:none;border-left:none;border-right:none;border-color: green;border-radius: 0;" disabled>
				</div>
				at
				<div class="custom-control custom-checkbox custom-control-inline mt-1" style="padding: 0; width: 30%;margin-right: 0;">
					<!-- Default to GERONA TARLAC but editable -->
					<input type="text" class="form-control form-control-sm" id="sign_at" name="sign_at" onkeypress="return isTextKey(event)">
				</div>
				, Philippines.
				</h6>
				<div class="row">
					<div class="col-7" align="center"></div>
					<div class="col-5" align="center">
						<!-- Auto-fill but editable -->
						<input type="text" class="form-control form-control-sm" id="affiant_name" name="affiant_name" onkeypress="return isTextKey(event)">
						<h6>(Signature Over Printed Name of Affiant)</h6>
					</div>
				</div><br>
				<h6>&emsp;&emsp;&emsp;&emsp;<span style="font-weight: bold;">SUBSCRIBED AND SWORN</span> to before me this
				<div class="custom-control custom-checkbox custom-control-inline mt-1" style="padding: 0; width: 7%;margin-right: 0;">
					<input type="text" class="form-control form-control-sm" id="sworn_day" name="late_sworn_day">
				</div>
				day of
				<div class="custom-control custom-checkbox custom-control-inline mt-1" style="padding: 0; width: 18%;margin-right: 0;">
					<input type="text" class="form-control form-control-sm" id="sworn_month" name="late_sworn_month" onkeypress="return isTextKey(event)">
				</div>
				,
				<div class="custom-control custom-checkbox custom-control-inline mt-1" style="padding: 0; width: 8%;margin-right: 0;">
					<input type="text" class="form-control form-control-sm" maxlength="4" id="sworn_year" name="late_sworn_year" onkeypress="return isNumberKey(event)">
				</div>
				at
				<div class="custom-control custom-checkbox custom-control-inline mt-1" style="padding: 0; width: 25%;margin-right: 0;">
					<!-- Default to GERONA TARLAC but editable -->
					<input type="text" class="form-control form-control-sm" id="sworn_at" name="late_sworn_at" onkeypress="return isTextKey(event)">
				</div>
				<span style="letter-spacing: 0.5px;">, Philippines, affiant who exhibited to me his/her CTC/valid ID</span>
				<div class="custom-control custom-checkbox custom-control-inline mt-1" style="padding: 0; width: 20%;margin-right: 0;">
					<input type="text" class="form-control form-control-sm" name="late_ctc" id="late_ctc">
				</div>
				issued on
				<div class="custom-control custom-checkbox custom-control-inline mt-1" style="padding: 0; width: 25%;margin-right: 0;">
					<input type="text" class="form-control form-control-sm" name="late_issued_on" id="late_issued_on"> 
				</div>
				at
				<div class="custom-control custom-checkbox custom-control-inline mt-1" style="padding: 0; width: 25%;margin-right: 0;">
					<input type="text" class="form-control form-control-sm" name="late_issued_at" id="late_issued_at" onkeypress="return isTextKey(event)">
				</div>
				.
				</h6><br><br>
				<div class="row">
					<div class="col-6" align="center">
						<input type="text" class="form-control form-control-sm" style="background-color: white;border-top:none;border-left:none;border-right:none;border-color: green;border-radius: 0;" name="late_officer_sign" disabled>
						<h6>Signature of the Administering Officer</h6>
						<input type="text" class="form-control form-control-sm" id="late_sworn_name" name="late_sworn_name" onkeypress="return isTextKey(event)">
						<h6>Name in Print</h6>
					</div>
					<div class="col-6" align="center">
				
						<input type="text" class="form-control form-control-sm" id="late_sworn_position" name="late_sworn_position" onkeypress="return isTextKey(event)">
						<h6>Position/Title/Designation</h6>
						
						<input type="text" class="form-control form-control-sm" id="late_sworn_address" name="late_sworn_address" onkeypress="return isTextKey(event)">
						<h6>Address</h6>
					</div>
				</div>
			</div>
		</div><!--close row-->
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Javascript -->
<script>
// Day validation for all day fields
$(document).ready(function(){
	$("#ack_sworn_day, #sign_day, #sworn_day").keyup(function(){
		var a = $(this).val();
		// Remove ordinal suffix for validation
		var numVal = parseInt(a);
		if(numVal >= 32 || numVal <= 0){
			alertify.dialog('alert').set({transition:'zoom',message: 'Warning: Invalid Input!'}).show(); 
			$(this).val("");
		}
	});
});
</script>

<!-- Auto-fill father name from front page - AUTOMATIC -->
<script>
// Auto-fill when father name fields change on Page 1
function updateFatherName() {
	var pf = document.getElementById("father_fname").value;
	var pm = document.getElementById("father_mname").value;
	var pl = document.getElementById("father_lname").value;
	var papa = (pf + " " + pm + " " + pl).trim();
	
	// document.getElementById("father_name").value = papa;
	// document.getElementById("father_sign").value = papa;
	document.getElementById("ack_father_sworn").value = papa;
}

document.getElementById("father_fname").addEventListener("input", updateFatherName);
document.getElementById("father_mname").addEventListener("input", updateFatherName);
document.getElementById("father_lname").addEventListener("input", updateFatherName);

// Also trigger on Enter key for manual override
document.getElementById("father_name").addEventListener("keydown", function(event) {
	if (event.key === "Enter") {
		updateFatherName();
	}
});
</script>

<!-- Auto-fill mother name from front page - AUTOMATIC -->
<script>
// Auto-fill when mother name fields change on Page 1
function updateMotherName() {
	var mf = document.getElementById("mother_fname").value;
	var mm = document.getElementById("mother_mname").value;
	var ml = document.getElementById("mother_lname").value;
	var mama = (mf + " " + mm + " " + ml).trim();
	
	// document.getElementById("mother_name").value = mama;
	// document.getElementById("mother_sign").value = mama;
	document.getElementById("ack_mother_sworn").value = mama;
}

document.getElementById("mother_fname").addEventListener("input", updateMotherName);
document.getElementById("mother_mname").addEventListener("input", updateMotherName);
document.getElementById("mother_lname").addEventListener("input", updateMotherName);

// Also trigger on Enter key for manual override
document.getElementById("mother_name").addEventListener("keydown", function(event) {
	if (event.key === "Enter") {
		updateMotherName();
	}
});
</script>

<!-- Auto-fill child name from front page - AUTOMATIC -->
<script>
// Auto-fill when child name fields change on Page 1
function updateChildName() {
	var cf = document.getElementById("child_fname").value;
	var cm = document.getElementById("child_mname").value;
	var cl = document.getElementById("child_lname").value;
	var bata = (cf + " " + cm + " " + cl).trim();
	
	document.getElementById("child_name").value = bata;
	document.getElementById("childlatename").value = bata;
}

document.getElementById("child_fname").addEventListener("input", updateChildName);
document.getElementById("child_mname").addEventListener("input", updateChildName);
document.getElementById("child_lname").addEventListener("input", updateChildName);

// Also trigger on Enter key for manual override
document.getElementById("child_name").addEventListener("keydown", function(event) {
	if (event.key === "Enter") {
		updateChildName();
	}
});
</script>

<!-- Auto-fill birth place from front page - AUTOMATIC -->
<script>
// Auto-fill when birth place fields change on Page 1
function updateBirthPlace() {
	var birthcity = document.getElementById("birth_city").value;
	var birthprov = document.getElementById("birth_province").value;
	var birthloc = (birthcity + " " + birthprov).trim();
	
	document.getElementById("birth_place").value = birthloc;
	document.getElementById("bplace2").value = birthloc;
}

document.getElementById("birth_city").addEventListener("input", updateBirthPlace);
document.getElementById("birth_province").addEventListener("input", updateBirthPlace);

// Also trigger on Enter key for manual override
document.getElementById("birth_place").addEventListener("keydown", function(event) {
	if (event.key === "Enter") {
		updateBirthPlace();
	}
});
</script>

<!-- Auto-fill birth_date from front page birth_day field - Format: DAY MONTH YEAR -->
<script>
document.getElementById("birth_day").addEventListener("input", function() {
	const dateValue = this.value.trim();
	
	if (dateValue) {
		// Parse format like "10-2-2025" (day-month-year)
		let v = dateValue.replace(/[\/\.\s]+/g, "-").replace(/-+/g, "-");
		const parts = v.split("-");
		
		if (parts.length === 3) {
			const d = parseInt(parts[0], 10);  // day
			const m = parseInt(parts[1], 10);  // month
			const y = parseInt(parts[2], 10);  // year
			
			const MON = ["JANUARY","FEBRUARY","MARCH","APRIL","MAY","JUNE","JULY","AUGUST","SEPTEMBER","OCTOBER","NOVEMBER","DECEMBER"];
			
			// Validate date
			const test = new Date(y, m - 1, d);
			if (test.getFullYear() === y && test.getMonth() === m - 1 && test.getDate() === d) {
				// Format: DAY MONTH YEAR (e.g., 6 SEPTEMBER 2018)
				document.getElementById("birth_date").value = `${d} ${MON[m - 1]} ${y}`;
				document.getElementById("bday1").value = `${d} ${MON[m - 1]} ${y}`;
				document.getElementById("bday2").value = `${d} ${MON[m - 1]} ${y}`;
			}
		}
	}
});
</script>

<!-- Auto-fill bplace1 from birth place fields - AUTOMATIC -->
<script>
// Auto-fill when birth place fields change on Page 1
function updateBplace1() {
	var birthbrgy1 = document.getElementById("birth_brgy").value;
	var birthcity1 = document.getElementById("birth_city").value;
	var birthprov1 = document.getElementById("birth_province").value;
	var birthloc1 = (birthbrgy1 + " " + birthcity1 + " " + birthprov1).trim();
	
	document.getElementById("bplace1").value = birthloc1;
}

document.getElementById("birth_brgy").addEventListener("input", updateBplace1);
document.getElementById("birth_city").addEventListener("input", updateBplace1);
document.getElementById("birth_province").addEventListener("input", updateBplace1);

// Also trigger on Enter key for manual override
document.getElementById("bplace1").addEventListener("keydown", function(event) {
	if (event.key === "Enter") {
		updateBplace1();
	}
});
</script>

<!-- Auto-fill childlatename and bplace2 - handled by updateChildName and updateBirthPlace functions above -->
<script>
// Additional trigger on Enter key for childlatename
document.getElementById("childlatename").addEventListener("keydown", function(event) {
	if (event.key === "Enter") {
		var cf2 = document.getElementById("child_fname").value;
		var cm2 = document.getElementById("child_mname").value;
		var cl2 = document.getElementById("child_lname").value;
		var bata2 = (cf2 + " " + cm2 + " " + cl2).trim();
		document.getElementById("childlatename").value = bata2;
		
		var birthcity2 = document.getElementById("birth_city").value;
		var birthprov2 = document.getElementById("birth_province").value;
		var birthloc2 = (birthcity2 + " " + birthprov2).trim();
		document.getElementById("bplace2").value = birthloc2;
	}
});
</script>

<!-- Auto-fill late_name from informant_name (field 22) - AUTOMATIC -->
<script>
// Auto-fill when informant_name changes
document.getElementById("informant_name").addEventListener("input", function() {
	document.getElementById("late_name").value = this.value;
	document.getElementById("affiant_name").value = this.value;
});

// Auto-fill when informant_address changes
document.getElementById("informant_address").addEventListener("input", function() {
	document.getElementById("late_address").value = this.value;
});

// Also trigger on Enter key for manual override
document.getElementById("late_name").addEventListener("keydown", function(event) {
	if (event.key === "Enter") {
		document.getElementById("late_name").value = document.getElementById("informant_name").value;
		document.getElementById("late_address").value = document.getElementById("informant_address").value;
		document.getElementById("affiant_name").value = document.getElementById("informant_name").value;
	}
});
</script>

<!-- Auto-fill affiant_name from late_name -->
<script>
document.getElementById("late_name").addEventListener("input", function() {
	document.getElementById("affiant_name").value = this.value;
});

document.getElementById("affiant_name").addEventListener("keydown", function(event) {
	if (event.key === "Enter") {
		document.getElementById("affiant_name").value = document.getElementById("late_name").value;
	}
});
</script>

<!-- Auto-fill attend_birth_by from attendant_name - AUTOMATIC -->
<script>
// Auto-fill when attendant_name changes on Page 1
document.getElementById("attendant_name").addEventListener("input", function() {
	document.getElementById("attend_birth_by").value = this.value;
});

// Auto-fill when attendant_address1 changes on Page 1
document.getElementById("attendant_address1").addEventListener("input", function() {
	document.getElementById("who_resides_at").value = this.value;
});

// Also trigger on Enter key for manual override
document.getElementById("attend_birth_by").addEventListener("keydown", function(event) {
	if (event.key === "Enter") {
		document.getElementById("attend_birth_by").value = document.getElementById("attendant_name").value;
		document.getElementById("who_resides_at").value = document.getElementById("attendant_address1").value;
	}
});
</script>

<!-- Auto-fill married_txt1 from marriage_date - Format: MONTH DAY YEAR -->
<script>
document.getElementById("marriage_date").addEventListener("input", function() {
	const dateValue = this.value.trim();
	
	if (dateValue) {
		// Replace slashes, dots, or spaces with dash
		let v = dateValue.replace(/[\/\.\s]+/g, "-").replace(/-+/g, "-");
		const parts = v.split("-");
		
		if (parts.length === 3) {
			const m = parseInt(parts[0], 10);  // month
			const d = parseInt(parts[1], 10);  // day
			const y = parseInt(parts[2], 10);  // year
			
			const MON = ["JANUARY","FEBRUARY","MARCH","APRIL","MAY","JUNE","JULY","AUGUST","SEPTEMBER","OCTOBER","NOVEMBER","DECEMBER"];
			
			// Validate date
			const test = new Date(y, m - 1, d);
			if (test.getFullYear() === y && test.getMonth() === m - 1 && test.getDate() === d) {
				// Format: MONTH DAY YEAR (e.g., DECEMBER 17 2017)
				document.getElementById("married_txt1").value = `${MON[m - 1]} ${d} ${y}`;
			}
		}
	}
});
</script>

<!-- Auto-fill married_txt2 from marriage_place - AUTOMATIC -->
<script>
// Auto-fill when marriage_place changes on Page 1
document.getElementById("marriage_place").addEventListener("input", function() {
	document.getElementById("married_txt2").value = this.value;
});

// Also trigger on Enter key for manual override
document.getElementById("married_txt2").addEventListener("keydown", function(event) {
	if (event.key === "Enter") {
		document.getElementById("married_txt2").value = document.getElementById("marriage_place").value;
	}
});
</script>

<!-- Auto-fill not_married_txt from father name - AUTOMATIC when not_married checkbox is checked -->
<script>
// Auto-fill when not_married checkbox is checked
document.getElementById("not_married").addEventListener("change", function() {
	if (this.checked) {
		var pf2 = document.getElementById("father_fname").value;
		var pm2 = document.getElementById("father_mname").value;
		var pl2 = document.getElementById("father_lname").value;
		var papa2 = (pf2 + " " + pm2 + " " + pl2).trim();
		document.getElementById("not_married_txt").value = papa2;
	}
});

// Also trigger on Enter key for manual override
document.getElementById("not_married_txt").addEventListener("keydown", function(event) {
	if (event.key === "Enter") {
		var pf2 = document.getElementById("father_fname").value;
		var pm2 = document.getElementById("father_mname").value;
		var pl2 = document.getElementById("father_lname").value;
		var papa2 = (pf2 + " " + pm2 + " " + pl2).trim();
		document.getElementById("not_married_txt").value = papa2;
	}
});
</script>

<!-- Auto-fill applicant_relation from rel_child (relationship to child from field 22) - AUTOMATIC -->
<script>
// Auto-fill when rel_child changes on Page 1
document.getElementById("rel_child").addEventListener("input", function() {
	document.getElementById("applicant_relation").value = this.value.toUpperCase();
});

// Also trigger on Enter key for manual override
document.getElementById("applicant_relation").addEventListener("keydown", function(event) {
	if (event.key === "Enter") {
		document.getElementById("applicant_relation").value = document.getElementById("rel_child").value.toUpperCase();
	}
});
</script>

<!-- Auto-fill ack_sworn_name and late_sworn_name from civil_name - AUTOMATIC -->
<script>
// Auto-fill when civil_name changes on Page 1
document.getElementById("civil_name").addEventListener("input", function() {
	document.getElementById("ack_sworn_name").value = this.value;
	document.getElementById("late_sworn_name").value = this.value;
});

// Also trigger on Enter key for manual override
document.getElementById("ack_sworn_name").addEventListener("keydown", function(event) {
	if (event.key === "Enter") {
		document.getElementById("ack_sworn_name").value = document.getElementById("civil_name").value;
	}
});
</script>

<!-- Auto-fill late_sworn_name from civil_name -->
<script>
document.getElementById("late_sworn_name").addEventListener("keydown", function(event) {
	if (event.key === "Enter") {
		document.getElementById("late_sworn_name").value = document.getElementById("civil_name").value;
	}
});
</script>

<!-- Auto-fill CTC fields from ack_ctc -->
<script>
document.getElementById("late_ctc").addEventListener("keydown", function(event) {
	if (event.key === "Enter") {
		document.getElementById("late_ctc").value = document.getElementById("ack_ctc").value;
	}
});

document.getElementById("late_issued_on").addEventListener("keydown", function(event) {
	if (event.key === "Enter") {
		document.getElementById("late_issued_on").value = document.getElementById("ack_issued_on").value;
	}
});

document.getElementById("late_issued_at").addEventListener("keydown", function(event) {
	if (event.key === "Enter") {
		document.getElementById("late_issued_at").value = document.getElementById("ack_issued_at").value;
	}
});
</script>

<!-- Move to next input on Enter key -->
<script>
document.addEventListener("DOMContentLoaded", function() {
	let inputs = document.querySelectorAll(".form-control");
	
	inputs.forEach((input, index) => {
		input.addEventListener("keydown", function(event) {
			if(event.key === "Enter"){
				event.preventDefault();
				let nextInput = inputs[index + 1];
				if (nextInput){
					nextInput.focus();
				}
			}
		});
	});
});
</script>

<!-- Auto-check "the birth" checkbox when filling child late name -->
<script>
document.getElementById("childlatename").addEventListener("input", function() {
	if(this.value.trim() !== "") {
		document.getElementById("the_birth").checked = true;
		document.getElementById("my_birth").checked = false;
	}
});

document.getElementById("bplace1").addEventListener("input", function() {
	if(this.value.trim() !== "") {
		document.getElementById("my_birth").checked = true;
		document.getElementById("the_birth").checked = false;
	}
});
</script>

<!-- Auto-check married checkbox when filling married date -->
<script>
document.getElementById("married_txt1").addEventListener("input", function() {
	if(this.value.trim() !== "") {
		document.getElementById("married").checked = true;
		document.getElementById("not_married").checked = false;
	}
});

document.getElementById("not_married_txt").addEventListener("input", function() {
	if(this.value.trim() !== "") {
		document.getElementById("not_married").checked = true;
		document.getElementById("married").checked = false;
	}
});
</script>

<script> 
$(document).ready(function() {
    
    function syncCurrentField(focusedElement) {
        const rawData = localStorage.getItem('birth_form_data');
        const data = rawData ? JSON.parse(rawData) : {};
        
        const elementId = $(focusedElement).attr('id');
        let valueToFill = "";

        // Get Current Date Details
        const now = new Date();
        const currentDay = now.getDate();
        const currentYear = now.getFullYear();
        const currentMonthName = now.toLocaleString('default', { month: 'long' });

        // Prepare Parent Full Names for comparison
        const fName = `${data.father_fname || ''} ${data.father_mname || ''} ${data.father_lname || ''}`.trim().toUpperCase();
        const mName = `${data.mother_fname || ''} ${data.mother_mname || ''} ${data.mother_lname || ''}`.trim().toUpperCase();

        switch (elementId) {
            // --- DATE FIELDS ---
            case 'sworn_day':
            case 'ack_sworn_day':
            case 'sign_day':
                valueToFill = currentDay.toString();
                break;
            case 'sworn_month':
            case 'ack_sworn_month':
            case 'sign_month':	
                valueToFill = currentMonthName;
                break;
            case 'sworn_year':
            case 'ack_sworn_year':
            case 'sign_year':
                valueToFill = currentYear.toString();
                break;
			
			case 'married_txt1':
			case 'married_on':
				valueToFill = data.marriage_date || "";
				break;

			case 'married_txt2': 
			case 'married_at':
				valueToFill = data.marriage_place || "";
				break;

            case 'late_name':
                const currentVal = $(focusedElement).val().trim().toUpperCase();
                
                // If box is empty OR currently shows the Father, switch to Mother
                // If currently shows Mother or anything else, default back to Father
                if (currentVal === "" || currentVal === fName) {
                    // Use Father if available and not N/A, otherwise Mother
                    valueToFill = (fName && !fName.includes("N/A")) ? fName : mName;
                    
                    // If we just tried to fill the same Father name that was already there, toggle to Mother
                    if (currentVal === fName && fName !== "") {
                        valueToFill = mName;
                    }
                } else {
                    valueToFill = fName;
                }
                break;

            case 'late_address':
                valueToFill = `${data.mother_brgy || ''} ${data.mother_city || ''} ${data.mother_province || ''}`;
                break;

            case 'child_name':
            case 'childlatename':
			case 'late_birth_of':
                valueToFill = `${data.child_fname || ''} ${data.child_mname || ''} ${data.child_lname || ''}`;
                break;

            case 'father_name':
            case 'father_sign':
            case 'ack_father_sworn':
                valueToFill = fName;
                break;

            case 'mother_name':
            case 'mother_sign':
            case 'ack_mother_sworn':
                valueToFill = mName;
                break;

            case 'birth_date':
			case 'late_birth_on':
			case 'bday1':
				valueToFill = data.birth_day || "";
				break;

			case 'birth_place':
			case 'late_birth_in':
			case 'bplace1':
				valueToFill = data.birth_place || "";
				break;
			
			case 'ack_sworn_name':
            case 'late_sworn_name':
                valueToFill = data.civil_name || "";
                break;

			case 'ack_sworn_position':
			case 'late_sworn_position':
				valueToFill = data.civil_position || ""; 
				break;

			case 'applicant_than_owner':
			case 'applicant_relation':  
				valueToFill = data.rel_child || "";
				break;

			case 'ack_sworn_address':
			case 'late_sworn_address':
				valueToFill = "GERONA TARLAC";
				break;

        }
			

        if (valueToFill) {
            $(focusedElement).val(valueToFill.trim().toUpperCase());
        }
    }

    $('input').on('keydown', function(e) {
        if (e.key === "Enter") {
            e.preventDefault(); 
            
            syncCurrentField(this);

            // Move to next field
            const allInputs = $('input:visible:not([disabled])');
            const index = allInputs.index(this);
            if (index > -1 && index < allInputs.length - 1) {
                allInputs.eq(index + 1).focus();
            }
        }
    });
});
</script>

</body>
</html>