@extends('layouts.other')

@section('title','carts')
@section('content')
        <div class="section-body">
            <div class="container-fluid">
             <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="table-responsive mb-4">
                            <table class="table table-hover js-basic-example dataTable table_custom spacing5">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>quantity</th>
                                        <th>product_name </th>
                                        <th>actions</th>
                                    </tr>
                                </thead>
                          
                                <tbody>
                                    
                                      @foreach ($carts as $cart)
                                      @if (Auth::user()->id != $cart->user_id)
                                        <tr>
                                            <td colspan="4" class="text-center">No Products on cart</td>
                                        </tr>
                                    @else
                                        <tr>
                                            <td>{{$cart->id}}</td>
                                            <td>{{$cart->quantity}}</td>
                                            <td>{{$cart->product }}</td>
                                            <td>         
                                                <button type="button" data-id="{{$cart->id}}" class="btn btn-success" data-toggle="modal" data-target="#editQuantity">edit quantity</button>
                                                <button type="button" data-id="{{$cart->id}}" class="btn btn-danger" data-toggle="modal" data-target="#deleteModalcart">delete</button>   
                                            </td>
                                        </tr>
                                        @endif
                                      @endforeach
                                   
                                </tbody>
                            </table>                        
                        </div>
                    </div>                
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Delete Modal -->
    <div class="modal fade" id="deleteModalcart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are You Sure To Delete This Item ?</p>
                </div>
                <div class="modal-footer">
                    <form id="deleteForm" action="" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Confirm </button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>   

<!--Edit Modal -->
<div class="modal fade" id="editQuantity" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="addForm">
                    @method('PUT')
                    @csrf
                    <div class="col-md-12">
                        <label>quantity</label>
                        <input type="number" name="quantity" class="form-control" />
                    </div>
                    <br />
                    <hr/>
                    <button type="submit" class="btn btn-success">Confirm</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>  

@endsection