@extends('errors::minimal')

@section('title', __('Server Error'))
@section('<img src="{{ asset('assets/img/errors/500.svg') }}" />')
@section('code', '500')
@section('message', __('Server Error'))
