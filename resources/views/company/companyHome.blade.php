@extends('company.layout.master-page')

@section('content_company')

    <main>

        <!-- Car Auction -->
        <section id="car-auction">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 header d-flex justify-content-between">
                        <div class="title d-flex">
                            <img src="{{ asset($company->photo) }}" alt="">
                            <div class="text" style="margin: auto;">
                                <h1>{{ $company->name }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">

                    @foreach ($auctions as $auction)
                        @foreach ($auction as $auc)
                            <div class="col-lg-4 col-md-6 col-sm-10">
                                <div class="auction-item">
                                    <div class="image">
                                        <a href="auction-details.html">
                                            <img src="{{ asset('uploads/'.$auc->subCategory->photo) }}" alt="">
                                        </a>
                                        {{-- <a href="#" class="star">
                                    <i class="far fa-star"></i>
                                </a> --}}
                                        <a href="#" class="hammer">
                                            <i class="flaticon-hammer"></i>
                                        </a>
                                    </div>
                                    <div class="auction-content">
                                        <h5>{{ $auc->subCategory->name }}</h5>
                                        <div class="bid d-flex justify-content-between">
                                            <div class="current-bid d-flex">
                                                <i class="flaticon-hammer"></i>
                                                <p class="d-flex flex-column">Current Bid
                                                    <span>{{ $auc->company_price }}</span>
                                                </p>
                                            </div>
                                            <div class="buy-now-price d-flex">
                                                <i class="flaticon-money"></i>
                                                <p class="d-flex flex-column">Budjet
                                                    <span>{{ $auc->budjet }}</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="time d-flex ">
                                <div class="countdown" data-countdown="10/31/2020 20:00"></div>
                                <span>30 Bids</span>
                            </div> --}}
                                    <div class="button text-center">
                                        {{-- <form action="  " method="get"> --}}
                                            <a href="{{url ('submit-a-bid', $auc->id)}}" 
                                            {{-- data-toggle="modal" data-target="#bidModalCenter{{ $auc->id }}" --}}
                                            >Submit A Bid</a>
                                        {{-- </form> --}}
                                    </div>
                                </div>
                            </div>

                            
                        @endforeach
                    @endforeach
                    
                </div>
            </div>
        </section>
        <!-- End Car Auction -->



        


        <!-- How It Works -->
        <section id="how-it-works">
            <div class="container bg">
                <div class="title">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>How It Works</h1>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <div class="image">
                                <img src="/img/OIP__1_-removebg-preview.png" class="img-fluid" alt="">
                            </div>
                            <div class="content">
                                <h3>Sign Up</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <div class="image">
                                <img src="/img/3815759-removebg-preview.png" width="70%" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="content">
                                <h3>Bid</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <div class="image">
                                <img src="/img/how3.png" class="img-fluid" alt="">
                            </div>
                            <div class="content">
                                <h3>Win</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End How It Works -->

    </main>
@endsection