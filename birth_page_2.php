
<?php include 'mycon.php'; ?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
			<style>
			/* Global font settings */
			.ctf-birth, .ctf-birth * {
				font-size: 10px !important;
				color: #000;
				box-sizing: border-box; /* Ensures padding doesn't break width */
			}
			.ctf-birth {
				width: 960px;
				margin: 20px auto;
				background-color: #fff;
				border: 2px solid green;
			}
			
			/* Layout Utilities */
			.flex-row-form { display: flex; width: 100%; border-bottom: 2px solid green; }
			.flex-row-form:last-child { border-bottom: none; }
			
			/* MODIFIED: Flex Column Layout for Cells */
			.flex-col-form { 	
				flex: 1; 
				border-right: 2px solid green; 
				padding: 4px; 
				min-height: 45px; 
				
				/* This fixes the overlap issue: */
				display: flex;            
				flex-direction: column;   /* Stacks text on top, input on bottom */
				justify-content: space-between; /* Pushes them apart */
			}
			.flex-col-form:last-child { border-right: none; }
			
			/* Section Headings (SIDEBAR) */
			.sidebar-label {
				width: 35px;
				background-color: #fff;
				display: flex;
				align-items: center;
				justify-content: center;
				font-weight: bold;
				font-size: 14px !important;
				text-align: center;
				border-right: 2px solid green;
				line-height: 1.5;
				flex: 0 0 3.5% !important;
				max-width: 3.5%;    
			}

			/* Input Styling */
			.header-title { font-size: 24px !important; font-weight: bold; margin: 0; }
			.label-green { color: green; font-style: italic; display: block; text-align: center; }
			.label-5green { color: green; font-style: italic; display: block; text-align: left; }
			.label-5cgreen { color: green; font-style: italic; display: inline; text-align: left; }
			.bg-cyan { background-color: #7FFFD4 !important; }
			
			.form-control-sm { 
				border-bottom: 1px solid green !important;
				box-shadow: none !important;
				outline: none !important;	
			}

			/* --- FIX: PUSH INPUT TO BOTTOM SAFELY --- */
			.flex-col-form .form-control-sm {
				margin-top: auto; /* Acts like a spring, pushing input to the bottom */
			}

			/* Grid for Bottom "Filled Up" section */
			.box-grid {
				display: grid;
				grid-template-columns: repeat(30, 1fr);
				border: 1px solid #000;
				margin-top: 5px;
			}
			.box-grid div {
				border-right: 1px solid #000;
				height: 20px;
				text-align: center;
				line-height: 20px;
			}
			.box-grid div:last-child { border-right: none; }
		</style>

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
					<input type="text" class="form-control form-control-sm" id="birth_date" name="birth_date" placeholder="DAY MONTH YEAR">
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
						<!-- Default to MUNICIPAL CIVIL REGISTRAR but editable -->
						<input type="text" class="form-control form-control-sm" id="ack_sworn_position" name="ack_sworn_position" value="MUNICIPAL CIVIL REGISTRAR" onkeypress="return isTextKey(event)">
						<h6>Position/Title/Designation</h6>
						<!-- Default to GERONA TARLAC but editable -->
						<input type="text" class="form-control form-control-sm" id="ack_sworn_address" name="ack_sworn_address" value="GERONA TARLAC" onkeypress="return isTextKey(event)">
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
					<input type="text" class="form-control form-control-sm" id="bday1" name="late_birth_on" placeholder="DAY MONTH YEAR">
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
					<input type="text" class="form-control form-control-sm" id="bday2" name="late_birth_on2" placeholder="DAY MONTH YEAR">
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
					<!-- Default to PHILIPPINES but editable -->
					<input type="text" class="form-control form-control-sm" id="late_citizen" name="late_citizen" value="PHILIPPINES">
				</div>
				.
				</h6>
				<h6>&emsp;&emsp;&emsp;&emsp;4.&emsp;That my/his/her parents were&emsp;
				<div class="custom-control custom-checkbox custom-control-inline" style="margin-right: 0;">
					<input type="checkbox" class="custom-control-input" id="married" name="married_type" value="married">
					<label class="custom-control-label" for="married">&nbsp;married on</label>
				</div>
				<div class="custom-control custom-checkbox custom-control-inline mt-1" style="padding: 0; width: 30%;margin-right: 0;">
					<!-- Auto-fill from marriage_date (field 20a) - Format: MONTH DAY YEAR -->
					<input type="text" class="form-control form-control-sm" id="married_txt1" name="married_on" placeholder="MONTH DAY YEAR">
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
					<input type="text" class="form-control form-control-sm" name="late_reason_1" value="NEGLIGENCE">
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
					<input type="text" class="form-control form-control-sm" id="sign_at" name="sign_at" value="GERONA TARLAC" onkeypress="return isTextKey(event)">
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
					<input type="text" class="form-control form-control-sm" id="sworn_at" name="late_sworn_at" value="GERONA TARLAC" onkeypress="return isTextKey(event)">
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
						<!-- Default to MUNICIPAL CIVIL REGISTRAR but editable -->
						<input type="text" class="form-control form-control-sm" id="late_sworn_position" name="late_sworn_position" value="MUNICIPAL CIVIL REGISTRAR" onkeypress="return isTextKey(event)">
						<h6>Position/Title/Designation</h6>
						<!-- Default to GERONA TARLAC but editable -->
						<input type="text" class="form-control form-control-sm" id="late_sworn_address" name="late_sworn_address" value="GERONA TARLAC" onkeypress="return isTextKey(event)">
						<h6>Address</h6>
					</div>
				</div>
			</div>
		</div><!--close row-->
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script> 
$(document).ready(function() {
    
    function syncFromPage1() {
        const rawData = localStorage.getItem('birth_form_data');
        if (!rawData) {
            alert("No data found from Page 1. Please type something in Page 1 first.");
            return;
        }

        const data = JSON.parse(rawData);

        // Fill Affidavit Fields
        $('#child_name').val(data.child_fname + " " + data.child_mname + " " + data.child_lname);
        $('#father_name').val(data.father_fname + " " + data.father_mname + " " + data.father_lname);
        $('#mother_name').val(data.mother_fname + " " + data.mother_mname + " " + data.mother_lname);
        
        // Fill Signatures
        $('#father_sign').val(data.father_fname + " " + data.father_mname + " " + data.father_lname);
        $('#mother_sign').val(data.mother_fname + " " + data.mother_mname + " " + data.mother_lname);
        
        // Fill Sworn Names (using the IDs from your HTML)
        $('#ack_father_sworn').val(data.father_fname + " " + data.father_lname);
        $('#ack_mother_sworn').val(data.mother_fname + " " + data.mother_lname);

        // Fill Birth Info
        $('#birth_date').val(data.birth_day);
        $('#birth_place').val(data.birth_place);
        
        // Fill Delayed Registration Name
        $('#childlatename').val(data.child_fname + " " + data.child_mname + " " + data.child_lname);
        
        console.log("Data Pulled Successfully");
    }

    // Handle the Enter Key
    $('input').on('keydown', function(e) {
        if (e.key === "Enter") {
            e.preventDefault(); // Stop page from reloading
            syncFromPage1();
        }
    });
});
</script>