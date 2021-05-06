@extends('task.layout')

@section('title', 'La tache est supprimée !')

@section('main')
	<div>
        <p>La tache est supprimée avec réussite !</p>
        <button><a href="{{ route('index') }}">Retouner</a></button>
	</div>
@endsection
