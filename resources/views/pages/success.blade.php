@extends('layouts.success')

@section('title','Success')

@section('content')
       <main>
            <div class="section-success d-flex align-items-center">
                <div class="col text-center">
                <img src="{{ url('./frontend/images/SXSXSX.png')}}" alt="" style="height: 388px; margin-top: 60px;  margin-bottom: -150px;">
                    <h1>Yay! Success</h1>
                    <p>
                        We've sent you email for trip instruction
                        <br/>
                        Please read is as well
                    </p>
                    <a href="{{ route('home')}}" class="btn btn-get-started px-4 mt-4">
                    Home Page
                </a>
                </div>
            </div>
        </main>
@endsection
