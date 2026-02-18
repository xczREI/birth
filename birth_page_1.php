<?php 

use Dompdf\Css\Style;
include 'mycon.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate of Live Birth - Form 102</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
			<style>
 HEAD
		/* Global font size 10 as requested by client */
		.ctf-birth, .ctf-birth * {
			font-size: 10px !important;
		}
		.ctf-birth h4 {
			font-size: 12px !important;
		}
		.ctf-birth h6 {
			font-size: 10px !important;
		}
		.ctf-birth input, 
		.ctf-birth select, 
		.ctf-birth textarea,
		.ctf-birth label,
		.ctf-birth span,
		.ctf-birth option {
			font-size: 10px !important;
		}
		/* Header styling */
		.ctf-birth .header-title {
			font-size: 24px !important;
			font-weight: bold;
			white-space: nowrap;
		}
		.ctf-birth .header-subtitle {
			font-size: 10px !important;
		}
		.ctf-birth .header-republic {
			font-size: 12px !important;
		}
		/* Style for editable dropdowns */
		.editable-select {
			position: relative;
		}
		.editable-select input {
			width: 100%;
		}

		/* Layout for the PSA Data Slots */
.flex-container {
    display: flex;
    flex-wrap: nowrap;
    margin-top: 5px;
    width: 100%;
}

