<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SI - Monitoring Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/shop-homepage.css" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">SI - Monitoring Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-2">

                <h2 class="my-4">Menu</h2>
                <div class="list-group">
                    <a href="#" class="list-group-item active">Info</a>
                    <a href="#" class="list-group-item">Health</a>
                    <a href="#" class="list-group-item">xyz</a>
                </div>

            </div>
            <!-- /.col-lg-3 -->

            <div class="col-lg-10">

                <p></p>
                <p></p>

                <h2 class="my-4">SI Microservices</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Commit-id</th>
                            <th scope="col">Commit-time</th>
                            <th scope="col">Branch</th>
                            <th scope="col">Tags</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                      
                        $arr = array();
                        $arr['provision-api'] = 'https://provision-api.dnext-vfes.com/api/provision/actuator/info';
                        $arr['shopping cart checkout'] = 'https://shoppingcartcheckout-api.dnext-vfes.com/api/shoppingcart-checkout/actuator/info';
					  $arr['si-authorization'] = 'https://si-authorization.dnext-vfes.com/api/si-authorization/actuator/info';
					  $arr['ui-backend'] = 'https://ui-backend.dnext-vfes.com/api/ui-backend/actuator/info';
					  $arr['si-user-token'] = 'https://si-user-token.dnext-vfes.com/api/si-user-token/actuator/info';
					   $arr['biztalk-tmf-api'] = 'https://biztalk-tmf-api.dnext-vfes.com/api/biztalk-tmf-api/actuator/info';
					   						    $arr['dsales-be'] = 'https://dsales-be.dnext-vfes.com/api/order-create-service/actuator/info';
														  $arr['payment-methods-api'] = 'https://payment-methods-api.dnext-vfes.com/api/paymentMethods/v1/actuator/info';
					  

                        $url = "";
                        $i = 1;
                        foreach ($arr as $key => $value) {
                            $url = $value;

                            $json = @file_get_contents($url);
                            if ($json === FALSE) {   
                        ?>
 
                                <tr class="table-danger">
                                    <th scope="row"><?php echo $i ?></th>
                                    <td><a href="<?php echo $value ?>"> <?php echo $key ?> </a> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                </tr>
                            <?php
                            } else {
								//echo json_encode($json);
                                $json = @json_decode($json);

                            ?>
                                <tr class="table-success">
                                    <th scope="row"><?php echo $i ?></th>
                                    <td><a href="<?php echo $value ?>"> <?php echo $key ?> </a> </td>
                                        <td><?php echo $json->git->commit->id; ?> </td>
                                        <td><?php echo $json->git->commit->time; ?> </td>
                                        <td><?php echo $json->git->branch; ?> </td>
                                        <td> </td>
                                </tr>
                        <?php
                            }
                            $i = $i + 1;
                        }
                        ?>
                    </tbody>
                </table>

 <h2 class="my-4">UI Applications</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //echo json_encode($json);
                        $arr = array();
                        $arr['Selfcare UI'] = 'https://selfcare-ui.dnext-vfes.com/'; 


                        $url = "";
                        $i = 1;
                        foreach ($arr as $key => $value) {
                            $url = $value;

                            $json = @file_get_contents($url);
                            if ($json === FALSE) {
                        ?>

                                <tr class="table-danger">
                                    <th scope="row"><?php echo $i ?></th>
                                    <td><a href="<?php echo $value ?>"> <?php echo $key ?> </a> </td>
                                </tr>
                            <?php
                            } else {
                                $json = @json_decode($json);

                            ?>
                                <tr class="table-success">
                                    <th scope="row"><?php echo $i ?></th>
                                    <td><a href="<?php echo $value ?>"> <?php echo $key ?> </a> </td>
                                </tr>
                        <?php
                            }
                            $i = $i + 1;
                        }
                        ?>
                    </tbody>
                </table>



                <h2 class="my-4">R&D Microservices</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //echo json_encode($json);
						$arr = array();
						$arr['Account Management'] = 'https://dacm-api.dnext-vfes.com/api/accountManagement/v4/actuator/info';
						$arr['aggregate-api'] =  'https://aggregate-api.dnext-vfes.com/api/aggregate/v1/actuator/info';
						$arr['Agreement Management'] = 'https://dagm-api.dnext-vfes.com/api/agreementManagement/v4/actuator/info';
						$arr['backoffice-api'] = 'https://backoffice-api.dnext-vfes.com/api/backofficeTaskManagement/v4/actuator/info';
						$arr['Customer Management'] = 'https://dcm-api.dnext-vfes.com/api/customerManagement/v4/actuator/info';
						$arr['Document Management'] = 'https://ddms-api.dnext-vfes.com/api/documentManagement/v4/actuator/info';
						$arr['Geographic Address  Management'] = 'https://dgeo-api.dnext-vfes.com/api/geographicAddressManagement/v4/actuator/info';
						$arr['Partnership Management'] = 'https://dpm-api.dnext-vfes.com/api/partnershipManagement/v4/actuator/info';
						$arr['Party Management'] = 'https://dpam-api.dnext-vfes.com/api/partyManagement/v4/actuator/info';
						$arr['Party Role Management'] = 'https://dpr-api.dnext-vfes.com/api/partyRoleManagement/v4/actuator/info';
						$arr['payment-methods-api'] = 'https://payment-methods-api.dnext-vfes.com/api/paymentMethods/v1/actuator/info';
						$arr['Product Catalog'] = 'https://dpim-api.dnext-vfes.com/api/productInventoryManagement/v4/actuator/info';
						$arr['Product Inventory Management'] = 'https://dpim-api.dnext-vfes.com/api/productInventoryManagement/v4/actuator/info'; 
						$arr['Product Ordering Management'] = 'https://dpom-api.dnext-vfes.com/api/productOrderingManagement/v4/actuator/info';
						$arr['Reference Management'] = 'https://reference-management.dnext-vfes.com/api/referenceManagement/v4/actuator/info';
						$arr['Resource Inventory Management'] = 'https://dri-api.dnext-vfes.com/api/resourceInventoryManagement/v4/actuator/info'; 
						$arr['Resource Catalog Management'] = 'https://drc-api.dnext-vfes.com/api/resourceCatalogManagement/v4/actuator/info';
						$arr['Resource Ordering Management'] = 'https://dro-api.dnext-vfes.com/api/resourceOrderingManagement/v4/actuator/info';
						$arr['Resource Order Fulfillment'] = 'https://drof-api.dnext-vfes.com/api/resourceOrderFulfillment/v4/actuator/info';
						$arr['S3'] = 'https://s3-api.dnext-vfes.com/api/storageService/v4/actuator/info';
						$arr['Service Catalog Management'] = 'https://dsc-api.dnext-vfes.com/api/serviceCatalogManagement/v4/actuator/info';
						$arr['Service Ordering Management'] = 'https://dso-api.dnext-vfes.com/api/serviceOrderingManagement/v4/actuator/info';
						$arr['Service Inventory Management'] = 'https://dsi-api.dnext-vfes.com/api/serviceInventoryManagement/v4/actuator/info';
						$arr['Service Ordering Fulfillment'] = 'https://dsof-api.dnext-vfes.com/api/serviceOrderFulfillment/v4/actuator/info';

                        $url = "";
                        $i = 1;
                        foreach ($arr as $key => $value) {
                            $url = $value;

                            $json = @file_get_contents($url);
                            if ($json === FALSE) {
                        ?>

                                <tr class="table-danger">
                                    <th scope="row"><?php echo $i ?></th>
                                    <td><a href="<?php echo $value ?>"> <?php echo $key ?> </a> </td>
                                </tr>
                            <?php
                            } else {
                                $json = @json_decode($json);

                            ?>
                                <tr class="table-success">
                                    <th scope="row"><?php echo $i ?></th>
                                    <td><a href="<?php echo $value ?>"> <?php echo $key ?> </a> </td>
                                </tr>
                        <?php
                            }
                            $i = $i + 1;
                        }
                        ?>
                    </tbody>
                </table>

            </div>
            <!-- /.col-lg-9 -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Pia Team 2022</p>
        </div>
        <!-- /.container -->
    </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>