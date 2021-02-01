@extends('layouts.mainlayout')
@section('content')
    <div class="card mb-30">
        <!-- Form -->
        <form action="#">
            <h4 class="font-20 smartwizard2-top-title">Horizontal Form Wizard</h4>
            <div id="smartwizard2">
                <ul class="nav">
                    <li>
                        <a class="nav-link" href="#stepp-1">
                            <i class="icofont-user-alt-7"></i>
                            <span class="d-block">User Details</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#stepp-2">
                            <i class="icofont-location-pin"></i>
                            <span class="d-block">Address</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#stepp-3">
                            <i class="icofont-check-circled"></i>
                            <span class="d-block">Review & Submit</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#stepp-4">
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div id="stepp-1" class="tab-pane p-0" role="tabpanel">
                        <!-- User Details -->
                        <div class="card-body p-0">
                            <h4 class="font-20 mb-20">User Details</h4>

                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- Form Row -->
                                    <div class="form-group">
                                        <label class="font-14 bold">Input With Error</label>
                                        <input type="text" class="theme-input-style is-invalid" placeholder="Type Your Name" required>
                                        <div class="invalid-feedback">
                                            Oops! Not a valid information
                                        </div>
                                    </div>
                                    <!-- End Form Row -->
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">First Name</label>
                                        <input type="text" class="theme-input-style" placeholder="Type Your First Name" required>
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Email</label>
                                        <input type="email" class="theme-input-style" placeholder="Your Email Address">
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Age</label>
                                        <input type="text" class="theme-input-style style--five" placeholder="24">
                                    </div>
                                    <!-- End Form Group -->
                                </div>

                                <div class="col-lg-6">
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Last Name</label>
                                        <input type="text" class="theme-input-style" placeholder="Type Your Last Name">
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Phone</label>
                                        <input type="text" class="theme-input-style" placeholder="Phone">
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Gender</label>

                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center mr-5">
                                                <!-- Custom Radio -->
                                                <div class="custom-radio mr-3">
                                                    <input type="radio" id="male2" name="gender-group2">
                                                    <label for="male2"></label>
                                                </div>
                                                <!-- End Custom Radio -->

                                                <label for="male">Male</label>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <!-- Custom Radio -->
                                                <div class="custom-radio mr-3">
                                                    <input type="radio" id="female2" name="gender-group2">
                                                    <label for="female2"></label>
                                                </div>
                                                <!-- End Custom Radio -->

                                                <label for="female">Female</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Form Group -->
                                </div>
                            </div>

                        </div>
                        <!-- End User Details -->
                    </div>
                    <div id="stepp-2" class="tab-pane p-0" role="tabpanel">
                        <!-- Address-->
                        <div class="card-body p-0">
                            <h4 class="font-20 mb-20">Address</h4>

                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Address 01</label>
                                        <input type="text" class="theme-input-style" placeholder="Melbourne 3000, VIC, Australia">
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">City</label>
                                        <input type="text" class="theme-input-style" placeholder="Dhaka">
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Postcode</label>
                                        <input type="text" class="theme-input-style" placeholder="2456">
                                    </div>
                                    <!-- End Form Group -->
                                </div>

                                <div class="col-lg-6">
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Address 02</label>
                                        <input type="text" class="theme-input-style" placeholder="Melbourne 3000, VIC, Australia">
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">State</label>
                                        <input type="text" class="theme-input-style" placeholder="VICA">
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Country</label>
                                        <select class="form-control">
                                            <option value="bangladesh">Bangladesh</option>
                                            <option value="india">India</option>
                                            <option value="pakistan">Pakistan</option>
                                            <option value="nepal">Nepal</option>
                                            <option value="vhutan">Vhutan</option>
                                        </select>
                                    </div>
                                    <!-- End Form Group -->
                                </div>
                            </div>

                        </div>
                        <!-- End Address -->
                    </div>
                    <div id="stepp-3" class="tab-pane p-0" role="tabpanel">
                        <!-- Review-->
                        <div class="card-body p-0">
                            <h4 class="font-20 mb-20">Review</h4>

                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- Form Group -->
                                    <div class="review-list mb-20">
                                        <span class="font-14 bold c4 mr-4">Name</span>
                                        <span class="black">Abrilay Khatun</span>
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div class="review-list mb-20">
                                        <span class="font-14 bold c4 mr-4">Email</span>
                                        <span class="black">username@email.com</span>
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div class="review-list mb-20">
                                        <span class="font-14 bold c4 mr-4">Phone</span>
                                        <span class="black">+25 6987 4521</span>
                                    </div>
                                    <!-- End Form Group -->
                                </div>

                                <div class="col-lg-6">
                                    <!-- Form Group -->
                                    <div class="review-list mb-20">
                                        <span class="font-14 bold c4 mr-4">Age</span>
                                        <span class="black">24</span>
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div class="review-list mb-20">
                                        <span class="font-14 bold c4 mr-4">Gender</span>
                                        <span class="black">Male</span>
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div class="review-list mb-20">
                                        <span class="font-14 bold c4 mr-4">Address</span>
                                        <span class="black">Melbourne 3000, VIC, Australia</span>
                                    </div>
                                    <!-- End Form Group -->
                                </div>
                            </div>

                        </div>
                        <!-- End Review -->
                    </div>
                    <div id="stepp-4" class="tab-pane" role="tabpanel">
                        <div class="step-done">
                            <span class="btn-circle done"><i class="icofont-check"></i></span>
                            <h2 class="text_color font-30 mb-20">Done Successfully!</h2>
                            <p>Integer ac interdum lacus. Nunc porta semper lacus a varius. Pellentesque habitant morbi tristique senectus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- End Form -->
    </div>
@endsection
