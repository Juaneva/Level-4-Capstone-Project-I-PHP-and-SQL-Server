<html>

<head>
    <!-- Link a CSS file for the main layout of the page-->
    <link href="/css/main.css" rel="stylesheet">
    <title>Cool-Tech Articles</title>
</head>

<body onload=displayAlertFooter()>
    <br>
    <button><a href="{{ url('/') }}">Return Home</a></button>

    <div class="pageContent">
        <h1>Read more about the posts:</h1>
        <!-- Table to display the search result-->
        <table>
            @foreach($posts as $post)
            <th colspan="2">Title:</th>
            <tr>
                <td colspan="2">{{$post->title}}</td>
            </tr>

            <th>Category:</th>
            <th>Date Created:</th>
            <tr>
                <td> {{$post->category}} </td>
                <td> {{$post->created}} </td>
            </tr>

            <th>Tags:</th>
            <th>ID Article:</th>
            <tr>
                <td>

                    <!-- Make an array of the tags, split by space -->
                    @php
                    $tagList = explode(" ", $post->tags);
                    @endphp

                    <!-- Make a for loop with links to the different tags -->
                    @for ($i = 0; $i<(count($tagList)); $i++) <a class="tags" href="{{ url('/tag/'.$tagList[$i])}}">{{$tagList[$i]}}</a>
                        @endfor

                <td> {{$post->id}} </td>
                </td>
            </tr>

            <th colspan="2">Read Blog:</th>
            <tr>
                <td colspan=2><textarea rows="25"> {{$post->content}}</textarea> </td>
            </tr>
            @endforeach
        </table>
    </div>
    <!-- Add pop up cookie and Footer -->
    <div class="cookie">
    </div>
</body>

<footer>
    <center> Copyright (c) 2022 Laravel LLC </center>
</footer>

</html>