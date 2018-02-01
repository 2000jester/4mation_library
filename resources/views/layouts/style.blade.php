<style>
    /*//////////////////////////////////////////////////////////////////////////////////////////////////////////////

    Container Styles

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
        .container{
            max-width:100%;
        }
        .logo-container{
            text-align:center;
        }
        .topElement-container{
            /*padding-top: 50px;*/
        }
        .checkbox-container{
            padding-left: 30px;
        }
        .bottomElement-container{
            border-left: solid #a0a4a5;
        }
        .userCartTable-container{
            padding-top: 3%;
            text-align: center;
        }
        .borrowButtons-container{

        }
        .cartButtons-container{

        }
        .header-container{
            padding-top:5%;
        }
        .content-container{
            padding-top:30px;
        }
        .form-container{
            padding-top:3%;
        }
        .button-container{
            padding-bottom:2%;
        }
        .borrowForm-containerPadded{
            padding-top: 45%;
        }
        .borrowForm-container{
            padding-top: 10%;
        }
        .barcodeEntry-container{
            margin-left: 15px;
        }
    /*//////////////////////////////////////////////////////////////////////////////////////////////////////////////

    Button / Link Styles

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
        div.links a{
            color: #636b6f;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        div.links div{
            text-align: center;
        }
        .links:hover{
            color: black;
        }
        div.nav a{
            color: #636b6f;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        div.nav a:hover{
            color: black;
        }
        .nav{
            position:absolute;
            width:100%;
            z-index: 100;
        }
        .links-pad{
            padding-top:15%;
        }
        a:link, a:visited, a:hover, a:active{
            text-decoration: none;
            text-color: black;
            outline: 0;
        }
        .button, .button:not([href]):not([tabindex]){
            margin-top:20px;
            background-color: #5EC0D5;
            border: none;
            color: white;
            padding: 15px 38px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 18px;
            width: 210px;
            cursor: pointer;
            white-space: nowrap;
            border-radius: .25rem;
        }
        .navbar{
            background-color: white;
        }
        .navbarDropdown{
            text-align: left;        
        }
        div.nav a.navbarLinks{
            color: white;
            width: 100%;
        }
        #navbarToggleExternalContent{
            max-width:400px;
        }
        .lightButton:hover{
            background-color: #636b6f;
            color: white;
        }
        .navbar-toggler:hover{
            background-color: #636b6f;
        }
    /*//////////////////////////////////////////////////////////////////////////////////////////////////////////////

        Image Styles

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
        #home-logo{
            width:100%;
            padding-top:18%;
        }
    /*//////////////////////////////////////////////////////////////////////////////////////////////////////////////

        Table Styles

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
        .table-content-height{
            height: calc(100vh - 430px);
        }
        .dispBlock-overAuto{
            display: block;
            overflow: auto;
        }
        .book-list-left-width{
            width: calc((100vw - 220px) * 0.7);
        }
        .book-list-right-width{
            width: calc((100vw - 220px) * 0.3);
        }
        .table{
            text-align: left;
            font-size: 20px;
        }
        .user-list-first-width{
            width: calc((100vw - 220px) * 0.333);
        }
        .user-list-second-width{
            width: calc((100vw - 220px) * 0.333);
        }
        .user-list-third-width{
            width: calc((100vw - 220px) * 0.333);
        }
    /*//////////////////////////////////////////////////////////////////////////////////////////////////////////////

        Header Styles

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
        .header-icon{
            text-align:right;
        }
        .header{ 
            padding:initial;
        }
        .header h1{
            border-bottom: 1px solid #5EC0D5;
            padding: 15px;
            font-size: 45px;
        }
    /*//////////////////////////////////////////////////////////////////////////////////////////////////////////////

        Form Styles

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
        .form-input{
            text-align: center;
        }
        .form-button{
            text-align:center;
        }
        .borrow-form{
            height: 32px;
            width: 168px;
        }
        .genreSelect .form-check-input{
            margin-left: 0;
            padding-left: 100px;
        }
    /*//////////////////////////////////////////////////////////////////////////////////////////////////////////////

        Font Styles

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
        .fa-times{
            color: red;
        }
        .fa-times:hover{
            color: crimson;
        }
        .fa-times:active{
            color: grey;
        }
        .fa-bars{
            color: #5EC0D5;
        }
        .fa-bars:hover{
            color: crimson;
        }
        .align-right{
            text-align: right;
        }
        .content-text{
            font-size: 25px;
            text-align: center;
        }
        .ariaClose{
            padding-left: 6px;
        }
    /*//////////////////////////////////////////////////////////////////////////////////////////////////////////////

        Content Styles

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
        body{
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            text-decoration: none;
        }
        .navbarDropdown hr{
            border-color: white;
        }
        .dropdownElement{
            padding-top: 10px;
        }
        .genreTags{
            margin-top: 31px;
            margin-bottom: 15px;
            margin-left: -15px;
        }
        .genreTag{
            margin-top: 0px;
            background-color: #5EC0D5;
            color: white;
            margin: 2px;
        }
        .genreTagHidden{
            visibility:hidden;
        }
        .genreTag:hover{
            color: #636b6f;
        }
    /*//////////////////////////////////////////////////////////////////////////////////////////////////////////////

        Error Message Styling

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
        .userAlert{
            padding-bottom: 30px;
            position: absolute;
            z-index: 50;
            padding-left: 50px;
        }
    /*//////////////////////////////////////////////////////////////////////////////////////////////////////////////

        Desktop Media Queries

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
        @media (max-width: 991px){
            .links-pad{
                padding-top: 5%;
            }
            #home-logo{
                width: 70%;
            }
            .content-text{
                font-size: 18px;
            }
            .header h1{
                font-size: 36px;
            }
            .borrowForm-containerPadded{
                padding-top: 60px;
            }
            .cartButtons-container{
                width: 50%;
            }
            .borrowButtons-container{
                width: 50%;
            }
            .topElement-container{
                padding-bottom: 170px;
                padding-top: 170px;
            }
            .bottomElement-container{
                border-left: none;
            }
            .book-list-left-width{
                width: calc((100vw) * 0.7);
            }
            .book-list-right-width{
                width: calc((100vw) * 0.3);
            }
            .userCartTable-container{
                padding-top: 30px;
                width: 50%;
                margin-left: 25%;
            }
            .table-content-height{
                height: calc(100vh - 670px);
            }
            .alreadyInCart{
                padding-bottom: 30px;
                padding-top: 50px;
            }
        }
        @media (min-width: 990px) and (max-width: 1152px){
            .button, .button:not([href]):not([tabindex]){
                font-size: 14px;
                width: 150px;
            } 
        }
        @media (min-width: 1152px) and (max-width: 1332px){
            .button, .button:not([href]):not([tabindex]){
                font-size: 16px;
                width: 170px;
            } 
        }
    /*//////////////////////////////////////////////////////////////////////////////////////////////////////////////

        Mobile Media Queries

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
</style>