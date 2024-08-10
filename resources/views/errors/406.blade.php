@extends('errors.layouts.master')

@section('error-code', '406')

@section('title', 'Not Acceptable')

@section('message')
    The requested resource is capable of generating only content not acceptable according to the Accept headers sent in the
    request.
@endsection

@section('action-btn-link', '/home')

@section('action-btn-text', 'Go To Home')
