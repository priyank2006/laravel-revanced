@extends('errors.layouts.master')

@section('error-code', '504')

@section('title', 'Gateway Timeout')

@section('message')
    The server, while acting as a gateway or proxy, did not receive a timely response from an upstream server.
@endsection

@section('action-btn-link', '/home')

@section('action-btn-text', 'Go To Home')
