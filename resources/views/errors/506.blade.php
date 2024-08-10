@extends('errors.layouts.master')

@section('error-code', '506')

@section('title', 'Variant Also Negotiates')

@section('message')
    The server has an internal configuration error: the chosen variant resource negotiation mode is itself a negotiation.
@endsection

@section('action-btn-link', '/home')

@section('action-btn-text', 'Go To Home')
