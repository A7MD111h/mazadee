@extends('layouts.app-master')

@section('content')
    {{-- 
        @auth
            <h1>Dashboard</h1>
        @endauth --}}
       
        {{-- @guest
        @endguest --}}
        
    
        <main>
            <!-- Breadcrumb -->
            <section id="breadcrumb">
                <div class="container">
                    <ul class="breadcrumb">
                        <li>
                            <a href="/" style="color: black;">
                                Home
                                <i class="flaticon-right-arrow"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('subCategory', $subCategory->category_id) }}" style="color: black;">
                                {{ $subCategory->category->name }}
                                <i class="flaticon-right-arrow" style="color: #000"></i>
                            </a>
                        </li>
                        <li>
                            {{ $subCategory->name }}
                            </a>
                        </li>
                    </ul>
                </div>
                {{-- <div class="bg-image" style="background-image: url(/img/OIP.jpg);"> --}}
    
                </div>
            </section>
            <!-- End Breadcrumb -->
            <section id="details" class="mb-5" style="background-image: url(/img/OIP.jpg);background-size: cover">
                <div class="container"><br>
                    <h1 style="text-align: center;">Auction Details</h1>
    
    
                    <div class="details-bid" style="padding-bottom:5%">
                        <div class="row" >
                            <div class="col-lg-6"  style="display:flex; justify-content: left; align-items: center">
                                <img src="{{ asset($subCategory->photo) }}" alt="sub-category photo" width="80%" />
                            </div>
                            <div class="col-lg-6">
    
                                <form action="{{ url('createAuction') }}" method="post"
                                    style="padding:2% 6%; align-items: center; box-shadow:3px 3px 3px 3px #111111; background-color: whitesmoke;">
                                    @csrf
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
                                    <br>
                                    <div style="display: flex; justify-content: space-between;">
                                        <div class="form-group" style="width:48%">
                                            <label for="exampleFormControlSelect1"
                                                style="color: black; font-size: larger;font-weight: bold;"> Category
                                            </label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                                value="{{ $subCategory->category->name }}" name="category" readonly>
                                            @error('category')
                                                <div class="alert alert-danger" role="alert" style="width: 100%">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group" style="width:48%">
                                            <label for="exampleFormControlSelect1"
                                                style="color: black; font-size: larger;font-weight: bold;">Sub-Category
                                            </label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                                value="{{ $subCategory->name }}" name="name" readonly>
                                            @error('name')
                                                <div class="alert alert-danger" role="alert" style="width: 100%">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1"
                                            style="color: black; font-size: larger;font-weight: bold;"> Quality </label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="quality"
                                            value="{{ old('quality') }}">
                                            <option value="Quality" selected disabled>Select Quality</option>
                                            <option value="High">High</option>
                                            <option value="Medium">Medium</option>
                                            <option value="Low">Low</option>
                                        </select>
                                        @error('quality')
                                            <div class="alert alert-danger" role="alert" style="width: 100%">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1"
                                            style="color: black;font-size: larger;font-weight: bold;"> Budjet </label>
                                        <input type="number" class="form-control" id="exampleFormControlInput1"
                                            placeholder="Enter Budjet.." name="budjet" step="any"
                                            value="{{ old('budjet') }}">
                                        @error('budjet')
                                            <div class="alert alert-danger" role="alert" style="width: 100%">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1"
                                            style="color: black;font-size: larger;font-weight: bold;"> City </label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="city"
                                            value="{{ old('city') }}">
                                            <option value="City" selected disabled>Select City</option>
                                            <option value="Amman">Amman</option>
                                            <option value="Ajloun">Ajloun</option>
                                            <option value="Aqaba">Aqaba</option>
                                            <option value="Balqa">Balqa</option>
                                            <option value="Irbid">Irbid</option>
                                            <option value="Jerash">Jerash</option>
                                            <option value="Karak">Karak</option>
                                            <option value="Ma'an">Ma'an</option>
                                            <option value="Madaba">Madaba</option>
                                            <option value="Mafraq">Mafraq</option>
                                            <option value="Tafilah">Tafilah</option>
                                            <option value="Zarqa">Zarqa</option>
                                        </select>
                                        @error('city')
                                            <div class="alert alert-danger" role="alert" style="width: 100%">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
    
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1"
                                            style="color: black;font-size: larger;font-weight: bold;">Quantity</label>
                                        <input type="number" class="form-control" id="exampleFormControlInput1"
                                            placeholder="Enter Number.." name="quantity" min="1"
                                            value="{{ old('quantity') }}">
                                        @error('quantity')
                                            <div class="alert alert-danger" role="alert" style="width: 100%">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1"
                                            style="color: black;font-size: larger;font-weight: bold;">Description</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Description.."
                                            name="description" value="{{ old('description') }}"></textarea>
                                        @error('description')
                                            <div class="alert alert-danger" role="alert" style="width: 100%">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
    
                                    <div>
                                        <button class="btn btn-primary btn-lg btn-block text-light" type="submit">Start
                                            Auction </button>
                                    </div><br>
                                </form>
    
                            </div>
                            
                        </div>
                    </div>
                </div>
    
    
            </section>
    
        </main>

@endsection