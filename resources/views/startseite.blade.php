@extends('layouts.app')

@section("title", "Startseite")

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Startseite') }}</div>

                <div class="card-body">
                    Willkommen bei Udemy
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
