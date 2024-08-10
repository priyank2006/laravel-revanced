@extends('errors.layouts.master')

@section('error-code', '507')

@section('title', 'Insufficient Storage')

@section('message')
    The server is unable to store the representation needed to complete the request.
@endsection

@section('action-btn-link', '/home')

@section('action-btn-text', 'Go To Home')
