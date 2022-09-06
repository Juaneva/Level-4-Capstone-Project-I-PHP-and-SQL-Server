<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link a CSS file for the main layout of the page-->
    <link href="/css/main.css" rel="stylesheet">
    <title>Category Search</title>
</head>

<body onload=displayAlertFooter()>
    <br>
    <button><a href="{{ url('/') }}">Return Home</a></button>
    <button><a href="{{ url('/search') }}">Return to Search</a></button>

    <div class="pageContent">
        <h1>Blog Posts by Search:</h1>
        <h2>Read more about the posts:</h2>

        @foreach($posts as $post)
        <!-- Table to display the search result-->
        <table>
            <th colspan="2">Title</th>
            <tr>
                <td colspan="2">{{$post->title}}</td>
            </tr>

            <th>Category</th>
            <th>Date Created</th>
            <tr>
                <td> {{$post->category}} </td>
                <td> {{$post->created}} </td>
            </tr>

            <th>Tags:</th>
            <th>ID Article</th>
            <tr>
                <td>
                    <!-- Make an array of the tags, split by space -->
                    @php
                    $tagList = explode(" ", $post->tags);
                    @endphp

                    <!-- Make a for loop with links to the different tags -->
                    @for ($i = 0; $i<(count($tagList)); $i++) <a class="tags" href="{{ url('/tag/'.$tagList[$i])}}">{{$tagList[$i]}}</a>
                        @endfor
                </td>
                <td> {{$post->id}} </td>
            </tr>

            <th colspan="2">Read Blog:</th>
            <tr>
                <td colspan=2><textarea rows="10"> {{$post->content}}</textarea> </td>
            </tr>

        </table>
        @endforeach

    </div>
    <!-- Add pop up cookie and Footer -->
    <div class="cookie">
    </div>
    
</body>

<footer>
    <center> Copyright (c) 2022 Laravel LLC </center>
</footer>

</html>

