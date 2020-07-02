@extends('layouts.layout')
@section('content')
    <!-- Top-Bar START -->
    @component('components.top-bar')@endcomponent
    <!-- Navbar START -->
    @component('components.navbar')@endcomponent
    <div class="section-block">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12">
                    {!!trans('messages.page-terms-content')!!}
                </div>
            </div>
        </div>
    </div>
@endsection
