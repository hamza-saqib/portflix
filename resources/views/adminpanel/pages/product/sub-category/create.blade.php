@extends('adminpanel.layouts.master')

@section('title-meta')
    <title>{{ env('APP_NAME', 'Admin') }} | Product Category Create</title>

    <meta name="description" content="this is description">
@endsection

@section('other-css')
@endsection

@section('content')
    <div id="page-wrapper" class="gray-bg">

        <div class="row border-bottom">
            @include('adminpanel.partials.header')
        </div>

        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-sm-4">
                <h2>Product Sub Category Management</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Sub Category</a>
                    </li>
                    <li class="active">
                        <strong>Create</strong>
                    </li>
                </ol>
            </div>
            <div class="col-sm-8">
                <div class="title-action">
                    <a href="{{ route('admin.product.sub-category.index') }}" class="btn btn-primary">Show List</a>
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content ">

            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">

                        <div class="ibox-title">
                            <h5>Product Category <small>from here you can create your new product category.</small></h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>

                        <div class="ibox-content">
                            <form method="POST" action="{{ route('admin.product.sub-category.store') }}" class="form-horizontal"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="form-group  ">

                                    <label class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10 @error('name') has-error @enderror ">
                                        <input id="" name="name" type="text"  class="form-control"
                                            value="{{ old('name') }}">
                                        @error('name')
                                            <span class="help-block m-b-none">{{$message}}</span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="form-group  ">

                                    <label class="col-sm-2 control-label">Main Category</label>
                                    <div class="col-sm-10 @error('product_category_id') has-error @enderror ">
                                        <select class="form-control" name="product_category_id" required>
                                            <option selected disabled>Select</option>
                                            @foreach ($productCategories as $productCategorie)
                                                <option value="{{$productCategorie->id}}" >{{$productCategorie->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>

                                <div class="hr-line-dashed"></div>


                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        {{-- <button class="btn btn-white" type="submit">Cancel</button> --}}
                                        <button class="btn btn-primary" type="submit">Save</button>
                                    </div>
                                </div>



                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        @include('adminpanel.partials.footer')

    </div>
@endsection


@section('custom-script')
    <script>
        $(document).ready(function() {

            $('.summernote').summernote();

        });

        var edit = function() {
            $('.click2edit').summernote({
                focus: true
            });
        };
        var save = function() {
            var aHTML = $('.click2edit').code(); //save HTML If you need(aHTML: array).
            $('.click2edit').destroy();
        };
    </script>
@endsection
