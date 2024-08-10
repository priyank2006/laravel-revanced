@extends('errors.layouts.master')

@section('error-code', '405')

@section('title', 'Method Not Allowed')

@section('message')
    The HTTP method used is not allowed for this endpoint.
@endsection

@section('action-btn-link', '/home')

@section('action-btn-text', 'Go To Home')
