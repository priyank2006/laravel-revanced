@extends('errors.layouts.master')

@section('error-code', '422')

@section('title', 'Unprocessable Entity')

@section('message')
    The server understands the content type of the request entity, but was unable to process the contained instructions.
@endsection

@section('action-btn-link', '/home')

@section('action-btn-text', 'Go To Home')
