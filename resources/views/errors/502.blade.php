@extends('errors.layouts.master')

@section('error-code', '502')

@section('title', 'Bad Gateway')

@section('message')
    The server, while acting as a gateway or proxy, received an invalid response from an upstream server.
@endsection

@section('action-btn-link', '/home')

@section('action-btn-text', 'Go To Home')
