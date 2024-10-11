<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sami's page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css"> <!-- Link to your custom CSS -->
</head>
<body>

    <!-- Main container for the blog layout -->
    <div class="container"> <!-- Add container to center columns -->
        <div class="row justify-content-center">

            <!-- Left column for personal information -->
            <aside class="col-md-3 personal-info">
                <div class="profile-section">
                    <img src="profile.jpg" alt="Profile Picture" class="profile-img">
                    <h2>John Doe</h2>
                    <p>Software Engineer</p>
                </div>
                <div class="personal-details">
                    <h3>Contact Info</h3>
                    <p>Email: john.doe@example.com</p>
                    <p>Phone: +123456789</p>
                    <p>Location: New York, USA</p>
                </div>
                <div class="social-links">
                    <h3>Connect</h3>
                    <ul>
                        <li><a href="https://github.com/johndoe">GitHub</a></li>
                        <li><a href="https://linkedin.com/in/johndoe">LinkedIn</a></li>
                    </ul>
                </div>
            </aside>

            <!-- Right column for articles -->
            <section class="col-md-8 articles"> <!-- Adjusted column width -->
                <article class="blog-post">
                    <h2>Article 1: The Future of Web Development</h2>
                    <p>Published on October 7, 2024</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed velit eu erat feugiat consectetur. Aliquam erat volutpat.</p>
                    <a href="#">Read more...</a>
                </article>

                <article class="blog-post">
                    <h2>Article 2: Understanding JavaScript Frameworks</h2>
                    <p>Published on October 1, 2024</p>
                    <p>Phasellus lacinia libero vel nulla tempor, a efficitur lacus convallis. Sed vitae lectus quis leo dapibus finibus.</p>
                    <a href="#">Read more...</a>
                </article>

                <article class="blog-post">
                    <h2>Article 3: A Guide to Cloud Computing</h2>
                    <p>Published on September 20, 2024</p>
                    <p>Maecenas ut quam vitae ex convallis malesuada. Donec efficitur justo at est mollis aliquet. Nulla facilisi.</p>
                    <a href="#">Read more...</a>
                </article>
            </section>
        </div>
    </div>

</body>
</html>
