@extends('layouts.default')

@section('carousel')

    @include('layouts.carousel')

@stop

@section('header')

    @include('layouts.home.header')

@stop

@section('content')

    <!-- Start About Cake -->
    @include('layouts.home.about_cake')
    <!-- End About Cake -->
    <!-- Start Product Cake -->
    @include('layouts.home.product_cake')
    <!-- End Product Cake --><!-- Start News Cake -->
    @include('layouts.home.news_cake')
    <!-- End News Cake --><!-- Start Option Cake -->
    @include('layouts.home.option_cake')
    <!-- End Option Cake --><!-- Start Pricing Cake -->
    @include('layouts.home.price_cake')
    <!-- End Pricing Cake --><!-- Start Team Cake -->
    @include('layouts.home.team_cake')
    <!-- End Option Cake -->
@stop