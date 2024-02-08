@extends('company.layout.master-page')

@section('content_company')



    <main>
        <!-- Breadcrumb -->
        <section id="breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li>
                        <a href="{{ url('/home') }}">
                            Home
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/winning-bids') }}">
                            Winning Bids
                            <i class="flaticon-right-arrow"></i>

                        </a>
                    </li>
                    <li>
                        <a href="{{ route('company_code') }}">
                            Code            
                         </a>
                    </li>
                </ul>
            </div>
            <div class="bg-image" style="background-image: url(/img/OIP.jpg)">

            </div>
        </section>

        <section id="dashboard">
            <div class="container">
                <div class="row">
                  
                    <div class="col-lg-8">
                        <div class="winning-bids">
                           
                            <div style="width:100% ;margin-left:50%">
                                <form method="POST" action="{{route('company_codes')}}">
                                    @csrf
                                    <div class="col-lg-6">
                                        <div class="auction-item">
                                        
                                            <div class="auction-content" >
                                                <h5>2020 Hyundai Elantra, Sel</h5>
                                                <div class="bid d-flex justify-content-between">
                                                    <div class="buy-now-price d-flex">
                                                        <i class="flaticon-money"></i>
                                                        <p class="d-flex flex-column">Sold
                                                            <span>$5000.00</span>
                                                        </p>
                                                    </div>
                                                    <div class="buy-now-price d-flex">
                                                                <i class="flaticon-date"></i>
                                                                <p class="d-flex flex-column">Date
                                                                    <span>1/1/2024</span>
                                                                </p>
                                                            </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div >
                                            <input type="text" name="code" placeholder="Check Code" style="width:100%;text-align:center"> 
                                        </div>
                                        <br>
                                            {{-- <div class="bid d-flex justify-content-between"> --}}
                                                <button type="submit" class="btn btn-success" href="#">Accept</button>
                                                {{-- <a type="button" class="btn btn-danger " style="margin-left: 40%;" href="winning-bids">Cancel</a> --}}
                                            {{-- </div> --}}
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


@endsection


