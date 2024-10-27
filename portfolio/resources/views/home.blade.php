<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sami's Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Default stylesheet -->
    <link id="fun-theme" rel="stylesheet" href="{{ asset('css/home-fun.css') }}" media="all">
    <link id="modern-theme" rel="stylesheet" href="{{ asset('css/home.css') }}" media="all" disabled>
    
    <script src="{{ asset('js/home-script.js') }}" defer></script>
</head>
<body>

    <!-- Toggle Button for CSS Stylesheets -->
    <div class="text-center mb-3">
    <button id="style-toggle-btn" class="btn btn-primary">Switch to Modern Style</button>

    </div>

    <!-- Main container for the blog layout -->
    <div class="container">
        <div class="row justify-content-center">

            <!-- Left column for personal information -->
            <aside class="col-md-3 personal-info">
                <div class="profile-section">
                    <img src="{{ asset('images/profile.jpg') }}" alt="Profile Picture" class="profile-img">
                    <h2>Sami Nouidri</h2>
                    <p>Software Engineer</p>
                </div>
                <div class="personal-details">
                    <h3>About me</h3>
                    <p>From an early age, I was captivated by the world of computers, programming, and electronics.</p>
                    <p>Now, I’m dedicated to building innovative software & cloud solutions.</p>
                    <p>As such, I tackle complex challenges in technology, by drawing on my diverse background as an electronic technician and computer scientist.</p>
                </div>
                <div class="social-links">
                    <h3>Connect</h3>
                    <ul>
                        <li><a href="https://github.com/saminouidri" target="_blank">GitHub</a></li>
                        <li><a href="https://linkedin.sami-nouidri.ch" target="_blank">LinkedIn</a></li>
                        <li><a href="/portfolio" target="_blank">Portfolio/CV (for recruiters only)</a></li>
                    </ul>
                </div>

                <h6><i>Built using Laravel with ♥.</i></h6>
            </aside>

            <!-- Right column for articles -->
            <section class="col-md-8 articles">
                @foreach($articles as $article)
                    <article class="blog-post">
                        <h2>{{ $article->title }}</h2>
                        <p>Published on {{ $article->created_at->format('F j, Y') }}</p>
                        <p>{{ Str::limit($article->content, 150) }}</p> <!-- Limit to 150 characters -->
                        <a href="{{ route('article.show', $article->id) }}" class="btn btn-secondary">Read more...</a>
                    </article>
                @endforeach
            </section>
            
        </div>
    </div>
    

</body>
</html>
