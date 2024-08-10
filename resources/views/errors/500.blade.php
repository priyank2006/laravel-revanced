@extends('errors.layouts.master')

@section('error-code', '500')

@section('title', "UH OH! Its Not You, It's Server's Fault !")

@section('message')
    This should not be happenned, but we are trying to fix it as soon as possible !
@endsection

@section('action-btn-link', '/home')

@section('action-btn-text', 'Go To Home')
