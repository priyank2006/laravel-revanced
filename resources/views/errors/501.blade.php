@extends('errors.layouts.master')

@section('error-code', '501')

@section('title', 'Not Implemented')

@section('message')
    The server does not recognize the request method and cannot fulfill it.
@endsection

@section('action-btn-link', '/home')

@section('action-btn-text', 'Go To Home')
