@extends('layouts.main')

@section('content')
<section class="main-comics">
        <div class="cards container">
            @foreach ($cards as $card)
                <div class="card">
                    <img src="{{ $card['image']}}" alt="{{ $card['title']}}">
                    <h5 class="card-title">
                        {{ $card['title'] }}
                    </h5>
                </div>
            @endforeach 
        </div>
        <div class="load">
            <span class="button">LOAD MORE</span>
        </div>
</section>
@endsection