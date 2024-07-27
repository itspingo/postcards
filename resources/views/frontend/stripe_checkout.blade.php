<form method="post" action="{{route('frontend.stripe.checkout')}}" >
    @csrf
    <button type="submit">Checkout</button>
    
</form>