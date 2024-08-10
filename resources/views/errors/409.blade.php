@extends('errors.layouts.master')

@section('error-code', '409')

@section('title', 'Conflict')

@section('message')
    The request could not be completed due to a conflict with the current state of the resource.
@endsection

@section('action-btn-link', '/home')

@section('action-btn-text', 'Go To Home')
