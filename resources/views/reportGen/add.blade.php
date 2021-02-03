@extends('layouts.mainlayout')
@section('content')
    <div class="card mb-30">
        <!-- Form -->
        <h4 class="font-20 smartwizard2-top-title">Report generator</h4>

        <form action="#">
            <div class="card-body p-10">

                <h4 class="font-20 mb-4">Report Latter</h4>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="font-14 bold">Attn Name: </label>
                            <input type="text" class="theme-input-style" placeholder="Mr. Naeem Anwar">
                        </div>

                        <div class="form-group">
                            <label class="font-14 bold">Ref No: </label>
                            <input type="text" class="theme-input-style" placeholder="QEP-21-LP-021">
                        </div>

                        <div class="form-group">
                            <label class="font-14 bold">Supply of Company: </label>
                            <input type="text" class="theme-input-style" placeholder="ESE Lightning Protection System">
                        </div>

                    </div>
                    <div class="col-lg-6">

                        <div class="form-group">
                            <label class="font-14 bold">Attn Company: </label>
                            <input type="text" class="theme-input-style" placeholder="Premier Energy (Pvt) Ltd">
                        </div>

                        <div class="form-group">
                            <label class="font-14 bold">Subject: </label>
                            <input type="text" class="theme-input-style"
                                   placeholder="ESE Lightning Protection System France Paratonnerres">
                        </div>

                        <div class="form-group">
                            <label class="font-14 bold">Other Company Member: </label>
                            <input type="text" class="theme-input-style" placeholder="Asad Sohail Malik">
                        </div>
                    </div>
                </div>

                <br/>

                <h4 class="font-20 mb-4">Quotation</h4>

                <div class="table-responsive">
                    <!-- Invoice List Table -->
                    <h4 class="font-20 mb-4 centered">Early streamer emission</h4>


                    <div class="table-responsive pt-1">
                        <table class="cart_table text-nowrap table-centered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Description</th>
                                <th>Quantity</th>
                                <th>Unit Cost</th>
                                <th>Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>#01</td>
                                <td><a href="#">Ergonomic Plastic Ball</a></td>
                                <td><input type="number" value="26"></td>
                                <td><span>$64.3</span></td>
                                <td><span>$270</span> <a href="#"><img src="../../assets/img/svg/table-colse.svg" class="svg" alt=""></a></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

                <br/>

                <h4 class="font-20 mb-4">Terms & Conditions</h4>
                <div class="row">
                    <div class="col-6">
                        <div class="form-row mb-20">
                            <label class="font-14 bold">Payment type 1: </label>
                            <input type="text" class="theme-input-style" placeholder="70%">
                        </div>

                        <div class="form-row mb-20">
                            <label class="font-14 bold">Payment type 3: </label>
                            <input type="text" class="theme-input-style" placeholder="10%">
                        </div>

                        <div class="form-row mb-20">
                            <label class="font-14 bold">Validity: </label>
                            <input type="text" class="theme-input-style" placeholder="20 day ">
                        </div>

                    </div>
                    <div class="col-6">

                        <div class="form-row mb-20">
                            <label class="font-14 bold">Payment type 2: </label>
                            <input type="text" class="theme-input-style" placeholder="20%">
                        </div>

                        <div class="form-row mb-20">
                            <label class="font-14 bold">Delivery days: </label>
                            <input type="text" class="theme-input-style" placeholder="10 to 15 ">
                        </div>

                        <div class="form-row mb-20">
                            <label class="font-14 bold">Warrantee: </label>
                            <input type="text" class="theme-input-style" placeholder="12 Months">
                        </div>
                    </div>
                </div>


                <!-- Form Row -->
                <div class="form-row">
                    <div class="col-12">
                        <button type="submit" class="btn long">Submit</button>
                    </div>
                </div>

            </div>
        </form>
        <!-- End Form -->
    </div>
@endsection
