@extends('frontend.layouts.master')
@section('content')
    @include('frontend.pages.home.banner')
    @include('frontend.pages.home.feautured-project')
    @include('frontend.pages.home.company')
    {{-- @include('frontend.pages.home.boots-traffic') --}}
    {{-- @include('frontend.pages.home.pay-traffic') --}}
    {{-- @include('frontend.pages.home.offer') --}}
    @include('frontend.pages.home.blog')
    @include('frontend.pages.home.review')
@endsection
