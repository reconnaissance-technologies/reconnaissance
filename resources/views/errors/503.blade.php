@extends('errors::minimal')

@section('title', __('Service Unavailable'))
@section('<img src="{{ asset('assets/img/errors/500.svg') }}" />')
@section('code', '503')
@section('message', __('Service Unavailable'))
