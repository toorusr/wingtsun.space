@extends('_layouts.master')

@section('body')
        @include('_partials.header')
        <div class="flex flex-wrap">
            <div class="md:w-2/3">
                @include('_partials.why')
            </div>
            <div class="md:w-1/3">
                @include('_partials.dynceve')
            </div>
        </div>
        @include('_partials.trainers')
        <div class="my-4">
            <h2 class="text-3xl mt-16 mb-2 text-center mx-2 font-bold">Die WingTsun Schule in deiner Nähe</h2>
            @include('_partials.map')
        </div>
        @include('_components.contact')
@endsection
