<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <title>user</title>
</head>
<style>
    #product {
        padding: 5px 5px 5px;
        width: 300px;
    }
    
    .product_block {
        padding-left: 5px;
    }
    
    .product_image img {
        width: 100%;
    }
    
    #content {
        width: 100%;
        margin-right: 0;
        margin-top: 57px;
    }
    
    .menu ul li a {
        text-decoration: none;
        color: black;
    }
    
    ul li a:hover {
        color: #ff0080;
    }
    
    .product_block.product_image {
        width: 100%;
        height: 100%;
    }
</style>

<body>
    <div class="container" style="display: center">
        <header>
            <div class=" menu">
                <img src="/public/logo.png" alt="">
                <ul class="list-inline">
                    <li><img src="storage/public/logo.png" alt=""></li>
                    <li><a href="/home">DU LỊCH </a></li>
                    <li><a href="#">BOOK VÉ MÁY BAY</a></li>
                    <li><a href="#">BOOK KHÁCH SẠN</a></li>
                    <li><a href="">DỊCH VỤ VISA</a></li>
                    <li><a href="">THUÊ XE</a></li>
                    <li><a href="">TIN TỨC</a></li>
                    <li><a href="">GIỚI THIỆU</a></li>

                </ul>
        </header>
        </div>
        <div id="viewport " class="container">
            <!-- Content -->
            <div id="content">


                @foreach ($products as $item)
                <div class=" col-sm-3" id="product">

                    <div class="product_block">
                        <div class="product_image">
                            <img src="{{'/storage/'.$item ->image}}" alt="avata">
                            <span style="display: flex; font-size: 13px; margin-top: -10%;"> 
                        <p style="background-color: #ff0080; height: 30px; width: 140px; color: white" >{{$item->schedule}}</p> <p style="background-color: #696969;height: 30px; width: 140px; color: white; ">{{$item->typetour}}</p> </span>
                        </div>
                        <div class="product_content">
                            <label>{{$item ->name}}</label>
                        </div>
                        <div class="product_conten">
                            <p>Lịch trình:{{$item->schedule}}</p>
                            <p>Khởi hành:{{$item->depart}}</p>
                            <span style="display: flex;"><p>Số chỗ còn nhận:{{$item->number}}</p>  <p style="color:plum">{{$item ->getPrice()}}</p></span>

                        </div>


                    </div>

                </div>
                @endforeach
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-body">
                @coppyright Hồ Thị Mai
            </div>
            
        </div>

    </div>
</body>

</html>