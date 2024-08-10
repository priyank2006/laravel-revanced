@extends('errors.layouts.master')

@section('error-code', '431')

@section('title', 'Request Header Fields Too Large')

@section('message')
    The server is unwilling to process the request because its header fields are too large.
@endsection

@section('action-btn-link', '/home')

@section('action-btn-text', 'Go To Home')
