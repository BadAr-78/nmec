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
                        <h2 class="my-4 text-center">Booked Ticket(s) </h2>
                        <section id="tabs" data-tabid="33" data-moduleid="393" data-tabmoduleid="85">
                            <div class="container pl-0">
                                <div class="row pl-0">
                                    <div class="col-12">
                                        <div class="tab-content py-3 px-3 px-sm-0" id="nav-profile">
                                            <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-home-tab">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Email</th>
                                                            <th scope="col">Number of Tickets</th>
                                                            <th scope="col">Total EGP</th>
                                                            <th scope="col">Visit Date</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="tbody">
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Mohamed Badar</td>
                                                            <td>mohamedbadar218@gmail.com</td>
                                                            <td>2</td>
                                                            <td><span>400</span> <small>EGP</small></td>
                                                            <td>5/1/2021</td>
                                                        </tr>
                                                        <script>
                                                            (function() {

                                                                let users = JSON.parse(localStorage.getItem("users"))
                                                                let data = ''
                                                                let i = 0
                                                                users.map(user => {
                                                                    data += `
                                                                    <tr>
                                                                        <th scope="row">${i+1}</th>
                                                                        <td>${ user.username }</td>
                                                                        <td>${ user.email }</td>
                                                                        <td>${ user.ticket }</td>
                                                                        <td><span>${ user.total }</span> <small>EGP</small></td>
                                                                        <td>${user.date}</td>
                                                                    </tr>
                                                                    `
                                                                })

                                                                document.getElementById('tbody').innerHTML = data
                                                            })()
                                                        </script>
                                                    </tbody>
                                                </table>
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