@extends('layouts.other')

@section('title','Products')
@section('content')
        <div class="section-body">
            <div class="container-fluid">
            @if(auth()->user()->hasRole('admin'))
            <a href="products/create" class="btn btn-danger btn-block"> Add New Products </a><br />
            @endif
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="table-responsive mb-4">
                            <table class="table table-hover js-basic-example dataTable table_custom spacing5">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>name</th>
                                        <th>image</th>
                                        <th>code</th>
                                        <th>price</th>
                                        <th>category_name</th>
                                        <th>actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($products)==0)
                                        <tr>
                                            <td colspan="6" class="text-center">No Products</td>
                                        </tr>
                                    @else
                                        @foreach ($products as $product)
                                        <tr>
                                            <td>{{$product->id}}</td>
                                            <td>{{$product->name}}</td>
                                            <td>
                                                <a href="{{asset('img/'.$product->image)}}" target="_blank"><img src="{{asset('img/'.$product->image)}}" width="80px" height="80px"/></a>
                                            </td>
                                            <td>{{$product->SKE}}</td>
                                            <td>{{$product->price}}</td>
                                            <td>{{$product->category['name']}}</td>
                                            <td>
                                                @if(auth()->user()->hasRole('customer'))
                                                <a href="{{url('products/'.$product->id)}}" class="btn btn-success"><i class="fa fa-shopping-cart"></i></a> 
                                                @endif
                                                @if(auth()->user()->hasRole('admin'))
                                                <a href="{{url('products/'.$product->id.'/edit')}}" class="btn btn-secondary">edit</a>
                                                @endif

                                                @if(auth()->user()->hasRole('admin'))
                                                <button type="button" data-id="{{$product->id}}" class="btn btn-danger" data-toggle="modal" data-target="#deleteModalproduct">delete</button> 
                                                @endif

                                            </td>
                                        </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        
                        </div>
                        
                    </div>                
                </div>
            </div>
        </div>

      
    </div>
</div>

<!-- Modal -->
    <div class="modal fade" id="deleteModalproduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">حذف عنصر</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>هل أنت متأكد من حذف هذا العنصر ؟</p>
            </div>
            <div class="modal-footer">
                <form id="deleteForm" action="" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">تأكيد الحذف</button>
                </form>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
            </div>
        </div>
    </div>
</div>   

@endsection