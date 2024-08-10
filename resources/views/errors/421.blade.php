@extends('errors.layouts.master')

@section('error-code', '421')

@section('title', 'Misdirected Request')

@section('message')
    The request was directed at a server that is not able to produce a response.
@endsection

@section('action-btn-link', '/home')

@section('action-btn-text', 'Go To Home')
