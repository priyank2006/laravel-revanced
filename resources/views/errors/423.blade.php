@extends('errors.layouts.master')

@section('error-code', '423')

@section('title', 'Locked')

@section('message')
    The resource that is being accessed is locked.
@endsection

@section('action-btn-link', '/home')

@section('action-btn-text', 'Go To Home')
