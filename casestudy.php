<!-- Include Help information -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help Page</title>
    <link href="css/style.css" rel="stylesheet" type="text/css"> 
</head>
<body>

<!-- Navigation -->
<div class="hero">
    <div class="hero-text">
        <a href="index.php">
        <li class = "logo"> 
        <a href="index.php"> <img src = "images/cozybites-logo.png" alt= Logo> </a> 
        </li>
        </a>
    </div>
    <div class="casestudy">
        <button onclick="window.location.href='casestudy.php';">Casestudy</button>    
    </div>
    <div class="help">
        <button onclick="window.location.href='help.php';">Help</button>    
    </div>
</div>
<section class="case-study-img">
    <img src= "images/cozybites-hero.png" alt="Cozybites hero image">
</section>

<section class="case-study-content">
    <h1> The Overview </h1>
    <p> Cozybites is a project developed for my Scripting for Interactive Digital Media course. 
        The goal was to create a cooking recipe website using a combination of HTML, CSS, JavaScript, and PHP. 
        Through this project, I gained valuable insights into how PHP can optimize web development by reducing the need for multiple HTML pages.
        By leveraging PHP, I was able to dynamically retrieve information from a MySQL database and display it on the site, 
        which improved efficiency and scalability.</p>
    <h2> Project Workflow: </h2>
        <ul>
            <li> <b>Website Layout Design:</b> Created a user-friendly and visually appealing interface. </li>
            <li> <b>Database Management:</b> Organized recipe data in phpMyAdmin, a MySQL database tool. </li>
            <li> <b> Development in VSCode:</b> Integrated front-end and back-end components smoothly, ensuring 
            a cohesive experience. </li>
        </ul>
</section>

<section class="case-study-content">
    <h1> Context and Challenge </h1>
    <h2> The problem </h2>
        <p> The issue was to dynamically generate pages and manage recipe data without duplicating content manually, 
            while also creating a user interface that allowed browsing, searching, and filtering recipes. 
            Additionally, all pages needed to be fully responsive.</p>
    <h2> Goals and Objectives </h2>
    <ul>
            <li> <b> Successfully connected database to the website </b> </li>
            <li> <b> Design a user-friendly website </b> </li>
            <li> <b> Implement a filter system </b> </li>
        </ul>
</section>

<section class="case-study-content">
    <h1> Process and Insight </h1>
    <h2> Alpha </h2>
    <section class="casestudy-img">
        <img src= "images/cozybites-alpha.png" alt="Cozybites Alpha Desktop">
    </section>
        <p> This was my alpha, the colors were very muted and bland which I wasn't going for. 
            I was looking for a more cozy vibe, hence the name "Cozybites." I also removed the 
            search bar on the recipe items pages and decided not to include a recipes tab for 
            the recipes because I wanted a simpler navigation experience.  </p>
    <h2> Final </h2>
    <section class="casestudy-img">
        <img src= "images/cozybites-final.png" alt="Cozybites Final Desktop">
    </section>
    <p> This was my final, I changed the colors from a green and brownish color scheme to 
        a pink and green one. I felt like the pink complements the green more than the brown
        and makes the food pop out more. I also included a filtering system ease of use when 
        navigating through all the recipes. </p>
</section>

<section class="case-study-content">
    <h1> The Solution </h1>
        <p> 
            I was able to implemnent a simple filtering and a search system for the user to easily
            navigate to all the different recipes. Users are able to click on what main protein they
            want for that meal and search for any keywords and the results will pop up with the related 
            recipe. This design is intuitive and simple amongst most recipe websites.
        </p>
</section>

<section class="case-study-content">
    <h1> The Results </h1>
        <p> 
            This was a success! I have learned alot from this project including learning php and managing databases with mySQL.
            Despite having some struggles with connecting the database to the website, I have managed to pull through and create a website 
            where users are able to filter, search, and navigate through the recipes based on what the user picked.
        </p>
</section>
</body>
</html>