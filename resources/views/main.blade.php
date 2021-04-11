<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Library</title>
    <style type="text/css">
body{
background-color: rgba(193, 191, 191, 0.22);
}
.nav{
    display: flex;
    position: absolute;
    right: 0px;
    top: 0px;
}
.nav div{
    margin: 0px 40px 0px 15px;
    font-size: 18px;
}
.upper-center{
    display: flex;
}
.popular-book{
    width: 10%;
    height: 20%;
    margin: 80px 6px 10px 10px;
}
#most{
    position: relative;
    top: 50px;
    display: flex;
    justify-content: center;
}
.content{
    display: flex;
    margin: 20px 10px 10px 70px;
    
}
.right-content{
    width: 80%;
    height: 150px;
    background-color: rgba(255, 255, 255, 0.78);
}
.all-content{
    background-color: rgba(255, 255, 255, 0.76);
    width: 65%;
    margin-left: 80px;
}

ul{
    display: flex;
    justify-content: center;
    list-style: none;
}
li{
    margin-right: 5px;
}
.footer{
    position: relative;
    right: 22px;
    top: 20px;
    width: 102%;
    height: 300px;
    background-color: #110004;

}

    </style>
    <script src="../js/registration.js"></script>
</head>
<body>

<nav><div class="nav">
    <div class="Registration" onclick="register()">
        <a href="{{ url('techSupport')}}"><p>{{__('nav.registartion')}}</p></a>
    </div>
    <div class="Genre">
        <a><p>{{__('nav.genre')}}</p></a>
    </div>
    <div class="Authors">
       <a><p>{{__('nav.author')}}</p></a>
    </div>
    <div class="Audio_book">
        <a><p>{{__('nav.audiobook')}}</p></a>
    </div>
    <div class="Blog">
        <a><p>{{__('nav.blog')}}</p></a>
    </div>
	<div class="language">
	<div>
</div></nav>
<h3 id="most">{{__('nav.most_popular')}}</h3>
<hr>
<div class="upper-center">

    <div class="popular-book">
        <img src="{{asset('image/World.jpg')}}" width="150px" height="150px">
    </div>
    <div class="popular-book">
        <img src="image/World.jpg" width="150px" height="150px">
    </div>
    <div class="popular-book">
        <img src="image/World.jpg" width="150px" height="150px">
    </div>
    <div class="popular-book">
        <img src="image/World.jpg" width="150px" height="150px">
    </div>
    <div class="popular-book">
        <img src="image/World.jpg" width="150px" height="150px">
    </div>
    <div class="popular-book">
        <img src="image/World.jpg" width="150px" height="150px">
    </div>
    <div class="popular-book">
        <img src="image/World.jpg" width="150px" height="150px">
    </div>
    <div class="popular-book">
        <img src="image/World.jpg" width="150px" height="150px">
    </div>
    <div class="popular-book">
        <img src="image/World.jpg" width="150px" height="150px">
    </div>
</div>
<hr>
<div class="container">
    <div class = "right-container" style="position: absolute; right: 30px;width:25%; background-color:white; height: auto;">
        <p>Жанры</p>
        <a>Романтика</a>
    </div>
<div class = "all-content">
<h2 style="display:flex; justify-content: center; position: relative;">{{__('nav.last_update')}}</h2>
<div class="center">
    <div class="content">
        <div class="left-content">
            <img src="image/World.jpg" width="120px" height="120px">
        </div>
        <div class="right-content">
            <p style="display: flex; justify-content: center">Name of book</p>
        </div>
    </div>
    <div class="content">
        <div class="left-content">
            <img src="image/World.jpg" width="120px" height="120px">
        </div>
        <div class="right-content">
            <p style="display: flex; justify-content: center">Name of book</p>
        </div>
    </div>
    <div class="content">
        <div class="left-content">
            <img src="image/World.jpg" width="120px" height="120px">
        </div>
        <div class="right-content">
            <p style="display: flex; justify-content: center">Name of book</p>
        </div>
    </div>
    <div class="content">
        <div class="left-content">
            <img src="image/World.jpg" width="120px" height="120px">
        </div>
        <div class="right-content">
            <p style="display: flex; justify-content: center">Name of book</p>
        </div>
    </div>
    <div class="content">
        <div class="left-content">
            <img src="image/World.jpg" width="120px" height="120px">
        </div>
        <div class="right-content">
            <p style="display: flex; justify-content: center">Name of book</p>
        </div>
    </div>
    <div class="content">
        <div class="left-content">
            <img src="image/World.jpg" width="120px" height="120px">
        </div>
        <div class="right-content">
            <p style="  display: flex; justify-content: center">Name of book</p>
        </div>
    </div>
    <div class="content">
        <div class="left-content">
            <img src="image/World.jpg" width="120px" height="120px">
        </div>
        <div class="right-content">
            <p style="display: flex; justify-content: center">Name of book</p>
        </div>
    </div>
    <div class="content">
        <div class="left-content">
            <img src="image/World.jpg" width="120px" height="120px">
        </div>
        <div class="right-content">
            <p style="display: flex; justify-content: center">Name of book</p>
        </div>
    </div>
    <div class="content">
        <div class="left-content">
            <img src="image/World.jpg" width="120px" height="120px">
        </div>
        <div class="right-content">
            <p style="display: flex; justify-content: center">Name of book</p>
        </div>
    </div>
    <div class="content">
        <div class="left-content">
            <img src="image/World.jpg" width="120px" height="120px">
        </div>
        <div class="right-content">
            <p style="display: flex; justify-content: center">Name of book</p>
        </div>
    </div>
</div>
</div>
</div>
<div class="list" >
<ul>
    <a><li>1</li></a>
    <a><li>2</li></a>
    <a><li>3</li></a>
    <a><li>4</li></a>
    <a><li>5</li></a>
    <a><li>6</li></a>
    <a><li>7</li></a>
       <li>...</li>
    <a><li>12</li></a>
</ul>
</div>
<div class="footer">
</div>
<div class="">
    <form>
        <input type="submit">
    </form>
</div>
</body>
</html>