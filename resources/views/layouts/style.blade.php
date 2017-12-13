<style>
    body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
        font-size: 30px;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .topright-nav{
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-transform: uppercase;
        position: fixed;
        right: 10px;
        top: 10px;
    }

    .topright-nav a{
        text-decoration: none;
        color: #636b6f;
    }

    .button{
        margin-top: 20px;
        background-color: #5EC0D5;
        border: none;
        color: white;
        padding: 15px 38px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 18px;
        width: 180px;
    }
    .button-small{
        margin-top: 20px;
        background-color: #5EC0D5;
        border: none;
        color: white;
        padding: 10px 26px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        width: 100px;
    }

    a:link{
        text-decoration: none;
        text-color: black;
    }

    a:visited{
        text-decoration: none;
        text-color: black;
    }

    .small-list{
        font-size: 18px;
        padding-top: 3vh;
        padding-bottom: 6vh;
    }

    .left-align{
        text-align:left;
        font-size: 20px;
        padding-left:110px;
        padding-right:110px;
    }

    .user-data{
        font-size: 30px;
    }

    .justify-content-normal{
        justify-content: normal;
    }

    .main-content{
        height: calc(100vh - 265px);
        overflow: auto;
    }

    .fixed-button{
        position:fixed;
        bottom: 35px;
        /*left: 50%;
        transform: translate(-50%);*/
    }

    .fixed-th{
        position:fixed;
        margin-top: -26px;
        background-color: white;
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
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 250px;
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

    #home-logo{
        width: 50%;
    }

    .header{
        width: 85%;
    }
    
    .header h1{
        border-bottom: 1px solid #5EC0D5;
        text-align: left;
        padding: 15px;
        font-size: 45px;
    }

    .dispBlock-overAuto{
        display: block;
        overflow: auto;
    }

    .book-list-height{
        height: calc(100vh - 300px);
    }

    .book-list-left-width{
        width: calc((100vw - 220px) * 0.7);
    }

    .book-list-right-width{
        width: calc((100vw - 220px) * 0.3);
    }

    .user-list-height{
        height: calc(100vh - 300px);
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

    div.user-parent{
        padding: 0;
        margin: 0;
        list-style: none;
        display: -webkit-box;
        display: -moz-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-flex-flow: row wrap;
        justify-content: space-around;
        -webkit-justify-content: space-around;
        flex-wrap: nowrap;
        -webkit-flex-wrap: nowrap;
        width: 85vw;
        height: 425px;
    }

    div.user-child{
        text-align: center;
        width: 60vw;
        padding-left:3%;
    }

    div.user-borrows{
        height: 100%;
    }

    div.user-reserves{
        height: 100%;
    }

    .user-borrows-height{
        height: calc(425px - 90px);
    }

    .user-lists{
        font-size: 18px;
        height: 100%;
    }

    .user-borrows-width{
        width: calc((100vw - 416px) * 0.5);
    }

    .left-text{
        text-align: left;
    }

    .user-list-header{
        border-bottom: 1px solid #5EC0D5;
        text-align: left;
        padding: 10px;
        font-size: 23px;
        width:82%;
    }

    .icon-pos{
        float:right;
        margin-top:-57px;
    }

    .icon-pos-small{
        float:right;
        margin-top:-7px;
    }

    .icon-float{
        float:right;
    }
</style>