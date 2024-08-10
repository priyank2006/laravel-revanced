@extends('errors.layouts.master')

@section('error-code', '428')

@section('title', 'Precondition Required')

@section('message')
    The server requires the request to be conditional.
@endsection

@section('action-btn-link', '/home')

@section('action-btn-text', 'Go To Home')
