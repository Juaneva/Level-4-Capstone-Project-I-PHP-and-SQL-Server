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
                    <a href="{{ url('/article/'.$post->id)}}">{{$post->title}}</a>
                </td>
                <td style="width:50%">
                    <textarea style="width: 550px; height: 200px;"> {{$post->content}} </textarea>
                </td>

                <td>{{$post->id}}</td>
                <td>{{$post->created}}</td>
            </tr>
            @endforeach
        </table>

        <button style="border: 3px solid rgb(0, 83, 190); background:rgb(168, 216, 255); border-radius: 5px;"><b> <a href="all_blog_posts">View All Blog Posts</a> </b></button>
        <br><br>

        <!-- Search by Category -->
        <table>
            <th>Categories Search for Articles:</th>
            <!-- List all the categories that the user can pick to eliminate miss spelling -->
            @foreach($categories as $category)
            <tr>
                <td>
                    <!--slug the url with replace function-->
                    <button>
                        <a href="{{ url('/category/'.Str::replace(' ', '-', $category->category)) }}">{{$category->category}}</a>
                    </button>
                </td>
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