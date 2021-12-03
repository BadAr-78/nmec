<?php ob_start();
session_start(); ?>
<?php require('./layouts/header.php'); ?>
<?php require('./layouts/nav.php'); ?>

<br>

<!--  -->
<main id='body' class="container imgcontainer tktsmain">
    <div id="dnn_ContentPane" class="info_side2 w-100">
        <div class="DnnModule DnnModule-VGSB2CNMECCheckOut DnnModule-396"><a name="396"></a>
            <div class="DNNContainer_noTitle">
                <div id="dnn_ctr396_ContentPane">
                    <!-- Start_Module_396 -->
                    <div id="dnn_ctr396_ModuleContent" class="DNNModuleContent ModVGSB2CNMECCheckOutC">

                        <div id="loader" class="container h-100" style="display: none !important;">
                            <div class="w-100">

                                <img src="/Portals/0/assets/loader.jpg?v=9" />
                            </div>
                        </div>
                        <h2 class="my-4 text-center ">Book Your Ticket(s)</h2>
                        <section id="tabs">
                            <div class="container pl-0 mb-5">
                                <div class="row pl-0 pr-lg-4">
                                    <div class="col-12">
                                        <nav class="w-100">
                                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link disabled completed" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Tickets</a>
                                                <a class="nav-item nav-link disabled completed" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact details</a>
                                                <a class="nav-item nav-link active" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">Payment</a>
                                            </div>
                                        </nav>
                                        <div class="tab-content py-3 px-3 px-sm-0 ">
                                            <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="nav-home-tab">
                                                <div class="row flex-column-reverse flex-md-row" id="checkout">
                                                    <div class="col-sm-12 col-md-7 paymentsection">
                                                        <div class="card border-0 p-4 rounded-0">
                                                            <div class="row">
                                                                <h4 class="text-center py-2"><i class="fa fa-cart-plus mx-1"></i>Your cart</h4>
                                                                <div class="w-100 border-top border-bottom mx-auto" id="vgscrt_checkout">
                                                                    <table class="table borderless w-100" onload="checkStorage()">
                                                                        <tbody id="vgscrt_cartreview_items">
                                                                            <tr>
                                                                                <th scope="row">
                                                                                    (<span id="num_tickets">1</span>)
                                                                                    <span id="type">Student</span> -
                                                                                    <span id="nationality">arab</span>
                                                                                </th>
                                                                                <td></td>
                                                                                <td>EGP <span id="cost">30,00</span></td>
                                                                            </tr>
                                                                        </tbody>
                                                                        <tfoot>
                                                                            <tr class="border-top">
                                                                                <td class="text-success font-weight-bold h5" scope="row">Total</td>
                                                                                <td></td>
                                                                                <td class="text-success font-weight-bold h5 ml-auto">EGP <span id="total">30,00</span></td>
                                                                            </tr>
                                                                        </tfoot>
                                                                    </table>
                                                                    <script>
                                                                        (function(){
                                                                            console.log('heer prooo')
                                                                            let users = JSON.parse(localStorage.getItem("users"))
                                                                            let user = users[users.length - 1]

                                                                            let tickets = JSON.parse(localStorage.getItem("saved_tickets"))
                                                                            let ticket = 0
                                                                            tickets.map(t => {
                                                                                t.id == user.ticket ? ticket = t : console.log("ticket not found")
                                                                            })

                                                                            let nationality = 'Egyption'
                                                                            ticket.nationality == "arab" ? nationality = 'Arab' :
                                                                                ticket.nationality == "other" ? nationality = 'Other Nationality' :
                                                                                nationality = 'Egyption'

                                                                            let num_tickets = 0
                                                                            let num = [
                                                                                ticket.ar_std,
                                                                                ticket.ar_visitor,
                                                                                ticket.eg_std,
                                                                                ticket.eg_visitor,
                                                                                ticket.other_std,
                                                                                ticket.other_visitor
                                                                            ]
                                                                            let type = 0
                                                                            
                                                                            num.map(n => {
                                                                                n != 0 ?
                                                                                num_tickets = n : 0
                                                                            })
                                                                            
                                                                            
                                                                            ticket.eg_std > 0 ? type="Student" :
                                                                            ticket.ar_std > 0 ? type="Student" :
                                                                            ticket.other_std > 0 ? type="Student" : type = "Visitor"
                                                                            
                                                                            console.log(num_tickets+".............")
                                                                            console.log(type+".............")

                                                                            let cost = 0

                                                                            ticket.eg_std > 0 ? cost=30 :
                                                                            ticket.eg_visitor > 0 ? cost=60 :
                                                                            ticket.ar_std > 0 || ticket.other_std > 0 ? cost=100 : cost = 200

                                                                            let total = num_tickets * cost 

                                                                            document.getElementById('nationality').innerHTML = nationality
                                                                            document.getElementById('num_tickets').innerHTML = num_tickets
                                                                            document.getElementById('type').innerHTML = type
                                                                            document.getElementById('cost').innerHTML = cost
                                                                            document.getElementById('total').innerHTML = total
                                                                        })()
                                                                    </script>
                                                                </div>
                                                                <div class="form-group mb-0  py-2">
                                                                    <div class="custom-control custom-checkbox custom-control-inline" id="checkoutAgreecontainer">
                                                                        <input id="chkterms" type="checkbox" name="chkterms" class="custom-control-input">
                                                                        <label for="chkterms" class="custom-control-label text-muted text-sm">I Accept <a href="#terms" data-toggle="modal" data-target"#terms">Terms and Conditions</a>.</label>
                                                                    </div>
                                                                </div>

                                                                <div class="modal fade" style="align-content: center;" id="terms" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-terms" style="align-self: center; margin-left: 500px;">
                                                                        <div class="modal-content" style="width: 900px; text-align: left;">
                                                                            <div class="modal-header" style="align-self: flex-start">
                                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                                <h4 class="modal-title" id="termsLabel">Terms and Conditions</h4>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <p>In order to look after the visitors, and offer a pleasurable experience when visiting the museum, please follow the museum rules and guidelines to maintain a safe environment and enjoyable visit.</p>
                                                                                <div><strong>Items that Are Not Allowed in the Museum or Galleries:</strong></div>
                                                                                <div>In order to protect the exhibits and to maintain a safe environment where the visitor can appreciate the exhibits comfortably, please confirm with the following regulations:</div>
                                                                                <ul type="disc">
                                                                                    <li>Large bags, large backpacks, luggage, or parcels larger than 40 x 40 cm are not permitted into the museum; you can store them in the cloakroom.</li>
                                                                                    <li>Bags and backpacks may be subject to search at any time.</li>
                                                                                    <li>Do not bring any sharp items or dangerous materials into the museum (such as knives, screwdrivers, scissors, and firearms). These items must be stored in the cloakroom.</li>
                                                                                    <li>Do not bring umbrellas into the museum. Please leave them in the cloakroom.</li>
                                                                                    <li>Do not bring folding seats or any other type of seat within the galleries unless you obtain permission from museum security.</li>
                                                                                    <li>Animals or pets are not allowed in the museum.</li>
                                                                                    <li>Musical instruments are not allowed inside the museum.</li>
                                                                                    <li>Do not bring any advertising banners or carry placards or signs inside the museum unless you obtain approval from the concerned authorities.</li>
                                                                                </ul>
                                                                                <div><strong>General Policies in the Galleries</strong></div>
                                                                                <ul type="disc">
                                                                                    <li>Please do not touch any exhibits or showcases.</li>
                                                                                    <li>Food and drinks are not allowed within the galleries (except for small water bottles).</li>
                                                                                    <li>Smoking is prohibited throughout the museum.</li>
                                                                                    <li>Please refrain from disorderly, disruptive, or offensive language or actions.</li>
                                                                                    <li>Please be mindful of others, and be quiet when using your cell phone.</li>
                                                                                    <li>Audio players are not permitted throughout the museum.</li>
                                                                                    <li>For the safety of the exhibits, please do not use flashlights or laser pointers in the museum.</li>
                                                                                    <li>Appropriate attire is requested.</li>
                                                                                    <li>Please do not lie down on seats or on the floor, or take off your shoes.</li>
                                                                                    <li>Please follow all posted signs and visitor instructions.</li>
                                                                                </ul>
                                                                                <div><strong>Families with Children</strong></div>
                                                                                <ul type="disc">
                                                                                    <li>Children must be accompanied by an adult inside the museum at all times.</li>
                                                                                    <li>For the safety of your children and of the exhibits, please make sure that children do not run or play, to prevent them from bumping into exhibits or visitors and causing injury or damage.</li>
                                                                                </ul>
                                                                                <div><strong>Photography</strong></div>
                                                                                <ul type="disc">
                                                                                    <li>Private photography and video recordings are permitted inside the museum only after paying for the photography ticket fees.</li>
                                                                                    <li>Please refrain from taking photographs of other visitors or staff as it may violate their personal rights.</li>
                                                                                    <li>Taking photographs and video recordings for commercial use (TV, cinema, programs, advertising, documentary clips, etc.) are permitted only after obtaining permission from the concerned authorities and paying the appropriate fees.</li>
                                                                                    <li>Please refrain from using flash photography.</li>
                                                                                    <li>Please refrain from using tripods or monopods unless it is for commercial use.</li>
                                                                                </ul>
                                                                                <div><strong>Sketching</strong></div>
                                                                                <div>Faculty of Arts students should conform to the following regulations:</div>
                                                                                <ul type="disc">
                                                                                    <li>The use of pens and pen markers is prohibited in all galleries: only pencils may be used for sketching or taking notes.</li>
                                                                                    <li>Sketchbooks should not exceed 18 x 24 inches in size.</li>
                                                                                    <li>Please do not hinder visitor traffic flow in the galleries.</li>
                                                                                </ul>
                                                                                <div><strong>Emergencies</strong></div>
                                                                                <ul type="disc">
                                                                                    <li>In the case of an emergency such as fire or an earthquake, please follow the instructions of the museum staff.</li>
                                                                                    <li>In the advent of an earthquake, please move away from large sculptures, display cases, and other objects that may fall down.</li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="w-100 mb-2 d-flex">
                                                                    <a id="tkteditbtn" class="btn rounded-0 formbtn col-sm-5" href="booking-ticket.php">Go Back to Tickets</a>
                                                                    <a id="paybtn" class="btn rounded-0 btn-outline-success mx-1 col-sm-8"><i class="fa fa-lock mx-2"></i>Pay Now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div><!-- End_Module_396 -->
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>

</main>
<!--  -->

<?php require('./layouts/footer.php'); ?>