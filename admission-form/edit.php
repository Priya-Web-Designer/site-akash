<?php
include 'config.php';  // include your config file here  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />

    <title>BJS College Admission form</title>
</head>
<?php
$code = $_REQUEST['code'];
$sql2 = mysqli_query($conn, 'SELECT * from all_data where enroll_code = "' . $code . '" ');
$row = mysqli_fetch_array($sql2);
$cate = $row['cetegory'];
$total_service = empty($row['services']) ? array() : explode(",", $row['services']);



?>

<body class="bg-secondary">
    <form method="POST" action="update.php" enctype="multipart/form-data">
        <!-- =========================== first page ==============================  -->
        <div class="px-lg-5 px-md-2 mx-1 my-1">
            <div class="px-lg-4 py-lg-4 px-3 py-3 bg-light">
                <div class="border border-secondary border-2 px-lg-4 py-lg-5 px-3 py-3">
                    <div class="border border-dark border-5">
                        <div class="container-fluid">
                            <div class="row text-danger bg-white py-2" style="font-family: emoji">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-8 fs-lg-5 fs-md-5 fw-bold">
                                    FOR OFFICIAL USE ONLY
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-4 text-end fs-lg-5 fs-md-5 fw-bold">
                                    Since 2003.
                                </div>
                                <input type="text" name="code" id="" hidden value="<?php echo $code; ?>" />
                            </div>
                        </div>
                        <img src="image/bjs.png" alt="BJS" class="w-100" />
                        <div class="container-fluid">
                            <div class="row py-4 text-center">
                                <h1 class="fw-bolder text-primary py-3" style="font-family: math">
                                    ENROLLMENT FORM
                                </h1>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <h3 class="fw-bolder">Registration Number :-</h3>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <input type="text" name="registration_no"
                                        value="<?php echo $row['registration_no']; ?>" />
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 pt-3">
                                    <h3 class="fw-bolder">Password :-</h3>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <input type="password" name="password" value="<?php echo $row['password']; ?>" />
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <h3 class="fw-bolder">Date of Registration :-</h3>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <input type="date" name="date_of_admission"
                                        value="<?php echo $row['date_of_registration']; ?>" />
                                </div>
                            </div>
                            <div class="row" style="height: 100px"></div>
                            <div class="row text-center py-4">
                                <div class="col-lg-4 col-md-5 col-sm-12">
                                    <h4 class="fw-bolder text-danger">Counsellor Name</h4>
                                    <input type="text" name="counsellor_name"
                                        value="<?php echo $row['counsellor_name']; ?>" />
                                </div>
                                <div class="col-lg-4 col-md-2"></div>
                                <div class="col-lg-4 col-md-5 col-sm-12">
                                    <h4 class="fw-bolder text-danger">Handle By</h4>
                                    <input type="text" name="handle_by" value="<?php echo $row['handle_by']; ?>" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- =========================== second page ==============================  -->
        <div class="px-lg-5 px-md-2 mx-1 my-1">
            <div class="px-lg-4 py-lg-4 px-3 py-3 bg-light">
                <div class="border border-secondary border-2 px-lg-4 py-lg-5 px-3 py-3">
                    <div class="container-fluid">
                        <div class="row text-center pb-3">
                            <h4 class="fw-bolder"><u>Fee & All commitment</u></h4>
                        </div>
                        <div class="row">
                            <p>
                                Name of Student :-
                                <input type="text" name="student_name" id="stdname" oninput="autofillname()"
                                    value="<?php echo $row['student_name']; ?>" />
                                &nbsp; Father Name :-
                                <input type="text" name="father_name" id="fathername" oninput="autofillfather()"
                                    value="<?php echo $row['father_name']; ?>" />
                                &nbsp; Course :-
                                <input type="text" name="course" id="course" value="<?php echo $row['course']; ?>" />
                                &nbsp; Session :-
                                <input type="text" name="session" id="session" oninput="autofillsession()"
                                    value="<?php echo $row['session']; ?>" />&nbsp;
                                Phone Nubmer :-
                                <input type="number" name="phone" id="phone" oninput="autofillphone()"
                                    value="<?php echo $row['phone']; ?>" />
                            </p>
                        </div>
                        <div class="row py-3">
                            <div class="col-lg-5 col-md-6 col-sm-6">
                                <h5><b>Bachelor of Education (B.Ed)</b></h5>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                1&rpar; B.Ed HR
                                <input type="radio" id="bed_hr" name="bed" value="hr" <?php if ($row['bed'] == 'hr')
                                    echo 'checked' ?> />
                                    <label for="bed_hr"></label>
                                </div>
                                <div class="col-lg-4 col-md-3 col-sm-3">
                                    2&rpar; B.Ed MP
                                    <input type="radio" id="bed_mp" name="bed" value="mp" <?php if ($row['bed'] == 'mp')
                                    echo 'checked' ?> />
                                    <label for="bed_mp"></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-12 box">
                                    <h6>
                                        <strong>Eligibility</strong>
                                    </h6>
                                    <ol>
                                        <li>
                                            REQUIRED 50% MARKS IN GRADUATION OR POST GRADUATION.
                                        </li>
                                        <li>ADMISSION THROUGH ONLINE COUNSELLING.</li>
                                        <li>B.Tech / BE Passed 55%</li>
                                    </ol>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12 box">
                                    <h6>
                                        <strong>Actual Fee Haryana</strong>
                                    </h6>
                                    CHALLAN 1000/-<br />
                                    ADM FEES I YR 44000/-<br />
                                    ADM FEES II YR 44000/-<br />
                                    EXAM FEES I YR 4335/-<br />
                                    EXAM FEES II YR 4335/-<br />
                                    <b>TOTAL FEES 97,670/-</b>
                                </div>
                                <div class="col-lg-3 col-md-5 col-sm-6 col-12 box">
                                    <h6>
                                        <strong>Actual Fee MP</strong>
                                    </h6>
                                    CHALLAN 1000/-<br />
                                    ADM FEES I YR 36000/-<br />
                                    ADM FEES II YR 36000/-<br />
                                    EXAM FEES 2500/-Sem.<br />
                                    <b>TOTAL FEES 83000/-</b>
                                </div>
                                <div class="col-lg-3 col-md-7 col-sm-12 box" style="font-size: smaller">
                                    <h6>
                                        <strong>Documents Required</strong>
                                    </h6>
                                    *10th & 12th MARKSHEET AND CERTIFICATE.<br />
                                    *ORIGINAL MIGRATION/SLC CERTIFICATE.<br />
                                    *GRADUATION MARKSHEET OF ALL YEARS.<br />
                                    *CHARACTER CERTIFICATE (if university req.)<br />
                                    *IF GAP YEAR ATTACH AFFIDAVIT<br />
                                    *AADHAAR CARD AND 6 PHOTOS <br />
                                    *CASTE CERTIFICATE VAALID SAME STATE <br />
                                    *2 SET PHOTOCOPIES OF ALL DOCUMENTS <br />
                                </div>
                            </div>
                            <div class="row py-3">
                                <div class="col-lg-5 col-md-6 col-sm-6">
                                    <h5><b>Diploma in Elementary Education (D.El.Ed)</b></h5>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    1&rpar; D.El.Ed HR
                                    <input type="radio" id="deled_hr" name="deled" value="d_hr" <?php if ($row['deled'] == 'd_hr')
                                    echo 'checked' ?> />
                                    <label for="deled_hr"></label>
                                </div>
                                <div class="col-lg-4 col-md-3 col-sm-3">
                                    2&rpar; D.El.Ed MP
                                    <input type="radio" id="deled_mp" name="deled" value="d_mp" <?php if ($row['deled'] == 'd_mp')
                                    echo 'checked' ?> />
                                    <label for="deled_mp"></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-12 box">
                                    <h6>
                                        <strong>Eligibility</strong>
                                    </h6>
                                    <ol>
                                        <li>12th PASSED WITH 50% MARKS FROM RECOGNIZED BOARD</li>
                                        <li>ADMISSION THROUGH ONLINE COUNSELLING.</li>
                                    </ol>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12 box">
                                    <h6>
                                        <strong>Actual Fee Haryana</strong>
                                    </h6>
                                    CHALLAN 500/-<br />
                                    ADM FEES I YR 25800/-<br />
                                    ADM FEES II YR 25800/-<br />
                                    EXAM FEES 4000/- Per Year<br />
                                    FACILITATION 10000/- Per Year<br />
                                    <b>TOTAL FEES 80,100/-</b>
                                </div>
                                <div class="col-lg-3 col-md-5 col-sm-6 col-12 box">
                                    <h6>
                                        <strong>Actual Fee MP</strong>
                                    </h6>
                                    CHALLAN 250/-<br />
                                    ADM FEES I YR 36000/-<br />
                                    ADM FEES II YR 36000/-<br />
                                    EXAM FEES I YR 6500/-<br />
                                    EXAM FEES II YR 6500/-<br />
                                    <b>TOTAL FEES 85000/-</b>
                                </div>
                                <div class="col-lg-3 col-md-7 col-sm-12 box" style="font-size: smaller">
                                    <h6>
                                        <strong>Documents Required</strong>
                                    </h6>
                                    *10th & 12th MARKSHEET AND CERTIFICATE.<br />
                                    *ORIGINAL MIGRATION / SLC CERTIFICATE.<br />
                                    *ORIGINAL SLC / TC CERTIFICATE.<br />
                                    *IF GAP YEAR ATTACH AFFIDAVIT<br />
                                    *AADHAAR CARD AND 6 PHOTOS <br />
                                    *CASTE CERTIFICATE VAALID SAME STATE <br />
                                    *2 SET PHOTOCOPIES OF ALL DOCUMENTS <br />
                                </div>
                            </div>
                            <div class="row py-3">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <h5><b>Master of Education (M.Ed)</b></h5>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    HARYANA
                                    <input type="checkbox" name="med" value="M.Ed" <?php if ($row['med'] == 'M.Ed')
                                    echo 'checked' ?> />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12 box">
                                    <h6>
                                        <strong>Eligibility</strong>
                                    </h6>
                                    <ol>
                                        <li>
                                            REQUIRED 50% MARKS IN BACHELOR OF EDUCATION (B.Ed)
                                            GRADUATION
                                        </li>
                                        <li>ADMISSION THROUGH ONLINE COUNSELLING.</li>
                                    </ol>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12 box">
                                    <h6>
                                        <strong>Actual Fee Haryana</strong>
                                    </h6>
                                    CHALLAN 1000/-<br />
                                    ADM FEES I YR 38500/-<br />
                                    ADM FEES II YR 38500/-<br />
                                    EXAM FEES I YR 400/-<br />
                                    EXAM FEES II YR 400/-<br />
                                    <b>TOTAL FEES 86,000/-</b>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12 box" style="font-size: smaller">
                                    <h6>
                                        <strong>Documents Required</strong>
                                    </h6>
                                    *10th & 12th MARKSHEET AND CERTIFICATE.<br />
                                    *B.Ed MARKSHEET OF ALL YEARS.<br />
                                    *ORIGINAL MIGRATION / SLC CERTIFICATE.<br />
                                    *CHARACTER CERTIFICATE (if university req.)<br />
                                    *IF GAP YEAR ATTACH AFFIDAVIT<br />
                                    *AADHAAR CARD AND 6 PHOTOS <br />
                                    *CASTE CERTIFICATE VAALID SAME STATE <br />
                                    *2 SET PHOTOCOPIES OF ALL DOCUMENTS <br />
                                </div>
                            </div>
                            <div class="row py-3">
                                <h5><b>Payable Amounts: </b>&nbsp; <input type="text" name="payment" id=""
                                        value="<?php echo $row['payment']; ?>"> </h5>
                        </div>
                        <div class="row">
                            <div class="container table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">At The Time</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Services</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Registration</th>
                                            <td>
                                                <input type="number" name="register_amount"
                                                    value="<?php echo $row['register_amount']; ?>" />
                                            </td>
                                            <td>
                                                <input type="date" name="register_date"
                                                    value="<?php echo $row['register_date']; ?>" />
                                            </td>
                                            <td style="width: 400px">
                                                <div class="row">
                                                    <div class="col-8">Registration</div>
                                                    <div class="col-4">
                                                        <input type="checkbox" name="services[]" value="registration"
                                                            <?= in_array("registration", $total_service) ? "checked" : "" ?> />
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Allotment</th>
                                            <td>
                                                <input type="number" name="allotment_amount"
                                                    value="<?php echo $row['allotment_amount']; ?>" />
                                            </td>
                                            <td>
                                                <input type="date" name="allotment_date"
                                                    value="<?php echo $row['allotment_date']; ?>" />
                                            </td>
                                            <td style="width: 400px">
                                                <div class="row">
                                                    <div class="col-8">Admission</div>
                                                    <div class="col-4">
                                                        <input type="checkbox" name="services[]" value="admission"
                                                            <?= in_array("admission", $total_service) ? "checked" : "" ?> />
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1<sup>st</sup> year Examination</th>
                                            <td>
                                                <input type="number" name="1yr_exam_amount"
                                                    value="<?php echo $row['1yr_exam_amount']; ?>" />
                                            </td>
                                            <td>
                                                <input type="date" name="1yr_exam_date"
                                                    value="<?php echo $row['1yr_exam_date']; ?>" />
                                            </td>
                                            <td style="width: 400px">
                                                <div class="row">
                                                    <div class="col-8">Attendence</div>
                                                    <div class="col-4">
                                                        <input type="checkbox" name="services[]" value="attendence"
                                                            <?= in_array("attendence", $total_service) ? "checked" : "" ?> />
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2<sup>nd</sup> year Examination</th>
                                            <td>
                                                <input type="number" name="2yr_exam_amount"
                                                    value="<?php echo $row['2yr_exam_amount']; ?>" />
                                            </td>
                                            <td>
                                                <input type="date" name="2yr_exam_date"
                                                    value="<?php echo $row['2yr_exam_date']; ?>" />
                                            </td>
                                            <td style="width: 400px">
                                                <div class="row">
                                                    <div class="col-8">Documentary Work</div>
                                                    <div class="col-4">
                                                        <input type="checkbox" name="services[]" value="document"
                                                            <?= in_array("document", $total_service) ? "checked" : "" ?> />
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"></th>
                                            <td></td>
                                            <td></td>
                                            <td style="width: 400px">
                                                <div class="row">
                                                    <div class="col-8">Books</div>
                                                    <div class="col-4">
                                                        <input type="checkbox" name="services[]" value="book"
                                                            <?= in_array("book", $total_service) ? "checked" : "" ?> />
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"></th>
                                            <td></td>
                                            <td></td>
                                            <td style="width: 400px">
                                                <div class="row">
                                                    <div class="col-8">Weekend Classes</div>
                                                    <div class="col-4">
                                                        <input type="checkbox" name="services[]" value="class"
                                                            <?= in_array("class", $total_service) ? "checked" : "" ?> />
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"></th>
                                            <td></td>
                                            <td></td>
                                            <td style="width: 400px">
                                                <div class="row">
                                                    <div class="col-8">CTET 6 Months</div>
                                                    <div class="col-4">
                                                        <input type="checkbox" name="services[]" value="ctet"
                                                            <?= in_array("ctet", $total_service) ? "checked" : "" ?> />
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"></th>
                                            <td></td>
                                            <td></td>
                                            <td style="width: 400px">
                                                <div class="row">
                                                    <div class="col-8">Ctet till Selection</div>
                                                    <div class="col-4">
                                                        <input type="checkbox" name="services[]" value="ctet_select"
                                                            <?= in_array("ctet_select", $total_service) ? "checked" : "" ?> />
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <p>
                                <b>Note :- </b>Fee pay After Last Date will be Chargeable
                                Rs.65 Per/Day from Appling date
                            </p>
                            <p>
                                <b>Original Migration/TC/SLC</b>
                                <input type="text" name="migration_fine"
                                    value="<?php echo $row['migration_fine']; ?>" />
                                after date Fine
                                According to University + Rs 2000 Service Charge.
                            </p>
                            <p>
                                Practical Complete File Charge
                                <input type="text" name="practical_file_charge"
                                    value="<?php echo $row['practical_file_charge']; ?>" />
                            </p>
                            <p>
                                Conveyance Charge
                                <input type="text" name="conveyance_charge"
                                    value="<?php echo $row['conveyance_charge']; ?>" />
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- =========================== thired page ==============================  -->
        <div class="px-lg-5 px-md-2 mx-1 my-1">
            <div class="px-lg-4 py-lg-4 px-3 py-3 bg-light">
                <div class="border border-secondary border-2 pb-lg-5 pb-3 bg-white">
                    <div class="container-fluid px-lg-4 px-3">
                        <div class="row pt-3">
                            <h2 class="text-center fw-bolder">Candidate Profile</h2>
                            <hr style="height: 2px;">
                        </div>
                        <div class="row pt-3">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 py-2">
                                Applied Programme<br>
                                <input type="text" name="programme" id="" class="w-100"
                                    value="<?php echo $row['programme']; ?>">
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 pt-2">
                                Board/ University<br>
                                <input type="text" name="university" id="" class="w-100"
                                    value="<?php echo $row['university']; ?>" />
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 pt-2">
                                Session<br>
                                <input type="text" name="session2" id="session2" class="w-100"
                                    value="<?php echo $row['session2']; ?>" />
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 pt-2">
                                Medium<br>
                                <input type="text" name="medium" class="w-100" value="<?php echo $row['medium']; ?>" />
                            </div>
                        </div>
                        <div class="row py-3">
                            <h5><b>Personal Details</b></h5>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 col-md-7">
                                <div class="row pb-3">
                                    <div class="col-4">Applicant Full Name</div>
                                    <div class="col-8">
                                        <input type="text" name="student_name2" id="stdname2" class="w-100"
                                            value="<?php echo $row['student_name2']; ?>" />
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-6">Date of Birth</div>
                                            <div class="col-6">
                                                <input type="date" name="date_of_birth" class="w-100"
                                                    value="<?php echo $row['date_of_birth']; ?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row pb-3">
                                            <div class="col-6">Religion</div>
                                            <div class="col-6">
                                                <input type="text" name="religion" class="w-100"
                                                    value="<?php echo $row['religion']; ?>" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 pb-3">
                                        <div class="row">
                                            <div class="col-4">Gender</div>
                                            <div class="col-8 d-flex justify-content-between px-3">
                                                M
                                                <input type="radio" id="M" name="gender" value="M" <?php if ($row['gender'] == 'M')
                                                    echo 'checked' ?> />
                                                    <label for="M"></label> F
                                                    <input type="radio" id="F" name="gender" value="F" <?php if ($row['gender'] == 'F')
                                                    echo 'checked' ?> />
                                                    <label for="F"></label> O
                                                    <input type="radio" id="O" name="gender" value="O" <?php if ($row['gender'] == 'O')
                                                    echo 'checked' ?> />
                                                    <label for="O"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 pb-3">
                                            <div class="row">
                                                <div class="col-6">Merital States</div>
                                                <div class="col-6">
                                                    <input type="text" name="married" class="w-100"
                                                        value="<?php echo $row['married']; ?>" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <div class="col-lg-6">
                                        <div class="row pb-3">
                                            <div class="col-4">Category</div>
                                            <div class="col-8">
                                                <select name="cetegory" id="" class="w-100">
                                                    <option value="General" <?php if ($row['cetegory'] == 'General')
                                                        echo 'Selected' ?>>General
                                                        </option>
                                                        <option value="OBC" <?php if ($row['cetegory'] == 'OBC')
                                                        echo 'Selected' ?>>OBC</option>
                                                        <option value="SC" <?php if ($row['cetegory'] == 'SC')
                                                        echo 'Selected' ?>>SC</option>
                                                        <option value="ST" <?php if ($row['cetegory'] == 'ST')
                                                        echo 'Selected' ?>>ST</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row pb-3">
                                                <div class="col-7">
                                                    Physically Challenged
                                                </div>
                                                <div class="col-5">
                                                    Yes
                                                    <input type="radio" name="disabilities" id="d-yes" value="Yes" <?php if ($row['disabilities'] == 'Yes')
                                                        echo 'checked' ?> /><label
                                                        for="d-yes"></label>
                                                    &nbsp;No
                                                    <input type="radio" name="disabilities" id="disabilities" value="No"
                                                    <?php if ($row['disabilities'] == 'No')
                                                        echo 'checked' ?> /><label
                                                        for="disabilities"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 pb-3">
                                            <div class="row">
                                                <div class="col-4">Adhaar No.</div>
                                                <div class="col-8">
                                                    <input type="number" name="adhaar" class="w-100"
                                                        value="<?php echo $row['adhaar']; ?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 pb-3">
                                        <div class="row">
                                            <div class="col-5">Nationality</div>
                                            <div class="col-7">
                                                <input type="text" name="nation" class="w-100"
                                                    value="<?php echo $row['nation']; ?>" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 pb-3">
                                        <div class="row">
                                            <div class="col-4">Domicile/ Resident</div>
                                            <div class="col-8">
                                                <input type="text" name="resident" class="w-100"
                                                    value="<?php echo $row['resident']; ?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 pb-3">
                                        <div class="row">
                                            <div class="col-5">Annual Income</div>
                                            <div class="col-7">
                                                <input type="text" name="income" class="w-100"
                                                    value="<?php echo $row['income']; ?>" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <div class="col-2">Contact No.</div>
                                    <div class="col-5">
                                        <input type="number" name="phone2" id="phone2" class="w-100"
                                            value="<?php echo $row['phone2']; ?>" />
                                    </div>
                                    <div class="col-5">
                                        <input type="number" name="phone3" id="phone3" class="w-100"
                                            value="<?php echo $row['phone3']; ?>" />
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <div class="col-lg-4 col-5">E-Mail Address</div>
                                    <div class="col-lg-8 col-7">
                                        <input type="email" name="email" class="w-100"
                                            value="<?php echo $row['email']; ?>" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 pb-3">
                                        <div class="row">
                                            <div class="col-5">Father Name</div>
                                            <div class="col-7">
                                                <input type="text" name="father_name2" id="fathername2" class="w-100"
                                                    value="<?php echo $row['father_name2']; ?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 pb-3">
                                        <div class="row">
                                            <div class="col-5">Mother Name</div>
                                            <div class="col-7">
                                                <input type="text" name="mother_name" class="w-100"
                                                    value="<?php echo $row['mother_name']; ?>" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-5 text-center d-flex align-items-center">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- <h5><b>Upload Your Photo</b></h5> -->
                                        <div class="avatar-upload">
                                            <div class="avatar-edit">
                                                <input type="file" id="imageUpload" name="profile_img"
                                                    accept=".png, .jpg, .jpeg" />
                                                <input type="hidden" name="old_profile_img"
                                                    value="<?php echo $row['profile_img']; ?>">
                                                <label for="imageUpload"></label>
                                            </div>
                                            <div class="avatar-preview">
                                                <div id="imagePreview" style="background-image:<?php
                                                if (!empty($row['profile_img'])) {
                                                    echo "url(upload/" . $row['profile_img'] . ")";
                                                } else {
                                                    echo "url('image/upload.png')";
                                                }
                                                ?> ">
                                                </div>
                                            </div>
                                            <!-- <input type="file" name="image" /> -->

                                        </div>
                                    </div>
                                    <div class="col-12 pt-4 fw-bolder">

                                        Signature of the Student :-<br />
                                        <canvas id="student_signature" class="w-100 mt-2"></canvas>

                                        <input type="file" name="student_signature" id="studentinput"
                                            onchange="uploadstudentsig()" />

                                        <input type="hidden" name="old_student_signature" id="old_studentinput"
                                            value="<?php echo $row['student_signature']; ?>">



                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-lg-8 col-md-8 col-sm-9 col-7 pb-3">
                                        Are you a Defence Person?:
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-3 col-5">
                                        Yes
                                        <input type="radio" name="defense" id="d-d" value="Yes" <?php if ($row['defense'] == 'Yes')
                                            echo 'checked' ?> /><label for="d-d"></label>
                                            &nbsp;No
                                            <input type="radio" name="defense" id="d-de" value="No" <?php if ($row['defense'] == 'No')
                                            echo 'checked' ?> /><label for="d-de"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-9 col-7 pb-3">
                                            Are you a dependent of Defence Person?:
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-3 col-5">
                                            Yes
                                            <input type="radio" name="dependent" id="dependent" value="Yes" <?php if ($row['dependent'] == 'Yes')
                                            echo 'checked' ?> />
                                            <label for="dependent"></label> &nbsp;No
                                            <input type="radio" name="dependent" id="depend" value="No" <?php if ($row['dependent'] == 'No')
                                            echo 'checked' ?> /><label for="depend"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-7 col-md-9 pb-3">
                                    <div class="row">
                                        <div class="col-4">Current Address</div>
                                        <div class="col-8">
                                            <input type="text" name="address" class="w-100"
                                                value="<?php echo $row['address']; ?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-3 pb-3">
                                <div class="row">
                                    <div class="col-4">Pin code</div>
                                    <div class="col-8">
                                        <input type="text" name="pin" class="w-100"
                                            value="<?php echo $row['pin']; ?>" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <hr style="height: 2px;" class="">
                            <p>
                                Location of the university from which you have passed
                                Qualifying Examination:
                            </p>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-10">(a) In State Haryana</div>
                                    <div class="col-2">
                                        <input type="radio" name="university_location" id="instate" value="instate"
                                            <?php if ($row['university_location'] == 'instate')
                                                echo 'checked' ?> />
                                            <label for="instate"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-10">(b) Out State Haryana</div>
                                        <div class="col-2">
                                            <input type="radio" name="university_location" id="outstate" value="outstate"
                                            <?php if ($row['university_location'] == 'outstate')
                                                echo 'checked' ?> />
                                            <label for="outstate"></label>
                                        </div>
                                    </div>
                                </div>
                                <p class="pt-3 fw-bolder h5">Group</p>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-10">
                                            (a) Group 1:- Science & Arts With Maths
                                        </div>
                                        <div class="col-2">
                                            <input type="radio" name="university_group" id="sub1" value="sub1" <?php if ($row['university_group'] == 'sub1')
                                                echo 'checked' ?> />
                                            <label for="sub1"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-10">(b) Group 2:- Arts & Connerce</div>
                                        <div class="col-2">
                                            <input type="radio" name="university_group" id="sub2" value="sub2" <?php if ($row['university_group'] == 'sub2')
                                                echo 'checked' ?> />
                                            <label for="sub2"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 py-3">
                                    <div class="row">
                                        <div class="col-5">Teaching Sub 1</div>
                                        <div class="col-7">
                                            <input type="text" name="teaching_sub1" class="w-100"
                                                value="<?php echo $row['teaching_sub1']; ?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 py-3">
                                <div class="row">
                                    <div class="col-5">Teaching Sub 2</div>
                                    <div class="col-7">
                                        <input type="text" name="teaching_sub2" class="w-100"
                                            value="<?php echo $row['teaching_sub2']; ?>" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row table-responsive pt-4">
                            <h4>Education Detials</h4>
                            <table class="table table-bordered table-hover">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Exam Passed</th>
                                        <th scope="col">Board University</th>
                                        <th scope="col">Passing Year</th>
                                        <th scope="col">Roll No</th>
                                        <th scope="col">Marks Obtained</th>
                                        <th scope="col">Total Marks</th>
                                        <th scope="col">Per. %</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">10th</th>
                                        <td>
                                            <input type="text" name="university10" id="" class="education"
                                                value="<?php echo $row['university10']; ?>" />
                                        </td>
                                        <td>
                                            <input type="Number" name="passing_year10" id="" class="education"
                                                value="<?php echo $row['passing_year10']; ?>" />
                                        </td>
                                        <td>
                                            <input type="number" name="roll_no10" id="" class="education"
                                                value="<?php echo $row['roll_no10']; ?>" />
                                        </td>
                                        <td>
                                            <input type="number" name="obtained10" id="" class="education"
                                                value="<?php echo $row['obtained10']; ?>" />
                                        </td>
                                        <td>
                                            <input type="number" name="total_marks10" id="" class="education"
                                                value="<?php echo $row['total_marks10']; ?>" />
                                        </td>
                                        <td>
                                            <input type="text" name="per10" id="" class="education"
                                                value="<?php echo $row['per10']; ?>" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">12th</th>
                                        <td>
                                            <input type="text" name="university12" id="" class="education"
                                                value="<?php echo $row['university12']; ?>" />
                                        </td>
                                        <td>
                                            <input type="Number" name="passing_year12" id="" class="education"
                                                value="<?php echo $row['passing_year12']; ?>" />
                                        </td>
                                        <td>
                                            <input type="number" name="roll_no12" id="" class="education"
                                                value="<?php echo $row['roll_no12']; ?>" />
                                        </td>
                                        <td>
                                            <input type="number" name="obtained12" id="" class="education"
                                                value="<?php echo $row['obtained12']; ?>" />
                                        </td>
                                        <td>
                                            <input type="number" name="total_marks12" id="" class="education"
                                                value="<?php echo $row['total_marks12']; ?>" />
                                        </td>
                                        <td>
                                            <input type="text" name="per12" id="" class="education"
                                                value="<?php echo $row['per12']; ?>" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">UG</th>
                                        <td>
                                            <input type="text" name="university_ug" id="" class="education"
                                                value="<?php echo $row['university_ug']; ?>" />
                                        </td>
                                        <td>
                                            <input type="Number" name="passing_year_ug" id="" class="education"
                                                value="<?php echo $row['passing_year_ug']; ?>" />
                                        </td>
                                        <td>
                                            <input type="number" name="roll_no_ug" id="" class="education"
                                                value="<?php echo $row['roll_no_ug']; ?>" />
                                        </td>
                                        <td>
                                            <input type="number" name="obtained_ug" id="" class="education"
                                                value="<?php echo $row['obtained_ug']; ?>" />
                                        </td>
                                        <td>
                                            <input type="number" name="total_marks_ug" id="" class="education"
                                                value="<?php echo $row['total_marks_ug']; ?>" />
                                        </td>
                                        <td>
                                            <input type="text" name="per_ug" id="" class="education"
                                                value="<?php echo $row['per_ug']; ?>" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">PG</th>
                                        <td>
                                            <input type="text" name="university_pg" id="" class="education"
                                                value="<?php echo $row['university_pg']; ?>" />
                                        </td>
                                        <td>
                                            <input type="Number" name="passing_year_pg" id="" class="education"
                                                value="<?php echo $row['passing_year_pg']; ?>" />
                                        </td>
                                        <td>
                                            <input type="number" name="roll_no_pg" id="" class="education"
                                                value="<?php echo $row['roll_no_pg']; ?>" />
                                        </td>
                                        <td>
                                            <input type="number" name="obtained_pg" id="" class="education"
                                                value="<?php echo $row['obtained_pg']; ?>" />
                                        </td>
                                        <td>
                                            <input type="number" name="total_marks_pg" id="" class="education"
                                                value="<?php echo $row['total_marks_pg']; ?>" />
                                        </td>
                                        <td>
                                            <input type="text" name="per_pg" id="" class="education"
                                                value="<?php echo $row['per_pg']; ?>" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Any Other</th>
                                        <td>
                                            <input type="text" name="university_other" id="" class="education"
                                                value="<?php echo $row['university_other']; ?>" />
                                        </td>
                                        <td>
                                            <input type="Number" name="passing_year_other" id="" class="education"
                                                value="<?php echo $row['passing_year_other']; ?>" />
                                        </td>
                                        <td>
                                            <input type="number" name="roll_no_other" id="" class="education"
                                                value="<?php echo $row['roll_no_other']; ?>" />
                                        </td>
                                        <td>
                                            <input type="number" name="obtained_other" id="" class="education"
                                                value="<?php echo $row['obtained_other']; ?>" />
                                        </td>
                                        <td>
                                            <input type="number" name="total_marks_other" id="" class="education"
                                                value="<?php echo $row['total_marks_other']; ?>" />
                                        </td>
                                        <td>
                                            <input type="text" name="per_other" id="" class="education"
                                                value="<?php echo $row['per_other']; ?>" />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row ">
                            <hr style="height: 3px;" class="">
                            <h5 class="text-center fw-bold">Declarations made by Candidate (while filling up Application
                                Form)
                            </h5>
                            <ul>
                                <li>
                                    <input type="checkbox" name="fee_declare" id="" value="Yes" <?php if ($row['fee_declare'] == 'Yes')
                                        echo 'checked' ?>> Fee once paid will not be
                                        refunded
                                        in any
                                        case, except for multiple payment for a program (transaction failure).
                                    </li>
                                    <li>
                                        <input type="checkbox" name="declare_eligibility" id="" value="Yes" <?php if ($row['declare_eligibility'] == 'Yes')
                                        echo 'checked' ?>> I hereby declare that I
                                        have studied
                                        the
                                        prospectus thoroughly, I satisfy all the eligibility conditions prescribed
                                        for admission to the program(s) applied. I also declare that if I am admitted, I
                                        will abide by the rules and
                                        regulations of the University.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- =========================== fourth page ==============================  -->
            <div class="px-lg-5 px-md-2 mx-1 my-1">
                <div class="px-lg-4 py-lg-4 px-3 py-3 bg-light">
                    <div class="border border-secondary border-2 py-lg-5 px-lg-4 px-3 py-3 bg-white">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-3 col-md-3 col-sm-6">
                                    <button class="btn disabled border-dark">Fee Details:</button>
                                </div>
                                <div class="col-md-3 col-md-3 col-sm-6">
                                    <span class="h6">Fee Plan opted(<i class="fa fa-check" aria-hidden="true"></i>):</span>
                                </div>
                                <div class="col-md-6 col-md-6 col-sm-12 d-flex justify-content-between pe-lg-4">
                                    I
                                    <input type="radio" name="fee_plan" id="fee1" value="1" <?php if ($row['fee_plan'] == '1')
                                        echo 'checked' ?> />
                                    <label for="fee1"></label>

                                    II
                                    <input type="radio" name="fee_plan" id="fee2" value="2" <?php if ($row['fee_plan'] == '2')
                                        echo 'checked' ?> /><label for="fee2"></label>

                                    III
                                    <input type="radio" name="fee_plan" id="fee3" value="3" <?php if ($row['fee_plan'] == '3')
                                        echo 'checked' ?> /><label for="fee3"></label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12 col-sm-12 justify-content-center">
                                    <p class="bg-danger text-warning text-bold text-center h5 p-2">
                                        Detail(s) / Pay Order(s)
                                    </p>
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <div class="table-responsive">
                                        <table class="responsive-table table table-bordered border-dark">
                                            <thead>
                                                <th>S.No.</th>
                                                <th>Instrument Number</th>
                                                <th>Date</th>
                                                <th>Issuing Bank & Branch</th>
                                                <th>Amount (in Rs.)</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1.</td>
                                                    <td><input type="text" name="instrument"
                                                            value="<?php echo $row['instrument']; ?>" /></td>
                                                <td><input type="date" name="issue_date"
                                                        value="<?php echo $row['issue_date']; ?>" /></td>
                                                <td>
                                                    <input type="text" name="bank_details"
                                                        value="<?php echo $row['bank_details']; ?>" />
                                                </td>
                                                <td><input type="text" name="amount"
                                                        value="<?php echo $row['amount']; ?>" /></td>
                                            </tr>
                                            <tr>
                                                <td>2.</td>
                                                <td><input type="text" name="instrument2"
                                                        value="<?php echo $row['instrument2']; ?>" /></td>
                                                <td><input type="date" name="issue_date2"
                                                        value="<?php echo $row['issue_date2']; ?>" /></td>
                                                <td>
                                                    <input type="text" name="bank_details2"
                                                        value="<?php echo $row['bank_details2']; ?>" />
                                                </td>
                                                <td><input type="text" name="amount2"
                                                        value="<?php echo $row['amount2']; ?>" /></td>
                                            </tr>
                                            <tr>
                                                <td>3.</td>
                                                <td><input type="text" name="instrument3"
                                                        value="<?php echo $row['instrument3']; ?>" /></td>
                                                <td><input type="date" name="issue_date3"
                                                        value="<?php echo $row['issue_date3']; ?>" /></td>
                                                <td>
                                                    <input type="text" name="bank_details3"
                                                        value="<?php echo $row['bank_details3']; ?>" />
                                                </td>
                                                <td><input type="text" name="amount3"
                                                        value="<?php echo $row['amount3']; ?>" /></td>
                                            </tr>
                                            <tr>
                                                <td>4.</td>
                                                <td><input type="text" name="instrument4"
                                                        value="<?php echo $row['instrument4']; ?>" /></td>
                                                <td><input type="date" name="issue_date4"
                                                        value="<?php echo $row['issue_date4']; ?>" /></td>
                                                <td>
                                                    <input type="text" name="bank_details4"
                                                        value="<?php echo $row['bank_details4']; ?>" />
                                                </td>
                                                <td><input type="text" name="amount4"
                                                        value="<?php echo $row['amount4']; ?>" /></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h5 class="text-primary pt-3">
                                    Terms & Conditions for Post Date Cheque(s)
                                </h5>
                                <p>
                                    I understand that if my son/daughter/ward withdraws from the
                                    Program to which he/she has been admitted at any point of
                                    time or does not attend the Program and thus the seat given
                                    to him/her rendered vacant, the same will not/can not be
                                    filled up by any other candidate and a vacancy created in
                                    the batch due to withdrawal of a student after the starting
                                    of classes or up to 2 days prior to the same cannot be
                                    filled in any case, therefore I understand the Bhagwan Shree Jhulelal Science
                                    College shall suffer irreparable losses
                                    in case of non-payment of remaining fee of the installment
                                    plan, hence it will be unethical not to honor the Post Dated
                                    Cheque(s). I have opted for installment fee plan and have
                                    submitted the Post Dated Cheque(s) as per the details given
                                    below:
                                </p>
                                <p>
                                    <input type="checkbox" name="agree" id="agree" value="Yas" <?php if ($row['agree'] == 'Yas')
                                        echo 'checked' ?> />
                                        I agree that, I will make arrangement, for below stated Post
                                        Dated Cheque(s), to get honoured and will keep I further
                                        agree to get above Post Dated Cheque(s) cleared, even if, my
                                        son/daughter/ward discontinues studies at Bhagwan Shree Jhulelal Science College.
                                        The necessary Enrolment-Form, including
                                        this form was received by me several days before the actual
                                        date of signing to enable me to understand the implications
                                        of taking admission at BJS COLLEGE I have taken expert
                                        opinion regarding matters which were not clear to me and I
                                        am satisfied.
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                        I have retained photocopy of this document for my refrence
                                        before submitting it at BJS COLLEGE.
                                    </p>
                                    Date :-
                                    <input type="date" name="agree_date" id=""
                                        value="<?php echo $row['agree_date']; ?>" /><br />
                                Place :-
                                <input type="text" name="place" id="" value="<?php echo $row['place']; ?>" />
                            </div>
                        </div>
                        <div class="row">
                            <h5 class="text-primary pt-4 pb-2">
                                Consequences of Dishonour of Post Dated Cheque(s)
                            </h5>
                            <p>
                                <input type="checkbox" name="understand" id="" value="Yes" <?php if ($row['understand'] == 'Yes')
                                    echo 'checked' ?> />
                                    I understand that non-clearance of any of the Post Dated
                                    Cheque(s), submitted for payment of fees (on installment
                                    basis) as mentioned in the Enrolment-Form is punishable under
                                    Sec. 138 (B) of the Negotiable Instrument Act. I understand
                                    that Bhagwan Shree Jhulelal Science College shall be entitled
                                    to proceed and initiate appropriate legal action against me,
                                    to recover the amount of the Post Dated Cheque(s) along with
                                    the legal expenses and out of pocket expenses incurred by
                                    Bhagwan Shree Jhulelal Science College.<br />
                                    In case any of my Post Dated Cheque(s) bounces for any reason
                                    whatsoever, I undertake to submit a DD/Pay-Order in favour of
                                    "Bhagwan Shree Jhulelal Science College" payable at New Delhi,
                                    within four days of the bouncing of the Cheque(s) at my bank.
                                    Together with Rs. 500/- (Rupees five hundred only) as default
                                    money alongwith late payment of Rs. 50/- (Rupees fifty only)
                                    per day upto 10 (ten) days from the due date of payment of
                                    installment after which my son/daughter/ward shall be debarred
                                    from classes without any further notice and I shall have no
                                    claim for refund of fees or any support in studies besides
                                    Legal action intern alia action under Section 138 (B) of the
                                    Negotiable Instrument Act may be initiated against me/us.
                                </p>
                                <div class="col-lg-5 col-md-6">
                                    Date :-<input type="date" name="understand_date" id=""
                                        value="<?php echo $row['understand_date']; ?>" />
                            </div>
                            <div class="col-lg-7 col-md-6">
                                Address :-<input type="text" name="place2" id=""
                                    value="<?php echo $row['place2']; ?>" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- =========================== fifth page ==============================  -->
        <div class="px-lg-5 px-md-2 mx-1 my-1">
            <div class="px-lg-4 py-lg-4 px-3 py-3 bg-light">
                <div class="border border-secondary border-2 py-lg-5 px-lg-4 px-3 py-3 bg-white">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="text-danger fw-bolder">
                                    <input type="checkbox" name="vailid_document" id="" value="Yes" <?php if ($row['vailid_document'] == 'Yes')
                                        echo 'checked' ?> />I have retained
                                        photocopy of this document for my refrence
                                        before submitting it at Vedanta IAS Academy.
                                    </p>
                                    Date :-
                                    <input type="date" name="vailid_document_date" id=""
                                        value="<?php echo $row['vailid_document_date']; ?>" /><br />
                                Place :-<input type="text" name="place3" id="" value="<?php echo $row['place3']; ?>" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="text-center text-danger mt-3">
                                    Parent Data Sheet <br />(Confidential)
                                </h4>
                                <p>
                                    Dear Parent/ Guardian <br />The right and accurate feed back
                                    of your ward/students will give us an opportunity to
                                    understand the student better which will help us in
                                    providing better support & education. This information will
                                    be confident. <br />
                                    1. Name of the Student <br />
                                    2. Father's/Guardian's Name<br />
                                    3. Relation with Student<br />
                                    4. How would you rate the student in the following
                                    characteristics? (the appropriate)
                                </p>
                            </div>

                            <div class="col-md-12 pb-2">
                                <div class="table-responsive special-table">
                                    <table class="table table-hover" style="border: none !important">
                                        <thead class="">
                                            <tr>
                                                <th class=""></th>
                                                <th scope="col">Excellent</th>
                                                <th scope="col">Good</th>
                                                <th scope="col">Average</th>
                                                <th scope="col">Below Average</th>
                                                <th scope="col">Low</th>
                                                <th scope="col">Unknown</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">Sincerity</th>
                                                <td>
                                                    <input type="radio" name="sincerity" id="sin_exc" value="Excellent"
                                                        <?php if ($row['sincerity'] == 'Excellent')
                                                            echo 'checked' ?> />
                                                        <label for="sin_exc"></label>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="sincerity" id="sin_goo" value="Good" <?php if ($row['sincerity'] == 'Good')
                                                            echo 'checked' ?> />
                                                        <label for="sin_goo"></label>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="sincerity" id="sin_ave" value="Average"
                                                        <?php if ($row['sincerity'] == 'Average')
                                                            echo 'checked' ?> />
                                                        <label for="sin_ave"></label>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="sincerity" id="sin_blo"
                                                            value="Below Average" <?php if ($row['sincerity'] == 'Below Average')
                                                            echo 'checked' ?> />
                                                        <label for="sin_blo"></label>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="sincerity" id="sin_low" value="Low" <?php if ($row['sincerity'] == 'Low')
                                                            echo 'checked' ?> />
                                                        <label for="sin_low"></label>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="sincerity" id="sin_unk" value="Unknown"
                                                        <?php if ($row['sincerity'] == 'Unknown')
                                                            echo 'checked' ?> />
                                                        <label for="sin_unk"></label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Leadership</th>
                                                    <td>
                                                        <input type="radio" name="leadership" id="lea_exc" value="Excellent"
                                                        <?php if ($row['leadership'] == 'Excellent')
                                                            echo 'checked' ?> />
                                                        <label for="lea_exc"></label>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="leadership" id="lea_goo" value="Good"
                                                        <?php if ($row['leadership'] == 'Good')
                                                            echo 'checked' ?> />
                                                        <label for="lea_goo"></label>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="leadership" id="lea_ave" value="Average"
                                                        <?php if ($row['leadership'] == 'Average')
                                                            echo 'checked' ?> />
                                                        <label for="lea_ave"></label>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="leadership" id="lea_blo"
                                                            value="Below Average" <?php if ($row['leadership'] == 'Below Average')
                                                            echo 'checked' ?> />
                                                        <label for="lea_blo"></label>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="leadership" id="lea_low" value="Low" <?php if ($row['leadership'] == 'Low')
                                                            echo 'checked' ?> />
                                                        <label for="lea_low"></label>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="leadership" id="lea_unk" value="Unknown"
                                                        <?php if ($row['leadership'] == 'Unknown')
                                                            echo 'checked' ?> />
                                                        <label for="lea_unk"></label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Imagination</th>
                                                    <td>
                                                        <input type="radio" name="imagination" id="ima_exc"
                                                            value="Excellent" <?php if ($row['imagination'] == 'Excellent')
                                                            echo 'checked' ?> />
                                                        <label for="ima_exc"></label>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="imagination" id="ima_goo" value="Good"
                                                        <?php if ($row['imagination'] == 'Good')
                                                            echo 'checked' ?> />
                                                        <label for="ima_goo"></label>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="imagination" id="ima_ave" value="Average"
                                                        <?php if ($row['imagination'] == 'Average')
                                                            echo 'checked' ?> />
                                                        <label for="ima_ave"></label>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="imagination" id="ima_blo"
                                                            value="Below Average" <?php if ($row['imagination'] == 'Below Average')
                                                            echo 'checked' ?> />
                                                        <label for="ima_blo"></label>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="imagination" id="ima_low" value="Low"
                                                        <?php if ($row['imagination'] == 'Low')
                                                            echo 'checked' ?> />
                                                        <label for="ima_low"></label>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="imagination" id="ima_unk" value="Unknown"
                                                        <?php if ($row['imagination'] == 'Unknown')
                                                            echo 'checked' ?> />
                                                        <label for="ima_unk"></label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Emotional Stability</th>
                                                    <td>
                                                        <input type="radio" name="emotional_stability" id="emo_exc"
                                                            value="Excellent" <?php if ($row['emotional_stability'] == 'Excellent')
                                                            echo 'checked' ?> />
                                                        <label for="emo_exc"></label>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="emotional_stability" id="emo_goo"
                                                            value="Good" <?php if ($row['emotional_stability'] == 'Good')
                                                            echo 'checked' ?> />
                                                        <label for="emo_goo"></label>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="emotional_stability" id="emo_ave"
                                                            value="Average" <?php if ($row['emotional_stability'] == 'Average')
                                                            echo 'checked' ?> />
                                                        <label for="emo_ave"></label>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="emotional_stability" id="emo_blo"
                                                            value="Below Average" <?php if ($row['emotional_stability'] == 'Below Average')
                                                            echo 'checked' ?> />
                                                        <label for="emo_blo"></label>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="emotional_stability" id="emo_low"
                                                            value="Low" <?php if ($row['emotional_stability'] == 'Low')
                                                            echo 'checked' ?> />
                                                        <label for="emo_low"></label>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="emotional_stability" id="emo_unk"
                                                            value="Unknown" <?php if ($row['emotional_stability'] == 'Unknown')
                                                            echo 'checked' ?> />
                                                        <label for="emo_unk"></label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Ability to work with others</th>
                                                    <td>
                                                        <input type="radio" name="ability" id="abo_exc" value="Excellent"
                                                        <?php if ($row['ability'] == 'Excellent')
                                                            echo 'checked' ?> />
                                                        <label for="abo_exc"></label>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="ability" value="Good" id="abo_goo" <?php if ($row['ability'] == 'Good')
                                                            echo 'checked' ?> />
                                                        <label for="abo_goo"></label>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="ability" value="Average" id="abo_ave"
                                                        <?php if ($row['ability'] == 'Average')
                                                            echo 'checked' ?> />
                                                        <label for="abo_ave"></label>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="ability" value="Below Average"
                                                            id="abo_blo" <?php if ($row['ability'] == 'Below Average')
                                                            echo 'checked' ?> />
                                                        <label for="abo_blo"></label>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="ability" value="Low" id="abo_low" <?php if ($row['ability'] == 'Low')
                                                            echo 'checked' ?> />
                                                        <label for="abo_low"></label>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="ability" value="Unknown" id="abo_unk"
                                                        <?php if ($row['ability'] == 'Unknown')
                                                            echo 'checked' ?> />
                                                        <label for="abo_unk"></label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Ability to work hard</th>
                                                    <td>
                                                        <input type="radio" name="work_hard" id="abw_exc" value="Excellent"
                                                        <?php if ($row['work_hard'] == 'Excellent')
                                                            echo 'checked' ?> />
                                                        <label for="abw_exc"></label>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="work_hard" value="Good" id="abw_goo" <?php if ($row['work_hard'] == 'Good')
                                                            echo 'checked' ?> />
                                                        <label for="abw_goo"></label>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="work_hard" value="Average" id="abw_ave"
                                                        <?php if ($row['work_hard'] == 'Average')
                                                            echo 'checked' ?> />
                                                        <label for="abw_ave"></label>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="work_hard" value="Below Average"
                                                            id="abw_blo" <?php if ($row['work_hard'] == 'Below Average')
                                                            echo 'checked' ?> />
                                                        <label for="abw_blo"></label>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="work_hard" value="Low" id="abw_low" <?php if ($row['work_hard'] == 'Low')
                                                            echo 'checked' ?> />
                                                        <label for="abw_low"></label>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="work_hard" value="Unknown" id="abw_unk"
                                                        <?php if ($row['work_hard'] == 'Unknown')
                                                            echo 'checked' ?> />
                                                        <label for="abw_unk"></label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Perseverance</th>
                                                    <td>
                                                        <input type="radio" name="perseverance" id="per_exc"
                                                            value="Excellent" <?php if ($row['perseverance'] == 'Excellent')
                                                            echo 'checked' ?> />
                                                        <label for="per_exc"></label>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="perseverance" value="Good" id="per_goo"
                                                        <?php if ($row['perseverance'] == 'Good')
                                                            echo 'checked' ?> />
                                                        <label for="per_goo"></label>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="perseverance" value="Average" id="per_ave"
                                                        <?php if ($row['perseverance'] == 'Average')
                                                            echo 'checked' ?> />
                                                        <label for="per_ave"></label>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="perseverance" value="Below Average"
                                                            id="per_blo" <?php if ($row['perseverance'] == 'Below Average')
                                                            echo 'checked' ?> />
                                                        <label for="per_blo"></label>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="perseverance" value="Low" id="per_low"
                                                        <?php if ($row['perseverance'] == 'Low')
                                                            echo 'checked' ?> />
                                                        <label for="per_low"></label>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="perseverance" value="Unknown" id="per_unk"
                                                        <?php if ($row['perseverance'] == 'Unknown')
                                                            echo 'checked' ?> />
                                                        <label for="per_unk"></label>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <p>
                                        <input type="checkbox" name="declaration" id="" value="Yes" <?php if ($row['declaration'] == 'Yes')
                                                            echo 'checked' ?> />
                                        Please mention any other information relating to the
                                        student, which help make Bhagwan Shree Jhulelal Science College understand the
                                        student better.
                                    </p>
                                    <p>
                                        <input type="checkbox" name="declaration2" id="" value="Yes" <?php if ($row['declaration2'] == 'Yes')
                                                            echo 'checked' ?> />
                                        My son/daughter/ward has a sound moral character & sense of
                                        responsibility. He/she also has good physical and mental
                                        health to successfully cope up & complete his/her studies at
                                        Bhagwan Shree Jhulelal Science College and fulfill all terms
                                        & conditions
                                    </p>
                                    Date :-
                                    <input type="date" name="declaration_date" id=""
                                        value="<?php echo $row['declaration_date']; ?>" /><br />Place
                                :-
                                <input type="text" name="place4" id="" value="<?php echo $row['place4']; ?>" />
                                <br /><br />

                                Kindly do not take admission at BJS COLLEGE if the clauses
                                the declaration on the Enrolment form on page no. is not
                                agreeable to you.
                                <br />
                                <br />
                                <b><input type="checkbox" name="declaration3" id="" value="Yes" <?php if ($row['declaration3'] == 'Yes')
                                    echo 'checked' ?> />
                                        &nbsp;Specific Declarations are being reproduced
                                        hereunder:</b><br />
                                    In addition to the above, I understand without any ambiguity,
                                    that the fee once paid is not refundable at all, whatever the
                                    reason be, neither is it adjustable towards any other existing
                                    course at Bhagwan Shree Jhulelal Science College or nay yet to
                                    be launched nor towards the fee of any other existing or
                                    prospective student. <br /><br />
                                    I/We, the parent/guardian and/or the student, hereby severally
                                    and jointly declare unambiguously that/We have read and
                                    understood all the clauses contained in this Enrolment form,
                                    Annexure and Declarations and agree to abide by them without
                                    any reservation or ambiguity.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- =========================== sixth page ==============================  -->
            <div class="px-lg-5 px-md-2 mx-1 my-1">
                <div class="px-lg-4 py-lg-4 px-3 py-3 bg-light">
                    <div class="border border-secondary border-2 py-lg-5 px-lg-4 px-3 py-3 bg-white">
                        <div class="container-fluid">
                            <div class="row">
                                <p>
                                    I/We further declare that the above named student is talking
                                    admission in the
                                    <input type="text" name="course_admission" id="" class=""
                                        value="<?php echo $row['course_admission']; ?>" />
                                (course opted for) having considered everything material and
                                on his/her own sweet will and with the permission of the
                                Father/Mother/Legal Guardian without any coercion from any
                                side.
                            </p>
                            <div class="col-md-12 py-3">
                                <input type="checkbox" name="vailid_photocopy" id="" value="Yes" <?php if ($row['vailid_photocopy'] == 'Yes')
                                    echo 'checked' ?> />
                                    I have retained photocopy of this document for my refrence
                                    before submitting it at Bhagwan Shree Jhulelal Science College.
                                </div>
                            </div>
                            <div class="row pb-2">
                                <div class="col-6">
                                    Date :-
                                    <input type="date" name="vailid_photocopy_date" id=""
                                        value="<?php echo $row['vailid_photocopy_date']; ?>" />
                            </div>
                            <div class="col-6">
                                Place :-<input type="text" name="place5" id="" value="<?php echo $row['place5']; ?>" />
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                            <p>Colour Photographs</p>
                            <div class="container px-2">
                                (a) Passport size (six)<br />(b) Stamp size 2.5×2 cm. (one)
                            </div>
                            <p class="pt-3">Any one of the following documents:</p>
                            <div class="container px-2">
                                (a) Photocopy of School ID card with photograph or<br />
                                (b) Photocopy of last Board or University Marksheet supported
                                by any identity Proof of student
                            </div>
                        </div>
                        <div class="row py-3">
                            <h3 class="text-center text-danger mt-2">
                                <u><b>Information for Students</b></u>
                            </h3>
                            <h6 class="text-center">
                                <i><b>[Kindly do not take admission at Bhagwan Shree Jhulelal Science College, if
                                        the following declarations are not agreeable to you]</b></i>
                            </h6>
                            <h5 class="text-danger text-center">
                                Please read the Declarations/Undertakings carefully before
                                signing
                            </h5>
                            <p>
                                Before Taking Admission - Each Candidate, His/her Parents &
                                Legal Guardians are go through the required rules &
                                regulation. -Please do not take admission at Bhagwan Shree Jhulelal Science College if
                                you think Bhagwan Shree Jhulelal Science College is not best for Teacher Training
                                Institute.
                            </p>
                            <ol>
                                <li>
                                    Bhagwan Shree Jhulelal Science College starts making
                                    arrangements of infrastructure, faculty & other resources
                                    about 6 months before commencement of financial year.
                                    Bhagwan Shree Jhulelal Science College admits students as
                                    per its capacity plans. (subject to unforeseen circumstances
                                    & usual organizational risks) therefore each student taking
                                    admission has to pay complete fee under all circumstance
                                    i.e., even if he/she discontinues for any reason whatsoever
                                    or parents/guardians be transferred.
                                </li>
                                <li>
                                    Any change in government rules, regulations, policies
                                    pertaining to the courses of competitive exam such as B.Ed
                                    etc. which may render these exams as deleted or cancelled.
                                    In such eventually, Bhagwan Shree Jhulelal Science College
                                    shall not be held responsible in any manner whatsoever.
                                    However, Bhagwan Shree Jhulelal Science College shall take
                                    all necessary steps to protect the interest of students.
                                </li>
                                <li>
                                    The particular furnished by my ward are true to the best of
                                    my knowledge.
                                </li>
                                <li>
                                    I undertake and bind myself to pay within the published due
                                    dates, charges and any other dues levied by the Bhagwan Shree Jhulelal Science
                                    College.
                                </li>
                                <li>
                                    I shall take care that my behave properly and does nothing
                                    which may requires the academic faculty to take a
                                    disciplinary action including expelling him/her from class.
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- =========================== seventh page ==============================  -->
        <div class="px-lg-5 px-md-2 mx-1 my-1">
            <div class="px-lg-4 py-lg-4 px-3 py-3 bg-light">
                <div class="border border-secondary border-2 py-lg-5 px-lg-4 px-3 py-3 bg-white">
                    <div class="container-fluid">
                        <div class="row">
                            <h4 class="text-danger">
                                <u><b>Undertaking "A"</b></u>
                            </h4>
                            <ol>
                                <li>
                                    I/We have fully satisfied ourselves with regards to quality
                                    and excellence of teaching at Bhagwan Shree Jhulelal Science College from all
                                    available information/sources and have
                                    decided to study only at Bhagwan Shree Jhulelal Science College. I/we wish to pay
                                    the entire fees as per the Fee
                                    Plan
                                    <input type="text" name="fee_plan2" id="" class=""
                                        value="<?php echo $row['fee_plan2']; ?>" />
                                    (Fee Plan I/ Fee Plan II/ Fee Plan III) option (the same is
                                    signed by me & the student and is attached with this
                                    enrolment form) at our own sweet will and convenience
                                    without any pressure coercion from any one.
                                </li>
                                <li>
                                    We (student and the parents) declare that Bhagwan Shree Jhulelal Science College
                                    will have sole claim over the
                                    outstanding performance of the student and further agree to
                                    give a letter of appreciation to Bhagwan Shree Jhulelal Science College for the
                                    outstanding result in form of a Letter,
                                    a Video Interview or any other forum/ format that Bhagwan Shree Jhulelal Science
                                    College deems.
                                </li>
                                <li>
                                    I/We undertake that I (student) shall not indulge in any
                                    illegal / unethical/unprincipled /immoral /
                                    corrupt/dishonest activities which may cause loss of
                                    property, reputation and goodwill of Bhagwan Shree Jhulelal Science College. I/We
                                    further undertake that I/We shall
                                    compensate for/ indemnify against any loss/damage caused to
                                    Bhagwan Shree Jhulelal Science College.
                                </li>
                                <li>
                                    I/We hereby declare that the information furnished on this
                                    enrolment form etc. is correct to the best of my knowledge
                                    and belief.
                                </li>
                                <li>
                                    I am taking admission in Bhagwan Shree Jhulelal Science College with the consent of
                                    my Father/Mother/Legal
                                    Guardian and after being satisfied in all respects.
                                </li>
                                <li>
                                    I/We undertake that the information/details furnished/given
                                    by me/us are correct and if any discrepancy is found in the
                                    said details/information, at any stage of my association
                                    with Bhagwan Shree Jhulelal Science College may take any
                                    legal action against me/us to and fees/cost of study
                                    material etc. already paid on ground of inability to
                                    furnish/complete documents/formalities will not be
                                    refundable.
                                </li>
                            </ol>
                            <h4 class="text-danger">
                                <u><b>Undertaking "B"</b></u>
                            </h4>
                            <ol>
                                <li>
                                    I/We understand and acknowledge that preparation for Bhagwan Shree Jhulelal Science
                                    College requires exhaustive hard
                                    work, extensive study, motivation and self confidence. I
                                    undertake that shall follow the rules and teaching
                                    methodology beside study and practice rigorously without
                                    loosing self-confidence.
                                </li>
                                <li>
                                    I undertake that if I leave the institute midway before
                                    completing the full course for any reason whatsoever,
                                    including but not limited to transfer of my
                                    Father/Mother/Legal Guardian/ ill health of myself or any
                                    other member of the family or my admission in any other
                                    member of the family or my admission in any
                                    institute/course/college etc. or my studentship is cancelled
                                    because of misconduct etc., I or my Father/Mother/Legal
                                    Guardian shall not be entitled for refund of fees.
                                </li>
                                <li>
                                    In addition to the above, I understand without any ambiguity
                                    that the fee once paid is not refundable at all, whatever
                                    the reasons be, nor is it adjustable towards any other
                                    existing courses at Bhagwan Shree Jhulelal Science College
                                    or any yet to be launched nor towards the fee of any other
                                    existing or prospective student.
                                </li>
                                <li>
                                    It is understood that this admission is valid only for the
                                    course and the duration for which I am taking admission and
                                    I/We (the student and the Parents/Legal Guardian) shall not
                                    claim/request for admission to and adjusting the fees to any
                                    other course or duration.
                                </li>
                                <li>
                                    I/We acknowledge that the course materials provided to the
                                    student by Bhagwan Shree Jhulelal Science College during the
                                    course of study at Bhagwan Shree Jhulelal Science College
                                    are the intellectual property of Bhagwan Shree Jhulelal Science College and solely
                                    for personal purposes and not for
                                    commercial use. I further undertake that I shall not make
                                    copies of the study material provided by Bhagwan Shree Jhulelal Science College not
                                    shall provide/give/distribute it to
                                    anyone else.
                                </li>
                                <li>
                                    I/We fully understand that Bhagwan Shree Jhulelal Science College is giving the
                                    scholarship because the student is
                                    expected to bring laurels to Bhagwan Shree Jhulelal Science College and will spread
                                    good word of mouth among the
                                    students. We undertake that I/ we shall / will fully
                                    cooperate to achieve this objective including giving the
                                    Bhagwan Shree Jhulelal Science College Admit Card before
                                    <input type="text" name="card_before" id=""
                                        value="<?php echo $row['card_before']; ?>" /> of the
                                    concerned <input type="text" name="concerned" id=""
                                        value="<?php echo $row['concerned']; ?>" /> year
                                    and signing the letter of appreciation lauding Bhagwan Shree Jhulelal Science
                                    College efforts. I/We further undertake
                                    that I/We shall attend the
                                    seminars/workshops/felicitation/interview etc. conducted by
                                    Bhagwan Shree Jhulelal Science College after achieving rank
                                    by the student; however Bhagwan Shree Jhulelal Science College shall alone bear the
                                    entire cost and expenses in
                                    respect thereof. I further undertake to endorse the efforts
                                    and contributions made by Bhagwan Shree Jhulelal Science College. In achieving the
                                    rank while giving Interviews to
                                    the media (print/electronic / web). If we fail to give the
                                    admit card by
                                    <input type="text" name="admit_card" id=""
                                        value="<?php echo $row['admit_card']; ?>" /> of the
                                    concerned
                                    <input type="text" name="admit_card_concerned" id=""
                                        value="<?php echo $row['admit_card_concerned']; ?>" />
                                    year, Bhagwan Shree Jhulelal Science College will have the
                                    right to discontinue the scholarship and/or recover the
                                    scholarship with interest and the student parents / legal
                                    guardian will have no objection to the same.
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- =========================== eightth page ==============================  -->
        <div class="px-lg-5 px-md-2 mx-1 my-1">
            <div class="px-lg-4 py-lg-4 px-3 py-3 bg-light">
                <div class="border border-secondary border-2 py-lg-5 px-lg-4 px-3 py-3 bg-white">
                    <div class="container-fluid">
                        <div class="row">
                            <ol start="7">
                                <li>
                                    I/We undertake and acknowledge that incase I/We indulge in
                                    any kind of litigation with Bhagwan Shree Jhulelal Science College, I/We shall not
                                    be entitled for any Award/
                                    Rewards/ Scholarships/Benefits etc. from Bhagwan Shree Jhulelal Science College and
                                    shall refund/return such
                                    Awards/Rewards/Scholarship/Benefits etc. If availed by the
                                    student, within a period of 15 days, failing which Future
                                    Teacher & shall be entitled to recover the same through the
                                    appropriate court / forum along with interest, damages and
                                    cost of litigation.
                                </li>
                                <li>
                                    If a student is awarded scholarship by Bhagwan Shree Jhulelal Science College and
                                    does not perform at a similar level
                                    after joining Classroom Program then a probe may be lodged
                                    to find out if the student got scholarship on his/her own
                                    merit or by using any unfair means. Parents and Guardians of
                                    the student will be liable to pay back full fee of the
                                    program (that the student is enrolled for) with interest
                                    plus expenses towards investigation and also a compensation
                                    of Rs. 10 Lacs, if the investigating committee concludes
                                    that student had not secured the scholarship on his/her own
                                    merits.
                                </li>
                                <li>
                                    I have read the above carefully and have understood it
                                    clearly. I/We have also read the current Bhagwan Shree Jhulelal Science College
                                    Brochure carefully and have understood
                                    it clearly. I have kept a photocopy of all the pages of this
                                    enrolment form including this declaration and Annexures "A",
                                    "B", "C" & "D" for future reference and timely compliance.
                                </li>
                                <li>
                                    I/We, the parent / guardian and/or the student, hereby
                                    severally and jointly declare unambiguously that I/We have
                                    read and understood all the clauses contained in this
                                    Enrolment form, Annexure and Declarations and agree to abide
                                    by them without any reservation or ambiguity.
                                </li>
                                <li>
                                    I/We further declare that the student named on page no.. is
                                    taking admission in the program as mentioned on page no...
                                    having considered everything material, on his/her own sweet
                                    will after giving due consideration to rigors of time,
                                    distance and studies ahead and with the permission of the
                                    father/Mother/Legal Guardian without any coercion from any
                                    side. Further I/we understand that the student is required
                                    to work hard to attain the average standard of the batch
                                    allotted in order to cope up with studies and put in extra
                                    efforts if lagging behind in any subject/topic.
                                </li>
                                <li>
                                    I know that registered office of Bhagwan Shree Jhulelal Science College is situated
                                    at New Delhi.
                                </li>
                                <li>
                                    I promise to abide by all rules and regulations of Bhagwan Shree Jhulelal Science
                                    College declaration, in letter and
                                    spirit.
                                </li>
                                <li>
                                    In the event of any dispute between the parties regarding
                                    the interpretation of clauses of enrolment form or any claim
                                    etc. arising out of taking admission in Bhagwan Shree Jhulelal Science College, the
                                    matter shall be referred to the
                                    Sole Arbitrator appointed by Bhagwan Shree Jhulelal Science College. The arbitration
                                    proceedings shall be conducted in
                                    accordance with the provisions of the Arbitration &
                                    Conciliation Act, 1996 and statutory modification thereof &
                                    rules made thereunder. It is further agreed that in spite of
                                    the fact that the Sole Arbitrator may be known to any of the
                                    Directors or share holders and that he may be have been
                                    dealing with the Company or had occasion to deal with any
                                    matter of this agreement shall not disqualify him. Even if
                                    the Arbitrator may have expressed opinion n similar matter
                                    earlier shall also not render him disqualified. The
                                    arbitrator so appointed shall not be incapacitated for
                                    reasons of their being the employee or an associate of
                                    Bhagwan Shree Jhulelal Science College or Group/Subsidiary
                                    Companies, and for reasons shall be Delhi/New Delhi only.
                                </li>
                                <li>
                                    We (Student and the parent) am/are joining BJS COLLEGE only after satisfying
                                    myself/ourselves about the
                                    structure of program. I'll fully abide by the rules and
                                    regulations of the institute I also understand that in the
                                    event I am expelled from the institute on any disciplinary
                                    ground I'll raise no claim from BJS COLLEGE for
                                    any loss including course fee.
                                </li>
                            </ol>
                            <div class="col-6">
                                Name :- <input type="text" name="student_name3" id=""
                                    value="<?php echo $row['student_name3']; ?>" /><br />
                                Date :-<input type="date" name="student_date" id=""
                                    value="<?php echo $row['student_date']; ?>" />
                            </div>
                            <div class="col-6">
                                Name :-<input type="text" name="parents_name" id=""
                                    value="<?php echo $row['parents_name']; ?>" /><br />
                                Address :-<input type="text" name="parent_address" id=""
                                    value="<?php echo $row['parent_address']; ?>" />
                            </div>


                            <div class="col-lg-7 col-md-6 py-3">
                                Father / Mother / Legal Guardian's Signature :-<br />
                                <canvas id="parent_signature_sig" class="w-100 mt-2"></canvas>

                                <input type="file" name="parent_signature_sig" id="parentinput"
                                    onchange="uploadparentsig()" />

                                <input type="hidden" name="old_parent_signature_sig" id="old_parentinput"
                                    value="<?php echo $row['parent_signature_sig']; ?>">

                                <p class="py-2">{Who has issued the Cheque(s)}</p>

                            </div>
                            <div class="text-center">
                                <button type="btn" name="submit" class="bg-primary text-white py-2 px-4 rounded">
                                    Submit Form
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- upload image -->
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $("#imagePreview").css(
                        "background-image",
                        "url(" + e.target.result + ")"
                    );
                    $("#imagePreview").hide();
                    $("#imagePreview").fadeIn(650);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload").change(function () {
            readURL(this);
        });
    </script>

    <!-- fill same field -->
    <script>
        function autofillname() {
            // Get the value of the first input field
            var value = document.getElementById("stdname").value;

            // Set the value of the second input field to the value of the first input field
            document.getElementById("stdname2").value = value;
        }
        function autofillfather() {
            // Get the value of the first input field
            var value = document.getElementById("fathername").value;

            // Set the value of the second input field to the value of the first input field
            document.getElementById("fathername2").value = value;
        }
        function autofillsession() {
            // Get the value of the first input field
            var value = document.getElementById("session").value;

            // Set the value of the second input field tothe value of the first input field
            document.getElementById("session2").value = value;
        }
        function autofillphone() {
            // Get the value of the first input field
            var value = document.getElementById("phone").value;

            // Set the value of the second input field to the value of the first input field
            document.getElementById("phone2").value = value;
        }
    </script>

    <!-- upload sign -->
    <script src="https://www.dukelearntoprogram.com/course1/common/js/image/SimpleImage.js"></script>
    <script>
        window.onload = function () {
            // Drawing student signature
            var studentCanvas = document.getElementById("student_signature");
            var studentCtx = studentCanvas.getContext("2d");

            var studentSignatureValue = document.getElementById("old_studentinput").value;
            var studentImg = new Image();
            studentImg.onload = function () {
                studentCanvas.width = this.width;
                studentCanvas.height = this.height;
                studentCtx.drawImage(this, 0, 0);
            };
            studentImg.src = "upload/" + studentSignatureValue;

            // Drawing parent signature
            var parentCanvas = document.getElementById("parent_signature_sig");
            var parentCtx = parentCanvas.getContext("2d");

            var parentSignatureValue = document.getElementById("old_parentinput").value;
            var parentImg = new Image();
            parentImg.onload = function () {
                parentCanvas.width = this.width;
                parentCanvas.height = this.height;
                parentCtx.drawImage(this, 0, 0);
            };
            parentImg.src = "upload/" + parentSignatureValue;
        };
    </script>


    <script>
        function uploadstudentsig() {
            var imgcanvas = document.getElementById("student_signature");
            var fileinput = document.getElementById("studentinput");
            var image = new SimpleImage(fileinput);
            image.drawTo(imgcanvas);
        }
        function uploadparentsig() {
            var imgcanvas = document.getElementById("parent_signature_sig");
            var fileinput = document.getElementById("parentinput");
            var image = new SimpleImage(fileinput);
            image.drawTo(imgcanvas);
        }
    </script>

</body>

</html>