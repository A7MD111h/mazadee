@extends('company.layout.master-page')

@section('content_company')

    <main>


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
                        <a href="profile">
                          My Bids
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
                                        <a href="profile" class="active">
                                            <i class="flaticon-hammer"></i>
                                            My Bids</a>
                                    </li>
                                    <li>
                                        <a href="company-profile">
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
                            <div class="my-bids start">
                                <div class="activity">
                                    <div class="title">
                                        <h4>My Activity</h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="item">
                                                <div class="image">
                                                    <img src="/img/bid01.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="content">
                                                    <div class="timer" data-to="80" data-speed="5000"></div>
                                                    <span>Active Bids</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="item">
                                                <div class="image">
                                                    <img src="/img/bid02.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="content">
                                                    <div class="timer" data-to="15" data-speed="5000"></div>
                                                    <span>Items Won</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="item">
                                                <div class="image">
                                                    <img src="/img/bid03.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="content">
                                                    <div class="timer" data-to="115" data-speed="5000"></div>
                                                    <span>Favorites</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav d-flex">
                                        <li class="nav-item">
                                            <a href="#upcoming" data-toggle="tab" class="upcoming nav-link active">Upcoming</a>
                                        </li>
                                        <li  class="nav-item">
                                            <a href="#past" data-toggle="tab" class="past nav-link">Last order</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="upcoming">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="auction-item">
                                                    <div class="image">
                                                        <a href="#">
                                                            <img src="/img/Michelin-Pilot-Sport-All-Season-4-UHP-All-Season-295-35R21-103V-Passenger-Tire_4f2a9690-0b37-46b6-b265-7c7ab20af4c0.bd1d46e64614fcf3743fbd3b01b31899-removebg-preview.png" width="5%" height="70%" alt="">
                                                        </a>
                                                        
                                                    
                                                    </div>
                                                    <div class="auction-content">
                                                        <h5>Michelin Tires 11435 Tires
                                                        </h5>
                                                        <div class="bid d-flex justify-content-between">
                                                            <div class="current-bid d-flex">
                                                                <i class="flaticon-hammer"></i>
                                                                <p class="d-flex flex-column">Price
                                                                    <span>$876.00</span>
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
                                                    <div class="time d-flex ">
                                                        <div class="countdown" data-countdown="10/31/2020 20:00" style="margin-left: 20%;"></div>
                                                    </div>
                                                    <div >
                                                        <a type="button" class="btn btn-primary" style="margin-left: 30%;" href="">Request Status</a>

                                                    </div>
                                                </div>
                                            </div>
                                            
                                        
                                            <div class="col-lg-6">
                                                <div class="auction-item">
                                                    <div class="image">
                                                        <a href="#">
                                                            <img src="/img/s-l500-removebg-preview.png" width="5%" height="70%" alt="">
                                                        </a>
                                                        
                                                    </div>
                                                    <div class="auction-content">
                                                        <h5>7 Inch Car Stereo Radio Bluetooth USB TF Touch Screen</h5>
                                                        <div class="bid d-flex justify-content-between">
                                                            <div class="current-bid d-flex">
                                                                <i class="flaticon-hammer"></i>
                                                                <p class="d-flex flex-column">Price
                                                                    <span>$876.00</span>
                                                                </p>
                                                            </div>
                                                            <div class="buy-now-price d-flex">
                                                                <i class="flaticon-date"></i>
                                                                <p class="d-flex flex-column">Date
                                                                    <span>2/1/2024</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="time d-flex ">
                                                        <div class="countdown" data-countdown="10/31/2020 20:00" style="margin-left: 20%;"></div>
                                                    </div>
                                                    <div >
                                                        <a type="button" class="btn btn-primary" style="margin-left:30%;" href="">Request Status</a>

                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="past">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="auction-item">
                                                    <div class="image">
                                                        <a href="#">
                                                            <img src="/img/61peYAD2-bL._AC_SL1500_-removebg-preview.png" width="5%" height="70%" alt="">
                                                        </a>
                                                    
                                                    </div>
                                                    <div class="auction-content">
                                                        <h5>Oil Car</h5>
                                                        <div class="bid d-flex justify-content-between">
                                                            
                                                            <div class="buy-now-price d-flex">
                                                                <i class="flaticon-money"></i>
                                                                <p class="d-flex flex-column">Price
                                                                    <span>$5000.00</span>
                                                                </p>
                                                            </div>
                                                            <div class="buy-now-price d-flex">
                                                                <i class="flaticon-money"></i>
                                                                <p class="d-flex flex-column">Date
                                                                    <span>2/1/2024</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div >
                                                        <a type="button" class="btn btn-primary" style="margin-left:30%;" href="">Request Status</a>

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
                </div>
        </section>


    </main>

@endsection

