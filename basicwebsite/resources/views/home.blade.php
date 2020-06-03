@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda atque dolorum ea et, fugit ipsum laudantium officiis porro quasi quibusdam quis repellat sapiente. Consectetur dolores ducimus facere nam, numquam voluptate?</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection