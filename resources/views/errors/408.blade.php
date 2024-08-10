@extends('errors.layouts.master')

@section('error-code', '408')

@section('title', 'Request Timeout')

@section('message')
    The server timed out waiting for the request.
@endsection

@section('action-btn-link', '/home')

@section('action-btn-text', 'Go To Home')
