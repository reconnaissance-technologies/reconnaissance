@extends('errors::minimal')

@section('title', __('Not Found'))
@section('<img src="{{ asset('assets/img/errors/404.svg') }}" />')
@section('code', '404')
@section('message', __('Not Found'))
