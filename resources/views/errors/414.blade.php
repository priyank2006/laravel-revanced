@extends('errors.layouts.master')

@section('error-code', '414')

@section('title', 'URI Too Long')

@section('message')
    The URI requested by the client is longer than the server is willing to interpret.
@endsection

@section('action-btn-link', '/home')

@section('action-btn-text', 'Go To Home')
