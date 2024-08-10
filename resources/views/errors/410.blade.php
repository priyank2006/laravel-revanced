@extends('errors.layouts.master')

@section('error-code', '410')

@section('title', 'Gone')

@section('message')
    The requested resource is no longer available at the server and no forwarding address is known.
@endsection

@section('action-btn-link', '/home')

@section('action-btn-text', 'Go To Home')
