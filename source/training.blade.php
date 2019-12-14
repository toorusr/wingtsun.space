@extends('_layouts.master')

@section('body')
        @component('_components.contentlist')
            @slot('title', 'Die Wing<span class="text-yellow-500">Tsun</span> <br>Schule <br>Berlin-Heiligensee')
            @slot('links', '<a href="#ziel">Unser <span class="text-yellow-500">Ziel</span> ></a> <br> <a href="#team">Das <span class="text-yellow-500">Team</span> ></a>')
        @endcomponent

        @include('_components.goal-splitter')
        <div class="my-8 text-center mx-4 ">
            <p class="font-bold">
                Die <span class="text-yellow-500">Logik</span> des Kämpfens erlernen. <br>
                <span class="text-yellow-500">Größe</span> gewinnen und ein <span class="text-yellow-500">sicheres Auftreten</span>, <br>sowie <span class="text-yellow-500">Selbstbewusstsein</span> ausbilden.<br>
                Mehr als nur eine Selbstverteidigung.<br>
                <span class="text-yellow-500">Reaktionen verbessern</span> und die <span class="text-yellow-500">Sinne schärfen</span>.<br>
                Schwächen in Stärken verwandeln.<br>
                <span class="text-yellow-500">Körperbeherrschung</span> trainieren.<br>
                Kein Wettkampfsport.
            </p>
        </div>
        @include('_components.team-splitter')
        <div class="flex justify-center my-8 flex-wrap">
            @include('_components.person', ['name' => 'Mehmet', 'picture' => '/m/p/a/max.jpg', 'role' => 'Schulleiter, Trainer'])
            @include('_components.person', ['name' => 'Manfred', 'picture' => '/m/p/a/max.jpg', 'role' => 'Trainer'])
        </div>
@endsection
