@extends('layouts.other')

@section('title','Products')
@section('content')
        <div class="section-body">
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12">     
                        <!-- Best offers Section Start -->
                        <section class="progress-card mt-5">
                            <div class="container">
                            <h4 class="mt-2 mb-3"><img src="{{ asset('assets/img/fire.png')}}"> Best Offers</h4>
                            @foreach ($products as $product)
                            <div class="owl-carousel owl-theme ">         
                                <div  class="item">
                                         
                                    <div class="progress-card ">
                                            <div class="card p-3">
                                                <div class="prog-card-img rounded-lg">
                                                    <div class=" sale rounded-circle mt-2"><h4 class="text-white">SALE</h4></div>
                                                </div>  
                                                <div class="card-body">
                                                    <h5 class="progress-card-title text-center">${{$product->price}}</h5>
                                                    <div class="text-center"><span class="text-secondary">${{$product->price}}</span></div>
                                                    <h4 class="text-center">LED Monitor 24" With High Quality</h4>
                                                    <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="text-center"><span class="text-secondary">26 Left Stock</span></div>
                                                    <div class="text-center"><button type="button" class="btn add-button mt-4">Add To Card</button></div>
                                                </div>
                                            </div>
                                    </div>
                                    
                                </div> 
                              
                            </div> 
                            @endforeach 
                            </div>
                        </section>
                        <!-- Best offers Section End -->
                    </div>                
                </div>
            </div>
        </div>

      
    </div>
</div>

@endsection