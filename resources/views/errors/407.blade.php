@extends('errors.layouts.master')

@section('error-code', '407')

@section('title', 'Proxy Authentication Required')

@section('message')
    Authentication is required to use a proxy.
@endsection

@section('action-btn-link', '/home')

@section('action-btn-text', 'Go To Home')
