@extends('errors::minimal')

@section('title', __('Too Many Requests'))
@section('image', 'assets/img/errors/500.svg')
@section('code', '429')
@section('message', __('Too Many Requests'))
