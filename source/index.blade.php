@extends('_layouts.master')

@section('body')
        <div class="flex flex-wrap">
            <div class="w-1/2">
                <div class="flex justify-center half yellow-bg">
                    <div class="self-center">
                        <h1 class="font-extrabold text-5xl text-white">Willkommen</h1>
                    </div>
                </div>
                <div class="flex justify-center flex-wrap half bg-white">
                    <div class="mx-6 self-center text-center">
                        <h2 class="mb-8 font-extrabold text-5xl black-text">Hier findest du in Zukunft die Wing<span class="yellow-text">Tsun</span> Berlin Seite.</h2>
                        <a href="http://wt-berlin-heiligensee.de" class="black-bg hover:bg-black yellow-text font-semibold py-2 px-4 rounded">
                          Zur jetztigen Website
                        </a>
                    </div>
                </div>
            </div>

            <div class="flex justify-center full w-1/2 black-bg">
                <div class="self-center">
                    <img src="logo.svg" alt="WingTsun Berlin-Heiligensee Logo">
                </div>
            </div>
        </div>
@endsection
