<?php
// Check if he is connected
session_start();
require ('../inc/func.php');
require ('../inc/pdo.php');
// Check if he got a rank admin!

// Set PHP here
$title = 'Dashboard';



include ('inc/header_b.php');
?>

            <!-- Main dashboard content-->
            <div class="container-xl p-5">
                <div class="row justify-content-between align-items-center mb-5">
                    <div class="col flex-shrink-0 mb-5 mb-md-0">
                        <h1 class="display-4 mb-0">Dashboard</h1>
                        <div class="text-muted">Statistique</div>
                    </div>
                </div>
                <!-- Colored status cards-->
                <div class="row gx-5">
                    <div class="col-xxl-3 col-md-6 mb-5">
                        <div class="card card-raised border-start border-primary border-4">
                            <div class="card-body px-4">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <div class="me-2">
                                        <div class="display-5">101.1K</div>
                                        <div class="card-text">Downloads</div>
                                    </div>
                                    <div class="icon-circle bg-primary text-white"><i class="material-icons">download</i></div>
                                </div>
                                <div class="card-text">
                                    <div class="d-inline-flex align-items-center">
                                        <i class="material-icons icon-xs text-success">arrow_upward</i>
                                        <div class="caption text-success fw-500 me-2">3%</div>
                                        <div class="caption">from last month</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6 mb-5">
                        <div class="card card-raised border-start border-warning border-4">
                            <div class="card-body px-4">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <div class="me-2">
                                        <div class="display-5">12.2K</div>
                                        <div class="card-text">Purchases</div>
                                    </div>
                                    <div class="icon-circle bg-warning text-white"><i class="material-icons">storefront</i></div>
                                </div>
                                <div class="card-text">
                                    <div class="d-inline-flex align-items-center">
                                        <i class="material-icons icon-xs text-success">arrow_upward</i>
                                        <div class="caption text-success fw-500 me-2">3%</div>
                                        <div class="caption">from last month</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6 mb-5">
                        <div class="card card-raised border-start border-warning border-4">
                            <div class="card-body px-4">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <div class="me-2">
                                        <div class="display-5">12.2K</div>
                                        <div class="card-text">Purchases</div>
                                    </div>
                                    <div class="icon-circle bg-warning text-white"><i class="material-icons">storefront</i></div>
                                </div>
                                <div class="card-text">
                                    <div class="d-inline-flex align-items-center">
                                        <i class="material-icons icon-xs text-success">arrow_upward</i>
                                        <div class="caption text-success fw-500 me-2">3%</div>
                                        <div class="caption">from last month</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6 mb-5">
                        <div class="card card-raised border-start border-warning border-4">
                            <div class="card-body px-4">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <div class="me-2">
                                        <div class="display-5">12.2K</div>
                                        <div class="card-text">Purchases</div>
                                    </div>
                                    <div class="icon-circle bg-warning text-white"><i class="material-icons">storefront</i></div>
                                </div>
                                <div class="card-text">
                                    <div class="d-inline-flex align-items-center">
                                        <i class="material-icons icon-xs text-success">arrow_upward</i>
                                        <div class="caption text-success fw-500 me-2">3%</div>
                                        <div class="caption">from last month</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




<?php
include ('inc/footer_b.php');
