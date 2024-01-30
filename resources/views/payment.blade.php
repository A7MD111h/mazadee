@extends('layouts.app-master')

@section('content')


    <main>
        <!-- Breadcrumb -->
        <section id="breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li>
                        <a href="/">
                            Home
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </li>
                    <li>
                    {{-- <a href="payment"> --}}
                        Payment
                        {{-- </a> --}}
                    </li>
                </ul>
            </div>
            <div class="bg-image" style="background-image: url(/img/OIP.jpg)">

            </div>
        </section>


        <section id="details" class="mb-5" style="background-image: url(/img/OIP.jpg);background-size: cover">
            <div class="container">
                <br>
                <h1 style="text-align: center;">Auction Details</h1>

                <div class="details-bid" style="padding-bottom:5%">
                    <div class="row" >
                        <div class="col-lg-6"  style="display:flex; justify-content: left; align-items: center">
                            <img src="img/PayPal.svg.png" width="80%"/>
                        </div>
                        <div class="col-lg-6">
                            <form  ACTION=“https://sbcheckout.payfort.com/FortAPI/paymentPage”  method="POST" style="padding:2% 6%; align-items: center; box-shadow:3px 3px 3px 3px #111111; background-color: whitesmoke;" id="paymentform">
                                @csrf
                                <INPUT type="hidden" NAME="service_command" value="TOKENIZATION">
                                  <INPUT type="hidden" NAME="language" value="en">
                                  <INPUT type="hidden" NAME="merchant_identifier" value="NCrNhFkS">
                                  <INPUT type="hidden" NAME="access_code" value="J7me6FtwEQe1MUDJmmW2">
                                  <INPUT type="hidden" NAME="signature" value="">
                                  <INPUT type="hidden" NAME="return_url" value="{{url("/")}}">
                                  <INPUT type="hidden" NAME="merchant_reference" value="ahmed_111">
                                  
                                
                                <label for="cvv">card holder name:</label>
                                <input type="text" id="card_holder_name" NAME="card_holder_name" class="form-control" placeholder="Enter CVV"><br>
   
                                <label for="card-number">Card Number:</label>
                                <input type="text" id="card_number" NAME="card_number" class="form-control" placeholder="Enter card number">

                                <label for="expiry-date">Expiry Date:</label>
                                <input type="text" id="expiry_date" NAME="expiry_date" class="form-control" placeholder="MM/YY">

                                


                                <label for="cvv">CVV:</label>
                                <input type="text" id="card_security_code" NAME="card_security_code" class="form-control" placeholder="Enter CVV"><br>
                                
                                <div>
                                        <button class="btn btn-primary btn-lg btn-block text-light" type="submit">
                                            Pay Now
                                        </button>
                                </div><br>

                            </form>

                            {{-- <FORM METHOD="post" ACTION=“https://sbcheckout.payfort.com/FortAPI/paymentPage" id=form1 name=form1>
                              <INPUT type=“hidden” NAME=“service_command” value=“TOKENIZATION”>
                              <INPUT type=“hidden” NAME=“language” value=“ ”>
                              <INPUT type=“hidden” NAME=“merchant_identifier” value=“ ”>
                              <INPUT type=“hidden” NAME=“access_code” value=“ ”>
                              <INPUT type=“hidden” NAME=“signature” value=“ ”>
                              <INPUT type=“hidden” NAME=“return_url” value=“ ”>
                              <INPUT type=“hidden” NAME=“merchant_reference” value=“ ”>
                              <INPUT type=“hidden” NAME=“card_number” value=“ ”>
                              <INPUT type=“hidden” NAME=“expiry_date” value=“ ”>
                              <INPUT type=“hidden” NAME=“card_security_code” value=“ ”>
                              <INPUT type=“hidden” NAME=“card_holder_name” value=“ ”>
                              <INPUT type=“submit” value=“” id=“submit2” name=“ ”>
                            </form> --}}
                        </div>
                    </div>
                </div>
            </div>        
        </section>
    </main>




    @endsection