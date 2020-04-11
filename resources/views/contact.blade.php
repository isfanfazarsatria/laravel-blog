@extends('layouts.frontend.app')

@push('css')
    <link href="{{ asset('assets/frontend/css/category/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/category/responsive.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="row container">
        <div class="col-md-12">
            <h4 class="text-center title"><b>Contact Us</b></h4>
            <hr>
            <form action="{{route('contact.post')}}" class="container justify content-center" method="POST">
            @csrf
                <div class="form-group">
                    <label name="email">Email</label>
                    <input id="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label name="subject">Subject</label>
                    <input id="subject" name="subject" class="form-control">
                </div>
                <div class="form-group">
                    <label name="message">Message</label>
                    <textarea name="message" id="message" cols="30" rows="5"></textarea>
                </div>
                <input type="submit" value="Send Message">
            </form>
        </div>
    </div>
@endsection

@push('js')

@endpush