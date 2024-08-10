@extends('errors.layouts.master')

@section('error-code', '400')

@section('title', 'Bad Request')

@section('message')
    The server could not understand the request due to invalid syntax.
@endsection

@section('action-btn-link', '/home')

@section('action-btn-text', 'Go To Home')
