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
    <form action="/">
        <input type="submit" value="Menu" class="button">
    </form>
@endsection