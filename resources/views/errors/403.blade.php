@extends('errors.layouts.master')

@section('error-code', '403')

@section('title', 'Forbidden')

@section('message')
    You do not have permission to access this resource.
@endsection

@section('action-btn-link', '/home')

@section('action-btn-text', 'Go To Home')
