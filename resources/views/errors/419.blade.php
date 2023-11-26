@extends('errors::minimal')

@section('title', __('Page Expired'))
@section('<img src="{{ asset('assets/img/errors/500.svg') }}" />')
@section('code', '419')
@section('message', __('Page Expired'))
