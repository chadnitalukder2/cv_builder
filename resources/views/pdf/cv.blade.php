<html>
<head>
    <title>Chadni Talukder - Web Developer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h1 {
            margin: 0;
            font-size: 36px;
            font-weight: 700;
        }
        .header h2 {
            margin: 0;
            font-size: 18px;
            font-weight: 400;
            color: #666;
        }
        .contact-info {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        .contact-info div {
            margin: 0 10px;
            display: flex;
            align-items: center;
        }
        .contact-info div i {
            margin-right: 5px;
        }
        .section {
            margin-bottom: 20px;
        }
        .section h3 {
            font-size: 24px;
            font-weight: 700;
            border-bottom: 2px solid #333;
            padding-bottom: 5px;
            margin-bottom: 10px;
        }
        .skills {
            display: flex;
            flex-wrap: wrap;
        }
        .skills div {
            background-color: #333;
            color: #fff;
            padding: 5px 10px;
            margin: 5px;
            border-radius: 3px;
        }
        .projects .project {
            margin-bottom: 20px;
        }
        .projects .project h4 {
            font-size: 20px;
            font-weight: 700;
            margin: 0;
        }
        .projects .project a {
            color: #333;
            text-decoration: none;
            font-weight: 700;
        }
        .projects .project p {
            margin: 5px 0;
        }
        @media (max-width: 768px) {
            .container {
                width: 95%;
            }
            .contact-info {
                flex-direction: column;
                align-items: center;
            }
            .contact-info div {
                margin: 5px 0;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>CHADNI TALUKDER</h1>
            <h2>WEB DEVELOPER</h2>
        </div>
        <div class="contact-info">
            <div><i class="fas fa-phone"></i> +880131799654</div>
            <div><i class="fab fa-github"></i> <a href="#">Github</a></div>
            <div><i class="fas fa-envelope"></i> chadnitalukder23@gmail.com</div>
            <div><i class="fas fa-map-marker-alt"></i> Block B, Pathantula, Sylhet</div>
        </div>
        <div class="section">
            <h3>SUMMARY</h3>
            <p>A driven and passionate web developer with practical experience in creating dynamic and responsive web applications. Skilled in Laravel, PHP, VueJs, JQuery, and MySQL, with a strong interest in developing WordPress plugins and tackling complex challenges. Eager to apply my expertise and creativity to contribute to groundbreaking projects.</p>
        </div>
        <div class="section">
            <h3>PROFESSIONAL SKILLS</h3>
            <div class="skills">
                <div>Web Development</div>
                <div>Wordpress Plugin Development</div>
                <div>Laravel</div>
                <div>Javascript</div>
                <div>PHP</div>
                <div>MySql</div>
                <div>Vue</div>
                <div>JQuery</div>
                <div>Git</div>
                <div>Postman</div>
                <div>Bootstrap</div>
                <div>Tailwind CSS</div>
                <div>Element UI</div>
            </div>
        </div>
        <div class="section projects">
            <h3>PROJECTS</h3>
            <div class="project">
                <h4>ONLINE FOOD DELIVERY WEB APPLICATION</h4>
                <a href="#">Backend code</a> | <a href="#">Frontend code</a>
                <p>Developed a fully functional food-delivery web application with Laravel and VueJs.</p>
                <ul>
                    <li>Integrated payment gateways and user authentication.</li>
                    <li>RESTful APIs for smooth communication between frontend and backend.</li>
                    <li>Optimized database schema for efficient data storage and retrieval.</li>
                    <li>Built mobile-first, responsive layouts using SASS and Tailwind CSS for scalable and consistent styling.</li>
                </ul>
            </div>
            <div class="project">
                <h4>HOTEL BOOKING RESERVATION SYSTEM</h4>
                <a href="#">Github URL</a>
                <p>Developed a full-stack food delivery platform using Laravel and VueJs.</p>
                <ul>
                    <li>Implemented user and side payment gateways for secure transactions.</li>
                    <li>Integrated a user breeze user authentication and authorization.</li>
                    <li>Database Design, Real-Time Notifications, Role & Permission Management, PDF Invoices, Multi-image uploads.</li>
                </ul>
            </div>
            <div class="project">
                <h4>ADVANCE REVIEW MANAGER - WORDPRESS PLUGIN</h4>
                <a href="#">WordPress Plugin Directory</a>
                <p>Developed a fully functional and super simple review manager WordPress Plugin with Vue Js, PHP OOP, and Jquery.</p>
                <ul>
                    <li>Built advanced admin support for features and installed hooks for easy integration.</li>
                    <li>Implemented a custom review manager with rating systems and review forms which show with shortcode options.</li>
                    <li>Built a custom review page with dynamic format that the admin can reply to or manage reviews effortlessly.</li>
                </ul>
            </div>
            <div class="project">
                <h4>TRAVEL MANAGER – WORDPRESS PLUGIN</h4>
                <a href="#">Github URL</a>
                <p>Developed a fully functional Travel Manager Plugin to streamline travel planning and management with Vue Js, PHP, Jquery.</p>
                <ul>
                    <li>Integrated payment gateways for secure transactions and multi-destination support.</li>
                    <li>Implemented a custom admin panel for features tracking and management.</li>
                    <li>Built a custom booking system for car and hotel billing records.</li>
                    <li>Integrated a custom review manager with rating systems and review forms which show with shortcode options.</li>
                    <li>Built a custom review page with dynamic format that the admin can reply to or manage reviews effortlessly.</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>