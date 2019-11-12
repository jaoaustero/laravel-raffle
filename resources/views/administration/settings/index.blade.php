@extends('app')

@section('content')

@include('layouts.header', ['title' => $title])

<div
class="uis-container
    uis-margin-medium-top
    uis-margin-medium-bottom
    uis-animate
    uis-animate-fade-in">
    
    @include('administration.settings.section.themes')

    @include('administration.settings.section.information')

    @include('administration.settings.section.security')

    @include('administration.settings.section.others')

    {{-- Modal --}}
    @include('administration.settings.modal.fullname')
    @include('administration.settings.modal.email')
    @include('administration.settings.modal.password')
</div>
@endsection