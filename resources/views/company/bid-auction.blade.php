@extends('company.layout.master-page')

@section('content_company')

    <main>

        <!-- Car Auction -->
        <section id="car-auction" style="padding-top: 20%">
            {{-- <form method="post" action="{{url('addbid')}}"> --}}
            <div class="container">
                <div class="row">
                    <div style="width:60%;margin-left:auto;margin-right:auto">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif
                    </div>
                    <div class="col-lg-12">
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
                                <input type="text" value="{{ $auction->subCategory->category->name }}"
                                    readonly /><br />
                                <input type="text" value="{{ $auction->subCategory->name }}" readonly /><br />
                                <input type="text" value="{{ $auction->quality }}" readonly /><br />
                                <input type="number" value="{{ $auction->budjet }}" readonly /><br />
                                <input type="number" value="{{ $auction->quantity }}" readonly /><br />
                                @if ($auction->company_price != null)
                                    <input type="number" value="{{ $auction->company_price }}" readonly /><br />
                                @else
                                    <input type="number" value="00" readonly /><br />
                                @endif
                                <textarea readonly>{{ $auction->description }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div style="color:red;text-align:center" class="col-lg-12 countdown"
                        data-creation-time="{{ $auction->created_at->toIso8601String() }}"></div>
                </div>
                <div class="modal-footer">
                    <a href="{{ url('/home') }}">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel </button></a>
                    <button type="submit" class="btn btn-primary" id="bidBtn">Bid</button>
                </div>
            </div>
            <form action="{{url('addbid', $auction->id)}}" method="post" id="bidForm" style="display: none">
                @csrf
                <div style="display: flex; justify-content: space-between;width:50%;margin-left:auto;margin-right:auto">
                    <div>
                        <label >Price</label>
                    </div>
                    <div>
                        <input type="text" name="company_price"/>
                    </div>
                </div>
                <div style="width:73%;margin-left:auto;margin-right:auto;text-align:right">
                    <a href="{{ url('/home') }}">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel </button></a>
                    <button type="submit" class="btn btn-primary" id="bidBtn">Bid</button>
                </div>
            </form>
            {{-- </form> --}}
        </section>

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
