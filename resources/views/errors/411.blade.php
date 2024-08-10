@extends('errors.layouts.master')

@section('error-code', '411')

@section('title', 'Length Required')

@section('message')
    The request did not specify the length of its content, which is required by the server.
@endsection

@section('action-btn-link', '/home')

@section('action-btn-text', 'Go To Home')
