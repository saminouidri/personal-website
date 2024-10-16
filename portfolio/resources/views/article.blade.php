<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $article->title }} - My Blog</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> <!-- Custom styles if needed -->
</head>
<body>
    <div class="container">
        <div class="row">
            <!-- Article content section -->
            <section class="col-md-12">
                <article class="blog-post">
                    <h1>{{ $article->title }}</h1>
                    <p class="text-muted">Published on {{ $article->created_at->format('F j, Y') }}</p>
                    
                    <!-- Display the full content of the article -->
                    <div class="article-content">
                        {!! nl2br(e($article->content)) !!}
                    </div>

                    <hr>

                    <!-- Author and article details -->
                    <div class="author-info">
                        <p><strong>Written by:</strong> {{ $article->author_name }}</p>
                        <p><strong>Category:</strong> {{ $article->category->name }}</p>
                    </div>

                    <!-- Back to home button -->
                    <a href="{{ url('/') }}" class="btn btn-primary">Back to Home</a>
                </article>
            </section>
        </div>
    </div>
</body>
</html>
