@extends('errors::minimal')

@section('title', __('Forbidden'))
@section('image', 'assets/img/errors/500.svg')
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Forbidden'))
