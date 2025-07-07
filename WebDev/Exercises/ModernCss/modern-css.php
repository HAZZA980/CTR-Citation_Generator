<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modern CSS</title>
    <style>
        body {
            >header {
                display: flex;
                width: 30rem;
                height: 10rem;
                border-radius:10px;
                border: 3px solid firebrick;
            }
            >main {
                display: grid;
                grid-auto-columns: 1fr auto auto;
                >h3{
                    border: navy 3px solid;
                }
            }

        }
    </style>
</head>
<body>

<header>
    <h1>Title Goes here</h1>
</header>

<main>
    <h3>Main Content Title</h3>
    <p>
        Main Content goes here
    </p>

</main>

<footer>
    <span>
        <small>This is the footer</small>
    </span>
</footer>
<script>

</script>
</body>
</html>