<!DOCTYPE html>
<html lang="en">

<head>
    <?php include __DIR__ . '/main_header_includes.php'; ?>
    <style>
        .hide {
            display: none;
        }

        .button1 {
            float: right;
            width: 100px !important;
            height: 40px !important;
        }

        .people_sr_no {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #04AA6D;
            color: white;
        }

        #people {
            margin: auto;
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 50%;
            font-size: 17px;
            font-weight: 500;
            border: 1px solid #ddd;
            text-align: center;
        }

        #people td {
            /* border: 1px solid #ddd; */
            padding: 8px;
        }

        #people tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #people tr:nth-child(odd) {
            background-color: #70b4ca;
        }
    </style>
</head>

<body>

    <div class="page-content pt-0" style="font-family:'Roboto';">

        <div class="content-wrapper">

            <div class="content">

                <h1 style="font-weight:700; text-align:center;">People Data<br></h1>
                <br>
                <div class="card" style="width: 90%;margin-left: 65px;border-top-right-radius: 15px;border-top-left-radius: 15px;">

                    <div class="card-header bg-dark header-elements-inline" style="border-top-right-radius: 15px;border-top-left-radius: 15px;">
                        <h5 class="card-title"><b>People Data</b> </h5>
                    </div>
                    <div class="card-body">

                        <?php
                        $i = 1; ?>
                        <span id='count'>1</span>
                        <table id="people">
                            <?php
                            $total_count =  count($jsonData); ?>
                            <input type="hidden" id="total_count" value="<?php echo $total_count; ?>">
                            <?php
                            foreach ($jsonData as $key => $value) {
                                $a = $i++;
                                // if ($total_count == $a) {
                                //     echo '<script>alert("Welcome to Geeks for Geeks")</script>';
                                // }
                            ?>
                                <tr class='hide' id='list-no-<?= $a ?>'>
                                    <td class="people_sr_no" rowspan="2" width="20%"><?php echo $a; ?></td>
                                    <td> Name : <?php echo $value['name']; ?></td>
                                </tr>
                                <tr class='hide' id='list-no-tr-<?= $a ?>'>
                                    <td width="20%"></td>
                                    <td>Location : <?php echo $value['location']; ?></td>
                                </tr>
                            <?php

                            }
                            ?>
                        </table>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <button class="btn btn-warning btn-block button1 downButton" onclick="js:clickDown()">Next
                                    Person</button>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include __DIR__ . '/main_footer_includes.php.php'; ?>
    <script>
        $(document).ready(function() {
            $("#count").hide();
            $("#list-no-1").show();
            $("#list-no-tr-1").show();
        })

        function clickDown() {
            var count = parseInt($("#count").html()) + 1;
            console.log(count);
            var total_count = $('#total_count').val();
            console.log(total_count);
            $('#list-no-' + count).show();
            $('#list-no-tr-' + count).show();
            $("#count").html(count);
            if (count > total_count) {
                alert("No more people!");
            }
        }
    </script>
</body>

</html>