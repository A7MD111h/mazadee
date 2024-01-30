{{-- @include('admin.includes.head') --}}
{{-- @extends('admin.masterpage') --}}
{{-- @extends('admin.dashboard') --}}
@extends('admin.dashboard')

{{-- @section('right_top_button')
<a href="{{ route('view_Categories') }}" class="btn-download">
    View Category
</a>
@endsection --}}

@section('main_body')
Products 
<li><i class='bx bx-chevron-right' ></i></li>
<li>
    <a class="active" href="#">Add New Products</a>
</li>
@endsection

@section('main')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        
        <div class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Horizontal Form</h6>
                <form id="form" action="{{ route('admin_sub_category_store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Photo :</label>
                        <div class="col-sm-10">
                            <input class="form-control form-control-sm bg-dark" name="photo" value="{{ old('name') }}" id="formFileSm" type="file">
                            <div class="error">@error('photo'){{$message}}@enderror</div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Sub Category  Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" required="" value=" {{ old('name') }}" class="form-control" id="inputEmail3">
                            <div class="error">@error('name'){{$message}}@enderror</div>
                        </div>
                    </div>
                
                    <select class="form-select mb-3" aria-label="Default select example" name="category_id" >
                        <option selected>Select Category</option>
                        @foreach($category as $row)
                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                        @endforeach
                        
                    </select>
                   
                
                    
                    

                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
        
        
        
    
        
    </div>
</div>


@endsection
