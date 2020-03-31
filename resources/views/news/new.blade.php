<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Новость</title>
    <meta name="keywords" content="Ключевые слова, и, фразы, через, запятую">
    <meta name="description" content="Описание контента страницы, 1-2 предложения.">
</head>
<body>
<nav>
    @include('main_menu')

</nav>

<div class="content">
    <small><b>Категория: </b>{{ $news['cat_id'] }}</small>
    <h1>{{ $news['title'] }}</h1>
    <img src="http://www.newsfiber.com/thumb/20200322-0DDA66BEB44922A4-0-1-5631490A-361A3CE16D200414.jpeg" style="float:left; padding:5px 20px 10px 0" alt="Alt text">
    <p>{{ $news['text'] }}</p>
</div>
</body>
