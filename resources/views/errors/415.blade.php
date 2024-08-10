@extends('errors.layouts.master')

@section('error-code', '415')

@section('title', 'Unsupported Media Type')

@section('message')
    The media type of the request data is not supported by the server.
@endsection

@section('action-btn-link', '/home')

@section('action-btn-text', 'Go To Home')
