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
                                            <img src="{{ asset($auc->subCategory->photo) }}" alt="">
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

                            {{-- <form action="" method="post">
                                @csrf
                                <div class="modal fade" id="bidModalCenter{{ $auc->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">
                                                    Submit a Bid</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div style="display: flex; justify-content: space-around">
                                                    <div>
                                                        <label>Category</label><br />
                                                        <label>Sub-Category</label><br />
                                                        <label>Quality</label><br />
                                                        <label>Budjet</label><br />
                                                        <label>Quantity</label><br />
                                                        <label>Last Price</label><br />
                                                        <label>Description</label><br />
                                                    </div>
                                                    <div>
                                                        <input type="text"
                                                            value="{{ $auc->subCategory->category->name }}"
                                                            readonly /><br />
                                                        <input type="text" value="{{ $auc->subCategory->name }}"
                                                            readonly /><br />
                                                        <input type="text" value="{{ $auc->quality }}"
                                                            readonly /><br />
                                                        <input type="number" value="{{ $auc->budjet }}"
                                                            readonly /><br />
                                                        <input type="number" value="{{ $auc->quantity }}"
                                                            readonly /><br />
                                                        @if ($auc->company_price != null)
                                                            <input type="number" value="{{ $auc->company_price }}"
                                                                readonly /><br />
                                                        @else
                                                            <input type="number" value="00" readonly /><br />
                                                        @endif
                                                        <textarea readonly>{{ $auc->description }}</textarea>
                                                    </div>
                                                </div>
                                                <div style="color:red;padding-left:25%;" class="countdown" data-creation-time="{{ $auc->created_at->toIso8601String() }}"></div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Bid</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form> --}}
                        @endforeach
                    @endforeach
                    {{-- <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="auction-item">
                            <div class="image">
                                <a href="auction-details.html">
                                    <img src="assets/img/auction-2.jpg" alt="">
                                </a>
                                <a href="#" class="star">
                                    <i class="far fa-star"></i>
                                </a>
                                <a href="#" class="hammer">
                                    <i class="flaticon-hammer"></i>
                                </a>
                            </div>
                            <div class="auction-content">
                                <h5>2018 Nissan Versa, S</h5>
                                <div class="bid d-flex justify-content-between">
                                    <div class="current-bid d-flex">
                                        <i class="flaticon-hammer"></i>
                                        <p class="d-flex flex-column">Current Bid
                                            <span>$876.00</span>
                                        </p>
                                    </div>
                                    <div class="buy-now-price d-flex">
                                        <i class="flaticon-money"></i>
                                        <p class="d-flex flex-column">Buy Now
                                            <span>$5000.00</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="time d-flex ">
                                <div class="countdown" data-countdown="10/31/2020 20:00"></div>
                                <span>30 Bids</span>
                            </div>
                            <div class="button text-center">
                                <a href="auction-details.html">Submit A Bid</a>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="auction-item">
                            <div class="image">
                                <a href="auction-details.html">
                                    <img src="assets/img/auction-3.jpg" alt="">
                                </a>
                                <a href="#" class="star">
                                    <i class="far fa-star"></i>
                                </a>
                                <a href="#" class="hammer">
                                    <i class="flaticon-hammer"></i>
                                </a>
                            </div>
                            <div class="auction-content">
                                <h5>2018 Honda Accord, Sport</h5>
                                <div class="bid d-flex justify-content-between">
                                    <div class="current-bid d-flex">
                                        <i class="flaticon-hammer"></i>
                                        <p class="d-flex flex-column">Current Bid
                                            <span>$876.00</span>
                                        </p>
                                    </div>
                                    <div class="buy-now-price d-flex">
                                        <i class="flaticon-money"></i>
                                        <p class="d-flex flex-column">Buy Now
                                            <span>$5000.00</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="time d-flex ">
                                <div class="countdown" data-countdown="10/31/2020 20:00"></div>
                                <span>30 Bids</span>
                            </div>
                            <div class="button text-center">
                                <a href="auction-details.html">Submit A Bid</a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
        <!-- End Car Auction -->



        <!-- Popular Auctions -->
        {{-- <section id="popular-auctions">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title text-center">
                            <h1 style="color: black;">Popular Auctions</h1>
                        </div>
                    </div>
                </div>
                <div class="popular-products" style="margin-bottom: 60px;">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="popular-item d-flex">
                                <div class="image">
                                    <a href="#">
                                        <img src="assets/img/popular-auction-1.jpg" alt="">
                                    </a>
                                    <a href="#" class="hammer">
                                        <i class="flaticon-hammer"></i>
                                    </a>
                                </div>
                                <div class="content text-center">
                                    <h5>
                                        <a href="#">Apple Macbook Pro Laptop</a>
                                    </h5>
                                    <div class="current-bid d-flex">
                                        <i class="flaticon-hammer"></i>
                                        <p class="d-flex flex-column">Current Bid
                                            <span>$876.00</span>
                                        </p>
                                    </div>
                                    <p class="total-bid">Total Bids :
                                        <span>130 Bids</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="popular-item d-flex">
                                <div class="image">
                                    <a href="#">
                                        <img src="assets/img/popular-auction-2.jpg" alt="">
                                    </a>
                                    <a href="#" class="hammer">
                                        <i class="flaticon-hammer"></i>
                                    </a>
                                </div>
                                <div class="content text-center">
                                    <h5>
                                        <a href="#">Canon EOS Rebel T6I Digital Camera</a>
                                    </h5>
                                    <div class="current-bid d-flex">
                                        <i class="flaticon-hammer"></i>
                                        <p class="d-flex flex-column">Current Bid
                                            <span>$876.00</span>
                                        </p>
                                    </div>
                                    <p class="total-bid">Total Bids :
                                        <span>130 Bids</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="popular-item d-flex">
                                <div class="image">
                                    <a href="#">
                                        <img src="assets/img/popular--auction-3.jpg" alt="">
                                    </a>
                                    <a href="#" class="hammer">
                                        <i class="flaticon-hammer"></i>
                                    </a>
                                </div>
                                <div class="content text-center">
                                    <h5>
                                        <a href="#">14k Gold Geneve Watch,24.5g</a>
                                    </h5>
                                    <div class="current-bid d-flex">
                                        <i class="flaticon-hammer"></i>
                                        <p class="d-flex flex-column">Current Bid
                                            <span>$876.00</span>
                                        </p>
                                    </div>
                                    <p class="total-bid">Total Bids :
                                        <span>130 Bids</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="popular-item d-flex">
                                <div class="image">
                                    <a href="#">
                                        <img src="assets/img/popular-auction-4.jpg" alt="">
                                    </a>
                                    <a href="#" class="hammer">
                                        <i class="flaticon-hammer"></i>
                                    </a>
                                </div>
                                <div class="content text-center">
                                    <h5>
                                        <a href="#">14K White Gold 185.60 Grams 5.95 Carats</a>
                                    </h5>
                                    <div class="current-bid d-flex">
                                        <i class="flaticon-hammer"></i>
                                        <p class="d-flex flex-column">Current Bid
                                            <span>$876.00</span>
                                        </p>
                                    </div>
                                    <p class="total-bid">Total Bids :
                                        <span>130 Bids</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="popular-item d-flex">
                                <div class="image">
                                    <a href="#">
                                        <img src="assets/img/popular-auction-5.jpg" alt="">
                                    </a>
                                    <a href="#" class="hammer">
                                        <i class="flaticon-hammer"></i>
                                    </a>
                                </div>
                                <div class="content text-center">
                                    <h5>
                                        <a href="#">2009 Toyota Prius (Medford, NY 11763)</a>
                                    </h5>
                                    <div class="current-bid d-flex">
                                        <i class="flaticon-hammer"></i>
                                        <p class="d-flex flex-column">Current Bid
                                            <span>$876.00</span>
                                        </p>
                                    </div>
                                    <p class="total-bid">Total Bids :
                                        <span>130 Bids</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="popular-item d-flex">
                                <div class="image">
                                    <a href="#">
                                        <img src="assets/img/popular-auction-6.jpg" alt="">
                                    </a>
                                    <a href="#" class="hammer">
                                        <i class="flaticon-hammer"></i>
                                    </a>
                                </div>
                                <div class="content text-center">
                                    <h5>
                                        <a href="#">.6 Gram Pure Gold Nugget</a>
                                    </h5>
                                    <div class="current-bid d-flex">
                                        <i class="flaticon-hammer"></i>
                                        <p class="d-flex flex-column">Current Bid
                                            <span>$876.00</span>
                                        </p>
                                    </div>
                                    <p class="total-bid">Total Bids :
                                        <span>130 Bids</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section> --}}
        <!-- End Popular Auctions -->


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