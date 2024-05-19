<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allen Timothy Balatero - Web Design Portfolio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #3b558e;
            color: #ffffff;
        }
        header {
            background-color: #1b3260;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        .profile {
            text-align: center;
            margin: 20px 0;
        }
        .profile img {
            width: 150px;
            border-radius: 50%;
        }
        .profile h1 {
            margin: 10px 0;
        }
        .projects {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .project {
            background: #29579b;
            margin: 20px;
            padding: 20px;
            width: 30%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .project img {
            width: 100%;
        }
        .project h3 {
            margin-top: 10px;
        }
        footer {
            background-color: #1b3260;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Allen Timothy Balatero</h1>
        <p>Web Designer</p>
    </header>
    <div class="container">
        <div class="profile">
            <img src="{{ asset ('imgg/profile.jpg')}}" alt="Allen Timothy Balatero">
            <h1>Allen Timothy Balatero</h1>
            <p>Welcome to my portfolio. I am a web designer with a passion for designing minimalistic web designs for clients. I have a background utilizing Photoshop and CSS as my solid foundation for creating visually pleasing websites. When it comes to web design, I tend to avoid clustering the website to avoid overwhelming the users too much information in their screens while navigating the site with ease. In addition of incorporating my ideas to fruition and following the clients' vision.</p>
        </div>
        <section class="projects">
            <div class="project">
                <img src="{{ asset ('imgg/example1.jpg')}}" alt="Example 1">
                <h3>Shopify</h3>
            </div>
            <div class="project">
                <img src="{{ asset ('imgg/example2.jpg')}}" alt="Example 2">
                <h3>TINKER</h3>
            </div>
            <div class="project">
                <img src="{{ asset ('imgg/example3.png')}}" alt="Example 3">
                <h3>Marie Laurent</h3>
            </div>
        </section>
    </div>
    <footer>
        <p>Allen Timothy Balatero</p>
    </footer>
</body>
</html>
