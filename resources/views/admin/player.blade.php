@extends('layouts.app')

@section('header')

   @include('header.header')

@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Jugadores</h1>

            @<?php foreach ($players as $player): ?>
            	<h2>Nombre</h2>
            	<p>{{ $player->name }}</p>
            	<br>
            	<h4>Apellido</h4>
            	{{ $player->surname }}      	
            <?php endforeach ?>
        </div>
    </div>
</div>
@endsection

@section('footer')

   @include('footer.footer')

@endsection