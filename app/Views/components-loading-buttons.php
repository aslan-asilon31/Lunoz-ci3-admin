<?= $this->include("partials/main") ?>

<head>

    <?php echo view("partials/title-meta", array("title" => "Loading Buttons | Ladda")) ?>

    <!-- Loading button css -->
    <link href="/libs/ladda/ladda.min.css" rel="stylesheet" type="text/css" />
    <link href="/libs/ladda/ladda-themeless.min.css" rel="stylesheet" type="text/css" />

    <?= $this->include("partials/head-css") ?>
</head>

<body>

    <!-- Begin page -->
    <div class="layout-wrapper">

        <?= $this->include("partials/sidenav") ?>

        <!-- Start Page Content here -->
        <div class="page-content">

            <?= $this->include("partials/topbar") ?>

            <div class="px-3">

                <!-- Start Content-->
                <div class="container-fluid">

                    <?php echo view("partials/page-title", array("title" => "Extended UI", "subtitle" => "Loading Buttons")) ?>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Examples</h4>
                                    <p class="sub-header">
                                        Buttons with built-in loading indicators.
                                    </p>

                                    <div class="row text-center">
                                        <div class="col-sm-6 col-xl-3">
                                            <div class="p-3">
                                                <h5 class="text-muted">Expand-left</h5>
                                                <button class="ladda-button btn btn-primary" dir="ltr" data-style="expand-left">
                                                    Submit
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xl-3">
                                            <div class="p-3">
                                                <h5 class="text-muted">Expand-right</h5>
                                                <button class="ladda-button btn btn-primary" dir="ltr" data-style="expand-right">
                                                    Submit
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xl-3">
                                            <div class="p-3">
                                                <h5 class="text-muted">Expand-up</h5>
                                                <button class="ladda-button btn btn-primary" dir="ltr" data-style="expand-up">Submit
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xl-3">
                                            <div class="p-3">
                                                <h5 class="text-muted">Expand-down</h5>
                                                <button class="ladda-button btn btn-primary" dir="ltr" data-style="expand-down">
                                                    Submit
                                                </button>
                                            </div>
                                        </div>
                                    </div> <!-- end row -->

                                    <div class="row text-center">
                                        <div class="col-sm-6 col-xl-3">
                                            <div class="p-3">
                                                <h5 class="text-muted">Contract</h5>
                                                <button class="ladda-button btn btn-warning" dir="ltr" data-style="contract">Submit
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xl-3">
                                            <div class="p-3">
                                                <h5 class="text-muted">Zoom-in</h5>
                                                <button class="ladda-button btn btn-warning" dir="ltr" data-style="zoom-in">Submit
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xl-3">
                                            <div class="p-3">
                                                <h5 class="text-muted">Zoom-out</h5>
                                                <button class="ladda-button btn btn-warning" dir="ltr" data-style="zoom-out">Submit
                                                </button>
                                            </div>
                                        </div>
                                    </div> <!-- end row -->

                                    <div class="row text-center">
                                        <div class="col-sm-6 col-xl-3">
                                            <div class="p-3">
                                                <h5 class="text-muted">Slide-left</h5>
                                                <button class="ladda-button  btn btn-info" dir="ltr" data-style="slide-left">Submit
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xl-3">
                                            <div class="p-3">
                                                <h5 class="text-muted">Slide-right</h5>
                                                <button class="ladda-button btn btn-info" dir="ltr" data-style="slide-right">Submit
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xl-3">
                                            <div class="p-3">
                                                <h5 class="text-muted">Slide-up</h5>
                                                <button class="ladda-button btn btn-info" dir="ltr" data-style="slide-up">Submit
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xl-3">
                                            <div class="p-3">
                                                <h5 class="text-muted">Slide-down</h5>
                                                <button class="ladda-button btn btn-info" dir="ltr" data-style="slide-down">Submit
                                                </button>
                                            </div>
                                        </div>
                                    </div> <!-- end row -->

                                    <div class="row text-center">
                                        <div class="col-sm-6 col-xl-3">
                                            <div class="p-3">
                                                <section class="progress-demo">
                                                    <h5 class="text-muted">Expand-right</h5>
                                                    <button class="ladda-button btn btn-danger" dir="ltr" data-style="expand-right">
                                                        Submit
                                                    </button>
                                                </section>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xl-3">
                                            <div class="p-3">
                                                <section class="progress-demo">
                                                    <h5 class="text-muted">Contract</h5>
                                                    <button class="ladda-button btn btn-danger" dir="ltr" data-style="contract">
                                                        Submit
                                                    </button>
                                                </section>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xl-3">
                                            <div class="p-3">
                                                <section class="progress-demo">
                                                    <h5 class="text-muted">Demo how to use with api services</h5>
                                                    <button class="ladda-button ladda-button-demo btn btn-success" dir="ltr" data-style="zoom-in">Submit</button>
                                                </section>
                                            </div>
                                        </div>
                                    </div> <!-- end row -->
                                </div>
                            </div> <!-- end card -->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row-->

                </div> <!-- container -->

            </div> <!-- content -->

            <?= $this->include("partials/footer") ?>

        </div>
        <!-- End Page content -->


    </div>
    <!-- END wrapper -->

    <?= $this->include("partials/footer-scripts") ?>

    <!-- Loading buttons js -->
    <script src="/libs/ladda/spin.min.js"></script>
    <script src="/libs/ladda/ladda.min.js"></script>

    <!-- Buttons Demo js-->
    <script src="/js/pages/loading-btn.js"></script>


</body>

</html>