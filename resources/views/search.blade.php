<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link a CSS file for the main layout of the page-->
    <link href="/css/main.css" rel="stylesheet">
    <title>Search Page</title>
</head>

<body onload=displayAlertFooter()>
    <br>
    <!-- Button to home page -->
    <button><a href="{{ url('/') }}">Return Home</a></button>

    <div class="pageContent">
        <h1>Search:</h1>
        <table>
            <!-- Search by Category -->
            <form method="post" action="searchCategory">
                @csrf

                <th colspan="2">Category Search:</th>
                <tr>
                    <td>
                        <select name="category_main" id=input>
                            <!-- List all the categories that the user can pick to eliminate miss spelling -->
                            @foreach($categories as $category)
                            <option value={{$category->category}}>
                                {{$category->category}}
                            </option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <button type="submit">Search</button>
                    </td>
                </tr>
            </form>
            <br>

            <!-- Search by tag -->
            <form method="post" action="searchTag">
                @csrf
                <th colspan="2">Tag Search:</th>
                <tr>
                    <td><input type="text" name="tag_search" placeholder="Tag to search for"></td>
                    <td><button type="submit">Search</button></td>
                </tr>
            </form>

            <!-- Search by tag -->
            <form method="post" action="searchId">
                @csrf
                <th colspan="2">ID Search:</th>
                <tr>
                    <td><input type="text" name="id_search" placeholder="ID to search for"></td>
                    <td><button type="submit">Search</button></td>
                </tr>
            </form>
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