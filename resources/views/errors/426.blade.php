@extends('errors.layouts.master')

@section('error-code', '426')

@section('title', 'Upgrade Required')

@section('message')
    The server requires the client to upgrade to a different protocol.
@endsection

@section('action-btn-link', '/home')

@section('action-btn-text', 'Go To Home')
