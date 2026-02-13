<?php
require_once 'login_db_birth.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

if(isset($_POST['birth_update']) && isset($_POST['reg_no'])) 
{
    $reg_no = $conn->real_escape_string($_POST['reg_no']);
    $registry_no = $conn->real_escape_string($_POST['registry_no']);
    $book_no = $conn->real_escape_string($_POST['book_no']);
    $page_no = $conn->real_escape_string($_POST['page_no']);
    $province = $conn->real_escape_string($_POST['provinces']);
    $municipal = $conn->real_escape_string($_POST['municipal']);
    $u_date = date("Y-m-d");
    $u_time = $conn->real_escape_string($_POST['time']);
    $u_name = $conn->real_escape_string($_POST['emp_name']);

    // --- Child Info ---
    $child_lname = $conn->real_escape_string($_POST['child_lname']);
    $child_fname = $conn->real_escape_string($_POST['child_fname']);
    $child_mname = $conn->real_escape_string($_POST['child_mname']);
    $child_sex = $conn->real_escape_string($_POST['child_sex']);
    $child_birth_date = $conn->real_escape_string($_POST['child_birth_date']);
    $birth_brgy = $conn->real_escape_string($_POST['birth_brgy']);
    $birth_city = $conn->real_escape_string($_POST['birth_city']);
    $birth_province = $conn->real_escape_string($_POST['birth_province']);
    $birth_type = $conn->real_escape_string($_POST['birth_type']);
    $multi_birth_was = $conn->real_escape_string($_POST['multi_birth_was']);
    $birth_order = $conn->real_escape_string($_POST['birth_order']);
    $birth_weight = $conn->real_escape_string($_POST['birth_weight']);

    // --- Mother Info ---
    $mother_lname = $conn->real_escape_string($_POST['mother_lname']);
    $mother_fname = $conn->real_escape_string($_POST['mother_fname']);
    $mother_mname = $conn->real_escape_string($_POST['mother_mname']);
    $mother_citizen = $conn->real_escape_string($_POST['mother_citizen']);
    $mother_sect = $conn->real_escape_string($_POST['mother_sect']);
    $ttl_no_child = $conn->real_escape_string($_POST['ttl_no_child']);
    $no_child_alive = $conn->real_escape_string($_POST['no_child_alive']);
    $no_child_dead = $conn->real_escape_string($_POST['no_child_dead']);
    $mother_occupation = $conn->real_escape_string($_POST['mother_occupation']);
    $mother_age = $conn->real_escape_string($_POST['mother_age']);
    $mother_brgy = $conn->real_escape_string($_POST['mother_brgy']);
    $mother_city = $conn->real_escape_string($_POST['mother_city']);
    $mother_province = $conn->real_escape_string($_POST['mother_province']);
    $mother_country = $conn->real_escape_string($_POST['mother_country']);

    // --- Father Info ---
    $father_lname = $conn->real_escape_string($_POST['father_lname']);
    $father_fname = $conn->real_escape_string($_POST['father_fname']);
    $father_mname = $conn->real_escape_string($_POST['father_mname']);
    $father_citizen = $conn->real_escape_string($_POST['father_citizen']);
    $father_sect = $conn->real_escape_string($_POST['father_sect']);
    $father_occupation = $conn->real_escape_string($_POST['father_occupation']);
    $father_age = $conn->real_escape_string($_POST['father_age']);
    $father_brgy = $conn->real_escape_string($_POST['father_brgy']);
    $father_city = $conn->real_escape_string($_POST['father_city']);
    $father_province = $conn->real_escape_string($_POST['father_province']);
    $father_country = $conn->real_escape_string($_POST['father_country']);
    
    $marriage_date = $conn->real_escape_string($_POST['marriage_date']);
    $marriage_place = $conn->real_escape_string($_POST['marriage_place']);

    // --- Attendant ---
    $attendant_type = '';
    if(isset($_POST['attendant1']) && $_POST['attendant1'] == 'Physician') $attendant_type = 'Physician';
    else if(isset($_POST['attendant2']) && $_POST['attendant2'] == 'Nurse') $attendant_type = 'Nurse';
    else if(isset($_POST['attendant3']) && $_POST['attendant3'] == 'Midwife') $attendant_type = 'Midwife';
    else if(isset($_POST['attendant4']) && $_POST['attendant4'] == 'Hilot') $attendant_type = 'Hilot';
    else $attendant_type = $conn->real_escape_string($_POST['attendant5']);

    $birth_time = $conn->real_escape_string($_POST['birth_time']);
    $attendant_name = $conn->real_escape_string($_POST['attendant_name']);
    $attendant_position = $conn->real_escape_string($_POST['attendant_position']);
    $attendant_address = $conn->real_escape_string($_POST['attendant_address']);
    $informant_name = $conn->real_escape_string($_POST['informant_name']);
    $rel_child = $conn->real_escape_string($_POST['rel_child']);
    $informant_address = $conn->real_escape_string($_POST['informant_address']);
    $prepared_name = $conn->real_escape_string($_POST['prepared_name']);
    $prepared_position = $conn->real_escape_string($_POST['prepared_position']);
    $att_date = $conn->real_escape_string($_POST['attendant_date']);
    $inf_date = $conn->real_escape_string($_POST['informant_date']);
    $prep_date = $conn->real_escape_string($_POST['prepared_date']);

    // --- Registrar ---
    $received_name = $conn->real_escape_string($_POST['received_name']);
    $received_position = $conn->real_escape_string($_POST['received_position']);
    $civil_name = $conn->real_escape_string($_POST['civil_name']);
    $civil_position = $conn->real_escape_string($_POST['civil_position']);
    $received_date = $conn->real_escape_string($_POST['received_date']);
    $civil_date = $conn->real_escape_string($_POST['civil_date']);

    // --- Remarks ---
    $remarks = $conn->real_escape_string($_POST['remarks']);
    $remarks = str_replace(["[sp]", "[nl]"], ["&nbsp;", "<br>\n"], $remarks);

    // --- Paternity Affidavit ---
    $f_name_pat = $conn->real_escape_string($_POST['father_name']);
    $m_name_pat = $conn->real_escape_string($_POST['mother_name']);
    $c_name_pat = $conn->real_escape_string($_POST['child_name']);
    $b_date_pat = $conn->real_escape_string($_POST['birth_date']);
    $b_place_pat = $conn->real_escape_string($_POST['birth_place']);
    $s_day = $conn->real_escape_string($_POST['ack_sworn_day']);
    $s_month = $conn->real_escape_string($_POST['ack_sworn_month']);
    $s_year = $conn->real_escape_string($_POST['ack_sworn_year']);
    $b_gender = $conn->real_escape_string($_POST['birth_gender']);
    $s_ctc = $conn->real_escape_string($_POST['ack_ctc']);
    $s_issuedon = $conn->real_escape_string($_POST['ack_issued_on']);
    $s_issuedat = $conn->real_escape_string($_POST['ack_issued_at']);
    $s_name = $conn->real_escape_string($_POST['ack_sworn_name']);
    $s_pos = $conn->real_escape_string($_POST['ack_sworn_position']);
    $s_addr = $conn->real_escape_string($_POST['ack_sworn_address']);

    // --- Late Registration ---
    $late_name = $conn->real_escape_string($_POST['late_name']);
    $late_addr = $conn->real_escape_string($_POST['late_address']);
    $late_birth_type = $conn->real_escape_string($_POST['late_birth_type']);
    $late_birth_of = ($late_birth_type == 'the birth') ? $conn->real_escape_string($_POST['late_birth_of']) : '';
    $late_birth_in = $conn->real_escape_string($_POST['late_birth_in'] ?? $_POST['late_birth_inx']);
    $late_birth_on = $conn->real_escape_string($_POST['late_birth_on'] ?? $_POST['late_birth_onx']);
    
    $attend_birth_by = $conn->real_escape_string($_POST['attend_birth_by']);
    $resides_at = $conn->real_escape_string($_POST['who_resides_at']);
    $late_citizen = $conn->real_escape_string($_POST['late_citizen']);
    $m_type = $conn->real_escape_string($_POST['married_type']);
    $m_on = $conn->real_escape_string($_POST['married_on']);
    $m_at = $conn->real_escape_string($_POST['married_at']);
    $nm_name = $conn->real_escape_string($_POST['not_married_name']);
    $late_reason = $conn->real_escape_string($_POST['late_reason']);
    $app_only = $conn->real_escape_string($_POST['applicant_only']);
    $app_than = $conn->real_escape_string($_POST['applicant_than_owner']);
    $sign_d = $conn->real_escape_string($_POST['sign_day']);
    $sign_m = $conn->real_escape_string($_POST['sign_month']);
    $sign_y = $conn->real_escape_string($_POST['sign_year']);
    $sign_at = $conn->real_escape_string($_POST['sign_at']);
    $affiant = $conn->real_escape_string($_POST['affiant_name']);

    $ls_day = $conn->real_escape_string($_POST['late_sworn_day']);
    $ls_month = $conn->real_escape_string($_POST['late_sworn_month']);
    $ls_year = $conn->real_escape_string($_POST['late_sworn_year']);
    $ls_at = $conn->real_escape_string($_POST['late_sworn_at']);
    $ls_ctc = $conn->real_escape_string($_POST['late_ctc']);
    $ls_on = $conn->real_escape_string($_POST['late_issued_on']);
    $ls_iat = $conn->real_escape_string($_POST['late_issued_at']);
    $ls_name = $conn->real_escape_string($_POST['late_sworn_name']);
    $ls_pos = $conn->real_escape_string($_POST['late_sworn_position']);
    $ls_addr = $conn->real_escape_string($_POST['late_sworn_address']);

    // --- DATABASE QUERIES ---
    $conn->query("UPDATE no_tbl SET registry_no='$registry_no' WHERE no = '$reg_no'");
    
    $conn->query("UPDATE registration_tbl SET registry_no='$registry_no', book_no='$book_no', page_no='$page_no', province='$province', municipal='$municipal', update_date='$u_date', update_time='$u_time', update_user='$u_name' WHERE no = '$reg_no'");
    
    $conn->query("UPDATE child_tbl SET registry_no='$registry_no', child_lname='$child_lname', child_fname='$child_fname', child_mname='$child_mname', child_sex='$child_sex', child_birth_date='$child_birth_date', birth_brgy='$birth_brgy', birth_municipal='$birth_city', birth_province='$birth_province', birth_type='$birth_type', if_multi_birth_was='$multi_birth_was', birth_order='$birth_order', birth_weight='$birth_weight' WHERE no = '$reg_no'");
    
    $conn->query("UPDATE mother_tbl SET registry_no='$registry_no', mother_lname='$mother_lname', mother_fname='$mother_fname', mother_mname='$mother_mname', mother_citizen='$mother_citizen', mother_religion='$mother_sect', mother_brgy='$mother_brgy', mother_municipal='$mother_city', mother_province='$mother_province', mother_country='$mother_country', mother_occupation='$mother_occupation', mother_age='$mother_age', ttl_no_child='$ttl_no_child', no_child_dead='$no_child_dead', no_child_alive='$no_child_alive', marriage_date='$marriage_date', marriage_place='$marriage_place' WHERE no = '$reg_no'");
    
    $conn->query("UPDATE father_tbl SET registry_no='$registry_no', father_lname='$father_lname', father_fname='$father_fname', father_mname='$father_mname', father_age='$father_age', father_religion='$father_sect', father_citizen='$father_citizen', father_brgy='$father_brgy', father_municipal='$father_city', father_province='$father_province', father_country='$father_country', father_occupation='$father_occupation', marriage_date='$marriage_date', marriage_place='$marriage_place' WHERE no = '$reg_no'");
    
    $conn->query("UPDATE att_inf_tbl SET registry_no='$registry_no', attendant_type='$attendant_type', birth_time='$birth_time', attendant_name='$attendant_name', attendant_position='$attendant_position', attendant_address='$attendant_address', informant_name='$informant_name', rel_child='$rel_child', informant_address='$informant_address', prepared_name='$prepared_name', prepared_position='$prepared_position', attendant_date='$att_date', informant_date='$inf_date', prepared_date='$prep_date' WHERE no = '$reg_no'");
    
    $conn->query("UPDATE receive_civil_tbl SET registry_no='$registry_no', received_name='$received_name', received_position='$received_position', civil_name='$civil_name', civil_position='$civil_position', received_date='$received_date', civil_date='$civil_date' WHERE no = '$reg_no'");
    
    $conn->query("UPDATE remarks_tbl SET registry_no='$registry_no', remarks='$remarks' WHERE no = '$reg_no'");
    
    $conn->query("UPDATE admission_paternity_tbl SET registry_no='$registry_no', father_name='$f_name_pat', mother_name='$m_name_pat', child_name='$c_name_pat', birth_date='$b_date_pat', birth_place='$b_place_pat', sworn_day ='$s_day', sworn_month ='$s_month', sworn_year ='$s_year', child_gender='$b_gender', ctc='$s_ctc', issued_on='$s_issuedon', issued_at='$s_issuedat', administer_name='$s_name', administer_position='$s_pos', administer_address='$s_addr' WHERE no = '$reg_no'");
    
    $conn->query("UPDATE late_reg_tbl SET registry_no='$registry_no', late_name='$late_name', late_address='$late_addr', late_birth_type='$late_birth_type', late_birth_of='$late_birth_of', late_birth_in='$late_birth_in', late_birth_on='$late_birth_on', attend_birth_by='$attend_birth_by', who_resides_at='$resides_at', late_citizen='$late_citizen', married_type='$m_type', married_on='$m_on', married_at='$m_at', not_married_name='$nm_name', late_reg_reason='$late_reason', applicant_only='$app_only', applicant_than_owner='$app_than', sign_day='$sign_d', sign_month='$sign_m', sign_year='$sign_y', sign_at='$sign_at', affiant_name='$affiant', late_sworn_day='$ls_day', late_sworn_month='$ls_month', late_sworn_year='$ls_year', late_sworn_at='$ls_at', late_ctc='$ls_ctc', late_issued_on='$ls_on', late_issued_at='$ls_iat', late_administer_name='$ls_name', late_administer_position='$ls_pos', late_administer_address='$ls_addr' WHERE no = '$reg_no'");

    header('location: birth_records.php');
    $conn->close();
}
?>