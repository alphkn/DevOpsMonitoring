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

               <!--   <h2 class="my-4">SI Microservices</h2>
                <h3 class="my-4">DEV</h3>-->
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
							<th scope="col">Version</th>
                            <th scope="col">Commit-id</th>
                            <th scope="col">Commit-time</th>
                            <th scope="col">Branch</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $arrD = [];
                        $arrD["provision-api"] =
                            "https://provision-api.dev.energia.gitops.vodafone.com/api/provision/actuator/info";
                        $arrD["shopping cart checkout"] =
                            "https://shoppingcartcheckout-api.dev.energia.gitops.vodafone.com/api/shoppingcart-checkout/actuator/info";
                        $arrD["si-authorization"] =
                            "https://si-authorization-api.dev.energia.gitops.vodafone.com/api/si-authorization/actuator/info";
                        $arrD["ui-backend"] =
                            "https://ui-backend-api.dev.energia.gitops.vodafone.com/api/ui-backend/actuator/info";
                        $arrD["si-user-token"] =
                            "https://si-user-token-api.dev.energia.gitops.vodafone.com/api/si-user-token/actuator/info";
                        $arrD["biztalk-tmf-api"] =
                            "https://biztalk-tmf-api.dev.energia.gitops.vodafone.com/api/biztalk-tmf-api/actuator/info";
                        $arrD["order-create-service"] =
                            "https://order-create-service-api.dev.energia.gitops.vodafone.com/api/order-create-service/actuator/info";
                        $arrD["payment-methods-api"] =
                            "https://payment-methods-api.dev.energia.gitops.vodafone.com/api/paymentMethods/v1/actuator/info";
                        $arrD["si-bpmn"] =
                            "https://si-bpmn-api.dev.energia.gitops.vodafone.com/api/si-bpmn/actuator/info";
                        $arrD["northbound"] =
                            "https://northbound-api.dev.energia.gitops.vodafone.com/api/northbound/actuator/info";
                            
                        $url = "";
                        $i = 1;
                        foreach ($arrD as $key => $value) {
                            $url = $value;

                            $json = @file_get_contents($url);
                            if ($json === false) { ?>
 
                                <tr class="table-danger">
                                    <th scope="row"><?php echo $i; ?></th>
                                    <td><a href="<?php echo $value; ?>"> <?php echo $key; ?> </a> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td> 
                                </tr>
                            <?php } else {//echo json_encode($json);
                                $json = @json_decode($json); ?>
                                <tr class="table-success">
                                    <th scope="row"><?php echo $i; ?></th>
                                    <td><a href="<?php echo $value; ?>"> <?php echo $key; ?> </a> </td>
										<td><?php echo $json->build->version; ?> </td>
                                        <td><?php echo $json->git->commit
                                            ->id; ?> </td>
                                        <td><?php echo $json->git->commit
                                            ->time; ?> </td>
                                        <td><?php echo $json->git
                                            ->branch; ?> </td> 
                                </tr>
                        <?php }
                            $i = $i + 1;
                        }
                        ?>
                    </tbody>
                </table>
                <h3 class="my-4">PPRD</h3>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
							<th scope="col">Version</th>
                            <th scope="col">Commit-id</th>
                            <th scope="col">Commit-time</th>
                            <th scope="col">Branch</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $arrP = [];
                        $arrP["provision-api"] =
                            "https://provision-api.pprd.pre-prod-energia.vodafone.es/api/provision/actuator/info";
                        $arrP["shopping cart checkout"] =
                            "https://shoppingcart-checkout-api.pprd.pre-prod-energia.vodafone.es/api/shoppingcart-checkout/actuator/info";
                        $arrP["si-authorization"] =
                            "https://si-authorization-api.pprd.pre-prod-energia.vodafone.es/api/si-authorization/actuator/info";
                        $arrP["ui-backend"] =
                            "https://ui-backend-api.pprd.pre-prod-energia.vodafone.es/api/ui-backend/actuator/info";
                        $arrP["si-user-token"] =
                            "https://si-user-token-api.pprd.pre-prod-energia.vodafone.es/api/si-user-token/actuator/info";
                        $arrP["biztalk-tmf-api"] =
                            "https://biztalk-tmf-api.pprd.pre-prod-energia.vodafone.es/api/biztalk-tmf-api/actuator/info";
                        $arrP["order-create-service"] =
                            "https://order-create-service-api.pprd.pre-prod-energia.vodafone.es/api/order-create-service/actuator/info";
                        $arrP["payment-methods-api"] =
                            "https://payment-methods-api.pprd.pre-prod-energia.vodafone.es/api/paymentMethods/v1/actuator/info";
                        $arrP["si-bpmn"] =
                            "https://si-bpmn-api.pprd.pre-prod-energia.vodafone.es/api/si-bpmn/actuator/info";
                        $arrP["northbound"] =
                            "https://northbound-api.pprd.pre-prod-energia.vodafone.es/api/northbound/actuator/info";
                        $url = "";
                        $i = 1;
                        foreach ($arrP as $key => $value) {
                            $url = $value;
                            $urlD = $arrD[$key];

                            $json = @file_get_contents($url);
                            $jsonD = @file_get_contents($urlD);
                            if ($json === false) { ?>
 
                                <tr class="table-danger">
                                    <th scope="row"><?php echo $i; ?></th>
                                    <td><a href="<?php echo $value; ?>"> <?php echo $key; ?> </a> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                </tr>
                            <?php } else if ($jsonD===false) { ?> 
                                <tr class="table-warning">
                                    <th scope="row"><?php echo $i; ?></th>
                                    <td><a href="<?php echo $value; ?>"> <?php echo $key; ?> </a> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                </tr>
                            <?php

                            } else {//echo json_encode($json);
                                $json = @json_decode($json); 
                                $jsonD = @json_decode($jsonD);
                                ?>
                                 <?php
                                    $versions = explode("-",$json->build->version );
                                    $versions2 = explode("-",$jsonD->build->version );
                                    if($versions[0] != $versions2[0])	{
                                        ?>   
                                <tr class="table-warning">
                                <?php
                                  } else	{
                                        ?>  
                                         <tr class="table-success">
                                        <?php
                                   } 
                                    
                                    ?>
                                    <th scope="row"><?php echo $i; ?></th>
                                    <td><a href="<?php echo $value; ?>"> <?php echo $key; ?> </a> </td>
                                   
                                         <td> <?php echo $json->build->version; ?> </td>
                                        <td><?php echo $json->git->commit
                                            ->id; ?> </td>
                                        <td><?php echo $json->git->commit
                                            ->time; ?> </td>
                                        <td><?php echo $json->git
                                            ->branch; ?> </td> 
                                </tr>
                        <?php }
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
                            <th scope="col">Version</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //echo json_encode($json);
                        $arr = [];
                        $arr["Selfcare UI DEV"] =
                            "https://selfcare-ui.dev.energia.gitops.vodafone.com/assets/version.json";
                        $arr["Selfcare UI PPRD"] =
                        "https://selfcare-ui.pprd.pre-prod-energia.vodafone.es/assets/version.json";
                        $arr["Backoffice DEV"] =
                        "https://backoffice-ui.dev.energia.gitops.vodafone.com/assets/version.json";
                        $arr["Backoffice PPRD"] =
                        "https://backoffice-ui.pprd.pre-prod-energia.vodafone.es/assets/version.json";
                        $url = "";
                        $i = 0;
                        foreach ($arr as $key => $value) {
                            $url = $value;

                            $json = @file_get_contents($url);
                            if ($json === false) { ?>

                                <tr class="table-danger">
                                    <th scope="row"><?php echo $i; ?></th>
                                    <td><a href="<?php echo $value; ?>"> <?php echo $key; ?> </a> </td>
                                    <td></td>
                                </tr>
                            <?php } else {
                                $json = @json_decode($json); 
                                
                                ?>
                                 <?php
                                 if($i%2==0){
                                    $versions = explode("-",$json->version );
                                }else{
                                    $versions2 = explode("-",$json->version ); 
                                } 
                                    if(($i%2==1 && $i!=0) && ($versions[0] != $versions2[0]))	{
                                        ?>   
                                <tr class="table-warning">
                                <?php
                                  } else	{
                                        ?>  
                                         <tr class="table-success">
                                        <?php
                                   } 
                                    
                                    ?>
                               
                                    <th scope="row"><?php echo $i; ?></th>
                                    <td><a href="<?php echo $value; ?>"> <?php echo $key; ?> </a> </td>
                                    <td><?php echo $json->version; ?> </td>
                                </tr>
                        <?php }
                            $i = $i + 1;
                        }
                        ?>
                    </tbody>
                </table>
<h2 class="my-4">R&D Microservices DEV</h2>
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
						$arr['Account Management'] = 'https://dacm-api.dev.energia.gitops.vodafone.com/api/accountManagement/v4/actuator/info';
						$arr['aggregate-api'] =  'https://aggregate-api.dev.energia.gitops.vodafone.com/api/aggregate/v1/actuator/info';
						$arr['Agreement Management'] = 'https://dagm-api.dev.energia.gitops.vodafone.com/api/agreementManagement/v4/actuator/info';
						$arr['backoffice-api'] = 'https://backoffice-api.dev.energia.gitops.vodafone.com/api/backofficeTaskManagement/v4/actuator/info';
						$arr['Customer Management'] = 'https://dcm-api.dev.energia.gitops.vodafone.com/api/customerManagement/v4/actuator/info';
						$arr['Document Management'] = 'https://ddms-api.dev.energia.gitops.vodafone.com/api/documentManagement/v4/actuator/info';
						$arr['Geographic Address  Management'] = 'https://dgeo-api.dev.energia.gitops.vodafone.com/api/geographicAddressManagement/v4/actuator/info';
						$arr['Partnership Management'] = 'https://dpm-api.dev.energia.gitops.vodafone.com/api/partnershipManagement/v4/actuator/info';
						$arr['Party Management'] = 'https://dpam-api.dev.energia.gitops.vodafone.com/api/partyManagement/v4/actuator/info';
						$arr['Party Role Management'] = 'https://dpr-api.dev.energia.gitops.vodafone.com/api/partyRoleManagement/v4/actuator/info';
						$arr['Product Catalog'] = 'https://dpc-api.dev.energia.gitops.vodafone.com/api/productCatalogManagement/v4/actuator/info';
						$arr['Product Inventory Management'] = 'https://dpim-api.dev.energia.gitops.vodafone.com/api/productInventoryManagement/v4/actuator/info'; 
						$arr['Product Ordering Management'] = 'https://dpom-api.dev.energia.gitops.vodafone.com/api/productOrderingManagement/v4/actuator/info';
						$arr['Reference Management'] = 'https://reference-management-api.dev.energia.gitops.vodafone.com/api/referenceManagement/v4/actuator/info';
						$arr['Resource Inventory Management'] = 'https://dri-api.dev.energia.gitops.vodafone.com/api/resourceInventoryManagement/v4/actuator/info'; 
						$arr['Resource Catalog Management'] = 'https://drc-api.dev.energia.gitops.vodafone.com/api/resourceCatalogManagement/v4/actuator/info';
						$arr['Resource Ordering Management'] = 'https://dro-api.dev.energia.gitops.vodafone.com/api/resourceOrderingManagement/v4/actuator/info';
						$arr['Resource Order Fulfillment'] = 'https://drof-api.dev.energia.gitops.vodafone.com/api/resourceOrderFulfillment/v4/actuator/info';
						$arr['S3'] = 'https://s3-api.dev.energia.gitops.vodafone.com/api/storageService/v4/actuator/info';
						$arr['Service Catalog Management'] = 'https://dsc-api.dev.energia.gitops.vodafone.com/api/serviceCatalogManagement/v4/actuator/info';
						$arr['Service Ordering Management'] = 'https://dso-api.dev.energia.gitops.vodafone.com/api/serviceOrderingManagement/v4/actuator/info';
						$arr['Service Inventory Management'] = 'https://dsi-api.dev.energia.gitops.vodafone.com/api/serviceInventoryManagement/v4/actuator/info';
						$arr['Service Ordering Fulfillment'] = 'https://dsof-api.dev.energia.gitops.vodafone.com/api/serviceOrderFulfillment/v4/actuator/info';

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


                <h2 class="my-4">R&D Microservices PPRD</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th> 
                            <th scope="col">Version</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //echo json_encode($json);
                        $arr = [];
                        $arr["Account Management"] =
                            "https://dacm-api.pprd.pre-prod-energia.vodafone.es/api/accountManagement/v4/actuator/info";
                        $arr["aggregate-api"] =
                            "https://aggregate-api.pprd.pre-prod-energia.vodafone.es/api/aggregate/v1/actuator/info";
                        $arr["Agreement Management"] =
                            "https://dagm-api.pprd.pre-prod-energia.vodafone.es/api/agreementManagement/v4/actuator/info";
                        $arr["backoffice-api"] =
                            "https://backoffice-api.pprd.pre-prod-energia.vodafone.es/api/backofficeTaskManagement/v4/actuator/info";
                        $arr["Customer Management"] =
                            "https://dcm-api.pprd.pre-prod-energia.vodafone.es/api/customerManagement/v4/actuator/info";
                        $arr["Document Management"] =
                            "https://ddms-api.pprd.pre-prod-energia.vodafone.es/api/documentManagement/v4/actuator/info";
                        $arr["Geographic Address  Management"] =
                            "https://dgeo-api.pprd.pre-prod-energia.vodafone.es/api/geographicAddressManagement/v4/actuator/info";
                        $arr["Partnership Management"] =
                            "https://dpm-api.pprd.pre-prod-energia.vodafone.es/api/partnershipManagement/v4/actuator/info";
                        $arr["Party Management"] =
                            "https://dpam-api.pprd.pre-prod-energia.vodafone.es/api/partyManagement/v4/actuator/info";
                        $arr["Party Role Management"] =
                            "https://dpr-api.pprd.pre-prod-energia.vodafone.es/api/partyRoleManagement/v4/actuator/info";
                        $arr["Product Catalog"] =
                            "https://dpc-api.pprd.pre-prod-energia.vodafone.es/api/productCatalogManagement/v4/actuator/info";
                        $arr["Product Inventory Management"] =
                            "https://dpim-api.pprd.pre-prod-energia.vodafone.es/api/productInventoryManagement/v4/actuator/info";
                        $arr["Product Ordering Management"] =
                            "https://dpom-api.pprd.pre-prod-energia.vodafone.es/api/productOrderingManagement/v4/actuator/info";
                        $arr["Reference Management"] =
                            "https://reference-management-api.pprd.pre-prod-energia.vodafone.es/api/referenceManagement/v4/actuator/info";
                        $arr["Resource Inventory Management"] =
                            "https://dri-api.pprd.pre-prod-energia.vodafone.es/api/resourceInventoryManagement/v4/actuator/info";
                        $arr["Resource Catalog Management"] =
                            "https://drc-api.pprd.pre-prod-energia.vodafone.es/api/resourceCatalogManagement/v4/actuator/info";
                        $arr["Resource Ordering Management"] =
                            "https://dro-api.pprd.pre-prod-energia.vodafone.es/api/resourceOrderingManagement/v4/actuator/info";
                        $arr["Resource Order Fulfillment"] =
                            "https://drof-api.pprd.pre-prod-energia.vodafone.es/api/resourceOrderFulfillment/v4/actuator/info";
                        $arr["S3"] =
                            "https://s3-api.pprd.pre-prod-energia.vodafone.es/api/storageService/v4/actuator/info";
                        $arr["Service Catalog Management"] =
                            "https://dsc-api.pprd.pre-prod-energia.vodafone.es/api/serviceCatalogManagement/v4/actuator/info";
                        $arr["Service Ordering Management"] =
                            "https://dso-api.pprd.pre-prod-energia.vodafone.es/api/serviceOrderingManagement/v4/actuator/info";
                        $arr["Service Inventory Management"] =
                            "https://dsi-api.pprd.pre-prod-energia.vodafone.es/api/serviceInventoryManagement/v4/actuator/info";
                        $arr["Service Ordering Fulfillment"] =
                            "https://dsof-api.pprd.pre-prod-energia.vodafone.es/api/serviceOrderFulfillment/v4/actuator/info";

                        $url = "";
                        $i = 1;
                        foreach ($arr as $key => $value) {
                            $url = $value;

                            $json = @file_get_contents($url);
                            if ($json === false) { ?>

                                <tr class="table-danger">
                                    <th scope="row"><?php echo $i; ?></th>
                                    <td><a href="<?php echo $value; ?>"> <?php echo $key; ?> </a> </td>
                                    <td> </td>
                                </tr>
                            <?php } else {
                                $json = @json_decode($json); ?>
                                <tr class="table-success">
                                    <th scope="row"><?php echo $i; ?></th>
                                    <td><a href="<?php echo $value; ?>"> <?php echo $key; ?> </a> </td>
                                    <!-- <td> <?php echo $json->build->version; ?> </td> -->
                                    <td> </td>
                                </tr>
                        <?php }
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