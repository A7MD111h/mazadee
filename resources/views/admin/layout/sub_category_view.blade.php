
{{-- @include('admin.includes.head')  --}}
{{-- @extends('admin.masterpage') --}}
{{-- @extends('admin.dashboard') --}}
@extends('admin.dashboard')

{{-- @section('right_top_button')
<a href="{{ route('dashboard') }}" class="btn-download">
    Home
</a>
@endsection
@section('title_nav')
Categories
@endsection --}}

@section('main_body')
Sub Category
@endsection



@section('main')

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Sub Category</h6>
            <button type="button" class="btn btn-danger m-2">Delete</button>

            <a href="{{ route('admin_sub_category_add')  }}">
                <button type="button" class="button">
                    <span class="button__text">Add New </span>
                    <span class="button__icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor" height="24" fill="none" class="svg"><line y2="19" y1="5" x2="12" x1="12"></line><line y2="12" y1="12" x2="19" x1="5"></line></svg></span>
                </button>
            </a>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-white">
                        <th scope="col" style="text-align: center"><input class="form-check-input" type="checkbox"></th>
                        <th scope="col" style="text-align: center" >#</th>
                        <th scope="col" style="text-align: center" >Photo</th>
                        <th scope="col" style="text-align: center">Sub Category Name</th>
                        <th scope="col" style="text-align: center">category Name</th>
                        <th scope="col" colspan="2" style="text-align: center">Action</th>
                    
                        
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach($sub_category as $row)
                    
                    <tr>
                        <td style="text-align: center"><input class="form-check-input" type="checkbox"></td>
                        <td class="colorUsers" style="text-align: center">{{$loop->iteration}}</td>

                        <td style="align-items: center;">@if($row->photo!='')
                            <div class="client-img bg-img" style="background-image: url({{ asset('uploads/'.$row->photo) }})">
                            @else
                                <img src="{{ asset('uploads/default.png') }}" class="client-img bg-img" alt="default" class="w_100">
                            </div>
                            @endif
                        </td>
                        <td class="colorUsers" style="text-align: center">{{ $row->name }}</td>
                        
                        <td class="colorUsers" style="text-align: center">{{$row->category->name}}</td>

                        <td style="text-align: center"><a class="btn btn-square btn-outline-primary m-2" href="{{ route('admin_sub_category_edit',$row->id ) }}"><i class="fa-regular fa-pen-to-square"></i></a></td>
                        
                        <td style=" display: flex; gap:  1em;">
                            
                            <form method="POST" action="{{ route('admin_sub_category_delete',$row->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure?');" class="btn btn-sm btn-primary">
                                    Delete
                                </button>
                            </form>
                            
                                @if($row->stock == 0)
                                    <a href="{{ route('admin_sub_category_change_stock',$row->id) }}" ><button class="btn btn-sm btn-success ">Available</button></a>
                                @else
                                    <a href="{{ route('admin_sub_category_change_stock',$row->id) }}" ><button class="btn btn-sm btn-primary">stock</button></a>
            
                                @endif
                            
                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div>
    </div>
</div>





@endsection
