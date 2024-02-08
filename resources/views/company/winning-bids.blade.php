@extends('company.layout.master-page')

@section('content_company')


    <main>
        <!-- Breadcrumb -->
        <section id="breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li>
                        <a href="home">
                            Home
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </li>
                    <li>
                        <a href="winning-bids">
                            Winning Bids
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bg-image" style="background-image: url(/img/OIP.jpg)">

            </div>
        </section>
        <!-- End Breadcrumb -->
        <section id="dashboard">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        @include('company.layout.company-menu')
                    </div>
                    <div class="col-lg-8">
                        <div class="winning-bids">
                            <div class="header">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="title">
                                            <h3>Winning Bids</h3>
                                        </div>
                                        <div class="search d-flex justify-content-between">
                                            <form action="#">
                                                <input type="text" placeholder="Item Name">
                                                <button>
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </form>
                                            <div class="sort d-flex align-items-center">
                                                <div class="name">
                                                    <span>Sort By :</span>
                                                </div>
                                                <div class="sort-by">
                                                    <select class="form-control">
                                                        <option value="all">All</option>
                                                        <option value="a-z">A-Z</option>
                                                        <option value="date">Date</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                @foreach ($oldAuctions as $auction)
                                    <div class="col-lg-6">
                                        <div class="auction-item">
                                            <div class="image">
                                                <a href="#">
                                                <img src="{{ asset('uploads/'.$auction->subCategory->photo) }}" width="5%" height="70%" alt="">
                                                </a>
                                                <a href="#" class="star">
                                                    <i class="far fa-star"></i>
                                                </a>
                                                <a href="#" class="hammer">
                                                    <i class="flaticon-hammer"></i>
                                                </a>
                                            </div>
                                            <div class="auction-content">
                                            <h5>{{ $auction->subCategory->category->name }}</h5>

                                                <h5>{{ $auction->subCategory->name }}</h5>
                                                <div class="bid d-flex justify-content-between">
                                                    <div class="buy-now-price d-flex">
                                                        <i class="flaticon-money"></i>
                                                        <p class="d-flex flex-column">Sold
                                                            <span>{{ $auction->company_price }}</span>
                                                        </p>
                                                    </div>

                                                    <div class="buy-now-price d-flex">
                                                                <i class="flaticon-date"></i>
                                                                <p class="d-flex flex-column">status
                                                                    <span>{{ $auction->status }}</span>
                                                                </p>
                                                            </div>
                                                </div>
                                                
                                            </div>
                                            <div class="button text-center mt-3">
                                                <a href="code">Code </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-lg-6">
                                    <div class="auction-item">
                                        <div class="image">
                                            <a href="#">
                                            <img src="/img/s-l500-removebg-preview.png" width="5%" height="70%" alt="">
                                            </a>
                                            <a href="#" class="star">
                                                <i class="far fa-star"></i>
                                            </a>
                                            <a href="#" class="hammer">
                                                <i class="flaticon-hammer"></i>
                                            </a>
                                        </div>
                                        <div class="auction-content">
                                        <h5>#id :2</h5>

                                            <h5>2019 Mercedes-Benz C, 300</h5>
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
                                        <div class="button text-center mt-3">
                                            <a href="code">Code </a>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>



@endsection

