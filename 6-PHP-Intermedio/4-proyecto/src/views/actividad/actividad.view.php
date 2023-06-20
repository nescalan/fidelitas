<!DOCTYPE html>
<html lang="sp">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/img/favicon.ico" type="image/x-icon">
    <!-- Latest personalized and minified CSS Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/bootstrap_theme.css">
    <!-- Data Tables Bootstrap library -->
    <link href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <!-- CSS: Local stayles -->
    <title>Proyecto | PHP Intermedio</title>
</head>

<body>
    <header class=" ">
        <?php require_once "./src/views/menu.php" ?>
    </header>

    <main>
        <div id="mainContainer" class="container-fluid no-gutters">

            <div class="row align-items-center">
                <div class="col-12 col-sm-11 mx-auto">
                    <div class="card shadow-lg mb-3">
                        <h5 class="card-header d-flex justify-content-between align-items-center">
                            Dashboard
                        </h5>

                        <div class="card-body">

                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-3 p-1">
                                    <div class="border border-secondary rounded">
                                        <div style="height: 200px">
                                            <div class="chartjs-size-monitor">
                                                <div class="chartjs-size-monitor-expand">
                                                    <div class=""></div>
                                                </div>
                                                <div class="chartjs-size-monitor-shrink">
                                                    <div class=""></div>
                                                </div>
                                            </div>
                                            <canvas id="checkin-chart"
                                                style="display: block; width: 166px; height: 200px;" width="166"
                                                height="200" class="chartjs-render-monitor">
                                            </canvas>
                                        </div>
                                        <div class="text-center text-muted mt-1">
                                            <h4>Total: 0</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-md-3 p-1">
                                    <div class="border border-secondary rounded">
                                        <div style="height: 200px">
                                            <div class="chartjs-size-monitor">
                                                <div class="chartjs-size-monitor-expand">
                                                    <div class=""></div>
                                                </div>
                                                <div class="chartjs-size-monitor-shrink">
                                                    <div class=""></div>
                                                </div>
                                            </div>
                                            <canvas id="checkout-chart"
                                                style="display: block; width: 166px; height: 200px;" width="166"
                                                height="200" class="chartjs-render-monitor"></canvas>
                                        </div>
                                        <div class="text-center text-muted mt-1">
                                            <h4>Total: 0</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-md-3 p-1">
                                    <div class="border border-secondary rounded">
                                        <div style="height: 200px">
                                            <div class="chartjs-size-monitor">
                                                <div class="chartjs-size-monitor-expand">
                                                    <div class=""></div>
                                                </div>
                                                <div class="chartjs-size-monitor-shrink">
                                                    <div class=""></div>
                                                </div>
                                            </div>
                                            <canvas id="active-chart"
                                                style="display: block; width: 166px; height: 200px;" width="166"
                                                height="200" class="chartjs-render-monitor"></canvas>
                                        </div>
                                        <div class="text-center text-muted mt-1">
                                            <h4>Total: 0</h4>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12 col-sm-6 col-md-3 p-1">
                                    <div class="border border-secondary rounded">
                                        <div style="height: 200px">
                                            <div class="chartjs-size-monitor">
                                                <div class="chartjs-size-monitor-expand">
                                                    <div class=""></div>
                                                </div>
                                                <div class="chartjs-size-monitor-shrink">
                                                    <div class=""></div>
                                                </div>
                                            </div>
                                            <canvas id="remainvisits-chart"
                                                style="display: block; width: 166px; height: 200px;" width="166"
                                                height="200" class="chartjs-render-monitor"></canvas>
                                        </div>
                                        <div class="text-center text-muted mt-1">
                                            <h4>Disponibles: 20</h4>
                                        </div>
                                    </div>
                                </div>

                            </div> <!-- Graph row-->

                            <!-- second Graph -->
                            <div class="row mt-3">
                                <div class="col p-1">
                                    <div class="border border-secondary rounded">
                                        <!--div  style="height: 300px"-->
                                        <!-- Para verticales considerar 20px por area en > 15-->
                                        <div id="barChartContainer" style="height: 300px">
                                            <div class="chartjs-size-monitor">
                                                <div class="chartjs-size-monitor-expand">
                                                    <div class=""></div>
                                                </div>
                                                <div class="chartjs-size-monitor-shrink">
                                                    <div class=""></div>
                                                </div>
                                            </div>
                                            <canvas id="areaactive-chart"
                                                style="display: block; width: 694px; height: 300px;" width="694"
                                                height="300" class="chartjs-render-monitor"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div> <!-- card-body -->
                    </div> <!-- card -->

                </div><!-- first col -->

            </div> <!-- first row -->
        </div>

    </main>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
        </script>
</body>

</html>