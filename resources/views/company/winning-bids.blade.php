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
                        <div class="user-menu">
                            <div class="user">
                                <div class="image">
                                <img src="/img/companyname.jpg" alt="">
                                    <label for="user-photo">
                                        <i class="fas fa-pencil-alt"></i>
                                    </label>
                                    <input type="file" id="user-photo" class="d-none">
                                </div>
                                <div class="content">
                                    <h4>
                                        Auto Car
                                    </h4>
                                    <span>car@gmail.com</span>
                                </div>
                            </div>
                            <ul class="menu">
                                <li>
                                    <a href="profile">
                                        <i class="flaticon-hammer"></i>
                                        My Bids</a>
                                </li>
                                <li>
                                    <a href="company-profile" class="active">
                                        <i class="flaticon-settings"></i>
                                        Company Profile </a>
                                </li>
                                <li>
                                    <a href="winning-bids">
                                        <i class="flaticon-best-seller"></i>
                                        Winning Bids</a>
                                </li>
                              
                                <li>
                                    <a href="referrals">
                                        <i class="flaticon-shake-hand"></i>
                                        Referrals</a>
                                </li>
                                
                            </ul>
                        </div>
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
                                <div class="col-lg-6">
                                    <div class="auction-item">
                                        <div class="image">
                                            <a href="#">
                                            <img src="/img/Michelin-Pilot-Sport-All-Season-4-UHP-All-Season-295-35R21-103V-Passenger-Tire_4f2a9690-0b37-46b6-b265-7c7ab20af4c0.bd1d46e64614fcf3743fbd3b01b31899-removebg-preview.png" width="5%" height="70%" alt="">
                                            </a>
                                            <a href="#" class="star">
                                                <i class="far fa-star"></i>
                                            </a>
                                            <a href="#" class="hammer">
                                                <i class="flaticon-hammer"></i>
                                            </a>
                                        </div>
                                        <div class="auction-content">
                                        <h5>#id:1</h5>

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
                                        <div class="button text-center mt-3 ">
                                        <a href="code">Code </a>
                                        </div>
                                    </div>
                                </div>
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

