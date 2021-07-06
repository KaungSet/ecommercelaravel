@extends('master')
@section("content")
<div class="container"> 
    <div class="custom-product">
       <div class="col-sm-12">
         <div class="row mb-5">
                <h1 class="font-weight-bold "><ins>My Orders</ins></h1>
            </div>
        <div class="trending-wrapper">

            

            @foreach($orders as $item)
            <div class=" row searched-item cart-list-devider">
               <div class="col-sm-5">
                <a href="detail/{{$item->id}}">
                    <img class="trending-image" src="{{$item->gallery}}">
                </a>
            </div>
            <div class="col-sm-5">
                <div class="">
                  <h2>Name : {{$item->name}}</h2>
                  <h5>Delivery Status : {{$item->status}}</h5>
                  <h5>Address : {{$item->address}}</h5>
                  <h5>Payment Status : {{$item->payment_status}}</h5>
                  <h5>Payment method : {{$item->payment_method}}</h5>
              </div>
          </div>


      </div>
      @endforeach

  </div>

</div>
</div>
</div>
@endsection 