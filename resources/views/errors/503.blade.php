@extends('errors.layouts.master')

@section('error-code', '503')

@section('title', "UH OH! Its Not You, We'r Under Maintenance !")

@section('message')
    Good Things Take time, but we will be back soon !
@endsection

@section('action-btn-link', '/home')

@section('action-btn-text', 'Go To Home')
