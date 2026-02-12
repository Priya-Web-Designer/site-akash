<?php
include 'config.php';

if (isset($_POST["submit"])) {
    $code = $_POST['code'];
    $registration_no = $_POST["registration_no"];
    $password = $_POST["password"];
    $date_of_registration = $_POST["date_of_registration"];
    $counsellor_name = $_POST["counsellor_name"];
    $handle_by = $_POST["handle_by"];
    $student_name = $_POST["student_name"];
    $father_name = $_POST["father_name"];
    $course = $_POST["course"];
    $session = $_POST["session"];
    $phone = $_POST["phone"];
    $bed = $_POST["bed"];
    $deled = $_POST["deled"];
    $med = $_POST["med"];
    $register_amount = $_POST["register_amount"];
    $register_date = $_POST["register_date"];
    $allotment_amount = $_POST["allotment_amount"];
    $allotment_date = $_POST["allotment_date"];
    $fyr_exam_amount = $_POST["1yr_exam_amount"];
    $fyr_exam_date = $_POST["1yr_exam_date"];
    $syr_exam_amount = $_POST["2yr_exam_amount"];
    $syr_exam_date = $_POST["2yr_exam_date"];
    $migration_fine = $_POST["migration_fine"];
    $practical_file_charge = $_POST["practical_file_charge"];
    $conveyance_charge = $_POST["conveyance_charge"];
    $programme = $_POST["programme"];
    $university = $_POST["university"];
    $session2 = $_POST["session2"];
    $medium = $_POST["medium"];
    $student_name2 = $_POST["student_name2"];
    $date_of_birth = $_POST["date_of_birth"];
    $religion = $_POST["religion"];
    $gender = $_POST["gender"];
    $married = $_POST["married"];
    $cetegory = $_POST["cetegory"];
    $disabilities = $_POST["disabilities"];
    $adhaar = $_POST["adhaar"];
    $nation = $_POST["nation"];
    $resident = $_POST["resident"];
    $income = $_POST["income"];
    $phone2 = $_POST["phone2"];
    $phone3 = $_POST["phone3"];
    $email = $_POST["email"];
    $father_name2 = $_POST["father_name2"];
    $mother_name = $_POST["mother_name"];
    $defense = $_POST["defense"];
    $dependent = $_POST["dependent"];
    $address = $_POST["address"];
    $pin = $_POST["pin"];
    $university_location = $_POST["university_location"];
    $university_group = $_POST["university_group"];
    $teaching_sub1 = $_POST["teaching_sub1"];
    $teaching_sub2 = $_POST["teaching_sub2"];
    $university10 = $_POST["university10"];
    $passing_year10 = $_POST["passing_year10"];
    $roll_no10 = $_POST["roll_no10"];
    $obtained10 = $_POST["obtained10"];
    $total_marks10 = $_POST["total_marks10"];
    $per10 = $_POST["per10"];
    $university12 = $_POST["university12"];
    $passing_year12 = $_POST["passing_year12"];
    $roll_no12 = $_POST["roll_no12"];
    $obtained12 = $_POST["obtained12"];
    $total_marks12 = $_POST["total_marks12"];
    $per12 = $_POST["per12"];
    $university_ug = $_POST["university_ug"];
    $passing_year_ug = $_POST["passing_year_ug"];
    $roll_no_ug = $_POST["roll_no_ug"];
    $obtained_ug = $_POST["obtained_ug"];
    $total_marks_ug = $_POST["total_marks_ug"];
    $per_ug = $_POST["per_ug"];
    $university_pg = $_POST["university_pg"];
    $passing_year_pg = $_POST["passing_year_pg"];
    $roll_no_pg = $_POST["roll_no_pg"];
    $obtained_pg = $_POST["obtained_pg"];
    $total_marks_pg = $_POST["total_marks_pg"];
    $per_pg = $_POST["per_pg"];
    $university_other = $_POST["university_other"];
    $passing_year_other = $_POST["passing_year_other"];
    $roll_no_other = $_POST["roll_no_other"];
    $obtained_other = $_POST["obtained_other"];
    $total_marks_other = $_POST["total_marks_other"];
    $per_other = $_POST["per_other"];
    $fee_declare = $_POST["fee_declare"];
    $declare_eligibility = $_POST["declare_eligibility"];
    $fee_plan = $_POST["fee_plan"];
    $instrument = $_POST["instrument"];
    $issue_date = $_POST["issue_date"];
    $bank_details = $_POST["bank_details"];
    $amount = $_POST["amount"];
    $instrument2 = $_POST["instrument2"];
    $issue_date2 = $_POST["issue_date2"];
    $bank_details2 = $_POST["bank_details2"];
    $amount2 = $_POST["amount2"];
    $instrument3 = $_POST["instrument3"];
    $issue_date3 = $_POST["issue_date3"];
    $bank_details3 = $_POST["bank_details3"];
    $amount3 = $_POST["amount3"];
    $instrument4 = $_POST["instrument4"];
    $issue_date4 = $_POST["issue_date4"];
    $bank_details4 = $_POST["bank_details4"];
    $amount4 = $_POST["amount4"];
    $agree = $_POST["agree"];
    $agree_date = $_POST["agree_date"];
    $place = $_POST["place"];
    $understand = $_POST["understand"];
    $understand_date = $_POST["understand_date"];
    $place2 = $_POST["place2"];
    $vailid_document = $_POST["vailid_document"];
    $vailid_document_date = $_POST["vailid_document_date"];
    $place3 = $_POST["place3"];
    $sincerity = $_POST["sincerity"];
    $leadership = $_POST["leadership"];
    $imagination = $_POST["imagination"];
    $emotional_stability = $_POST["emotional_stability"];
    $ability = $_POST["ability"];
    $work_hard = $_POST["work_hard"];
    $perseverance = $_POST["perseverance"];
    $declaration = $_POST["declaration"];
    $declaration2 = $_POST["declaration2"];
    $declaration_date = $_POST["declaration_date"];
    $place4 = $_POST["place4"];
    $declaration3 = $_POST["declaration3"];
    $course_admission = $_POST["course_admission"];
    $vailid_photocopy = $_POST["vailid_photocopy"];
    $vailid_photocopy_date = $_POST["vailid_photocopy_date"];
    $place5 = $_POST["place5"];
    $fee_plan2 = $_POST["fee_plan2"];
    $card_before = $_POST["card_before"];
    $concerned = $_POST["concerned"];
    $admit_card = $_POST["admit_card"];
    $admit_card_concerned = $_POST["admit_card_concerned"];
    $services = $_POST["services"];
    $student_name3 = $_POST["student_name3"];
    $student_date = $_POST["student_date"];
    $parents_name = $_POST["parents_name"];
    $parent_address = $_POST["parent_address"];

    $services_imploded = empty($_POST["services"]) ? " " : implode(",", $services);

    // Checking if all fields are filled in. If not, an error message will be displayed on the page.

    if (!empty($_FILES['profile_img']['name'])) {
        $images = $_FILES['profile_img']['name'];
        $images_tmp = $_FILES['profile_img']['tmp_name'];
        $profile_dir = "upload/";
        $profile_newname = $code . "_std_pro_photo" . "." . pathinfo($_FILES['profile_img']['name'], PATHINFO_EXTENSION);
        $targetfile = $profile_dir . $profile_newname;
        move_uploaded_file($images_tmp, $targetfile);
    } else {
        $profile_newname = $_POST['old_profile_img'];
    }
    if (!empty($_FILES['student_signature']['name'])) {
        $images2 = $_FILES['student_signature']['name'];
        $images_tmp = $_FILES['student_signature']['tmp_name'];
        $student_signature_dir = "upload/";
        $student_signature_newname = $code . "_std_sig_photo" . "." . pathinfo($_FILES['student_signature']['name'], PATHINFO_EXTENSION);
        $targetfile2 = $student_signature_dir . $student_signature_newname;
        move_uploaded_file($images_tmp, $targetfile2);
    } else {
        $student_signature_newname = $_POST['old_student_signature'];
    }
    if ($_FILES['parent_signature_sig']['name']) {
        $images3 = $_FILES['parent_signature_sig']['name'];
        $images_tmp = $_FILES['parent_signature_sig']['tmp_name'];
        $parent_signature_sig_dir = "upload/";
        $parent_signature_sig_newname = $code . "_prt_sig_photo" . "." . pathinfo($_FILES['parent_signature_sig']['name'], PATHINFO_EXTENSION);
        $targetfile3 = $parent_signature_sig_dir . $parent_signature_sig_newname;
        move_uploaded_file($images_tmp, $targetfile3);
    } else {
        $parent_signature_sig_newname = $_POST['old_parent_signature_sig'];
    }

    $sql = "UPDATE all_data SET 
            registration_no = '$registration_no',
            profile_img = '$profile_newname',
            password = '$password',
            date_of_registration = '$date_of_registration',
            counsellor_name = '$counsellor_name',
            handle_by = '$handle_by',
            student_name = '$student_name',
            father_name = '$father_name',
            course = '$course',
            session = '$session',
            phone = '$phone',
            bed = '$bed',
            deled = '$deled',
            med = '$med',
            register_amount = '$register_amount',
            register_date = '$register_date',
            allotment_amount = '$allotment_amount',
            allotment_date = '$allotment_date',
            1yr_exam_amount = '$fyr_exam_amount',
            1yr_exam_date = '$fyr_exam_date',
            2yr_exam_amount = '$syr_exam_amount',
            2yr_exam_date = '$syr_exam_date',
            migration_fine = '$migration_fine',
            practical_file_charge = '$practical_file_charge',
            conveyance_charge = '$conveyance_charge',
            programme = '$programme',
            university = '$university',
            session2 = '$session2',
            medium = '$medium',
            student_name2 = '$student_name2',
            date_of_birth = '$date_of_birth',
            religion = '$religion',
            gender = '$gender',
            married = '$married',
            cetegory = '$cetegory',
            disabilities = '$disabilities',
            adhaar = '$adhaar',
            nation = '$nation',
            resident = '$resident',
            income = '$income',
            phone2 = '$phone2',
            phone3 = '$phone3',
            email = '$email',
            father_name2 = '$father_name2',
            mother_name = '$mother_name',
            defense = '$defense',
            dependent = '$dependent',
            address = '$address',
            pin = '$pin',
            university_location = '$university_location',
            university_group = '$university_group',
            teaching_sub1 = '$teaching_sub1',
            teaching_sub2 = '$teaching_sub2',
            university10 = '$university10',
            passing_year10 = '$passing_year10',
            roll_no10 = '$roll_no10',
            obtained10 = '$obtained10',
            total_marks10 = '$total_marks10',
            per10 = '$per10',
            university12 = '$university12',
            passing_year12 = '$passing_year12',
            roll_no12 = '$roll_no12',
            obtained12 = '$obtained12',
            total_marks12 = '$total_marks12',
            per12 = '$per12',
            university_ug = '$university_ug',
            passing_year_ug = '$passing_year_ug',
            roll_no_ug = '$roll_no_ug',
            obtained_ug = '$obtained_ug',
            total_marks_ug = '$total_marks_ug',
            per_ug = '$per_ug',
            university_pg = '$university_pg',
            passing_year_pg = '$passing_year_pg',
            roll_no_pg = '$roll_no_pg',
            obtained_pg = '$obtained_pg',
            total_marks_pg = '$total_marks_pg',
            per_pg = '$per_pg',
            university_other = '$university_other',
            passing_year_other = '$passing_year_other',
            roll_no_other = '$roll_no_other',
            obtained_other = '$obtained_other',
            total_marks_other = '$total_marks_other',
            per_other = '$per_other',
            fee_declare = '$fee_declare',
            declare_eligibility = '$declare_eligibility',
            fee_plan = '$fee_plan',
            instrument = '$instrument',
            issue_date = '$issue_date',
            bank_details = '$bank_details',
            amount = '$amount',
            instrument2 = '$instrument2',
            issue_date2 = '$issue_date2',
            bank_details2 = '$bank_details2',
            amount2 = '$amount2',
            instrument3 = '$instrument3',
            issue_date3 = '$issue_date3',
            bank_details3 = '$bank_details3',
            amount3 = '$amount3',
            instrument4 = '$instrument4',
            issue_date4 = '$issue_date4',
            bank_details4 = '$bank_details4',
            amount4 = '$amount4',
            agree = '$agree',
            agree_date = '$agree_date',
            place = '$place',
            understand = '$understand',
            understand_date = '$understand_date',
            place2 = '$place2',
            vailid_document = '$vailid_document',
            vailid_document_date = '$vailid_document_date',
            place3 = '$place3',
            sincerity = '$sincerity',
            leadership = '$leadership',
            imagination = '$imagination',
            emotional_stability = '$emotional_stability',
            ability = '$ability',
            work_hard = '$work_hard',
            perseverance = '$perseverance',
            declaration = '$declaration',
            declaration2 = '$declaration2',
            declaration_date = '$declaration_date',
            place4 = '$place4',
            declaration3 = '$declaration3',
            course_admission = '$course_admission',
            vailid_photocopy = '$vailid_photocopy',
            vailid_photocopy_date = '$vailid_photocopy_date',
            place5 = '$place5',
            fee_plan2 = '$fee_plan2',
            card_before = '$card_before',
            concerned = '$concerned',
            admit_card = '$admit_card',
            admit_card_concerned = '$admit_card_concerned',
            student_signature = '$student_signature_newname',
            parent_signature_sig = '$parent_signature_sig_newname',
            services = '$services_imploded',
            student_name3 = '$student_name3',
            student_date = '$student_date',
            parents_name = '$parents_name',
            parent_address = '$parent_address'
        WHERE enroll_code = '$code'";

    if (mysqli_query($conn, $sql)) {
        echo "<script language='javascript'>";
        echo 'window.location.replace("thankyou.php");';
        echo "</script>";
    } else {
        echo mysqli_error($conn);
    }


}

?>