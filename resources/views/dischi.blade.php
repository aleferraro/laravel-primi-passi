@extends('layouts.app')

@section('title', 'Dischi')

@section('main')

    <main>
        <div class="container">
            <h1 class="title">Dischi</h1>
            
            <div class="flex">
                @foreach ($dischi as $disco)
                    <div class="card">
                        <img src="{{ $disco['poster'] }}" alt="">
                        <h3>{{ $disco['title'] }}</h3>
                        <span class="author">{{ $disco['author'] }}</span>
                        <span class="year">{{ $disco['year'] }}</span>
                    </div> 
                @endforeach
            </div>

        </div>
    </main>

@endsection