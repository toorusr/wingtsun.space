@extends('_layouts.master')

@section('body')
        @component('_components.contentlist')
            @slot('title', 'Das Wing<span class="text-yellow-500">Tsun</span> <br>Training')
            @slot('links', '<a href="#motivation">Die <span class="text-yellow-500">Motivation</span> ></a> <br> <a href="#ablauf">Der <span class="text-yellow-500">Ablauf</span> ></a>')
        @endcomponent

        @include('_components.motivation-splitter')
        <div class="flex justify-center my-16">
          <p class="mx-4 md:w-1/2 text-xs font-semibold">
            Es geht um Ihr Leben und Sie haben nur eins!<br>
            Wir sehen unseren Angreifer stets als "Energiespender" an, der ohne sein Wissen für unsere Sicherheit und letzlich für seine eigene Niderlage sorgt, weil wir den Umständen entsprechend handeln, ohne den Bewegungsablauf des Kampfes vorher zu planen.<br>
            Wir machen die "Technik" des Gegners zu unserer eigenen Technik!<br>
            Dadurch werden wir von unserem Gegner nicht abgelenkt, somit sind Finten und Täuchungen wirkungslos. Bei einem Gewaltakt spielen zum größten Teil Faktoren wie Glück und Schnelligkeit eine Rolle. Schwächeren, den nicht Athletischen, den Angehörigen des sogenanten "schwachen Geschlechts" und nicht mehr ganz jugendlichen Zeitgenossen fehlen heutzutage alle Voraussetzungen, um deren soziale Aktivitäten nach Einbruch der Dunkelheit in unseren Städten nachzugehen. Aber auch der "Starke" kann noch einen "Stärkeren" treffen, deshalb werden unsere Bewegungen direkt auf mechanische Weise durch die Bewegungen des Angreifers bestimmt.<br>
            Unsere Technik ist, uns der Technik des Gegners anzupassen und zuzüglich dessen Kraft und Schnelligkeit zu nutzen: Reaktion auf die Feindliche Aktion!<br>
            Sie haben das Recht sich zu schützen, denn Sie reagieren nur auf das, wozu der Impuls gegeben wurde!<br>
          </p>
        </div>
        @include('_components.ablauf-splitter')
        <div class="flex flex-wrap justify-center my-16">
          <p class="mx-4 md:w-1/2 text-xs font-semibold">
            Nach der traditionellen Begrüßung der Großmeister, des eigenen Si-fu's und der Begrüßung untereinander beginnen wir mit der gemeinsamen Ausführung der Formen (unterschidlich je nach Schülergrade).<br>
Danach geht es in die jeweiligen Schülerprogramme: z.B. Blizdefence, das schnell Erlernbare Selbstverteidigungsprogram, Lat-Sau (WT Sparring-Programm), Chi-Sau (klebende Arme) und Schrittarbeit.<br>
Die Schüler werden vom Schulleiter oder seinen Asistenten (Co Trainer) individuell betreut, in das Trainigsprogramm eingewiesen und korrigiert.<br>
<br>
Informieren Sie sich selbst über das umfangreiche Programm des WingTsun Kampfkunstsystems in dem Sie kostenlos an einer unserer Trainingsstunden teilnehmen.
          </p>
          <div class="mt-6 mx-4">
            <a class="ml-auto bg-gray-900 text-yellow-500 p-2 rounded-lg text-right px-6 font-bold text-xs" href="/probieren">Anmelden für Probetraining</a>
          </div>
        </div>

@endsection
