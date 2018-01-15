<style>
    body{
        background-color: #fff;
        color: #636b6f;
        font-family: 'Raleway', sans-serif;
        text-decoration: none;
    }
    .container{
        max-width:100%;
    }
    #home-logo{
        width:100%;
        padding-top:18%;
    }
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
    .show {
        display:block;
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
        width: 185px;
        cursor: pointer;
        white-space: nowrap;
    }
    .shown{
        display: block;
    }
    .hidden{
        display: none;
    }

    .book-list-height{
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

    /*//////////////////////////////////////////////////////////////////////////////////////////////////////////////

    Normal Height Page

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
    .header-container-nh{
       padding-top:3%;
    }
    .header-icon-nh{
        text-align:right;
    }
    .header-nh{ 
        padding:initial;
    }
    .header-nh h1{
        border-bottom: 1px solid #5EC0D5;
        padding: 15px;
        font-size: 45px;
    }
    .content-text-nh{
        font-size: 25px;
        text-align: center;
    }
    .content-container-nh{
        padding-top:55px;
    }
    .form-container-nh{
        padding-top:3%;
    }
    .form-input-nh{
        text-align: center;
    }
    .button-container-nh{
        padding-bottom:2%;
    }
    .form-button-nh{
        text-align:center;
    }
    @media (max-width: 768px) {
        .header-container-nh{
            padding-top:15%;
        }
        .content-text-nh{
            font-size: 17px;
        }
        .content-container-nh{
            padding-top:10%;
        }
        .button-nh{
            margin-top:10px;
            padding: 12px 30px;
            font-size: 14px;
            width: 120px;
        }
        .form-container-nh{
            padding-top:10%;
        }
        .dropdown {
            position: relative;
            display: inline-block;
            padding-top: 2px;
        }
    }
    @media (min-width: 768px) and (max-width: 868px) {
        .header-container-nh{
            padding-top:13%;
        }
        .content-text-nh{
            font-size: 19px;
        }
        .content-container-nh{
            padding-top:9%;
        }
        .button-nh{
            margin-top:13px;
            padding: 12px 32px;
            font-size: 15px;
            width: 135px;
        }
        .form-container-nh{
            padding-top:8%;
        }
        .dropdown {
            position: relative;
            display: inline-block;
            padding-top: 4px;
        }
    }
    @media (min-width: 868px) and (max-width: 968px) {
        .header-container-nh{
            padding-top:11%;
        }
        .content-text-nh{
            font-size: 21px;
        }
        .content-container-nh{
            padding-top:7%;
        }
        .button-nh{
            margin-top:15px;
            padding: 13px 34px;
            font-size: 16px;
            width: 150px;
        }
        .form-container-nh{
            padding-top:6%;
        }
        .dropdown {
            position: relative;
            display: inline-block;
            padding-top: 6px;
        }
    }
    @media (min-width: 968px) and (max-width: 1068px) {
        .header-container-nh{
            padding-top:9%;
        }
        .content-text-nh{
            font-size: 23px;
        }
        .content-container-nh{
            padding-top:5%;
        }
        .button-nh{
            margin-top:17px;
            padding: 14px 36px;
            font-size: 17px;
            width: 165px;
        }
        .form-container-nh{
            padding-top:4%;
        }
        .dropdown {
            position: relative;
            display: inline-block;
            padding-top: 8px;
        }
    }
    @media (min-width: 1068px) and (max-width: 1168px) {
        .header-container-nh{
            padding-top:7%;
        }
        .content-text-nh{
            font-size: 25px;
        }
        .content-container-nh{
            padding-top:3%;
        }
        .button-nh{
            margin-top:20px;
            padding: 15px 38px;
            font-size: 18px;
            width: 180px;
        }
        .form-container-nh{
            padding-top:3%;
        }
        .dropdown {
            position: relative;
            display: inline-block;
            padding-top: 10px;
        }
    }
</style>