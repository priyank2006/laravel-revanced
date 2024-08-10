@extends('errors.layouts.master')

@section('error-code', '505')

@section('title', 'HTTP Version Not Supported')

@section('message')
    The server does not support the HTTP protocol version that was used in the request.
@endsection

@section('action-btn-link', '/home')

@section('action-btn-text', 'Go To Home')