.flex-container > div {
    flex: 1;
    border: 1px solid #000; /* Standard black border for PSA slots */
    height: 25px;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Remove internal borders to create the "connected" look for sub-slots */
.flex-container div:not(:last-child) {
    border-right: none;
}

/* Specific groupings to create visual gaps between numbered sections */
.section-gap {
    margin-right: 5px;
    border-right: 1px solid #000 !important;
}

/* Ensure inputs inside slots are clean and centered */
.flex-container input {
    border: none !important;
    text-align: center;
    width: 100%;
    background-color: transparent;
    font-weight: bold;
}

	</style>

	<script type="text/javascript">
		$(document).ready(function () {
			
			$("#provinces").change(function(){
				var prov_id = $(this).val();
				$.ajax({
					url: "getmunicipal.php",
					method: "POST",
					data:{provID:prov_id},
					success: function(data){
						$("#municipals").html(data);
					}
				});
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function () {
			
			$("#birth_province").change(function(){
				var bprov_id = $(this).val();
				$.ajax({
					url: "getmunicipalb.php",
					method: "POST",
					data:{bprovID:bprov_id},
					success: function(data){
						$("#birth_city").html(data);
					}
				});
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function () {
			
			$("#mother_province").change(function(){
				var mprov_id = $(this).val();
				$.ajax({
					url: "getmunicipalm.php",
					method: "POST",
					data:{mprovID:mprov_id},
					success: function(data){
						$("#mother_city").html(data);
					}
				});
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function () {
			
			$("#father_province").change(function(){
				var fprov_id = $(this).val();
				$.ajax({
					url: "getmunicipalf.php",
					method: "POST",
					data:{fprovID:fprov_id},
					success: function(data){
						$("#father_city").html(data);
					}
				});
			});
		});
	</script>

	<!-- Province list -->
	<datalist id="province_list">
		<?php 
			require 'mycon.php';
			$sqlp = "SELECT * from tblprovinces";
			$resultp = $connx->query($sqlp);
			while ($row = $resultp->fetch_assoc()) {
				echo "<option value='" . $row['province'] . "'>" . $row['province'] . "</option>";
			}				
		?>
	</datalist>

	<!-- Municipality list -->
	<datalist id="municipality_list">
		<?php 
			require 'mycon.php';
			$sqlp = "SELECT * from tblmunicipals";
			$resultp = $connx->query($sqlp);
			while ($row = $resultp->fetch_assoc()) {
				echo "<option value='" . $row['municipals'] . "'>" . $row['municipals'] . "</option>";}
				?>
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
</head>
<body>

<div class="ctf-birth">
    <div class="flex-row-form">
        <div class="flex-col-form text-center" style="flex: 3; padding: 15px;">
            <p class="text-left m-0">Municipal Form No. 102</p>
            <p class="m-0">Republic of the Philippines</p>
            <p class="m-0" style="font-size: 9px !important;">OFFICE OF THE CIVIL REGISTRAR GENERAL</p>
            <h1 class="header-title">CERTIFICATE OF LIVE BIRTH</h1>
        </div>
        <div class="flex-col-form bg-light" style="flex: 1; border-left: 2px solid green;">
            <label class="m-0">Book No.</label>
            <input type="text" name="book_no" class="form-control form-control-sm bg-cyan mb-1">
            <label class="m-0">Page No.</label>
            <input type="text" name="page_no" class="form-control form-control-sm bg-cyan">
        </div>
    </div>

    <div class="flex-row-form">
        <div class="flex-col-form" style="flex: 3;">
            <div class="d-flex align-items-center mb-1">
                <span style="width: 100px;">&nbsp;Province</span>
                <input type="text" list="province_list" name="provinces" value="TARLAC" class="form-control form-control-sm">
            </div>
            <div class="d-flex align-items-center">
                <span style="width: 100px;">&nbsp;City/Municipality</span>
                <input type="text" list="municipality_list" name="municipal" value="GERONA" class="form-control form-control-sm">
            </div>
        </div>
        <div class="flex-col-form" style="flex: 1; border-left: 2px solid green;">
            <label class="m-0">Registry No.</label>
            <input type="text" name="registry_no" class="form-control form-control-sm bg-cyan">
        </div>
    </div>

    <div class="d-flex border-bottom" style="border-bottom: 2px solid green !important;">
        <div class="sidebar-label">C<br>H<br>I<br>L<br>D</div>
        <div class="flex-fill">
				<div class="flex-col-form" style="flex: 1; border-bottom: 2px solid green !important;">								
								<div style="display: flex; gap: 10px; width: 100%; margin-top: auto;">
									<strong>1. NAME</strong>
									<div style="flex: 1; display: flex; flex-direction: column;">
										<span class="label-green">(First)</span>
										<input type="text" name="child_fname" class="form-control form-control-sm" id="child_fname">
									</div>

									<div style="flex: 1; display: flex; flex-direction: column;">
										<span class="label-green">(Middle)</span>
										<input type="text" name="child_mname" class="form-control form-control-sm" id="child_mname">
									</div>

									<div style="flex: 1; display: flex; flex-direction: column;">
										<span class="label-green">(Last)</span>
										<input type="text" name="child_lname" class="form-control form-control-sm" id="child_lname">
									</div>
								</div>
				</div>	
           <div class="flex-row-form">
				<div class="flex-col-form">
					<div>
						<strong class="mr-1">2. SEX</strong> 
						<span style="color:green;">(Male/Female)</span>
					</div>
					<input type="text" name="sex" class="form-control form-control-sm">
				</div>

				<div class="flex-col-form" style="flex: 2;">
					<div>
						<strong class="mr-1">3. DATE OF BIRTH</strong> 
						<span class="label-green" style="display:inline;">(Day - Month - Year)</span>
					</div>
					<input type="text" name="birth_day" class="form-control form-control-sm" placeholder="e.g. 9-5-2025" value="<?php echo date('j-n-Y'); ?>">
				</div>
			</div>

            <div class="flex-row-form" style="padding: 10px; border-bottom: 2px solid green !important;">                             
			<div style="display: flex; gap: 10px; width: 100%; align-items: flex-start;">
				<strong style="white-space: nowrap; margin-top: 5px;">4. PLACE OF BIRTH</strong>
				
				<div style="flex: 2; display: flex; flex-direction: column; align-items: center;">
					<span class="label-green">(Hospital/Barangay)</span>
					<input type="text" name="birth_brgy" class="form-control form-control-sm text-center">
				</div>

				<div style="flex: 1; display: flex; flex-direction: column; align-items: center;">
					<span class="label-green">(Municipality)</span>
					<input type="text" list="municipality_list" name="birth_city" value="GERONA" class="form-control form-control-sm text-center">
				</div>

				<div style="flex: 1; display: flex; flex-direction: column; align-items: center;">
					<span class="label-green">(Province)</span>
					<input type="text" list="province_list" name="birth_province" value="TARLAC" class="form-control form-control-sm text-center">
				</div>
			</div>
			</div>

			<div class="flex-row-form">
                <div class="flex-col-form" style="flex: 0.4;"><strong> 5a. TYPE OF BIRTH</strong>
					<span class="label-5green">(Single, Twin, Triplet, etc)</span>
					<input type="text" name="birth_brgy" class="form-control form-control-sm">
				</div>
				
                <div class="flex-col-form" style="flex: 0.4;"><strong> 5b. IF MULTIPLE BIRTH, CHILD WAS</strong>
					<span class="label-5green">
						(First, Second, Third, etc)</span>
					<input type="text" name="birth_brgy" class="form-control form-control-sm">
				</div>

                <div class="flex-col-form" style="flex: 0.8;">
					<div>
						<strong>5c. BIRTH ORDER</strong> 
				<span class="label-5cgreen">
					(Order of this birth to previous live births including fetal death)(First, Second, Third, etc)
				</span> 
					<input type="text" name="birth_brgy" class="form-control form-control-sm">
					</div>
				</div>

                <div class="flex-col-form" style="flex: 0.4;">
					<strong>6. WEIGHT AT BIRTH</strong>
					<div class="d-flex align-items-baseline mt-auto">
						<input type="text" name="birth_weight" class="form-control form-control-sm text-center" value="2000">
						<span class="ml-2">grams</span>
					</div>
				</div>
            </div>
        </div>
    </div>

    <div class="d-flex border-bottom" style="border-bottom: 2px solid green !important;">
        <div class="sidebar-label">M<br>O<br>T<br>H<br>E<br>R</div>
        <div class="flex-fill">

				<div class="flex-row-form" style="border-bottom: 2px solid green !important;">                             
				<div style="display: flex; gap: 10px; width: 100%; align-items: baseline; padding: 4px;">
					<strong style="white-space: nowrap;">7. MAIDEN NAME</strong>
					
					<div style="flex: 1; display: flex; flex-direction: column;">
						<span class="label-green text-center" style="font-style: italic;">(First)</span>
						<input type="text" name="mother_fname" class="form-control form-control-sm text-center">
					</div>

					<div style="flex: 1; display: flex; flex-direction: column;">
						<span class="label-green text-center" style="font-style: italic;">(Middle)</span>
						<input type="text" name="mother_mname" class="form-control form-control-sm text-center">
					</div>

					<div style="flex: 1; display: flex; flex-direction: column;">
						<span class="label-green text-center" style="font-style: italic;">(Last)</span>
						<input type="text" name="mother_lname" class="form-control form-control-sm text-center" id="mother_lname">
					</div>
				</div>
			</div>

            <div class="flex-row-form">
                <div class="flex-col-form"><strong>8. CITIZENSHIP</strong><input type="text" list="citizen_list" name="mother_citizen" value="FILIPINO" class="form-control form-control-sm"></div>
                <div class="flex-col-form"><strong>9. RELIGION</strong><input type="text" list="religious_sect" name="mother_sect" class="form-control form-control-sm"></div>
            </div>

			<div class="flex-row-form">
				<div class="flex-col-form"><strong>10a. Total number of children born alive</strong><input type="text" list="occupation_list" name="mother_occupation" class="form-control form-control-sm"></div>
				<div class="flex-col-form"><strong>10b. No of children still living including this birth</strong><input type="text" list="occupation_list" name="mother_occupation" class="form-control form-control-sm"></div>
				<div class="flex-col-form"><strong>10c. No of children born but now are dead</strong><input type="text" list="occupation_list" name="mother_occupation" class="form-control form-control-sm"></div>
				<div class="flex-col-form"><strong>11. OCCUPATION</strong><input type="text" list="occupation_list" name="mother_occupation" class="form-control form-control-sm"></div>
                <div class="flex-col-form"><strong>12. AGE at the time of this birth</strong>
					<span class="label-5cgreen">(completed years)</span><input type="text" name="mother_age" class="form-control form-control-sm">
				</div>
			</div>
			
			<div class="flex-row-form" style="flex: 1; border-bottom: 2px solid green !important;">								
						<div style="display: flex; gap: 10px; width: 100%; margin-top: auto;">
							<strong>13. RESIDENCE</strong>
							<div style="flex: 1; display: flex; flex-direction: column;">
							<span class="label-green">(House No., St., Barangay)</span>
							<input type="text" name="mother_brgy" class="form-control form-control-sm text-center" id="mother_brgy">
					</div>

					<div style="flex: 1; display: flex; flex-direction: column;">
							<span class="label-green">(City/Municipality)</span>
							<input type="text" name="mother_city" class="form-control form-control-sm text-center" id="mother_city">
					</div>

					<div style="flex: 1; display: flex; flex-direction: column;">
							<span class="label-green">(Province)</span>
							<input type="text" name="mother_province" class="form-control form-control-sm text-center" id="mother_province">
					</div>
					<div style="flex: 1; display: flex; flex-direction: column;">
							<span class="label-green">(City)</span>
							<input type="text" name="mother_country" class="form-control form-control-sm text-center" id="mother_country">
						</div>
					</div>
			</div>
		</div>
    </div>

	<div class="d-flex border-bottom" style="border-bottom: 2px solid green !important">
        <div class="sidebar-label">F<br>A<br>T<br>H<br>E<br>R</div>
        <div class="flex-fill">
            <div class="flex-row-form" style="flex: 1; border-bottom: 2px solid green !important;">								
						<div style="display: flex; gap: 10px; width: 100%; margin-top: auto;">
							<strong>14. FATHER</strong>
						<div style="flex: 1; display: flex; flex-direction: column;">
							<span class="label-green">(First)</span>
							<input type="text" name="father_fname" class="form-control form-control-sm text-center" id="father_fname">
						</div>

						<div style="flex: 1; display: flex; flex-direction: column;">
							<span class="label-green">(Middle)</span>
							<input type="text" name="father_mname" class="form-control form-control-sm text-center" id="father_mname">
						</div>

						<div style="flex: 1; display: flex; flex-direction: column;">
								<span class="label-green">(Last)</span>
								<input type="text" name="father_lname" class="form-control form-control-sm text-center" id="father_lname">
							</div>
						</div>
				</div>
            <div class="flex-row-form">
                <div class="flex-col-form"><strong>15. CITIZENSHIP</strong><input type="text" list="citizen_list" name="father_citizen" value="FILIPINO" class="form-control form-control-sm"></div>
                <div class="flex-col-form"><strong>16. RELIGION/RELIGIOUS SECTS</strong><input type="text" list="religious_sect" name="father_sect" class="form-control form-control-sm"></div>
                <div class="flex-col-form"><strong>17. OCCUPATION</strong><input type="text" list="occupation_list" name="father_occupation" class="form-control form-control-sm"></div>
                <div class="flex-col-form" style="flex: 0.7;"><strong>18. AGE at the time of this birth</strong><span class="label-green">(completed years)</span><input type="text" name="father_age" value="N/A" class="form-control form-control-sm" style="text-align:center;"></div>
            </div>
				<div class="flex-row-form" style="flex: 1; border-bottom: 2px solid green !important;">								
								<div style="display: flex; gap: 10px; width: 100%; margin-top: auto;">
									<strong>19. RESIDENCE</strong>
									<div style="flex: 1; display: flex; flex-direction: column;">
										<span class="label-green">(House No., St., Barangay)</span>
										<input type="text" name="mother_brgy" class="form-control form-control-sm text-center" id="mother_brgy">
									</div>

									<div style="flex: 1; display: flex; flex-direction: column;">
										<span class="label-green">(City/Municipality)</span>
										<input type="text" name="mother_city" class="form-control form-control-sm text-center" id="mother_city">
									</div>

									<div style="flex: 1; display: flex; flex-direction: column;">
										<span class="label-green">(Province)</span>
										<input type="text" name="mother_province" class="form-control form-control-sm text-center" id="mother_province">
									</div>
									<div style="flex: 1; display: flex; flex-direction: column;">
										<span class="label-green">(City)</span>
										<input type="text" name="mother_country" class="form-control form-control-sm text-center" id="mother_country">
									</div>
					</div>
				</div>
				<<<<<<< HEAD
				<div class="col" style="border:2px solid green; border-left:none; border-top:none;">
					<div class="row">
						<div class="col-1">
							<h6><span>14.&nbsp;NAME</span></h6>
						</div>
						<div class="col-4">
							<h6 align="center"><span style="color:green;">(First)</span></h6>
							<div class="input-group">
								<input tabindex="27" type="text" class="form-control form-control-sm" placeholder="" id="father_fname" name="father_fname" onkeypress="return isTextKey(event)">
							</div>
						</div>
						<div class="col-4">
							<h6 align="center"><span style="color:green;">(Middle)</span></h6>
							<div class="input-group">
								<input tabindex="28" type="text" class="form-control form-control-sm" placeholder="" id="father_mname" name="father_mname" onkeypress="return isTextKey(event)">
							</div>
						</div>
						<div class="col-3">
							<h6 align="center"><span style="color:green;">(Last)</span></h6>
							<div class="input-group">
								<input tabindex="29" type="text" class="form-control form-control-sm" placeholder="" id="father_lname" name="father_lname" onkeypress="return isTextKey(event)">
							</div>
						</div>
					</div><!--close row-->
					<div class="row" style="border-top:2px solid green;">
						<div class="col-3" style="border-right:2px solid green;">
							<h6><span>15.&nbsp;CITIZENSHIP</span></h6>
							<div class="input-group" style="padding-top:15px;">
								<input tabindex="30" id="father_citizen" type="text" list='citizen_list' class="form-control" value="FILIPINO" name="father_citizen" onkeypress="return isTextKey(event)" required>
							</div>
						</div>
						<div class="col-4" style="border-right:2px solid green;">
							<h6>16.&nbsp;RELIGION/RELIGIOUS SECT</h6>
							<div class="input-group" style="padding-top:18px;">
								<!-- UPDATED: Dropdown but editable -->
								<input tabindex="31" id="father_sect" type="text" list='religious_sect' class="form-control" name="father_sect" onkeypress="return isTextKey(event)" required>
							</div>
						</div>
						<div class="col-3" style="border-right:2px solid green;">
							<h6 style="padding-top:2px;">17.&nbsp;OCCUPATION</h6>
							<div class="input-group" style="padding-top:16px;">
								<input tabindex="32" id="father_occupation" type="text" list='occupation_list' class="form-control" name="father_occupation" onkeypress="return isTextKey(event)" required>
							</div>
						</div>
						<div class="col-2">
							<h6 style="padding-top:2px;">18.<span>&nbsp;AGE at the time of this birth<span style="color:green;">(completed years)</span></span></h6>
							<div class="input-group">
								<input type="text" class="form-control form-control-sm" placeholder="" id="father_age" name="father_age" onkeypress="return isNumberKey(event)">
							</div>
						</div>
					</div><!--close row-->
					<div class="row" style="border-top:2px solid green;">
						<div class="col-1">
							<h6 style="padding-top:2px;">19.&nbsp;RESIDENCE</h6>
						</div>
						<div class="col-4" style="padding-left:3em;">
							<h6><span style="color:green; margin:0;">(House No.,St.,Barangay)</span></h6>
							<div class="input-group">
								<input tabindex="33" type="text" class="form-control form-control-sm" placeholder="" name="father_brgy" id= "father_brgy">
							</div>
						</div>
						<div class="col-3">
							<h6><span style="color:green; margin:0;">(City/Municipality)</span></h6>
							<div class="input-group">
								<input tabindex="34" id="father_city" type="text" list='municipality_list' class="form-control form-control-sm" value="GERONA" name="father_city" onkeypress="return isTextKey(event)" required>
							</div>
						</div>
						<div class="col-2">
							<h6><span style="color:green; margin:0;">(Province)</span></h6>
							<div class="input-group">
								<input tabindex="35" id="father_province" type="text" list='province_list' class="form-control form-control-sm" value="TARLAC" name="father_province" onkeypress="return isTextKey(event)" required>
							</div>
						</div>
						<div class="col-2">
							<h6><span style="color:green; margin:0;">(Country)</span></h6>
							<div class="input-group">
								<input tabindex="36" id="father_country" type="text" list='country_list' class="form-control" value="PHILIPPINES" name="father_country" onkeypress="return isTextKey(event)" required>
							</div>
						</div>
					</div><!--close row-->
				</div><!--close row-->
			</div><!--close col-->
			<!-- Marriage Info -->
			<div class="row" style="border:2px solid green; border-top:none;">
				<div class="col">
					<div class="row">
						<div class="col">
							<h6 style="padding:0;">MARRIAGE OF PARENTS <span>(If not married, accomplish Affidavit of Acknowledgement/Admission of Paternity at the back.)</span></h6>
						</div>
					</div><!--close row-->
					<div class="row" style="border-top:2px solid green;">
						<div class="col-1">
							<h6 style="padding-top:2px;">20a.&nbsp;DATE</h6>
						</div>
						<div class="col-3">
							<div class="row">
								<div class="col-4"><h6 align="center"><span style="color:green;">(Month)</span></h6></div>
								<div class="col-4"><h6 align="center"><span style="color:green;">(Day)</span></h6></div>
								<div class="col-4"><h6 align="center"><span style="color:green;">(Year)</span></h6></div>
							</div>
							<div class="input-group">
								<input tabindex="37" type="text" class="form-control form-control-sm" id="marriage_date" name="marriage_date" style="word-spacing:2em;" placeholder="Example: 12/25/2025">
							</div>
						</div>
						<div class="col-1" style="border-left:2px solid green;">
							<h6>20b.&nbsp;PLACE</h6>
						</div>
						<div class="col-7">
							<div class="row">
								<div class="col-4">
									<h6><span style="color:green; margin:0;">&emsp;(City/Municipality)</span></h6>
								</div>
								<div class="col-4">
									<h6><span style="color:green; margin:0;">&emsp;(Province)</span></h6>  	
								</div>
								<div class="col-4">
									<h6><span style="color:green; margin:0;">(Country)</span></h6> 	
								</div>
							</div>
							<div class="input-group">
								<input tabindex="38" type="text" class="form-control form-control-sm" id = "marriage_place" name="marriage_place" style="text-align:center; word-spacing:5px;" onkeypress="return isTextKey(event)">
							</div>
						</div>
					</div><!--close row-->
					<div class="row" style="border-top:2px solid green;">
						<div class="col">
							<h6 style="padding-top:2px;">21a.&nbsp;ATTENDANT</h6>
							<div class="row">
								<div class="col">
									<div class="custom-control custom-checkbox custom-control-inline">
										<input type="checkbox" class="custom-control-input" id="physician" name="attendant1" value="Physician">
										<label class="custom-control-label" for="physician">&nbsp;1 Physician</label>
									</div>
									<div class="custom-control custom-checkbox custom-control-inline">
										<input type="checkbox" class="custom-control-input" id="nurse" name="attendant2" value="Nurse">
										<label class="custom-control-label" for="nurse">&nbsp;2 Nurse</label>
									</div>
									<div class="custom-control custom-checkbox custom-control-inline">
										<input type="checkbox" class="custom-control-input" id="midwife" name="attendant3" value="Midwife">
										<label class="custom-control-label" for="midwife">&nbsp;3 Midwife</label>
									</div>
									<div class="custom-control custom-checkbox custom-control-inline">
										<input type="checkbox" class="custom-control-input" id="hilot" name="attendant4" value="Hilot">
										<label class="custom-control-label" for="hilot">&nbsp;4 Hilot (Traditional Birth Attendant)</label>
									</div>
									<div class="custom-control custom-checkbox custom-control-inline">
										<input type="checkbox" class="custom-control-input" id="others">
										<label class="custom-control-label" for="others">&nbsp;5 Others (Specify)</label>
									</div>
									<div class="custom-control custom-checkbox custom-control-inline pl-0">
										<input type="text" class="form-control form-control-sm" size="18" id="otherstxt" name="attendant5" onkeypress="return isTextKey(event)">
									</div>
								</div>
							</div>	
						</div>
					</div><!--close row-->
				</div><!--close row-->
			</div><!--close col-->
			<!-- Cert Attendant -->
			<div class="row" style="border: 2px solid green; border-top:none;">
				<div class="col">
					<div class="row">
						<div class="col">
							<h6 style="padding-top:2px;">21b. CERTIFICATION OF ATTENDANT AT BIRTH <span style="color:green">(Physician, Nurse, Midwife, Traditional Birth Attendant/Hilot, etc. )</span></h6>
							<h6 style="padding:0;">&emsp;&emsp;&emsp;I hereby certify that I attended the birth of the child who was born alive at
							<div class="custom-control custom-checkbox custom-control-inline p-0 mr-0">
								<input type="time" class="form-control form-control-sm text-center" name="birth_time" size="4">
							</div>
							am/pm on the date of birth specified above.   
							</h6>
						</div>
					</div><!--close row-->
					<div class="row">
						<div class="col-6">
							<div class="input-group mt-1">
								<div class="input-group-prepend">
									<span class="input-group-text" style="padding:0;border:none; background-color:white; color:black;">Signature&nbsp;</span>
								</div>
								<input type="text" class="form-control form-control-sm" placeholder="" style="background-color: white;border-top:none;border-left:none;border-right:none;border-color: green;border-radius: 0;" name="signature" disabled>
							</div>
							<div class="input-group mt-1">
								<div class="input-group-prepend">
									<span class="input-group-text" style="padding:0;border:none; background-color:white; color:black;">Name in Print&nbsp;</span>
								</div>
								<input type="text" class="form-control form-control-sm" id ="attendant_name" name="attendant_name" onkeypress="return isTextKey(event)">
							</div>
							<div class="input-group mt-1">
								<div class="input-group-prepend">
									<span class="input-group-text" style="padding:0;border:none; background-color:white; color:black;">Title or Position&nbsp;</span>
								</div>
								<!-- UPDATED: Changed to dropdown with attendant positions -->
								<input type="text" list="attendant_position_list" class="form-control form-control-sm" id="attendant_position" name="attendant_position" onkeypress="return isTextKey(event)">
							</div>
						</div>
						<div class="col-6">
							<div class="input-group mt-1">
								<div class="input-group-prepend">
									<span class="input-group-text" style="padding:0;border:none; background-color:white; color:black;">Address&nbsp;</span>
								</div>
								<input type="text" class="form-control form-control-sm" id="attendant_address1" name="attendant_address1" onkeypress="return isTextKey(event)">
							</div>
							<div class="input-group mt-1">
								<input type="text" class="form-control form-control-sm" name="attendant_address2" onkeypress="return isTextKey(event)">
							</div>
							<div class="input-group mt-1">
								<div class="input-group-prepend">
									<span class="input-group-text" style="padding:0;border:none; background-color:white; color:black;">Date&nbsp;</span>
								</div>
								<?php date_default_timezone_set('Asia/Manila'); ?>
								<!-- UPDATED: Default to current date but editable -->
								<input type="text" class="form-control form-control-sm" id="attendant_date" name="attendant_date" value="<?php echo strtoupper(date('F j, Y')); ?>">
							</div>
						</div>
					</div><!--close row-->
				</div><!--close row-->
			</div><!--close col-->
			<!-- Cert Informant -->
			<div class="row" style="border: 2px solid green;border-top:none;">
				<div class="col">
					<div class="row">
						<div class="col-6" style="border-right: 2px solid green;">
							<h6 style="padding-top:2px;">22. CERTIFICATION OF INFORMANT</h6>
							<h6 style="padding:0; text-indent:4em;">I hereby certify that all information supplied are true and correct to my own knowledge and belief.</h6>
							<div class="input-group mt-1">
								<div class="input-group-prepend">
									<span class="input-group-text" style="padding:0;border:none; background-color:white; color:black;">Signature&nbsp;</span>
								</div>
								<input type="text" class="form-control form-control-sm" style="background-color: white;border-top:none;border-left:none;border-right:none;border-color: green;border-radius: 0;" name="signature" disabled>
							</div>
							<div class="input-group mt-1">
								<div class="input-group-prepend">
									<span class="input-group-text" style="padding:0;border:none; background-color:white; color:black;">Name in Print&nbsp;</span>
								</div>
								<input type="text" class="form-control form-control-sm" id="informant_name" name="informant_name" onkeypress="return isTextKey(event)">
							</div>
							<div class="input-group mt-1">
								<div class="input-group-prepend">
									<span class="input-group-text" style="padding:0;border:none; background-color:white; color:black;">Relationship to the Child&nbsp;</span>
								</div>
								<input type="text" class="form-control form-control-sm" id = "rel_child" name="rel_child" onkeypress="return isTextKey(event)">
							</div>
							<div class="input-group mt-1">
								<div class="input-group-prepend">
									<span class="input-group-text" style="padding:0;border:none; background-color:white; color:black;">Address&nbsp;</span>
								</div>
								<input type="text" class="form-control form-control-sm" id="informant_address" name="informant_address" onkeypress="return isTextKey(event)">
							</div>
							<div class="input-group mt-1">
								<div class="input-group-prepend">
									<span class="input-group-text" style="padding:0;border:none; background-color:white; color:black;">Date&nbsp;</span>
								</div>
								<!-- UPDATED: Default to current date but editable -->
								<input type="text" class="form-control form-control-sm" id="informant_date" name="informant_date" value="<?php echo strtoupper(date('F j, Y')); ?>">
							</div>
						</div>
						<div class="col-6">
							<h6 style="padding-top:2px;">23. PREPARED BY</h6><br>
							<div class="input-group mt-3">
								<div class="input-group-prepend">
									<span class="input-group-text" style="padding:0;border:none; background-color:white; color:black;">Signature&nbsp;</span>
								</div>
								<input type="text" class="form-control form-control-sm" style="background-color: white;border-top:none;border-left:none;border-right:none;border-color: green;border-radius: 0;" name="signature" disabled>
							</div>
							<div class="input-group mt-1">
								<div class="input-group-prepend">
									<span class="input-group-text" style="padding:0;border:none; background-color:white; color:black;">Name in Print&nbsp;</span>
								</div>
								<input type="text" class="form-control form-control-sm" name="prepared_name" onkeypress="return isTextKey(event)">
							</div>
							<div class="input-group mt-1">
								<div class="input-group-prepend">
									<span class="input-group-text" style="padding:0;border:none; background-color:white; color:black;">Title or Position&nbsp;</span>
								</div>
								<input type="text" class="form-control form-control-sm" name="prepared_position" onkeypress="return isTextKey(event)">
							</div>
							<div class="input-group mt-1">
								<div class="input-group-prepend">
									<span class="input-group-text" style="padding:0;border:none; background-color:white; color:black;">Date&nbsp;</span>
								</div>
								<!-- UPDATED: Default to current date but editable -->
								<input type="text" class="form-control form-control-sm" id="prepared_date" name="prepared_date" value="<?php echo strtoupper(date('F j, Y')); ?>">
							</div>
						</div>
					</div><!--close row-->
				</div><!--close row-->
			</div><!--close col-->
			<!-- Received by -->
			<div class="row" style="border: 2px solid green;border-top:none;">
				<div class="col">
					<div class="row">
						<div class="col-6" style="border-right: 2px solid green;">
							<h6 style="padding-top:2px;">24. RECEIVED BY</h6>
							<div class="input-group mt-1">
								<div class="input-group-prepend">
									<span class="input-group-text" style="padding:0;border:none; background-color:white; color:black;">Signature&nbsp;</span>
								</div>
								<input type="text" class="form-control form-control-sm"  style="background-color: white;border-top:none;border-left:none;border-right:none;border-color: green;border-radius: 0;" name="signature" disabled>
							</div>
							<div class="input-group mt-1">
								<div class="input-group-prepend">
									<span class="input-group-text" style="padding:0;border:none; background-color:white; color:black;">Name in Print&nbsp;</span>
								</div>
								<input type="text" class="form-control form-control-sm"  name="received_name" onkeypress="return isTextKey(event)">
							</div>
							<div class="input-group mt-1">
								<div class="input-group-prepend">
									<span class="input-group-text" style="padding:0;border:none; background-color:white; color:black;">Title or Position&nbsp;</span>
								</div>
								<input type="text" class="form-control form-control-sm"  name="received_position" onkeypress="return isTextKey(event)">
							</div>
							<div class="input-group mt-1">
								<div class="input-group-prepend">
									<span class="input-group-text" style="padding:0;border:none; background-color:white; color:black;">Date&nbsp;</span>
								</div>
								<!-- UPDATED: Default to current date but editable -->
								<input type="text" class="form-control form-control-sm" id="received_date" name="received_date" value="<?php echo strtoupper(date('F j, Y')); ?>">
							</div>
						</div>
						<div class="col-6">
							<h6 style="padding-top:2px;">25. REGISTERED AT THE OFFICE OF THE CIVIL REGISTRAR</h6>
							<div class="input-group mt-1">
								<div class="input-group-prepend">
									<span class="input-group-text" style="padding:0;border:none; background-color:white; color:black;">Signature&nbsp;</span>
								</div>
								<input type="text" class="form-control form-control-sm"  style="background-color: white;border-top:none;border-left:none;border-right:none;border-color: green;border-radius: 0;" name="signature" disabled>
							</div>
							<div class="input-group mt-1">
								<div class="input-group-prepend">
									<span class="input-group-text" style="padding:0;border:none; background-color:white; color:black;">Name in Print&nbsp;</span>
								</div>
								<input type="text" class="form-control form-control-sm" id="civil_name" name="civil_name" onkeypress="return isTextKey(event)">
							</div>
							<div class="input-group mt-1">
								<div class="input-group-prepend">
									<span class="input-group-text" style="padding:0;border:none; background-color:white; color:black;">Title or Position&nbsp;</span>
								</div>
								<input type="text" class="form-control form-control-sm"  id="civil_position" name="civil_position" onkeypress="return isTextKey(event)">
							</div>
							<div class="input-group mt-1">
								<div class="input-group-prepend">
									<span class="input-group-text" style="padding:0;border:none; background-color:white; color:black;">Date&nbsp;</span>
								</div>
								<!-- UPDATED: Default to current date but editable -->
								<input type="text" class="form-control form-control-sm" id="civil_date" name="civil_date" value="<?php echo strtoupper(date('F j, Y')); ?>">
							</div>
						</div>
					</div><!--close row-->
				</div><!--close row-->
			</div><!--close col-->
			<!-- Remarks -->
			<div class="row" style="border: 2px solid green;border-top:none;">
				<div class="col">
					<div class="row">
						<div class="col">
							<h6 style="padding-top:2px; font-weight:bold;">REMARKS/ANNOTATIONS (For LCRO/OCRG Use Only)</h6>
							<textarea style="width: 100%; height: 80px;" id="r"></textarea>
							<textarea style="width: 100%; height: 80px; display: none;" name="remarks" id="re"></textarea>
						</div>
					</div><!--close row-->
					<script>
						$(document).ready(function(){
							$("#r").keyup(function(){
								var r = $("#r").val();
								r = r.replace(/  /g, "[sp][sp]");
								r = r.replace(/\n/g, "[nl]");
								$("#re").val(r);
							});
						});
					</script>
				</div><!--close row-->
			</div><!--close col-->
			<!-- To be filled -->
			<div class="row" style="border: 2px solid green; border-top: none;">
    <div class="col p-2">
        <h6 style="font-weight:bold;">TO BE FILLED-UP AT THE OFFICE OF THE CIVIL REGISTRAR</h6>

        </div>

    </div>

	<div class="flex-row-form flex-column p-2">
		<div>
			<strong>MARRIAGE OF PARENTS</strong>(if not married, accomplish affidavit of Acknowledgement/Admission of Paternity at the back.)	
		</div>
	</div>
		
	<div class="flex-row-form">
		<div class="flex-col-form">
			<div>
                <div style="display: flex;">
				<strong>20a. DATES</strong>
					<div style="flex: .4; display: flex; flex-direction: column;">
						<span class="label-green">(Month)</span>
						<input type="text" name="mother_brgy" class="form-control form-control-sm text-center" id="marriage_place">
					</div>

					<div style="flex: .4; display: flex; flex-direction: column;">
						<span class="label-green">(Day)</span>
						<input type="text" name="mother_brgy" class="form-control form-control-sm text-center" id="marriage_place">
					</div>

					<div style="flex: .4; display: flex; flex-direction: column;">
						<span class="label-green">(Year)</span>
						<input type="text" name="mother_brgy" class="form-control form-control-sm text-center" id="marriage_place">
					</div>

				</div>	
			</div>
		</div>
        <div class="flex-col-form" style="flex: 1.7; ">								
			<div style="display: flex;">
				<strong>20b. PLACE</strong>

					<div style="flex: 1; display: flex; flex-direction: column;">
						<span class="label-green">(City/Municipality)</span>
						<input type="text" name="mother_brgy" class="form-control form-control-sm text-center" id="marriage_place">
					</div>

					<div style="flex: 1; display: flex; flex-direction: column;">
						<span class="label-green">(Province)</span>
						<input type="text" name="mother_brgy" class="form-control form-control-sm text-center" id="marriage_place">
					</div>

					<div style="flex: 1; display: flex; flex-direction: column;">
						<span class="label-green">(City)</span>
						<input type="text" name="mother_brgy" class="form-control form-control-sm text-center" id="marriage_place">
					</div>
				
			</div>
		</div>
	</div>
	<div class="flex-row-form" style="flex-direction: column; padding: 5px;">
    <div style="margin-bottom: 5px;">
        <strong>21a. ATTENDANT</strong>
    </div>

    <div style="display: flex; flex-wrap: wrap; gap: 15px; align-items: center;">
		>>>>>>> 5a0e17319cb730845abd179c9d75083579fe6354
        
        <div style="display: flex; font-weight: bold; margin-bottom: 2px; padding-left: 5px;">
            <div style="width: 7%;">8</div>
            <div style="width: 7%;">9</div>
            <div style="width: 10%;">11</div>
            <div style="width: 27%; text-align: center;">13</div>
            <div style="width: 7%; margin-left: 5px;">15</div>
            <div style="width: 7%;">16</div>
            <div style="width: 10%;">17</div>
            <div style="width: 25%; text-align: center;">19</div>
        </div>

        <div class="flex-container">
            <div><input type="text" name="8a" disabled></div>
            <div class="section-gap"><input type="text" name="8b" disabled></div>
            
            <div><input type="text" name="9a" disabled></div>
            <div class="section-gap"><input type="text" name="9b" disabled></div>
            
            <div><input type="text" name="11a" disabled></div>
            <div><input type="text" name="11b" disabled></div>
            <div class="section-gap"><input type="text" name="11c" disabled></div>
            
            <div><input type="text" name="13a" disabled></div>
            <div><input type="text" name="13b" disabled></div>
            <div><input type="text" name="13c" disabled></div>
            <div><input type="text" name="13d" disabled></div>
            <div><input type="text" name="13e" disabled></div>
            <div><input type="text" name="13f" disabled></div>
            <div><input type="text" name="13g" disabled></div>
            <div class="section-gap"><input type="text" name="13h" disabled></div>

            <div><input type="text" name="15a" disabled></div>
            <div class="section-gap"><input type="text" name="15b" disabled></div>

            <div><input type="text" name="16a" disabled></div>
            <div class="section-gap"><input type="text" name="16b" disabled></div>

            <div><input type="text" name="17a" disabled></div>
            <div><input type="text" name="17b" disabled></div>
            <div class="section-gap"><input type="text" name="17c" disabled></div>

            <div><input type="text" name="19a" disabled></div>
            <div><input type="text" name="19b" disabled></div>
            <div><input type="text" name="19c" disabled></div>
            <div><input type="text" name="19d" disabled></div>
            <div><input type="text" name="19e" disabled></div>
            <div><input type="text" name="19f" disabled></div>
            <div><input type="text" name="19g" disabled></div>
            <div><input type="text" name="19h" disabled></div>
        </div>
    </div>
</div>
			
		</div>
	</div>
	<<<<<<< HEAD
=======
    </div>

    <div class="flex-row-form flex-column p-2" style="background-color: #f9f9f9;">
        <strong>REMARKS/ANNOTATIONS (For LCRO/OCRG Use Only)</strong>
        <textarea name="remarks" class="w-100" style="height: 60px; border:1px solid #ccc;"></textarea>
    </div>

    <div class="p-2">
        <strong>TO BE FILLED-UP AT THE OFFICE OF THE CIVIL REGISTRAR</strong>
        <div class="box-grid">
            <?php for($i=0; $i<30; $i++) echo "<div></div>"; ?>
        </div>
    </div>
</div>
>>>>>>> 5a0e17319cb730845abd179c9d75083579fe6354
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
				$(document).ready(function() {

			// 1. Copy Child's Middle Name -> Mother's Maiden Last Name
			$('#child_mname').on('keydown', function(e) {
				if (e.key === "Enter") {
					e.preventDefault(); 
					$('#mother_lname').val($(this).val());
					$('#child_lname').focus(); 
				}
			});
			$('#child_lname').on('keydown', function(e) {
				if (e.key === "Enter") {
					e.preventDefault(); 
					$('#father_lname').val($(this).val());
					$('#child_lname').focus(); 
				} 
			});
		});
</script>
                       
<script>
$(document).ready(function() {
    // Function to collect data from Page 1 and save to browser memory
    function saveToMemory() {
        const data = {
            child_fname: $('#child_fname').val(),
            child_mname: $('#child_mname').val(),
            child_lname: $('#child_lname').val(),
            father_fname: $('#father_fname').val(),
            father_mname: $('#father_mname').val(),
            father_lname: $('#father_lname').val(),
            mother_fname: $('input[name="mother_fname"]').val(),
            mother_mname: $('input[name="mother_mname"]').val(),
            mother_lname: $('#mother_lname').val(),
            birth_day: $('input[name="birth_day"]').val(),
            birth_place: $('input[name="birth_brgy"]').val() + " " + $('input[name="birth_city"]').val()
        };
        localStorage.setItem('birth_form_data', JSON.stringify(data));
    }

    // Save every time the user types in these specific fields
    $('input').on('input', saveToMemory);
});
</script>

<script>
		// Listener to clear the entire field on a single Backspace press
	$(document).on('keydown', 'input', function(e) {
		if (e.key === "Backspace") {
			// Clear the current input value immediately
			$(this).val('');
			
			// Trigger the 'input' event to ensure Page 2 (Affidavit) 
			// also clears the mirrored data in real-time
			$(this).trigger('input');
		}
	});
</script>
?>
</body>
</html>