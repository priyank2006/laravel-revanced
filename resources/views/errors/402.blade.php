@extends('errors.layouts.master')

@section('error-code', '402')

@section('title', 'Payment Required')

@section('message')
    Payment is required to access this resource.
@endsection

@section('action-btn-link', '/home')

@section('action-btn-text', 'Go To Home')
