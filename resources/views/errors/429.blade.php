@extends('errors.layouts.master')

@section('error-code', '429')

@section('title', 'Too Many Requests')

@section('message')
    The user has sent too many requests in a given amount of time.
@endsection

@section('action-btn-link', '/home')

@section('action-btn-text', 'Go To Home')
