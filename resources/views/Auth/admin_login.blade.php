<!-- head -->
@include('admin.includes.head') 
<!-- head -->

    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> 
        
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Login Admin </h6>
                @if (count($errors) >0)
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <i class="fa fa-exclamation-circle me-2"></i>
                            @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        {{-- <div class="alert alert-danger"  >
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div> --}}
                        <script>
                            var milliseconds = 5000;
                            setTimeout(function () {
                                document.getElementById('danger-alert').remove();
                            }, milliseconds);
                        </script>
                    @endif
                    @if (\Session::has('success'))
                            {{-- <div class="alert alert-success  popupss" id="success-alert">
                                <p>{{ \Session::get('success') }}</p>
                                <div class="line"></div>
                            </div> --}}
                            <div class="alert alert-success alert-dismissible fade show" role="alert" id="success-alert">
                                <i class="fa-solid fa-circle-check" style="color: #3AA856;"></i></i>{{ \Session::get('success') }}
                                    
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div> 
                        <script>
                            var milliseconds = 3000;
                            setTimeout(function () {
                                document.getElementById('success-alert').remove();
                            }, milliseconds);
                        </script>
                    @endif
                    <form action="{{ route('admin_login_dashboard')}}" method="POST">
                        @csrf
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" name="username" value="{{ old('username') }}">
                            <div id="emailHelp" class="error">@error('username'){{$message}}@enderror</div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label" >Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="password" id="inputPassword3">
                            <div id="emailHelp" class="error">@error('password'){{$message}}@enderror</div>
                        </div>
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
                <a href="{{route('admin_signin')}}">sign in</a>
            </div>
        </div>


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    @include('admin.includes.scripts_footer')
    @include('admin.includes.footer')

@if (\Session::has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert" id="success-alert">
<i class="fa-solid fa-circle-check" style="color: #3AA856;"></i></i>{{ \Session::get('success') }}
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> 
<script>
var milliseconds = 3000;
setTimeout(function () {
document.getElementById('success-alert').remove();
}, milliseconds);
</script>
@endif