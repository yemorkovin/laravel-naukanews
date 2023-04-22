@extends('main')

@section('content')
	<form method="POST" action="{{ url('add')}}">
        {{csrf_field()}}
        <p>title: <input name="title" type="text" >
        <p>lid: <input name="lid" type="text">
        <p>content: <textarea name="content"></textarea>
        <p>rubrics: <input name="rubrics" type="text">
		<p>Картинка: <input name="image" type="text" >
        <p><button type="submit">Добавить</button>
    </form>
@endsection