<?php ob_start();
session_start(); ?>
<?php require('./layouts/header.php'); ?>
<?php require('./layouts/nav.php'); ?>

<br>

<div class="container imgcontainer tktsmain">
    <div id="dnn_ContentPane" class="info_side2 w-100">
        <div class="DnnModule DnnModule-VGSB2CNMECCatalogViewer DnnModule-393"><a name="393"></a>
            <div class="DNNContainer_noTitle">
                <div id="dnn_ctr393_ContentPane">
                    <!-- Start_Module_393 -->
                    <div id="dnn_ctr393_ModuleContent" class="DNNModuleContent ModVGSB2CNMECCatalogViewerC">
                        <h2 class="my-4 text-center">Book Your Ticket(s) </h2>
                        <section id="tabs" data-tabid="33" data-moduleid="393" data-tabmoduleid="85">
                            <div class="container pl-0">
                                <div class="row pl-0">
                                    <div class="col-12">
                                        <div class="tab-content py-3 px-3 px-sm-0" id="nav-profile">
                                            <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-home-tab">
                                                <div class="row pl-0">
                                                    <div class="col-12">
                                                        <nav class="w-100">
                                                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                                                <a class="nav-item nav-link active" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Tickets</a>
                                                                <a class="nav-item nav-link disabled" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact details</a>
                                                                <a class="nav-item nav-link disabled" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">Payment</a>
                                                            </div>
                                                        </nav>

                                                        <div class="tab-content py-3 " id="nav-tabContent">
                                                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                                <h4>Select your visit date:</h4>
                                                                <input id="date" type="date" required="required" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <h4>Nationality:</h4>
                                                <div class="btn-group btn-group-toggle my-2" data-toggle="buttons">

                                                    <label id="egyption" class="btn text-nowrap btn-nat rounded-0  active">
                                                        <input type="radio" value="egyption" class="MainLevelNav" name="MainLevelTabOptions" id="MainLevelNav_CF452C5A-2F84-EF68-30C6-0175D74DD037" autocomplete="off" checked />
                                                        Egyptian
                                                    </label>

                                                    <label id="arab" class="btn text-nowrap btn-nat rounded-0 ">
                                                        <input type="radio" value="arab" class="MainLevelNav" name="MainLevelTabOptions" id="MainLevelNav_37243175-6EE0-60D5-4620-01786A270483" autocomplete="off" />
                                                        Arab
                                                    </label>

                                                    <label id="other" class="btn text-nowrap btn-nat rounded-0 ">
                                                        <input type="radio" value="other" class="MainLevelNav" name="MainLevelTabOptions" id="MainLevelNav_CFC010B4-052B-558A-311F-0175D74E16CB" autocomplete="off" />
                                                        Other Nationalities
                                                    </label>

                                                </div>

                                                <!-- chick if radio in checked and display one of these -->

                                                <script>
                                                    document.getElementById("egyption").addEventListener("click", handelEgyption);

                                                    function handelEgyption() {
                                                        console.log("handel egyption run")

                                                        var element = document.getElementById("MainLevelOptions_CF452C5A-2F84-EF68-30C6-0175D74DD037");
                                                        element.classList.remove("d-none");
                                                        var element2 = document.getElementById("MainLevelOptions_37243175-6EE0-60D5-4620-01786A270483");
                                                        element2.classList.add("d-none");
                                                        var element3 = document.getElementById("MainLevelOptions_CFC010B4-052B-558A-311F-0175D74E16CB");
                                                        element3.classList.add("d-none");

                                                        document.getElementById("egv-sub").innerHTML = 0
                                                        document.getElementById("egs-sub").innerHTML = 0
                                                        document.getElementById("eg-visitor").value = 0
                                                        document.getElementById("eg-std").value = 0
                                                        document.getElementById("totalEG").innerHTML = 0

                                                        document.getElementById("ar-visitor").value = 0
                                                        document.getElementById("ar-std").value = 0
                                                        document.getElementById("arv-sub").innerHTML = 0
                                                        document.getElementById("ars-sub").innerHTML = 0
                                                        document.getElementById("totalAR").innerHTML = 0

                                                        document.getElementById("other-vs").value = 0
                                                        document.getElementById("other-std").value = 0
                                                        document.getElementById("other-sub").innerHTML = 0
                                                        document.getElementById("otherstd-sub").innerHTML = 0
                                                        document.getElementById("totalOther").innerHTML = 0

                                                    }

                                                    document.getElementById("arab").addEventListener("click", handelArabs);

                                                    function handelArabs() {
                                                        console.log("handel arab run")
                                                        var element = document.getElementById("MainLevelOptions_CF452C5A-2F84-EF68-30C6-0175D74DD037");
                                                        element.classList.add("d-none");
                                                        var element2 = document.getElementById("MainLevelOptions_37243175-6EE0-60D5-4620-01786A270483");
                                                        element2.classList.remove("d-none");
                                                        var element3 = document.getElementById("MainLevelOptions_CFC010B4-052B-558A-311F-0175D74E16CB");
                                                        element3.classList.add("d-none");

                                                        document.getElementById("egv-sub").innerHTML = 0
                                                        document.getElementById("egs-sub").innerHTML = 0
                                                        document.getElementById("eg-visitor").value = 0
                                                        document.getElementById("eg-std").value = 0
                                                        document.getElementById("totalEG").innerHTML = 0

                                                        document.getElementById("ar-visitor").value = 0
                                                        document.getElementById("ar-std").value = 0
                                                        document.getElementById("arv-sub").innerHTML = 0
                                                        document.getElementById("ars-sub").innerHTML = 0
                                                        document.getElementById("totalAR").innerHTML = 0

                                                        document.getElementById("other-vs").value = 0
                                                        document.getElementById("other-std").value = 0
                                                        document.getElementById("other-sub").innerHTML = 0
                                                        document.getElementById("otherstd-sub").innerHTML = 0
                                                        document.getElementById("totalOther").innerHTML = 0
                                                    }

                                                    document.getElementById("other").addEventListener("click", handelOthers);

                                                    function handelOthers() {
                                                        console.log("handel other run")
                                                        var element = document.getElementById("MainLevelOptions_CF452C5A-2F84-EF68-30C6-0175D74DD037");
                                                        element.classList.add("d-none");
                                                        var element2 = document.getElementById("MainLevelOptions_37243175-6EE0-60D5-4620-01786A270483");
                                                        element2.classList.add("d-none");
                                                        var element3 = document.getElementById("MainLevelOptions_CFC010B4-052B-558A-311F-0175D74E16CB");
                                                        element3.classList.remove("d-none");

                                                        document.getElementById("egv-sub").innerHTML = 0
                                                        document.getElementById("egs-sub").innerHTML = 0
                                                        document.getElementById("eg-visitor").value = 0
                                                        document.getElementById("eg-std").value = 0
                                                        document.getElementById("totalEG").innerHTML = 0

                                                        document.getElementById("ar-visitor").value = 0
                                                        document.getElementById("ar-std").value = 0
                                                        document.getElementById("arv-sub").innerHTML = 0
                                                        document.getElementById("ars-sub").innerHTML = 0
                                                        document.getElementById("totalAR").innerHTML = 0

                                                        document.getElementById("other-vs").value = 0
                                                        document.getElementById("other-std").value = 0
                                                        document.getElementById("other-sub").innerHTML = 0
                                                        document.getElementById("otherstd-sub").innerHTML = 0
                                                        document.getElementById("totalOther").innerHTML = 0
                                                    }
                                                </script>

                                                <div id="MainLevelOptions_CF452C5A-2F84-EF68-30C6-0175D74DD037" class="MainLevelOptions " data-uid="1BC2979D45524FACAA52BB91E63F13A9">

                                                    <h4 class="my-3">Choose your tickets:</h4>

                                                    <table class="table" id="SubLevel_2318FE6E-B7E6-7306-317A-0175D74E7028">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Type</th>
                                                                <th scope="col">Quantity</th>
                                                                <th scope="col">Price</th>
                                                                <th scope="col">Subtotal</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            <tr data-entityid="AF87EEDF-D384-522C-53B1-0175BD3FC161" data-entitytype="12">
                                                                <th scope="row">
                                                                    Visitor - Egyptian

                                                                    <br>
                                                                    <small class="text-dark">Valid ID is provided on site</small>
                                                                </th>

                                                                <td>
                                                                    <input id="eg-visitor" class="ticketNum" type="number" name="ticketNum" value="0" min="0" step="1" max="10" data-entityid="AF87EEDF-D384-522C-53B1-0175BD3FC161" data-entitytype="12" data-price="60.00" />
                                                                </td>
                                                                <td>
                                                                    <div> <small>EGP</small> <span class="ticketDisplayPrice" data-entityid="AF87EEDF-D384-522C-53B1-0175BD3FC161" data-entitytype="12">60.00</span></div>
                                                                    <div class="ticketOriginalPrice d-none" data-entityid="AF87EEDF-D384-522C-53B1-0175BD3FC161" data-entitytype="12"><small> EGP</small>60.00 </div>
                                                                </td>
                                                                <td id="egv-sub" class="saleitemsubtotal" data-entityid="AF87EEDF-D384-522C-53B1-0175BD3FC161" data-entitytype="12">0.00
                                                                </td>
                                                            </tr>
                                                            <script>
                                                                document.getElementById("eg-visitor").addEventListener("change", handelEG);

                                                                function handelEG() {
                                                                    document.getElementById("egv-sub").innerHTML = document.getElementById("eg-visitor").value * 60

                                                                    // document.getElementById("egv-sub").innerHTML = 0
                                                                    document.getElementById("egs-sub").innerHTML = 0
                                                                    // document.getElementById("eg-visitor").value = 0
                                                                    document.getElementById("eg-std").value = 0
                                                                    // document.getElementById("totalEG").innerHTML = 0

                                                                    document.getElementById("ar-visitor").value = 0
                                                                    document.getElementById("ar-std").value = 0
                                                                    document.getElementById("arv-sub").innerHTML = 0
                                                                    document.getElementById("ars-sub").innerHTML = 0
                                                                    document.getElementById("totalAR").innerHTML = 0

                                                                    document.getElementById("other-vs").value = 0
                                                                    document.getElementById("other-std").value = 0
                                                                    document.getElementById("other-sub").innerHTML = 0
                                                                    document.getElementById("otherstd-sub").innerHTML = 0
                                                                    document.getElementById("totalOther").innerHTML = 0
                                                                }
                                                            </script>
                                                            <tr data-entityid="3A01ACAE-4C74-81DA-4C69-0175BD3B92AF" data-entitytype="12">
                                                                <th scope="row">
                                                                    Student - Egyptian

                                                                    <br>
                                                                    <small class="text-dark">Valid student identification would be required</small>
                                                                </th>

                                                                <td>
                                                                    <input id="eg-std" class="ticketNum" type="number" name="ticketNum" value="0" min="0" step="1" max="10" data-entityid="3A01ACAE-4C74-81DA-4C69-0175BD3B92AF" data-entitytype="12" data-price="30.00" />
                                                                </td>
                                                                <td>
                                                                    <div> <small>EGP</small> <span class="ticketDisplayPrice" data-entityid="3A01ACAE-4C74-81DA-4C69-0175BD3B92AF" data-entitytype="12">30.00</span></div>
                                                                    <div class="ticketOriginalPrice d-none" data-entityid="3A01ACAE-4C74-81DA-4C69-0175BD3B92AF" data-entitytype="12"><small> EGP</small>30.00 </div>
                                                                </td>
                                                                <td id="egs-sub" class="saleitemsubtotal" data-entityid="3A01ACAE-4C74-81DA-4C69-0175BD3B92AF" data-entitytype="12">0.00
                                                                </td>
                                                            </tr>
                                                            <script>
                                                                document.getElementById("eg-std").addEventListener("change", handelEGs);

                                                                function handelEGs() {
                                                                    document.getElementById("egs-sub").innerHTML = document.getElementById("eg-std").value * 30

                                                                    document.getElementById("egv-sub").innerHTML = 0
                                                                    // document.getElementById("egs-sub").innerHTML = 0
                                                                    document.getElementById("eg-visitor").value = 0
                                                                    // document.getElementById("eg-std").value = 0
                                                                    // document.getElementById("totalEG").innerHTML = 0

                                                                    document.getElementById("ar-visitor").value = 0
                                                                    document.getElementById("ar-std").value = 0
                                                                    document.getElementById("arv-sub").innerHTML = 0
                                                                    document.getElementById("ars-sub").innerHTML = 0
                                                                    document.getElementById("totalAR").innerHTML = 0

                                                                    document.getElementById("other-vs").value = 0
                                                                    document.getElementById("other-std").value = 0
                                                                    document.getElementById("other-sub").innerHTML = 0
                                                                    document.getElementById("otherstd-sub").innerHTML = 0
                                                                    document.getElementById("totalOther").innerHTML = 0
                                                                }
                                                            </script>
                                                            <tr class="totals">
                                                                <th scope="row"></th>
                                                                <td></td>
                                                                <td>
                                                                    <h3 class="text-success totalfigure">Total</h3>
                                                                </td>
                                                                <td>
                                                                    <h3 class="text-success totalfigure">EGP <span id="totalEG" class="vgs_finaltotal">0.00</span></h3>
                                                                </td>
                                                            </tr>
                                                            <script>
                                                                document.getElementById("eg-visitor").addEventListener("change", handelEGT);
                                                                document.getElementById("eg-std").addEventListener("change", handelEGT);

                                                                function handelEGT() {
                                                                    let egvt = document.getElementById("eg-visitor").value * 60
                                                                    let egst = document.getElementById("eg-std").value * 30
                                                                    document.getElementById("totalEG").innerHTML = egvt + egst

                                                                    // document.getElementById("egv-sub").innerHTML = 0
                                                                    // document.getElementById("egs-sub").innerHTML = 0
                                                                    // document.getElementById("eg-visitor").value = 0
                                                                    // document.getElementById("eg-std").value = 0
                                                                    // document.getElementById("totalEG").innerHTML = 0

                                                                    document.getElementById("ar-visitor").value = 0
                                                                    document.getElementById("ar-std").value = 0
                                                                    document.getElementById("arv-sub").innerHTML = 0
                                                                    document.getElementById("ars-sub").innerHTML = 0
                                                                    document.getElementById("totalAR").innerHTML = 0

                                                                    document.getElementById("other-vs").value = 0
                                                                    document.getElementById("other-std").value = 0
                                                                    document.getElementById("other-sub").innerHTML = 0
                                                                    document.getElementById("otherstd-sub").innerHTML = 0
                                                                    document.getElementById("totalOther").innerHTML = 0
                                                                }
                                                            </script>
                                                        </tbody>
                                                    </table>

                                                </div>

                                                <div id="MainLevelOptions_37243175-6EE0-60D5-4620-01786A270483" class="MainLevelOptions d-none" data-uid="1BC2979D45524FACAA52BB91E63F13A9">

                                                    <h4 class="my-3">Choose your tickets:</h4>

                                                    <table class="table" id="SubLevel_24D45456-F1C8-083C-6C47-01786A27CD4A">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Type</th>
                                                                <th scope="col">Quantity</th>
                                                                <th scope="col">Price</th>
                                                                <th scope="col">Subtotal</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            <tr data-entityid="49CDEB39-4C9F-2FD1-4823-01786E281CA6" data-entitytype="12">
                                                                <th scope="row">
                                                                    Visitor - Arab

                                                                    <br>
                                                                    <small class="text-dark">Valid ID is provided on site</small>
                                                                </th>

                                                                <td>
                                                                    <input id="ar-visitor" class="ticketNum" type="number" name="ticketNum" value="0" min="0" step="1" max="10" data-entityid="49CDEB39-4C9F-2FD1-4823-01786E281CA6" data-entitytype="12" data-price="200.00" />
                                                                </td>
                                                                <td>
                                                                    <div> <small>EGP</small> <span class="ticketDisplayPrice" data-entityid="49CDEB39-4C9F-2FD1-4823-01786E281CA6" data-entitytype="12">200.00</span></div>
                                                                    <div class="ticketOriginalPrice d-none" data-entityid="49CDEB39-4C9F-2FD1-4823-01786E281CA6" data-entitytype="12"><small> EGP</small>200.00 </div>
                                                                </td>
                                                                <td id="arv-sub" class="saleitemsubtotal" data-entityid="49CDEB39-4C9F-2FD1-4823-01786E281CA6" data-entitytype="12">0.00
                                                                </td>
                                                            </tr>
                                                            <script>
                                                                document.getElementById("ar-visitor").addEventListener("change", handelAR);

                                                                function handelAR() {
                                                                    document.getElementById("arv-sub").innerHTML = document.getElementById("ar-visitor").value * 200

                                                                    document.getElementById("egv-sub").innerHTML = 0
                                                                    document.getElementById("egs-sub").innerHTML = 0
                                                                    document.getElementById("eg-visitor").value = 0
                                                                    document.getElementById("eg-std").value = 0
                                                                    document.getElementById("totalEG").innerHTML = 0

                                                                    // document.getElementById("ar-visitor").value = 0
                                                                    document.getElementById("ar-std").value = 0
                                                                    // document.getElementById("arv-sub").innerHTML = 0
                                                                    document.getElementById("ars-sub").innerHTML = 0
                                                                    // document.getElementById("totalAR").innerHTML = 0

                                                                    document.getElementById("other-vs").value = 0
                                                                    document.getElementById("other-std").value = 0
                                                                    document.getElementById("other-sub").innerHTML = 0
                                                                    document.getElementById("otherstd-sub").innerHTML = 0
                                                                    document.getElementById("totalOther").innerHTML = 0
                                                                }
                                                            </script>
                                                            <tr data-entityid="CE4F5809-E6A3-613E-6E09-01786E2C7E8E" data-entitytype="12">
                                                                <th scope="row">
                                                                    Student - Arab

                                                                    <br>
                                                                    <small class="text-dark">Valid student identification would be required</small>
                                                                </th>

                                                                <td>
                                                                    <input id="ar-std" class="ticketNum" type="number" name="ticketNum" value="0" min="0" step="1" max="10" data-entityid="CE4F5809-E6A3-613E-6E09-01786E2C7E8E" data-entitytype="12" data-price="100.00" />
                                                                </td>
                                                                <td>
                                                                    <div> <small>EGP</small> <span class="ticketDisplayPrice" data-entityid="CE4F5809-E6A3-613E-6E09-01786E2C7E8E" data-entitytype="12">100.00</span></div>
                                                                    <div class="ticketOriginalPrice d-none" data-entityid="CE4F5809-E6A3-613E-6E09-01786E2C7E8E" data-entitytype="12"><small> EGP</small>100.00 </div>
                                                                </td>
                                                                <td id="ars-sub" class="saleitemsubtotal" data-entityid="CE4F5809-E6A3-613E-6E09-01786E2C7E8E" data-entitytype="12">0.00
                                                                </td>
                                                            </tr>
                                                            <script>
                                                                document.getElementById("ar-std").addEventListener("change", handelARs);

                                                                function handelARs() {
                                                                    document.getElementById("ars-sub").innerHTML = document.getElementById("ar-std").value * 100

                                                                    document.getElementById("egv-sub").innerHTML = 0
                                                                    document.getElementById("egs-sub").innerHTML = 0
                                                                    document.getElementById("eg-visitor").value = 0
                                                                    document.getElementById("eg-std").value = 0
                                                                    document.getElementById("totalEG").innerHTML = 0

                                                                    document.getElementById("ar-visitor").value = 0
                                                                    // document.getElementById("ar-std").value = 0
                                                                    document.getElementById("arv-sub").innerHTML = 0
                                                                    // document.getElementById("ars-sub").innerHTML = 0
                                                                    // document.getElementById("totalAR").innerHTML = 0

                                                                    document.getElementById("other-vs").value = 0
                                                                    document.getElementById("other-std").value = 0
                                                                    document.getElementById("other-sub").innerHTML = 0
                                                                    document.getElementById("otherstd-sub").innerHTML = 0
                                                                    document.getElementById("totalOther").innerHTML = 0
                                                                }
                                                            </script>
                                                            <tr class="totals">
                                                                <th scope="row"></th>
                                                                <td></td>
                                                                <td>
                                                                    <h3 class="text-success totalfigure">Total</h3>
                                                                </td>
                                                                <td>
                                                                    <h3 class="text-success totalfigure">EGP <span id="totalAR" class="vgs_finaltotal">0.00</span></h3>
                                                                </td>
                                                            </tr>
                                                            <script>
                                                                document.getElementById("ar-visitor").addEventListener("change", handelART);
                                                                document.getElementById("ar-std").addEventListener("change", handelART);

                                                                function handelART() {
                                                                    let arvt = document.getElementById("ar-visitor").value * 200
                                                                    let arst = document.getElementById("ar-std").value * 100
                                                                    document.getElementById("totalAR").innerHTML = arvt + arst

                                                                    document.getElementById("egv-sub").innerHTML = 0
                                                                    document.getElementById("egs-sub").innerHTML = 0
                                                                    document.getElementById("eg-visitor").value = 0
                                                                    document.getElementById("eg-std").value = 0
                                                                    document.getElementById("totalEG").innerHTML = 0

                                                                    // document.getElementById("ar-visitor").value = 0
                                                                    // document.getElementById("ar-std").value = 0
                                                                    // document.getElementById("arv-sub").innerHTML = 0
                                                                    // document.getElementById("ars-sub").innerHTML = 0
                                                                    // document.getElementById("totalAR").innerHTML = 0

                                                                    document.getElementById("other-vs").value = 0
                                                                    document.getElementById("other-std").value = 0
                                                                    document.getElementById("other-sub").innerHTML = 0
                                                                    document.getElementById("otherstd-sub").innerHTML = 0
                                                                    document.getElementById("totalOther").innerHTML = 0
                                                                }
                                                            </script>
                                                        </tbody>
                                                    </table>

                                                </div>

                                                <div id="MainLevelOptions_CFC010B4-052B-558A-311F-0175D74E16CB" class="MainLevelOptions d-none" data-uid="1BC2979D45524FACAA52BB91E63F13A9">

                                                    <h4 class="my-3">Choose your tickets:</h4>

                                                    <table class="table" id="SubLevel_0AE8636E-BA78-0465-31D7-0175D74EE4BE">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Type</th>
                                                                <th scope="col">Quantity</th>
                                                                <th scope="col">Price</th>
                                                                <th scope="col">Subtotal</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            <tr data-entityid="ECC6B5DB-E487-A5FA-5627-0175BD40BD47" data-entitytype="12">
                                                                <th scope="row">
                                                                    Visitor - Other Nationality

                                                                    <br>
                                                                    <small class="text-dark">Valid ID is provided on site</small>
                                                                </th>

                                                                <td>
                                                                    <input id="other-vs" class="ticketNum" type="number" name="ticketNum" value="0" min="0" step="1" max="10" data-entityid="ECC6B5DB-E487-A5FA-5627-0175BD40BD47" data-entitytype="12" data-price="200.00" />
                                                                </td>
                                                                <td>
                                                                    <div> <small>EGP</small> <span class="ticketDisplayPrice" data-entityid="ECC6B5DB-E487-A5FA-5627-0175BD40BD47" data-entitytype="12">200.00</span></div>
                                                                    <div class="ticketOriginalPrice d-none" data-entityid="ECC6B5DB-E487-A5FA-5627-0175BD40BD47" data-entitytype="12"><small> EGP</small>200.00 </div>
                                                                </td>
                                                                <td id="other-sub" class="saleitemsubtotal" data-entityid="ECC6B5DB-E487-A5FA-5627-0175BD40BD47" data-entitytype="12">0.00
                                                                </td>
                                                            </tr>
                                                            <script>
                                                                document.getElementById("other-vs").addEventListener("change", handelOtherVS);

                                                                function handelOtherVS() {
                                                                    document.getElementById("other-sub").innerHTML = document.getElementById("other-vs").value * 200

                                                                    document.getElementById("egv-sub").innerHTML = 0
                                                                    document.getElementById("egs-sub").innerHTML = 0
                                                                    document.getElementById("eg-visitor").value = 0
                                                                    document.getElementById("eg-std").value = 0
                                                                    document.getElementById("totalEG").innerHTML = 0

                                                                    document.getElementById("ar-visitor").value = 0
                                                                    document.getElementById("ar-std").value = 0
                                                                    document.getElementById("arv-sub").innerHTML = 0
                                                                    document.getElementById("ars-sub").innerHTML = 0
                                                                    document.getElementById("totalAR").innerHTML = 0

                                                                    // document.getElementById("other-vs").value = 0
                                                                    document.getElementById("other-std").value = 0
                                                                    // document.getElementById("other-sub").innerHTML = 0
                                                                    document.getElementById("otherstd-sub").innerHTML = 0
                                                                    // document.getElementById("totalOther").innerHTML = 0
                                                                }
                                                            </script>
                                                            <tr data-entityid="54C6BEA4-B667-0435-509F-0175BD3E33EE" data-entitytype="12">
                                                                <th scope="row">
                                                                    Student - Other Nationality

                                                                    <br>
                                                                    <small class="text-dark">Valid student identification would be required</small>
                                                                </th>

                                                                <td>
                                                                    <input id="other-std" class="ticketNum" type="number" name="ticketNum" value="0" min="0" step="1" max="10" data-entityid="54C6BEA4-B667-0435-509F-0175BD3E33EE" data-entitytype="12" data-price="100.00" />
                                                                </td>
                                                                <td>
                                                                    <div> <small>EGP</small> <span class="ticketDisplayPrice" data-entityid="54C6BEA4-B667-0435-509F-0175BD3E33EE" data-entitytype="12">100.00</span></div>
                                                                    <div class="ticketOriginalPrice d-none" data-entityid="54C6BEA4-B667-0435-509F-0175BD3E33EE" data-entitytype="12"><small> EGP</small>100.00 </div>
                                                                </td>
                                                                <td id="otherstd-sub" class="saleitemsubtotal" data-entityid="54C6BEA4-B667-0435-509F-0175BD3E33EE" data-entitytype="12">0.00
                                                                </td>
                                                            </tr>
                                                            <script>
                                                                document.getElementById("other-std").addEventListener("change", handelOtherSTD);

                                                                function handelOtherSTD() {
                                                                    document.getElementById("otherstd-sub").innerHTML = document.getElementById("other-std").value * 100


                                                                    document.getElementById("egv-sub").innerHTML = 0
                                                                    document.getElementById("egs-sub").innerHTML = 0
                                                                    document.getElementById("eg-visitor").value = 0
                                                                    document.getElementById("eg-std").value = 0
                                                                    document.getElementById("totalEG").innerHTML = 0

                                                                    document.getElementById("ar-visitor").value = 0
                                                                    document.getElementById("ar-std").value = 0
                                                                    document.getElementById("arv-sub").innerHTML = 0
                                                                    document.getElementById("ars-sub").innerHTML = 0
                                                                    document.getElementById("totalAR").innerHTML = 0

                                                                    document.getElementById("other-vs").value = 0
                                                                    // document.getElementById("other-std").value = 0
                                                                    document.getElementById("other-sub").innerHTML = 0
                                                                    // document.getElementById("otherstd-sub").innerHTML = 0
                                                                    // document.getElementById("totalOther").innerHTML = 0
                                                                }
                                                            </script>
                                                            <tr class="totals">
                                                                <th scope="row"></th>
                                                                <td></td>
                                                                <td>
                                                                    <h3 class="text-success totalfigure">Total</h3>
                                                                </td>
                                                                <td>
                                                                    <h3 class="text-success totalfigure">EGP <span id="totalOther" class="vgs_finaltotal">0.00</span></h3>
                                                                </td>
                                                            </tr>
                                                            <script>
                                                                document.getElementById("other-vs").addEventListener("change", handelART);
                                                                document.getElementById("other-std").addEventListener("change", handelART);

                                                                function handelART() {
                                                                    let arvt = document.getElementById("other-vs").value * 200
                                                                    let arst = document.getElementById("other-std").value * 100
                                                                    document.getElementById("totalOther").innerHTML = arvt + arst

                                                                    document.getElementById("egv-sub").innerHTML = 0
                                                                    document.getElementById("egs-sub").innerHTML = 0
                                                                    document.getElementById("eg-visitor").value = 0
                                                                    document.getElementById("eg-std").value = 0
                                                                    document.getElementById("totalEG").innerHTML = 0

                                                                    document.getElementById("ar-visitor").value = 0
                                                                    document.getElementById("ar-std").value = 0
                                                                    document.getElementById("arv-sub").innerHTML = 0
                                                                    document.getElementById("ars-sub").innerHTML = 0
                                                                    document.getElementById("totalAR").innerHTML = 0

                                                                    // document.getElementById("other-vs").value = 0
                                                                    // document.getElementById("other-std").value = 0
                                                                    // document.getElementById("other-sub").innerHTML = 0
                                                                    // document.getElementById("otherstd-sub").innerHTML = 0
                                                                    // document.getElementById("totalOther").innerHTML = 0
                                                                }
                                                            </script>
                                                        </tbody>
                                                    </table>

                                                </div>

                                                <div class="w-100 text-center">
                                                    <!-- <button id="tktsNext" class="btn btn-primary rounded-0">Next</button> -->
                                                    <!-- <a class="button button-lg button-primary button-ujarak" id="to-contact-details">NEXT</a> -->
                                                    <a class="button button-lg button-primary button-ujarak" id="to-contact-details" href="contact-details.php">NEXT</a>
                                                    <script>
                                                        document.getElementById("to-contact-details").addEventListener("click", toContactDetails);

                                                        function toContactDetails() {
                                                            console.log("to-contact-details")
                                                            let date = document.getElementById('date').value
                                                            let nationality = document.querySelector('input[name="MainLevelTabOptions"]:checked').value
                                                            let eg_visitor = document.getElementById("eg-visitor").value
                                                            let eg_std = document.getElementById("eg-std").value
                                                            let ar_visitor = document.getElementById("ar-visitor").value
                                                            let ar_std = document.getElementById("ar-std").value
                                                            let other_visitor = document.getElementById('other-vs').value
                                                            let other_std = document.getElementById('other-std').value
                                                            let total = (eg_visitor * 60) + (eg_std * 30) + (ar_visitor * 200) + (ar_std * 100) + (other_visitor * 200) + (other_std * 100)
                                                            let payload = {
                                                                visit_data: date,
                                                                nationality: nationality,
                                                                eg_visitor: eg_visitor,
                                                                eg_std: eg_std,
                                                                ar_visitor: ar_visitor,
                                                                ar_std: ar_std,
                                                                other_visitor: other_visitor,
                                                                other_std: other_std,
                                                                total: total,
                                                                id: Date.now()
                                                            }
                                                            console.log("done")
                                                            let old = JSON.parse(localStorage.getItem("saved_tickets"))
                                                            let tickets = old ? [...old, payload] : [payload]
                                                            console.log(tickets)
                                                            localStorage.setItem("saved_tickets", JSON.stringify(tickets));
                                                        }
                                                    </script>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </section>




                        <div class="alert alert-warning mt-4 mb-5">
                            <div class="row">

                                <div class="col-md-4">
                                    <h5>Free entry</h5>
                                    <div>Passes are available at museum’s tickets office for eligible guests, for more details <a href="#freetickets" data-toggle="modal" data-target"#terms">click here</a>.</div>
                                </div>
                                <div class="col-md-4">
                                    <h5>Opening hours</h5>
                                    <div>SAT-THU: 9:00 - 17:00</div>
                                    <div>FRI: 9:00 - 17:00 &amp; 18:00 - 21:00</div>
                                    <div class="d-none">Ramadan Schedule: 9:00 - 15:00</div>
                                </div>
                                <div class="col-md-4">
                                    <h5>Cairo pass</h5>
                                    <div>We are not part of Cairo pass, we are in process of joining the program.</div>
                                </div>

                            </div>
                        </div>
                        <div class="modal fade" id="freetickets" tabindex="-1" role="dialog" aria-labelledby="freeticketsLabel" aria-hidden="true">
                            <div class="modal-dialog modal-terms">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="freeticketsLabel">Free entry</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Visitors exempted from paying entry fee</p>
                                        <ul>
                                            <li>Seniors over 60 years</li>
                                            <li>Children under 6 years</li>
                                            <li>Special Needs (Egyptian) + One Companion</li>
                                            <li>Medical Professionals</li>
                                            <li>Ministry of Tourism and Antiquities employees </li>
                                            <li>Egyptian Martyrs' Families</li>
                                            <li>Egyptian Veterans' Families</li>
                                            <li>Egyptian Students of Faculties of Antiquities , Tourism , Literature (Departments of History and Civilization) , Engineering (Department of Architecture) , Fine Arts (Department of Architecture), Applied Arts , Syndicate of Plastic Arts</li>
                                        </ul>
                                        <strong>Important note:</strong> Visitors with free entry permits are welcome during weekdays with exemption of weekends (Friday & Saturday) as well as the official holidays.
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- End_Module_393 -->
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>

</div>

<?php require('./layouts/footer.php'); ?>



<!-- <script>
    if (document.getElementById('MainLevelNav_CF452C5A-2F84-EF68-30C6-0175D74DD037').checked) {
        var element = document.getElementById("egyption");
        element.classList.add("activated");
        var element2 = document.getElementById("arab");
        element2.classList.remove("activated");
        var element3 = document.getElementById("other");
        element3.classList.remove("activated");
    } else if (document.getElementById('MainLevelNav_37243175-6EE0-60D5-4620-01786A270483').checked) {
        var element = document.getElementById("egyption");
        element.classList.remove("activated");
        var element2 = document.getElementById("arab");
        element2.classList.add("activated");
        var element3 = document.getElementById("other");
        element3.classList.remove("activated");
    } else if (document.getElementById('MainLevelNav_CFC010B4-052B-558A-311F-0175D74E16CB').checked) {
        var element = document.getElementById("egyption");
        element.classList.remove("activated");
        var element2 = document.getElementById("arab");
        element2.classList.remove("activated");
        var element3 = document.getElementById("other");
        element3.classList.add("activated");
    }
</script> -->