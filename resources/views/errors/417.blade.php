@extends('errors.layouts.master')

@section('error-code', '417')

@section('title', 'Expectation Failed')

@section('message')
    The server could not meet the expectations set by the Expect request header.
@endsection

@section('action-btn-link', '/home')

@section('action-btn-text', 'Go To Home')
