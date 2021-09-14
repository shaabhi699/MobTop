<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MobTop Sansar</title>
    
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>
<style>
    .custom-login{
        height: 785px;
        padding-top:150px;
    }
    img.slider-img{
        height: 600px !important;
        
    }
    .slider-text{
        background-color: #24465454 !important;
        border-radius: 25px;
        
    }
    .trending-img
    {
        height: 200px;
        

    }
    .trending-item{
        float: left;
        width: 20%;
        margin: 4rem;
    }
    .trending-wrapper{
        margin: 40px;
    }
    .detail-img{
        height: 325px;
    }
    .search-box{
        width: 500px !important
    }
    .cart-list-divider {
    border-bottom: 1px solid #ccc;
    margin-bottom: 40px;
    padding-bottom: 40px;
    }

    /* .mts{
        padding-top: 100px;
    } */

    .abts{
        text-align: center;
    }

    .body{
  font-family: 'Raleway', sans-serif;
}

.search-text {
   padding-bottom: 60px;
}
	
.search-text .input-search {
	height: 45px;
	width: 40%;
	padding-left: 20px;
    color: #333;
} 

.search-text .btn-search {
    background: #545454;
    border: none;
	color: #FFF;
	height: 45px;
    width: 80px;
}

.search-text h4 {
    color: #888582;
    font-weight: 700;
}

footer {
	background-color: #222222;
    padding: 60px 0px;
    border-radius: 25px;
}

footer ul{
    list-style: none;
    margin: 0 auto;
    display: inline-block;
    padding-top: 50px;
}

footer ul li {
    float: left;
}

footer ul li a{
	color: #b1aca1;
    padding: 20px;
}

footer ul li a:hover {
	color: #7dabdb;
	text-decoration: none;
}

.footer-top {
	padding-bottom: 50px;
    border-radius: 25px;
}

.footer-top .fa {
    font-size: 8px;
    color: #FFF;
    padding-right: 10px;
    border-radius: 25px;
}

.footer-top a {
    color: #FFF;
    background: #333333; 
    padding: 10px;
    border-radius: 25px;
}

.footer-top .col-lg-2:hover .fa, 
.footer-top .col-lg-2:hover a{
    color: #7dabdb;
	text-decoration: none;
}

.copyright {
    background-color: #f0f0f0;
}

.copyright p {
	font-size: 12px;
	padding: 15px 0 10px 0;
}

#top {
    color: #fff;
    background: #7dabdb;
    cursor: pointer;
    font-size: 18px;
    line-height: 40px;
    height: 40px;
    width: 40px;
    right: 30px;
    position: fixed;
    border-radius: 3px;
    text-align: center;
    bottom: 350px;
}
/*  Footer 2 */

.footer-top2 a {
    display: block;
    color: #FFF;
    background: #333333;
     border-radius: 72px;
    height: 100px;
    width: 100px;
    padding: 43px 0px;
}

.footer-top2 {
	padding-bottom: 50px;
}

.footer-top2 .fa {
    font-size: 18px;
    color: #FFF;
    padding-right: 10px;
}

.footer-top a {
    color: #FFF;
    background: #333333; 
    padding: 10px;
}

.footer-top2 .col-lg-2:hover a {
    color: #FFF;
	text-decoration: none;
	background: #7dabdb;
    transition: all 2s ease-in-out;
}
/*  Footer 2 End */


/*  Footer 3 */
.footer-top3 .fa {
    background: #333333;
    color: #FFF;
    width: 50px;
    height: 50px;
    line-height: 50px;
    border-radius: 50%;
    font-size: 14px;
    margin-right: 5px;
} 

.footer-top3 .fa:hover {
    color: #FFF;
	background: #7dabdb;
    transition: all 2s ease-in-out;
} 

.footer-top3 a {
    color: #FFF;
    text-decoration: none;
}
/*  Footer 3 End */

@media print{
    footer,.copyright,.mts{
        display: none;
    }
}

</style>
</html>