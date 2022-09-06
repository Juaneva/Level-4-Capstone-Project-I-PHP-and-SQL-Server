<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link a CSS file for the main layout of the page-->
    <link href="/css/main.css" rel="stylesheet">
    <title>Write an Article</title>
</head>

<body onload=displayAlertFooter()>
    <br>
    <button> <a href="/home">Return Home</a></button>
    <div class="pageContent">
        @if(Session::get('success'))
        <p>{{Session::get('success')}}</p>
        @endif

        @if(Session::get('fail'))
        <p>{{Session::get('fail')}}</p>
        @endif

        <!-- Add a new category -->
        <h1><u>Add a new Category:</u></h1>
        <form method="post" action="addCategory">
            @csrf
            <table>
                <tr>
                    <td colspan="2">
                        <input type="text" name="add_new_category" placeholder="Add a new Category- If not exist">
                    </td>

                </tr>
            </table>
            <br>
            <button type="submit" style="border: 3px solid black; width: 100px">Add</button>
        </form>
        <br><br>

        <!-- Add a new blog article -->
        <h1><u>Write an Article:</u></h1>
        <form method="post" action="addArticle">
            @csrf

            <table>
                <tr>
                    <td>Title of Article:</td>
                    <td><input type="text" name="title" placeholder="Title" value="{{ old('title')}}"></td> <span style="color:red">@error('title'){{$message}} @enderror</span>
                </tr>
                <tr>
                    <td><label>Category:</label></td>
                    <td>
                        <select name="category_main">
                            <!-- List all the categories that the user can pick to eliminate miss spelling -->
                            @foreach($categories as $category)
                            <option>{{$category->category}}</option>
                            @endforeach
                        </select></select><span style="color:red">@error('category_main'){{$message}} @enderror</span>
                    </td>
                </tr>
                <tr>
                    <td>Tags:</td>
                    <td><input type="text" name="tags" placeholder="Use a space between tag words" value="{{ old('tags')}}"></td>
                </tr>
                <tr>
                    <td colspan=2>
                        <textarea name="content" placeholder="Content of the article" rows="20">{{ old('content')}}</textarea>
                        <span style="color:rgb(0, 0, 0)">@error('content'){{$message}} @enderror</span>
                    </td>
                </tr>
            </table>
            <br>
            <button type="submit" style="border: 3px solid black; width: 100px">Submit</button>
        </form>
    </div>
    <!-- Add pop up cookie and Footer -->
    <div class="cookie">
    </div>

</body>

<footer>
    <center> Copyright (c) 2022 Laravel LLC </center>
</footer>

</html>