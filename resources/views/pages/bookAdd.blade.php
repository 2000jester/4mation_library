@extends('layouts.master')
@section('title')
    Book Add
@endsection
@section('header')
    <div class="row header-container">
        <div class="col-lg-6 offset-lg-2 col-md-6 offset-md-2 col-sm-8 offset-sm-1 col-10 header">
            <h1>Add book to library</h1>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-1 col-2 header-icon header">
            <h1><i class="fa fa-book"></i></h1>
        </div>
    </div>
@endsection
@section('content')

@endsection
@section('form')
    <div class="row form-container">
        <div class="col-12">
            <form id="bookAddForm" action="addBookToDB" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="genres" id="genres" />
                <div class="row">
                    <div class="col-3 offset-2">
                        <div class="form-group">
                            <label for="title">Title <span style="color:red">*</span></label>
                            <input name="title" type="text" class="form-control" id="inputTitle" placeholder="Enter title" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="author">Author <span style="color:red">*</span></label>
                            <input tabindex="0" data-toggle="popover" title="Author Format" data-content="John Smith should be entered as Smith, J." data-placement="top" name="author" type="text" class="form-control" id="inputAuthor" placeholder="Enter Author" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-1">
                        <div class="form-group">
                            <label for="year">Year</label>
                            <input name="year" type="text" class="form-control" id="inputYear" placeholder="Enter Year" autocomplete="off">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 offset-2">
                        <div class="form-group">
                            <label for="genre">Genre(s)</label>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="genreSelectToggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Select
                                </button>
                                <div class="dropdown-menu genreSelect" aria-labelledby="dropdownMenuButton">
                                    @foreach($genres as $genre)
                                        <div class="row dropdownElement">
                                            <div class="col-1 checkbox-container">
                                                <input class="form-check-input" type="checkbox" value="checkbox_genre_{{ $genre->id }}" id="checkbox_id_{{ $genre->id }}" onclick="removeGenreTag(this.id)">
                                            </div>
                                            <div class="col-9 genre-container">
                                                <label class="form-check-label" for="checkbox_id_{{ $genre->id }}">
                                                    {{ $genre->genre }}
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 genreTags">
                        <div class="row">
                            <div class="col-12">
                            </div>
                        </div>
                    </div>
                    <div class="col-5 barcodeEntry-container">
                        <div class="form-group">
                            <label for="barcode">Barcode <span style="color:red">*</span></label>
                            <input tabindex="0" data-toggle="popover" title="Barcode Format" data-content="As multiple copies of the same book are added to the system the syntax is 'barcode-copynumber' (e.g barcode, barcode-1, barcode-2)" data-placement="bottom" name="barcode" type="text" class="form-control" id="inputBarcode" placeholder="Enter Barcode" autocomplete="off">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <button class="btn btn-sm hidden genreTag tagForClone" onclick="uncheckGenre(this)" type="button" class="close" aria-label="close">Hidden<span class="ariaClose" aria-hidden="true">&times;</span></button>
    </div>
@endsection
@section('buttonBar')
    <a onclick="addBook()" class="button">Add Book</a>
@endsection
@section('script')
    <script type="application/javascript">
        function hasNumber(string){
            return /\d/.test(string);
        }
        function hasLetter(string){
            return /[a-z]/i.test(string);
        }
        function valid(target){
            $(target).removeClass('is-invalid')
            $(target).addClass('is-valid')
        }
        function invalid(target){
            $(target).removeClass('is-valid')
            $(target).addClass('is-invalid')
        }
        function neutral(target){
            $(target).removeClass('is-valid')
            $(target).removeClass('is-invalid')
        }
        function validate(){
            if($('.is-invalid').length > 0){
                return false;
            }
            if($('#inputTitle').val() == "" || $('#inputAuthorFirst').val() == "" || $('#inputAuthorSur').val() == "" || $('#inputBarcode').val() == ""){
                return false;
            }
            return true;
        }
        function removeGenreTag(id){
            $('.btn-sm[id="'+id+'"]').remove();
        }
        function uncheckGenre(item){
            $('#'+item.id).prop('checked',false);
            $('.btn-sm[id="'+item.id+'"]').remove();
        }
        function addBook(){
            if(validate()){
                var genreList = [];
                $('.genreTag').not('.tagForClone').each(function(){
                    genreList.push($(this).attr('id').replace('checkbox_id_',''));
                });
                genreList = genreList.join(",");
                $('#genres').val(genreList);
                $('#bookAddForm').submit();
            }
        }
        $('.form-check-input').prop('checked',false)
        $('.dropdownElement').on('change', function(event){
            if($(this).find('input').is(':checked')){
                event.stopPropagation();
                var genre = event.currentTarget.children[1].innerText;
                var genreId = event.currentTarget.children[0].children[0].id;
                var genreTag = $('.tagForClone').clone();
                genreTag.removeClass('tagForClone');
                genreTag.removeClass('hidden');
                genreTag.prop('value',genre);
                genreTag.prop('id',genreId);
                genreTag.html(genre+'<span class="ariaClose" aria-hidden="true">&times;</span>');
                $('.genreTags').append(genreTag);
            }
        });
        $('#inputTitle').on('change', function(event){
            value = event.currentTarget.value;
            if(!value.replace(/\s/g, '').length || value == ""){
                invalid(this);
            } else {
                valid(this);
            }
        });
        $('#inputAuthor').on('change', function(event){
            value = event.currentTarget.value;
            if(!value.replace(/\s/g, '').length || value == ""){
                invalid(this);
            } else if(hasNumber(value)){
                invalid(this);
            } else {
                valid(this);
            }
        });
        $('#inputYear').on('change', function(event){
            value = event.currentTarget.value;
            if(hasLetter(value) || !value.replace(/\s/g, '').length){
                invalid(this);
            } else if(value == ""){
                neutral(this);
            } else {
                valid(this);
            }
        });
        $('#inputBarcode').on('change', function(event){
            value = event.currentTarget.value;
            if(!value.replace(/\s/g, '').length || value == ""){
                invalid(this);
            } else {
                valid(this);
            }
        });
        $(function () {
            $('[data-toggle="popover"]').popover()
        })
        $('#inputAuthor').popover({
            trigger: 'focus'
        })
        $('#inputBarcode').popover({
            trigger: 'focus'
        })
    </script>
@endsection