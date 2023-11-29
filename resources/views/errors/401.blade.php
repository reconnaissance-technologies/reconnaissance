@extends('errors::minimal')

@section('title', __('Unauthorized'))
@section('<img src="{{ asset("assets/img/errors/500.svg") }}" />')
@section('code', '401')
@section('message', __('Unauthorized'))
