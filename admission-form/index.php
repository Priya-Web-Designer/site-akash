<?php
include 'config.php';

$sql = mysqli_query($conn, 'SELECT enroll_code from all_data ORDER BY enroll_code DESC LIMIT 1');
$row = mysqli_fetch_array($sql);
$code = $row['enroll_code'] + 1;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>AFTE Admission</title>

    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdn.datatables.net/buttons/1.2.2/css/buttons.bootstrap.min.css'>

    <style>
        table {
            border: 1px solid #000;
            border-collapse: collapse;
            margin: 0;
            padding: 0;
            width: 100%;
            table-layout: fixed;
        }

        table caption {
            font-size: 1.5em;
            margin: .5em 0 .75em;
        }

        table tr {
            background-color: #f8f8e8;
            border: 1px solid #ddd;
            padding: .35em;
        }

        table th,
        table td {
            padding: .625em;
            text-align: center;
        }

        table th {
            font-size: .85em;
            letter-spacing: .1em;
            text-transform: uppercase;
        }

        @media screen and (max-width: 600px) {
            table {
                border: 0;
            }

            table caption {
                font-size: 1.3em;
            }

            table thead {
                border: none;
                clip: rect(0 0 0 0);
                height: 1px;
                margin: -1px;
                overflow: hidden;
                padding: 0;
                position: absolute;
                width: 1px;
            }

            table tr {
                border-bottom: 3px solid #ddd;
                display: block;
                margin-bottom: .625em;
            }

            table td {
                border-bottom: 1px solid #ddd;
                display: block;
                font-size: .8em;
                text-align: right;
            }

            table td::before {
                content: attr(data-label);
                float: left;
                font-weight: bold;
                text-transform: uppercase;
            }

            table td:last-child {
                border-bottom: 0;
            }
        }
    </style>
</head>
<?php ?>

<body class="" style="height: 100vh;">

    <!-- <div class="py-5 text-center"><a class="btn px-5 py-3 fw-bolder bg-dark text-white"
            href="index1.php?codee=<?php echo $code; ?>">Generat
            Form</a></div>
    <div class="text-center px-3 py-2">

        <table>
            <caption class="text-center px-4 py-2 bg-info text-primary fw-bolder">Data Base</caption>
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Father Name</th>
                    <th scope="col">Phone No.</th>
                    <th scope="col">Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql2 = mysqli_query($conn, 'SELECT * from all_data');

                if ($sql2->num_rows > 0) {
                    while ($row = $sql2->fetch_assoc()) {
                        ?>
                        <tr>
                            <td data-label="Name">
                                <?php echo $row['student_name']; ?>
                            </td>
                            <td data-label="Father Name">
                                <?php echo $row['father_name']; ?>
                            </td>
                            <td data-label="Phone No.">
                                <?php echo $row['phone']; ?>
                            </td>
                            <td data-label="Edit"><a href="edit.php?code=<?php echo $row['enroll_code']; ?>"><i
                                        class="fa fa-edit" style="font-size:22px"></i></a>
                            </td>
                        </tr>

                        <?php
                    }
                } else {
                    echo "error";
                } ?>
            </tbody>
        </table>
    </div> -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Admission Form Details</h1>
                <div class="table-responsive">
                    <a href="index1.php?codee=<?php echo $code; ?>" target="_blank"><button
                            class="btn btn-success d-flex" style="float: right; margin:3px;">
                            Generate
                            Form</button></a>

                    <table id="example" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>S.no</th>
                                <th>Student Name</th>
                                <th>Father's Name</th>
                                <th>Enroll No</th>
                                <th>Mobile No</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            $sql2 = mysqli_query($conn, 'SELECT * from all_data');

                            if ($sql2->num_rows > 0) {
                                while ($row = $sql2->fetch_assoc()) {
                                    ?>
                                    <td data-label="S.no">
                                        <?php echo $i ?>
                                    </td>
                                    <td data-label="Student Name">
                                        <?php echo $row['student_name']; ?>
                                    </td>
                                    <td data-label="Father's Name">
                                        <?php echo $row["father_name"]; ?>
                                    </td>
                                    <td data-label="Enroll No">
                                        <?php echo $row["registration_no"]; ?>
                                    </td>
                                    <td data-label="Mobile No">
                                        <?php echo $row["phone"]; ?>
                                    </td>
                                    <td data-label="Edit">
                                        <a onclick="return confirm('Are you sure Do Yo Want To Edit this Record?')"
                                            href="edit.php?code=<?php echo $row['enroll_code']; ?>"><i class="fa fa-edit"
                                                style="font-size:22px"></i></a>
                                    </td>
                                    </tr>

                                    <?php $i++;
                                }

                            } else {
                                echo "error";
                            } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
    <script src='https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js'></script>
    <script src='https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js'></script>
    <script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.colVis.min.js'></script>
    <script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js'></script>
    <script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js'></script>
    <script src='https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js'></script>
    <script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js'></script>
    <script src='https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js'></script>
    <script src='https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js'></script>
    <script>
        $(document).ready(function () {
            //Only needed for the filename of export files.
            //Normally set in the title tag of your page.
            document.title = 'AFTE Admission';
            // DataTable initialisation
            $('#example').DataTable({
                "dom": '<"dt-buttons"Bf><"clear">lirtp',
                "paging": true,
                "autoWidth": true,
                "buttons": [
                    'colvis',
                    'copyHtml5',
                    'csvHtml5',
                    'excelHtml5',
                    'pdfHtml5',
                    'print'
                ]
            });
        });
    </script>
</body>

</html>