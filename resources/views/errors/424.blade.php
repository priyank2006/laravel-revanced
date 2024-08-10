@extends('errors.layouts.master')

@section('error-code', '424')

@section('title', 'Failed Dependency')

@section('message')
    The request failed due to failure of a previous request.
@endsection

@section('action-btn-link', '/home')

@section('action-btn-text', 'Go To Home')
