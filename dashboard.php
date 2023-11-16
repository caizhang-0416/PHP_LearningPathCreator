<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
            display: flex;
            justify-content: space-between;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
        }

        main {
            padding: 20px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 20px;
            border: 1px solid #ddd;
            overflow: hidden;
        }

        li img {
            max-width: 100%;
            height: auto;
        }

        .content-container {
            padding: 10px;
        }

        .button-container {
            text-align: right;
        }

        button {
            margin: 5px;
            padding: 8px 15px;
            cursor: pointer;
        }

        button:hover {
            background-color: #ddd;
        }

        /* New styles for the search box */
        .search-container {
            display: flex;
            align-items: center;
        }

        input[type="text"] {
            padding: 8px;
            width: 200px;
            box-sizing: border-box;
            margin-right: 10px;
        }

        button.search-btn {
            padding: 8px 15px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<nav>
    <div>
        <a href="#">Home</a>
        <a href="#">My Profile</a>
    </div>
    <div class="search-container">
        <input type="text" placeholder="Enter your search term">
        <button class="search-btn" onclick="searchItem()">Search</button>
    </div>
</nav>

<main>
    <ul>
        <li>
            <div class="content-container">
                <img src="https://via.placeholder.com/300" alt="Placeholder Image">
                <div class="button-container">
                    <button onclick="copyItem()">Copy</button>
                    <button onclick="editItem()">Edit</button>
                    <button onclick="thumbsUp()">Thumbs Up</button>
                    <button onclick="thumbsDown()">Thumbs Down</button>
                    <button onclick="shareItem()">Share</button>
                </div>
            </div>
        </li>
        <!-- Add more list items as needed -->
    </ul>
</main>

<script>
    function copyItem() {
        alert("Copy button clicked");
        // Add your copy functionality here
    }

    function editItem() {
        alert("Edit button clicked");
        // Add your edit functionality here
    }

    function thumbsUp() {
        alert("Thumbs Up button clicked");
        // Add your thumbs up functionality here
    }

    function thumbsDown() {
        alert("Thumbs Down button clicked");
        // Add your thumbs down functionality here
    }

    function shareItem() {
        alert("Share button clicked");
        // Add your share functionality here
    }

    function searchItem() {
        var searchTerm = document.querySelector('input[type="text"]').value;
        alert("Search button clicked. Search Term: " + searchTerm);
        // Add your search functionality here
    }
</script>

</body>
</html>
