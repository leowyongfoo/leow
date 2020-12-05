@extends('layouts.app')
@section('content') 

<div class="col-md-12">
            <div class="card border-0">
                 <div class="row">
                @foreach($products as $product)
                        <div class="col-sm-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">{{$product->name}}</h5>
                                    <a href="#"><img src="{{ asset('images/') }}/{{$product->image}}" alt="" class="img-fluid" ></a>
                                    
                                    <div class="card-heading">RM{{$product->price}} 
                                        <button style="float:right;" class="btn btn-danger btn-xs"><a href="#">add to cart</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach       
                    </div>
                      
                <div class="card card-footer">&copy; 2020</div>
                <div class="col-sm-0">{{ $products->links()}}</div>  
                
            </div>
         </div>
      
    @endsection