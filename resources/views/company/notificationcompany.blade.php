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
                        {{-- <a href="notificationcompany"> --}}
                        My Notification
                        {{-- </a> --}}
                    </li>
                </ul>
            </div>
            <div class="bg-image" style="background-image: url(/img/OIP.jpg)">

            </div>
        </section>

        <section id="contact-form">
            <div class="container ">
                <div class="bg">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header text-center">

                                <h1> My Notification </h1>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">

                            <div class="container">
                                <header>
                                    <div class="notif_box">
                                        <h2 class="title">Notifications</h2>
                                        <span
                                            id="notifes">{{ auth('companies')->user()->unreadNotifications->count() }}</span>
                                    </div>
                                    <a href="{{url('readAllNotificationCompany')}}">
                                        <p id="mark_all">Mark all as read</p>
                                    </a>
                                </header>

                                {{-- <div class="notif_card unread">
                                        <img src="/img/OIP__2_-removebg-preview.png" alt="avatar" id=img1 />
                                        <div class="description">
                                            <p class="user_activity">
                                                <strong>Congratulations,you are the winning bidder</strong>
                                            </p>
                                            <p class="time"></p>
                                        </div>
                                    </div> --}}
                                @foreach (auth('companies')->user()->unreadNotifications as $notification)
                                    <div class="notif_card unread">
                                        <img src="/img/R__2_-removebg-preview.png" alt="avatar" id=img2 />
                                        <div class="description">
                                            <p class="user_activity">
                                                <strong>Congratulations,you are the winning bidder</strong>
                                            </p>
                                            <p class="time">{{ $notification->created_at }}</p>
                                        </div>
                                    </div>
                                @endforeach

                                {{-- <div class="notif_card">
          <img src="/img/R__2_-removebg-preview.png" alt="avatar" id=img3 />
          <div class="description">
            <p class="user_activity">
              <strong>Congratulations,you are the winning bidder</strong> 
            </p>
            <p class="time">2 weeks ago</p>
          </div>
        </div> --}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
