@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Recent Updates') }}</div>

                <div class="card-body">
                   <form action="" method="post"></form>
                   <textarea name="body" class="form-control" rows="3" placeholder="what's on your mind"></textarea>
                   <button class="btn btn-primary">post</button>
                </div>
                <hr>
               
            </div>
            post
        </div>
    </div>
</div>
@endsection
