@extends('frontend.layouts.master')
@section('content')
    @include('frontend.pages.home.banner')
    @include('frontend.pages.home.categories')

    {{-- @include('frontend.pages.home.boots-traffic') --}}
    @include('frontend.pages.home.featured-project')
    @include('frontend.pages.home.company')
    @include('frontend.pages.home.review')
    @include('frontend.pages.home.contact')
    @include('frontend.pages.home.blog')
@endsection
