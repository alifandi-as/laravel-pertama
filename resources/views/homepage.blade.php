<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <body>
        <nav class="shadow navbar sticky-top navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" style="color: lightskyblue" href="#"><b>/||_if</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#home">@lang('navbar_home')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about_me">@lang('navbar_about')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#articles">@lang('navbar_articles')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">@lang('navbar_contact')</a>
                        </li>
                    </ul>
                    <a href="homepage?lang=en" class="btn btn-outline-dark">EN</a>
                    <a href="homepage?lang=id" class="btn btn-outline-dark">ID</a>
                </div>
            </div>
        </nav>
        <div id="home" class="parallax-wrapper">
            <div class="content">
                <h1 style="font-family: 'bahnschrift'">Alifandi Ahmad Suryawan</h1>
            </div>
        </div>
        <div class="regular-wrapper">
            <div id="about_me" >
                <div class="part_container">
                    <div class="rotate">
                        <h2>@lang('sections_about')</h2>
                    </div>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/b/b7/Lueg_im_SWR1_Studio.jpg" width="200px" height="200px" class="rounded-circle float-start profile-img" >
                    <div class="text_container">
                        <p>@lang('description')</p>
                    </div>
                </div>
            </div>
            <div id="articles">
                <div class="part_container">
                    <div class="rotate">
                        <h2>@lang('sections_articles')</h2>
                    </div>
                    <div class="container row card_container">
                        <div class="col-md-4">
                            <div class="col-md-4 card shadow-sm h-100" style="width: 100%;">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/73/Borobudur_Temple.jpg/375px-Borobudur_Temple.jpg" class="card-img-top" alt="..." height="150px">
                                <div class="card-body">
                                    <h5 class="card-title">@lang('articles_title')</h5>
                                    <p class="card-text"><?=substr(__('articles_description'),0,140)?>...</p>
                                    <a href="/homepage/articles" class="btn btn-primary">@lang('articles_read')</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="contact">
                <div class="part_container">
                    <div class="rotate">
                        <h2>@lang('sections_contact')</h2>
                    </div>
                    <div class="contact_container">
                        <br>
                        <div class="container row">
                            <div class="form-group col-md-6">
                                <label for="name">@lang('contact_name')</label>
                                <input type="text" id="name" class="form-control" placeholder="@lang('contact_name')">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">@lang('contact_email')</label>
                                <input type="email" id="email" class="form-control" placeholder="@lang('contact_email')">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="message">@lang('contact_message')</label>
                                <textarea class="form-control" cols="1" rows="3" placeholder="@lang('contact_message')"></textarea>
                            </div>
                            <div class="form-group col-md-1">
                                <a href="#" class="btn btn-primary">@lang('contact_send')</a>
                            </div>
                        </div>
                        <br>
                        <br>
                    </div>
                </div>
              </div>
            <div class="copyright">
                @lang('copyright')
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</body>
</html>

<style>
    html {
    overflow: hidden;
}
body {
    margin: 0;
    height: 100vh;
    perspective: 1px;
    transform-style: preserve-3d;
    overflow-x:hidden;
    overflow-y:scroll;
    scroll-behavior: smooth;
}
.parallax-wrapper {
    width: 100vw;
    height:100vh;
    padding-bottom:3.5%;
    box-sizing: border-box;
    transform-style: preserve-3d;
    display: flex;
    justify-content: center;
    align-items: center;
}
.parallax-wrapper::before {
    content:"";
    width: 100vw;
    height: 100vh;
    top:0;
    left:0;
    background-image: url(https://i0.wp.com/akademistatistika.com/wp-content/uploads/2022/06/luca-bravo-XJXWbfSo2f0-unsplash.jpg);
    background-size: cover;
    position: absolute;
    z-index: -1;
    transform:translateZ(-2px) scale(3);
}
.regular-wrapper {
    width: 100vw;
    height:100vh;
    z-index: 2;
    position: relative;
}
#about_me{
    display: flex;
    background: lightgreen;
}
#articles{
    display: flex;
    background: rgb(255, 255, 128);
}
.rotate{
    float: left;
    writing-mode: vertical-lr;
    font-family: bahnschrift, sans-serif;
}
.part_container{
    margin: 40px;
    margin-left: 10.8%;
    margin-right: 16.75%;
}
.container-fluid{
    width: 75%;
}
.content{
    color: #ffffff;
}
#contact{
    background-color: lightskyblue;
    display: flex;
    justify-content: center;
}
.contact_container{
    display: flex;
    justify-content: center;
}
.copyright{
    background-color: midnightblue;
    color: white;
    display: flex;
    justify-content: center;
}
.text_container{
    padding-left: 315px;
}

.card_container{
    width: 65vw;
    float: left;
}
.col-md-4{
    margin-bottom: 25px !important;
}
</style>