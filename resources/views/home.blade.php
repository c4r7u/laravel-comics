@extends('layouts.app')

@section('page_title')
    Comics
@endsection

@section('main_content')


    @include('components.comics-list')


    @include('components.pre-footer') 


@endsection