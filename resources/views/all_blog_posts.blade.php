<html>

<head>
    <!-- Link a CSS file for the main layout of the page-->
    <link href="/css/main.css" rel="stylesheet">
    <title>Homepage of Cool-Tech</title>
</head>


<body onload=displayAlertFooter()>
    <br>
    <!-- Buttons to different pages -->
    <button> <a href="search">Search Articles</a></button>
    <button> <a href="write_articles">Write an article or add a category</a></button>
    <button> <a href="about">About Us</a></button>
    <button> <a href="legal/tos">Terms of Service</a></button>
    <button> <a href="legal/privacy">Privacy Policy</a></button>
    <button style="border: 3px solid black"><a href="{{ url('/') }}">Return Home</a></button>

    <div class="pageContent">
        <h1>Available blog posts:</h1>
        <h2>Blog posts:</h2>

        <!-- Table to display Titles to be able to search blogs-->
        <table>
            <th>Title:</th>
            <th>Content:</th>
            <th>ID:</th>
            <th>Date Created:</th>
            @foreach($posts as $post)
            <tr>
                <td>
                    <!--slug the url with replace function-->
                    <a href="{{ url('/article/'.$post->id) }}">{{$post->title}}</a>
                </td>

                <td style="width:50%">
                    <textarea style="border: 0px;" rows="2"> {{$post->content}} </textarea>
                </td>

                <td>{{$post->id}}</td>
                <td>{{$post->created}}</td>
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