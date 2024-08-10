@extends('errors.layouts.master')

@section('error-code', '418')

@section('title', 'I’m a teapot')

@section('message')
    The server refuses to brew coffee because it is a teapot. (RFC 2324: April Fools' Joke)
@endsection

@section('action-btn-link', '/home')

@section('action-btn-text', 'Go To Home')
