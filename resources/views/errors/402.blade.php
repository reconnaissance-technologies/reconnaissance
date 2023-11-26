@extends('errors::minimal')

@section('title', __('Payment Required'))
@section('<img src="{{ asset('assets/img/errors/500.svg') }}" />')
@section('code', '402')
@section('message', __('Payment Required'))
