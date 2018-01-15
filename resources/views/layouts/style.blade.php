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
    .logo-container{
        text-align:center;
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
        width: 210px;
        cursor: pointer;
        white-space: nowrap;
    }
    .shown{
        display: block;
    }
    .hidden{
        display: none;
    }

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
    .header-container{
        padding-top:3%;
     }
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
     .content-text{
         font-size: 25px;
         text-align: center;
     }
     .content-container{
         padding-top:55px;
     }
     .form-container{
         padding-top:3%;
     }
     .form-input{
         text-align: center;
     }
     .button-container{
         padding-bottom:2%;
     }
     .form-button{
         text-align:center;
     }
    /*//////////////////////////////////////////////////////////////////////////////////////////////////////////////

    Width Media Queries

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
    @media (max-width: 768px) {
        .header-container{
            padding-top:15%;
        }
        .content-text{
            font-size: 17px;
        }
        .content-container{
            padding-top:10%;
        }
        .button{
            margin-top:10px;
            padding: 12px 30px;
            font-size: 14px;
            width: 120px;
        }
        .form-container{
            padding-top:10%;
        }
        .dropdown {
            padding-top: 1px;
        }
        .links-pad{
            padding-top:4%;
        } 
        #home-logo{
            width:60%
        }
    }
    @media (min-width: 768px) and (max-width: 868px) {
        .header-container{
            padding-top:13%;
        }
        .content-text{
            font-size: 19px;
        }
        .content-container{
            padding-top:9%;
        }
        .button{
            margin-top:13px;
            padding: 12px 32px;
            font-size: 15px;
            width: 135px;
        }
        .form-container{
            padding-top:8%;
        }
        .dropdown {
            padding-top: 3px;
        }
        .links-pad{
            padding-top:4%;
        } 
        #home-logo{
            width:70%;
        }
    }
    @media (min-width: 868px) and (max-width: 968px) {
        .header-container{
            padding-top:11%;
        }
        .content-text{
            font-size: 21px;
        }
        .content-container{
            padding-top:7%;
        }
        .button{
            margin-top:15px;
            padding: 13px 34px;
            font-size: 16px;
            width: 150px;
        }
        .form-container{
            padding-top:6%;
        }
        .dropdown {
            padding-top: 5px;
        }
        .links-pad{
            padding-top:5%;
        } 
        #home-logo{
            width:80%;
        }
    }
    @media (min-width: 968px) and (max-width: 1000px) {
        .header-container{
            padding-top:9%;
        }
        .content-text{
            font-size: 23px;
        }
        .content-container{
            padding-top:5%;
        }
        .button{
            margin-top:17px;
            padding: 14px 36px;
            font-size: 17px;
            width: 165px;
        }
        .form-container{
            padding-top:4%;
        }
        .dropdown {
            padding-top: 7px;
        }
        .links-pad{
            padding-top:5%;
        } 
        #home-logo{
            width:90%;
        }
    }
    @media (min-width: 1000px) and (max-width: 1068px) {
        .header-container{
            padding-top:9%;
        }
        .content-text{
            font-size: 23px;
        }
        .content-container{
            padding-top:5%;
        }
        .button{
            margin-top:17px;
            padding: 14px 36px;
            font-size: 17px;
            width: 165px;
        }
        .form-container{
            padding-top:4%;
        }
        .dropdown {
            padding-top: 7px;
        }
        .links-pad{
            padding-top:40%;
        } 
    }
    @media (min-width: 1068px) and (max-width: 1168px) {
        .header-container{
            padding-top:7%;
        }
        .content-text{
            font-size: 25px;
        }
        .content-container{
            padding-top:3%;
        }
        .button{
            margin-top:20px;
            padding: 15px 38px;
            font-size: 18px;
            width: 180px;
        }
        .form-container{
            padding-top:3%;
        }
        .dropdown {
            padding-top: 10px;
        }
        .links-pad{
            padding-top:40%;
        } 
    }
    @media (min-width: 1168px) and (max-width: 1250px) {
        .links-pad{
            padding-top:35%;
        } 
    }
    @media (min-width: 1250px) and (max-width: 1406px) {
        .links-pad{
            padding-top:33%;
        } 
    }
    @media (min-width: 1406px) and (max-width: 1590px) {
        .links-pad{
            padding-top:20%;
        } 
    }
    /*//////////////////////////////////////////////////////////////////////////////////////////////////////////////

    Height Media Queries

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
    @media (min-height: 1px) and (max-height: 400px) {
        #home-logo{
            width:30%;
            padding-top:1px;
        }
        .dropdown {
            padding-top: 2%;
        }
        .header-container{
            padding-top:0%;
        }
    }
    @media (min-height: 400px) and (max-height: 500px) {
        #home-logo{
            width:40%;
            padding-top:3%;
        }
        .dropdown {
            padding-top: 4%;
        }
        .header-container{
            padding-top:0%;
        }
    }
    @media (min-height: 500px) and (max-height: 600px) {
        #home-logo{
            width:50%;
            padding-top:5%;
        }
        .dropdown {
            padding-top: 6%;
        }
        .header-container{
            padding-top:1%;
        }
    }
    @media (min-height: 600px) and (max-height: 700px) {
        #home-logo{
            width:60%;
            padding-top:7%;
        }
        .dropdown {
            padding-top: 10%;
        }
        .header-container{
            padding-top:1%;
        }
    }
    @media (min-height: 700px) and (max-height: 800px) {
        #home-logo{
            width:70%;
            padding-top:10%;
        }
        .dropdown {
            padding-top: 13%;
        }
        .header-container{
            padding-top:2%;
        }
    }
    @media (min-height: 800px) and (max-height: 900px) {
        #home-logo{
            width:80%;
            padding-top:13%;
        }
        .header-container{
            padding-top:2%;
        }
    }
    @media (min-height: 900px) and (max-height: 1000px) {
        #home-logo{
            width:90%;
            padding-top:17%;
        }
        .header-container{
            padding-top:2%;
        }
    }
    /*//////////////////////////////////////////////////////////////////////////////////////////////////////////////

    280px to 420px wide

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
    @media (min-height: 350px) and (max-height: 500px) and (min-width: 280px) and (max-width: 420px){
        .links-pad{
            padding-top:5%;
        } 
        .dropdown {
            padding-top: 5%;
        }
    }
    @media (min-height: 500px) and (max-height: 650px) and (min-width: 280px) and (max-width: 420px){
        .links-pad{
            padding-top:15%;
        } 
        .dropdown {
            padding-top: 15%;
        }
    }
    @media (min-height: 650px) and (max-height: 800px) and (min-width: 280px) and (max-width: 420px){
        .links-pad{
            padding-top:20%;
        } 
        .dropdown {
            padding-top: 20%;
        }
    }
    @media (min-height: 800px) and (max-height: 1000px) and (min-width: 280px) and (max-width: 420px){
        .links-pad{
            padding-top:30%;
        } 
        .dropdown {
            padding-top: 30%;
        }
    }
    /*////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
    @media (min-height: 600px) and (max-height: 800px) and (min-width: 280px) and (max-width: 650px){
        .links-pad{
            padding-top:10%;
        } 
        .dropdown {
            padding-top: 10%;
        }
    }
    @media (min-height: 800px) and (max-height: 1000px) and (min-width: 280px) and (max-width: 650px){
        .links-pad{
            padding-top:10%;
        } 
        .dropdown {
            padding-top: 20%;
        }
    }
    @media (min-height: 800px) and (max-height: 1000px) and (min-width: 280px) and (max-width: 800px){
        .links-pad{
            padding-top:15%;
        } 
        .dropdown {
            padding-top: 15%;
        }
    }
    /*//////////////////////////////////////////////////////////////////////////////////////////////////////////////

    Header

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
    @media (max-width: 300px){
        .header-container{
            padding-top:12%;
        }
        .header h1{
            padding: 2px;
            font-size: 17px;
        }
    }
    @media (min-width: 300px) and (max-width: 400px){
        .header-container{
            padding-top:10%;
        }
        .header h1{
            padding: 3px;
            font-size: 20px;
        }
    }
    @media (min-width: 400px) and (max-width: 500px){
        .header-container{
            padding-top:15%;
        }
        .header h1{
            padding: 5px;
            font-size: 25px;
        }
    }
    @media (min-width: 500px) and (max-width: 600px){
        .header-container{
            padding-top:15%;
        }
        .header h1{
            padding: 7px;
            font-size: 30px;
        }
    }
    @media (min-width: 600px) and (max-width: 700px){
        .header h1{
            padding: 10px;
            font-size: 34px;
        }
    }
    @media (min-width: 700px) and (max-width: 800px){
        .header h1{
            padding: 10px;
            font-size: 36px;
        }
        .table-content-height{
            height: calc(100vh - 450px);
        }
    }
    @media (min-width: 800px) and (max-width: 900px){
        .header h1{
            padding: 10px;
            font-size: 38px;
        }
        .table-content-height{
            height: calc(100vh - 470px);
        }
    }
    @media (min-width: 90px) and (max-width: 1070px){
        .table-content-height{
            height: calc(100vh - 460px);
        }
    }
    @media (max-height: 300px){
        .header h1{
            padding: 2px;
            font-size: 17px;
        }
        .content-text{
            font-size:15px;
        }
    }
    @media (min-height: 300px) and (max-height: 400px){
        .header-container{
            padding-top:2%;
        }
        .header h1{
            padding: 2px;
            font-size: 17px;
        }
    }
</style>