<?php
$name = "Soham";
$email = "soham@gmail.com";
$github = "https://github.com/soham";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
            line-height: 1.6;
        }
        header {
            background-color: #3b5998;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        header h1 {
            margin: 0;
            font-size: 2.5em;
        }
        nav {
            margin-top: 10px;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .container {
            width: 80%;
            max-width: 800px;
            margin: 30px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        section {
            margin-bottom: 30px;
        }
        h2 {
            color: #3b5998;
            border-bottom: 2px solid #3b5998;
            padding-bottom: 5px;
        }
        .project-card {
            background-color: #fafafa;
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 5px;
        }
        .project-card h3 {
            margin-top: 0;
            color: #333;
        }
        ul {
            list-style-type: square;
        }
        footer {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: white;
            margin-top: 40px;
        }
        footer a {
            color: #a0b2d6;
            text-decoration: none;
        }
        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <header>
        <h1>Welcome to My Portfolio</h1>
        <nav>
            <a href="#about">About</a>
            <a href="#skills">Skills</a>
            <a href="#projects">Projects</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <div class="container">
        <section id="about">
            <h2>About Me</h2>
            <p>Hello! My name is <?php echo $name; ?>. I am a beginner web developer learning how to build websites using HTML and CSS. I enjoy learning new technologies and creating simple, clean web pages.</p>
        </section>

        <section id="skills">
            <h2>My Skills</h2>
            <ul>
                <li>HTML5</li>
                <li>CSS3</li>
                <li>Basic JavaScript</li>
                <li>Git and GitHub</li>
            </ul>
        </section>

        <section id="projects">
            <h2>My Projects</h2>

            <div class="project-card">
                <h3>Personal Portfolio Website</h3>
                <p>A simple portfolio website to showcase my skills, projects, and contact information. Built using clean HTML5 structure and basic CSS styling.</p>
            </div>
        </section>

        <section id="contact">
            <h2>Contact Me</h2>
            <p>If you would like to connect or work together, feel free to reach out to me via email or social media!</p>
            <p><strong>Email:</strong> <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
            <p><strong>GitHub:</strong> <a href="<?php echo $github; ?>" target="_blank"><?php echo $github; ?></a></p>
        </section>
    </div>

    <footer>
        <p>&copy; 2026 <?php echo $name; ?>. All rights reserved.</p>
    </footer>

</body>
</html>
