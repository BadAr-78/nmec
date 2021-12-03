<?php ob_start();
session_start(); ?>
<?php require('./layouts/header.php'); ?>
<?php require('./layouts/nav.php'); ?>

<br>

<!--  -->
<div class="container imgcontainer tktsmain">
    <div id="dnn_ContentPane" class="info_side2 w-100">
        <div class="DnnModule DnnModule-VGSB2CNMECContactDetails DnnModule-395"><a name="395"></a>
            <div class="DNNContainer_noTitle">
                <div id="dnn_ctr395_ContentPane">
                    <!-- Start_Module_395 -->
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
                                                                <a class="nav-item nav-link disabled completed" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Tickets</a>
                                                                <a class="nav-item nav-link active" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact details</a>
                                                                <a class="nav-item nav-link disabled" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">Payment</a>
                                                            </div>
                                                        </nav>
                                                    </div>
                                                </div>

                                                <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                                    <div class="tab-pane fade show active boxForm" id="vgscrt_checkoutaccount" role="tabpanel" aria-labelledby="nav-home-tab" data-acntfrmtyp="3" data-submit="false" novalidate>
                                                        <h4>Enter your contact details:</h4>

                                                        <div class="container">

                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text" id="basic-addon1">Full Name</span>
                                                                <input id="username" type="text" class="form-control" placeholder="Full Name" aria-label="Username" aria-describedby="basic-addon1">
                                                            </div>

                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text" id="basic-addon1">@Email Address</span>
                                                                <input id="email" type="text" class="form-control" placeholder="Email Address" aria-label="Username" aria-describedby="basic-addon1">
                                                            </div>

                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text" id="basic-addon1">Phone Number</span>
                                                                <input id="phone" type="text" class="form-control" placeholder="Phone Number" aria-label="Username" aria-describedby="basic-addon1">
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="w-100 text-center">
                                                    <!-- <button id="tktsNext" class="btn btn-primary rounded-0">Next</button> -->
                                                    <a id="submit" class="button button-lg button-primary button-ujarak" href="payment.php">NEXT</a>
                                                    <!-- <a id="submit" class="button button-lg button-primary button-ujarak">NEXT</a> -->
                                                </div>
                                                <script>
                                                    document.getElementById('submit').addEventListener('click', handelSubmit)

                                                    function handelSubmit() {
                                                        let username = document.getElementById('username').value
                                                        let email = document.getElementById('email').value
                                                        let phone = document.getElementById('phone').value

                                                        let tickets = JSON.parse(localStorage.getItem("saved_tickets"))
                                                        let ticket = tickets[tickets.length - 1].id
                                                        // console.log(ticket)
                                                        let payload = {
                                                            id: Date.now(),
                                                            username: username,
                                                            email: email,
                                                            phone: phone,
                                                            ticket: ticket
                                                        }

                                                        let old = JSON.parse(localStorage.getItem("users"))
                                                        let users = old ? [...old, payload] : [payload]
                                                        console.log(users)
                                                        localStorage.setItem("users", JSON.stringify(users));
                                                    }
                                                </script>
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
                    </div>
                    <!-- End_Module_395 -->
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>

</div>
<!--  -->

<?php require('./layouts/footer.php'); ?>