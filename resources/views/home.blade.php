@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>
                    <img src="https://cdn.pixabay.com/photo/2019/08/27/04/18/store-icon-4433328_960_720.png">
                    </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
