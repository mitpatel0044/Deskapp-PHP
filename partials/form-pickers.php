<?php
include "../partials/_dbconnect.php";
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: ../main/index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../assests/vendors/images/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="../assests/vendors/images/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../assests/vendors/images/favicon-16x16.png" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../assests/vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css" href="../assests/vendors/styles/icon-font.min.css" />
    <link rel="stylesheet" type="text/css" href="../assests/vendors/styles/style.css" />

</head>

<body>

    <?php include '../partials/_navbar.php' ?>

    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="pd-20 card-box mb-30">
                    <div class="clearfix mb-20">
                        <div class="pull-left">
                            <h4 class="text-blue h4">Date Picker</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <form>
                                <div class="form-group">
                                    <label>Default Datedpicker</label>
                                    <input class="form-control month-picker" placeholder="Select Date" type="text" />
                                </div>
                                <div class="form-group">
                                    <label>Date and time</label>
                                    <input class="form-control datetimepicker" placeholder="Choose Date anf time"
                                        type="text" />
                                </div>
                            </form>
                        </div>
                        <div class="col-md-4 col-sm-12 text-center">
                            <div class="mb-20">
                                <label>Datedpicker Inline</label>
                                <div class="datepicker-here" data-timepicker="true" data-language="en"></div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <form>
                                <div class="form-group">
                                    <label>Datedpicker Month View</label>
                                    <input class="form-control month-picker" placeholder="Select Month" type="text" />
                                </div>
                                <div class="form-group">
                                    <label>Datedpicker Range View</label>
                                    <input class="form-control datetimepicker-range" placeholder="Select Month"
                                        type="text" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="pd-20 card-box mb-30">
                    <div class="clearfix mb-20">
                        <div class="pull-left">
                            <h4 class="text-blue h4">Clock Picker</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>time Delive</label>
                                <input class="form-control time-picker-default" placeholder="time" type="text" />
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>Train departure</label>
                                <input class="form-control time-picker-default" placeholder="time" type="text" />
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>Alarm Clock</label>
                                <input class="form-control time-picker" placeholder="time" type="text" />
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>Text field</label>
                                <input class="form-control time-picker-default" placeholder="time" type="text" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pd-20 card-box height-100-p mb-30">
                    <div class="clearfix mb-30">
                        <div class="pull-left">
                            <h4 class="text-blue h4">Color Picker</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label>
                                    Simple mode
                                    <div class="font-14">
                                        use <code>.colorpicker</code> in your input element.
                                    </div>
                                </label>
                                <input type="text" class="colorpicker form-control" value="#7ab2fa" />
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label>
                                    Simple mode
                                    <div class="font-14">
                                        use <code>.complex-colorpicker</code> in your input
                                        element.
                                    </div>
                                </label>
                                <input type="text" class="complex-colorpicker form-control" value="#7ab2fa" />
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label>
                                    Simple mode
                                    <div class="font-14">
                                        use <code>.gradient-colorpicker</code> in your input
                                        element.
                                    </div>
                                </label>
                                <input type="text" class="gradient-colorpicker form-control" value="#f56767" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- js -->
    <script src="../assests/vendors/scripts/core.js"></script>
    <script src="../assests/vendors/scripts/script.min.js"></script>
    <script src="../assests/vendors/scripts/process.js"></script>
    <script src="../assests/vendors/scripts/layout-settings.js"></script>
    <script src="../assests/src/plugins/jquery-asColor/dist/jquery-asColor.js"></script>
    <script src="../assests/src/plugins/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <script src="../assests/src/plugins/jquery-asColorPicker/jquery-asColorPicker.js"></script>
    <script src="../assests/vendors/scripts/colorpicker.js"></script>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>