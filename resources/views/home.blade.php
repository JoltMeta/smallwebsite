@extends('layouts.app')

@section('content')
<h1>Home</h1>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
    Explicabo corrupti magni, sunt pariatur fugit inventore voluptatem? 
    Porro excepturi autem provident sed ab, 
    quas dignissimos explicabo enim, tempora quasi accusamus consequuntur!
</p>
@endsection

@section('sidebar')
@parent
<p>this is appended to the sidebar</p>
@endsection