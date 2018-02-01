@extends('layouts.master')
@section('title')
    Book Add
@endsection
@section('header')
    <div class="row header-container">
        <div class="col-lg-6 offset-lg-2 col-md-6 offset-md-2 col-sm-8 offset-sm-1 col-10 header">
            <h1>Add book to system</h1>
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
            <form>
                <div class="row">
                    <div class="col-3 offset-2">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="inputTitle" placeholder="Enter title">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="author">Author</label>
                            <input type="text" class="form-control" id="inputAuthor" placeholder="Enter Author">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-group">
                            <label for="year">Year</label>
                            <input type="number" class="form-control" id="inputyear" placeholder="Enter Year">
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
                                    <div class="row dropdownElement">
                                        <div class="col-1 checkbox-container">
                                            <input class="form-check-input" type="checkbox" value="Autobiography" id="Autobiography">
                                        </div>
                                        <div class="col-9 genre-container">
                                            <label class="form-check-label" for="Autobiography">
                                                Autobiography
                                            </label>
                                        </div>
                                    </div>

                                    <div class="row dropdownElement">
                                        <div class="col-1 checkbox-container">
                                            <input class="form-check-input" type="checkbox" value="Biography" id="Biography">
                                        </div>
                                        <div class="col-9 genre-container">
                                            <label class="form-check-label" for="Biography">
                                                Biography
                                            </label>
                                        </div>
                                    </div>

                                    <div class="row dropdownElement">
                                        <div class="col-1 checkbox-container">
                                            <input class="form-check-input" type="checkbox" value="businessStrategy" id="BusinessStrategy">
                                        </div>
                                        <div class="col-9 genre-container">
                                            <label class="form-check-label" for="BusinessStrategy">
                                                Business Strategy
                                            </label>
                                        </div>
                                    </div>

                                    <div class="row dropdownElement">
                                        <div class="col-1 checkbox-container">
                                            <input class="form-check-input" type="checkbox" value="leadership" id="Leadership">
                                        </div>
                                        <div class="col-9 genre-container">
                                            <label class="form-check-label" for="Leadership">
                                                Leadership
                                            </label>
                                        </div>
                                    </div>

                                    <div class="row dropdownElement">
                                        <div class="col-1 checkbox-container">
                                            <input class="form-check-input" type="checkbox" value="C# & .Net" id="C#&.Net">
                                        </div>
                                        <div class="col-9 genre-container">
                                            <label class="form-check-label" for="C#&.Net">
                                                C# & .Net
                                            </label>
                                        </div>
                                    </div>

                                    <div class="row dropdownElement">
                                        <div class="col-1 checkbox-container">
                                            <input class="form-check-input" type="checkbox" value="cloudPlatforms" id="CloudPlatforms">
                                        </div>
                                        <div class="col-9 genre-container">
                                            <label class="form-check-label" for="CloudPlatforms">
                                                Cloud Platforms
                                            </label>
                                        </div>
                                    </div>

                                    <div class="row dropdownElement">
                                        <div class="col-1 checkbox-container">
                                            <input class="form-check-input" type="checkbox" value="CSS" id="CSS">
                                        </div>
                                        <div class="col-9 genre-container">
                                            <label class="form-check-label" for="CSS">
                                                CSS
                                            </label>
                                        </div>
                                    </div>

                                    <div class="row dropdownElement">
                                        <div class="col-1 checkbox-container">
                                            <input class="form-check-input" type="checkbox" value="design" id="Design">
                                        </div>
                                        <div class="col-9 genre-container">
                                            <label class="form-check-label" for="Design">
                                                Design
                                            </label>
                                        </div>
                                    </div>

                                    <div class="row dropdownElement">
                                        <div class="col-1 checkbox-container">
                                            <input class="form-check-input" type="checkbox" value="javascript" id="Javascript">
                                        </div>
                                        <div class="col-9 genre-container">
                                            <label class="form-check-label" for="Javascript">
                                                Javascript
                                            </label>
                                        </div>
                                    </div>

                                    <div class="row dropdownElement">
                                        <div class="col-1 checkbox-container">
                                            <input class="form-check-input" type="checkbox" value="management" id="Management">
                                        </div>
                                        <div class="col-9 genre-container">
                                            <label class="form-check-label" for="Management">
                                                Management
                                            </label>
                                        </div>
                                    </div>

                                    <div class="row dropdownElement">
                                        <div class="col-1 checkbox-container">
                                            <input class="form-check-input" type="checkbox" value="marketing & Sales" id="Marketing&Sales">
                                        </div>
                                        <div class="col-9 genre-container">
                                            <label class="form-check-label" for="Marketing&Sales">
                                                Marketing & Sales
                                            </label>
                                        </div>
                                    </div>

                                    <div class="row dropdownElement">
                                        <div class="col-1 checkbox-container">
                                            <input class="form-check-input" type="checkbox" value="misc" id="Misc">
                                        </div>
                                        <div class="col-9 genre-container">
                                            <label class="form-check-label" for="Misc">
                                                Misc
                                            </label>
                                        </div>
                                    </div>

                                    <div class="row dropdownElement">
                                        <div class="col-1 checkbox-container">
                                            <input class="form-check-input" type="checkbox" value="miscSoftware" id="MiscSoftware">
                                        </div>
                                        <div class="col-9 genre-container">
                                            <label class="form-check-label" for="MiscSoftware">
                                                Misc Software
                                            </label>
                                        </div>
                                    </div>

                                    <div class="row dropdownElement">
                                        <div class="col-1 checkbox-container">
                                            <input class="form-check-input" type="checkbox" value="perl" id="Perl">
                                        </div>
                                        <div class="col-9 genre-container">
                                            <label class="form-check-label" for="Perl">
                                                Perl
                                            </label>
                                        </div>
                                    </div>

                                    <div class="row dropdownElement">
                                        <div class="col-1 checkbox-container">
                                            <input class="form-check-input" type="checkbox" value="personalDevelopment" id="PersonalDevelopment">
                                        </div>
                                        <div class="col-9 v">
                                            <label class="form-check-label" for="PersonalDevelopment">
                                                Personal Development
                                            </label>
                                        </div>
                                    </div>

                                    <div class="row dropdownElement">
                                        <div class="col-1 checkbox-container">
                                            <input class="form-check-input" type="checkbox" value="PHP" id="PHP">
                                        </div>
                                        <div class="col-9 genre-container">
                                            <label class="form-check-label" for="PHP">
                                                PHP
                                            </label>
                                        </div>
                                    </div>

                                    <div class="row dropdownElement">
                                        <div class="col-1 checkbox-container">
                                            <input class="form-check-input" type="checkbox" value="productivity" id="Productivity">
                                        </div>
                                        <div class="col-9 genre-container">
                                            <label class="form-check-label" for="Productivity">
                                                Productivity
                                            </label>
                                        </div>
                                    </div>

                                    <div class="row dropdownElement">
                                        <div class="col-1 checkbox-container">
                                            <input class="form-check-input" type="checkbox" value="python" id="Python">
                                        </div>
                                        <div class="col-9 genre-container">
                                            <label class="form-check-label" for="Python">
                                                Python
                                            </label>
                                        </div>
                                    </div>

                                    <div class="row dropdownElement">
                                        <div class="col-1 checkbox-container">
                                            <input class="form-check-input" type="checkbox" value="sport" id="Sport">
                                        </div>
                                        <div class="col-9 genre-container">
                                            <label class="form-check-label" for="Sport">
                                                Sport
                                            </label>
                                        </div>
                                    </div>

                                    <div class="row dropdownElement">
                                        <div class="col-1 checkbox-container">
                                            <input class="form-check-input" type="checkbox" value="webDevelopment" id="WebDevelopment">
                                        </div>
                                        <div class="col-9 genre-container">
                                            <label class="form-check-label" for="WebDevelopment">
                                                Web Development
                                            </label>
                                        </div>
                                    </div>
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
                            <label for="barcode">Barcode</label>
                            <input type="text" class="form-control" id="inputBarcode" placeholder="Enter Barcode">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <button class="btn btn-sm genreTagHidden genreTag" onclick="uncheckGenre(this.value)" type="button" class="close" aria-label="close">PHP<span class="ariaClose" aria-hidden="true">&times;</span></button>
    </div>
@endsection
@section('buttonBar')
    <a onClick="addBook();" class="button">Add Book</a>
@endsection
@section('script')
<script type="application/javascript">
    function uncheckGenre(value){
        $('[id='+value+']').prop('checked',false);
        $('.btn-sm[value='+value+']').remove();
    }

    $('.dropdownElement').on('mouseup', function(event){
        event.stopPropagation();
        console.log(event);
        var genre = event.currentTarget.children[1].innerText
        var genreTag = $('.genreTagHidden').clone();
        genreTag.removeClass('genreTagHidden');
        genreTag.attr('value',genre);
        genreTag.html(genre+'<span class="ariaClose" aria-hidden="true">&times;</span>');
        $('.genreTags').append(genreTag);
    });
</script>
@endsection