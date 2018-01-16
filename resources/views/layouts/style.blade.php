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
        .userCartTable-container{
            padding-top: 3%;
            text-align: center;
        }
        .header-container{
            padding-top:3%;
        }
        .content-container{
            padding-top:55px;
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
        div.nav a{
            color: #636b6f;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        div.nav div{
            text-align: center;
        }
        .dropbtn {
            background-color: #5EC0D5;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            text-transform: uppercase;
        }
        .dropdown {
            position: relative;
            display: inline-block;
            padding-top: 12px;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 250px;
            width: 300px;
            overflow: auto;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            font-size: 20px;
        }
        .dropdown a:hover {
            background-color: #f1f1f1;
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
            height: calc(100vh - 410px);
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
        .align-right{
            text-align: right;
        }
        .content-text{
            font-size: 25px;
            text-align: center;
        }
    /*//////////////////////////////////////////////////////////////////////////////////////////////////////////////

        Content Styles

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
        .verticalLine{
            border-left: solid #a0a4a5;
        }
        body{
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            text-decoration: none;
        }
    /*//////////////////////////////////////////////////////////////////////////////////////////////////////////////

        Desktop Media Queries

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
    
        @media (max-width: 990px){
            .links-pad{
                 padding-top: 5%;
            }
            #home-logo{
                width: 70%;
            }
            .dropdown-content {
                min-width: 100px;
                width: 158.95px;
            }
            .content-text{
                font-size: 18px;
            }
            .header h1{
                font-size: 36px;
            }
        }

    /*//////////////////////////////////////////////////////////////////////////////////////////////////////////////

        Mobile Media Queries

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
</style>