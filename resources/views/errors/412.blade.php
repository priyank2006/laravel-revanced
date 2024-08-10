@extends('errors.layouts.master')

@section('error-code', '412')

@section('title', 'Precondition Failed')

@section('message')
    One or more conditions given in the request header fields were evaluated to false by the server.
@endsection

@section('action-btn-link', '/home')

@section('action-btn-text', 'Go To Home')
