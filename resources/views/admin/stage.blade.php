@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Canchas</h1>

            @<?php foreach ($stages as $stage): ?>
            	<h2>Direccion</h2>
            	<p>{{ $stage->address }}</p>
            <?php endforeach ?>
        </div>
    </div>
</div>
@endsection