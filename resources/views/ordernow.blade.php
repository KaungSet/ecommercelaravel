@extends('master')
@section("content")
<div class="container">



<div class="custom-product">
 <div class="col-sm-10">

   



    <table class="table">

        <tbody>
          <tr>
            <td>Amount</td>
            <td>${{ $total }}</td>

        </tr>
        <tr>
            <td>Tax</td>
            <td>$ 0</td>

        </tr>
        <tr>
            <td>Delivery</td>
            <td>$ 10</td>

        </tr>
        <tr>
            <td>Total Amount</td>
            <td>${{ $total +10}}</td>

        </tr>
    </tbody>
</table>
<div>


    <form action="/orderplace" method="POST">
        @csrf
        
        <div class="form-group">
            <textarea name="address" class="form-control" placeholder="enter your address"></textarea>
        </div>
        <div class="form-group">
            <label for="pwd">Payment method</label><br><br>
            <div class="form-check">
                <input value="cash" class="form-check-input" type="radio" name="payment" >
                <label class="form-check-label" for="exampleRadios2">Online Payment</label>

            </div>
            <div class="form-check">
                <input value="cash" class="form-check-input" type="radio" name="payment" >
                <label class="form-check-label" for="exampleRadios2">EMI Payment</label>

            </div>
            <div class="form-check">
                <input value="cash" class="form-check-input" type="radio" name="payment" >
                <label class="form-check-label" for="exampleRadios2">Payment on Delivery</label>

            </div>
        </div>

        <button type="submit" class="btn btn-default">Order Now</button>
    </form>
</div>


</div>
</div>

</div>
@endsection 