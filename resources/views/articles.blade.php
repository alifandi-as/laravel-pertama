<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="article.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <body>
        <nav class="shadow navbar sticky-top navbar-expand-lg bg-light" style="background: transparent">
            <div class="container-fluid">
                <a class="navbar-brand" style="color: lightskyblue" href="#"><b>/||_if</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/homepage">@lang('navbar_home')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/homepage#about_me">@lang('navbar_about')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/homepage#articles">@lang('navbar_articles')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/homepage#contact">@lang('navbar_contact')</a>
                        </li>
                    </ul>
                    <a href="/homepage/articles?lang=en" class="btn btn-outline-dark">EN</a>
                    <a href="/homepage/articles?lang=id" class="btn btn-outline-dark">ID</a>
                </div>
            </div>
        </nav>
        <div class="article_profile part_container">
                <h1>@lang("articles_title")</h1><br>
                <div class="article_profile_picture_container">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/73/Borobudur_Temple.jpg/375px-Borobudur_Temple.jpg" width="500px" class="justify-content-center">
                </div>
                <br>
                <p>@lang("articles_description")</p>
                <a href="/homepage" class="btn btn-primary">@lang("articles_back")</a>

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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>
</body>
</html>

<style>
.article_profile{
    background-color:rgb(255, 255, 128);
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
.article_profile_picture_container{
    display: flex;
    justify-content: center;
}
.part_container{
    padding: 40px;
    padding-left: 16.75%;
    padding-right: 16.75%;
}
.container-fluid{
    width: 75%;
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
</style>