@extends('errors.layouts.master')

@section('error-code', '404')

@section('title', "UH OH! You're lost")

@section('message')
    The page you are looking for does not exist. How you got here is a mystery. But you can click the button below to go
    back to the homepage.
@endsection

@section('action-btn-link', '/home')

@section('action-btn-text', 'Go To Home')
