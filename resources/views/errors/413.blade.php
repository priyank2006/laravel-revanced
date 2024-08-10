@extends('errors.layouts.master')

@section('error-code', '413')

@section('title', 'Payload Too Large')

@section('message')
    The request is larger than the server is willing or able to process.
@endsection

@section('action-btn-link', '/home')

@section('action-btn-text', 'Go To Home')
