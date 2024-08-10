@extends('errors.layouts.master')

@section('error-code', '416')

@section('title', 'Range Not Satisfiable')

@section('message')
    The range specified by the Range header field in the request cannot be fulfilled.
@endsection

@section('action-btn-link', '/home')

@section('action-btn-text', 'Go To Home')
