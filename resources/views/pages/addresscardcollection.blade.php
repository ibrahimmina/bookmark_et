@extends('layouts.default')
@section('content')

@include('shared.breadcrumb')

@include('shared.title', ['title' => $PageSettings['PageSubtitle']])

@include('shared.addresscard')

@stop