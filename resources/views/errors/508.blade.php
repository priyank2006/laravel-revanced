@extends('errors.layouts.master')

@section('error-code', '508')

@section('title', 'Loop Detected')

@section('message')
    The server detected an infinite loop while processing the request.
@endsection

@section('action-btn-link', '/home')

@section('action-btn-text', 'Go To Home')
