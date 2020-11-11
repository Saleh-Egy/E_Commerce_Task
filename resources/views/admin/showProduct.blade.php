@extends('layouts.header')

@section('title','Products')
@section('content')
        <div class="section-body">
            <div class="container-fluid">
              <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="table-responsive mb-4">
                            <table class="table table-hover dataTable table_custom spacing5">
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
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>name</th>
                                        <th>image</th>
                                        <th>code</th>
                                        <th>price</th>
                                        <th>category_name</th>
                                        <th>actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
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
                                                <a href="{{url('products')}}" class="btn btn-danger">عرض الكل</a>                                   
                                                <a href="{{url('products/'.$product->id.'/edit')}}" class="btn btn-secondary">تعديل</a>
                                                {{-- <button type="button" data-id="{{$product->id}}" class="btn btn-success" data-toggle="modal" data-target="#disableModaldelegate">{{$delegat->temp_disable==1 ? 'تم التعطيل': 'تعطيل مؤقت'}}</button>
                                                <button type="button" data-id="{{$product->id}}" class="btn btn-success" data-toggle="modal" data-target="#deleteModaldelegate">حذف</button>
                                                 --}}
                                            </td>
                                    </tr>
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
    <div class="modal fade" id="deleteModaldelegate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

<!-- Disable Modal -->
    <div class="modal fade" id="disableModaldelegate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">تعطيل مؤقت</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>هل أنت متأكد من تعطيل هذا المندوب ؟</p>
            </div>
            <div class="modal-footer">
                <form id="activeDelegate" action="" method="POST">
                    @csrf
                    @method('POST')
                    <button type="submit" class="btn btn-danger">تأكيد</button>
                </form>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
            </div>
        </div>
    </div>
</div> 

@endsection