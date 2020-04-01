<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Новости</title>
    <meta name="keywords" content="Ключевые слова, и, фразы, через, запятую">
    <meta name="description" content="Описание контента страницы, 1-2 предложения.">
    <style>
        .news-wrap{
            display: flex;
            width: 90%;
            justify-content: space-between;
            margin-top: 50px;
        }
        .news-item{
            display:flex;
            flex-direction: column;
            flex-basis: 300px;
            max-width: 300px;
            border: 1px solid #ccc;
            padding:10px;
        }
        .new-item__description{
            font-size: 14px;
        }
    </style>
</head>
<body>
<nav>

    @include('main_menu')

</nav>

<div class="content">
    <h1>CATEGORIES!</h1>
    <div class="news-wrap">
        @foreach ($categories as $item)

        <div class="news-item">
            <a href="{{ route('news.category.show', $item['slug']) }}"><h2>{{ $item['name'] }}</h2></a>
            <a href=" {{ route('news.category.show', $item['slug']) }}">
                <img src="http://www.newsfiber.com/thumb/20200322-0DDA66BEB44922A4-0-1-5631490A-361A3CE16D200414.jpeg" alt="New Image">
            </a>

        </div>
            @endforeach
    </div>
</div>
</body>
