@extends("layouts.master")
@section('title')
    Duplicate Barcodes
@endsection
@section('content')
        @for($i = 0; $i < count($dupes); $i++)
            {{ $dupes[$i]->title." : ".$dupes[$i]->barcode }}</br>
        @endfor
@endsection
@section('form')
    <form action="/" id="menu">
    </form>
@endsection
@section('formAnchor')
    <a onClick="document.getElementById('menu').submit();" class="button">Menu</a>
@endsection