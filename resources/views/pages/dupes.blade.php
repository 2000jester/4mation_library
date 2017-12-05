@extends("layouts.master")
@section('title')
    Duplicate Barcodes
@endsection
@section('body')
    <div class="full-height content flex-center">
    <div class="main-content">
        @for($i = 0; $i < count($dupes); $i++)
            {{ $dupes[$i]->title." : ".$dupes[$i]->barcode }}</br>
        @endfor
    </div>
        <div class="fixed-button">
            <form action="/">
                <input type="submit" value="Menu" class="button">
            </form>
        </div>
    <div>
@endsection