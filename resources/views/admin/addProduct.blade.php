
@php
$flag = 0;
if(isset($product)) $flag=1;
@endphp
@extends('layouts.other')

@section('title', ' Add New Product')
@section('content')

        <div class="section-body">
            <div class="container-fluid">
                <div class="row">
                    @if (Session::has('success'))
                        {{Session::get('success')}}
                        @php
                            Session::forget('success');
                        @endphp
                    @endif
                    @if (count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $err)
                                <li>{{$err}}</li>
                            @endforeach
                        </div>
                    @endif
                    <div class="col-md-12 col-lg-12">
                        <form class="card" method="POST"  enctype="multipart/form-data" action="{{$flag? url('products/'.$product->id):url('products')}}">
                            @if($flag)
                                @method('put')
                            @endif
                            @csrf
                            <div class="card-body">
                                <h3>{{$flag ? ' Edit Product' : 'Add New Product'}} </h3>
                                <hr /><br />
                                <div class="row">
                                    <div class="col-sm-5 col-md-5">
                                        <div class="form-group">
                                            <label class="form-label">Product Name</label>
                                            <input type="text" class="form-control" name="name" value="{{ $flag ? $product->name : ''}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Category</label>
                                            <select class="form-control custom-select" name="category_id" value="{{ $flag ? $product->category_id : ''}}">
                                            <option value="">Choose ....</option>
                                                @foreach($categories as $category )
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-md-3">
                                        <div class="form-group">
                                            <label class="form-label">Image</label>
                                            <input id="Upload" type="file" class="form-control" name="image" value="{{ $flag ? $product->image : ''}}">
                                        </div>
                                    </div>

                            
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">price</label>
                                            <input type="number" class="form-control" name="price" value="{{ $flag ? $product->price : ''}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary">{{$flag ? ' Edit' : ' Save'}} </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection
