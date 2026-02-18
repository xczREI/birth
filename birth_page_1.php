<?php 
include 'mycon.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate of Live Birth - Form 102</title>
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
					<input type="text" name="birth_day" class="form-control form-control-sm" placeholder="e.g. 9-5-2025">
				</div>
			</div>

            <div class="flex-row-form">
                <div class="flex-col-form" style="flex: 0.8;"><strong>4. PLACE OF BIRTH</strong></div>
                <div class="flex-col-form" style="flex: 2;">
                    <span class="label-green">(Hospital/Barangay)</span>
                    <input type="text" name="birth_brgy" class="form-control form-control-sm">
                </div>
                <div class="flex-col-form">
                    <span class="label-green">(Municipality)</span>
                    <input type="text" list="municipality_list" name="birth_city" value="GERONA" class="form-control form-control-sm">
                </div>
                <div class="flex-col-form">
                    <span class="label-green">(Province)</span>
                    <input type="text" list="province_list" name="birth_province" value="TARLAC" class="form-control form-control-sm">
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
        
        <div class="d-flex align-items-center">
            <input type="text" class="form-control form-control-sm text-center" name="attendant1" 
                   style="width: 30px; height: 20px; border-top: none; border-right:none; border-left: none; border-bottom: 1px solid green !important; margin-right: 5px; border-radius: 0;">
            <span>1. Physician</span>
        </div>

        <div class="d-flex align-items-center">
            <input type="text" class="form-control form-control-sm text-center" name="attendant2" 
                   style="width: 30px; height: 20px; border-top: none; border-right:none; border-left: none; border-bottom: 1px solid green !important; margin-right: 5px; border-radius: 0;">
            <span>2. Nurse</span>
        </div>

        <div class="d-flex align-items-center">
            <input type="text" class="form-control form-control-sm text-center" name="attendant3" 
                   style="width: 30px; height: 20px; border-top: none; border-right:none; border-left: none; border-bottom: 1px solid green !important; margin-right: 5px; border-radius: 0;">
            <span>3. Midwife</span>
        </div>

        <div class="d-flex align-items-center">
            <input type="text" class="form-control form-control-sm text-center" name="attendant4" 
                   style="width: 30px; height: 20px; border-top: none; border-right:none; border-left: none; border-bottom: 1px solid green !important; margin-right: 5px; border-radius: 0;">
            <span>4. Hilot (Traditional Birth Attendant)</span>
        </div>

        <div class="d-flex align-items-center">
            <input type="text" class="form-control form-control-sm text-center" name="attendant5" 
                   style="width: 30px; height: 20px; border-top: none; border-right:none; border-left: none; border-bottom: 1px solid green !important; margin-right: 5px; border-radius: 0;">
            <span>5. Others (Specify)</span>
        </div>

    </div>
</div>

    <div class="flex-row-form flex-column p-2">
		<div>
        <strong>21b. CERTIFICATION OF ATTENDANT AT BIRTH</strong>
		<span class="label-5cgreen">
					(Physician, Nurse, Midwife, Traditional Birth Attendant/Hilot, etc.)
				</span>
		</div>
        <p class="m-0">I hereby certify that I attended the birth of the child who was born alive at 
            <input type="text" name="birth_time" style="border:none; border-bottom:1px solid #000; width:80px;"> am/pm on the date specified above.
        </p>
        <div class="d-flex mt-2">
            <div class="flex-fill mr-2">
                <label class="m-0">Signature:</label><div style="border-bottom:1px solid green; height:15px;"></div>
                <label class="m-0">Name in Print:</label><input type="text" name="attendant_name" class="form-control form-control-sm">
                <label class="m-0">Title or Position:</label><input type="text" list="attendant_position_list" name="attendant_position" class="form-control-sm form-control">
            </div>
            <div class="flex-fill">
                <label class="m-0">Address:</label><input type="text" name="attendant_address1" class="form-control form-control-sm mb-1">
                <label class="m-0">Date:</label><input type="text" name="attendant_date" value="<?php echo strtoupper(date('F j, Y')); ?>" class="form-control form-control-sm">
            </div>
        </div>
		<div class="flex-row-form">
		<div class="flex-col-form">
			<div>
                <div style="display: flex;">
				<strong>22. DATES</strong>
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
				<strong>23. PLACE</strong>

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
                       

</body>
</html>