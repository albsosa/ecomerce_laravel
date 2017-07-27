@extends('layout.main')

@section('content')
    <section class="hero text-center">
        <br/>
        <br/>
        <br/>
        <br/>
        <h2>
            <strong>
                Hey! Welcome to Realaser Store
            </strong>
        </h2>
        <br>
         <a href="{{url('/shirts')}}">
            <button class="button large">Check out My Shirts</button>
        </a>
    </section>
    <br/>
    <div class="subheader text-center">
        <h2>
            MyKey&rsquo;s Latest Shirts
        </h2>
    </div>

@endsection