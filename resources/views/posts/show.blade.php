@extends('layout')

@section('title', $post->title)

@section('content')
    <main class="container">
        <div class="row g-5">
            <div class="col-md-8">
                <h3 class="pb-4 mb-4 fst-italic border-bottom">
                    From the Firehose
                </h3>

                <nav class="blog-pagination" aria-label="Pagination">
                    <a class="btn btn-outline-primary rounded-pill" href="#">Older</a>
                    <a class="btn btn-outline-secondary rounded-pill disabled" aria-disabled="true">Newer</a>
                </nav>
                <div class="blog-post mb-3">
                    <h2 class="blog-post-title">
                        {{$post->title }}
                    </h2>
                    <br>
                    <p class="blog-post-meta">
                        {{$post->body}}
                        <br>
                        <br>

                        <a href="#">
                            {{$post->author}}
                        </a>

                    </p>
                </div>
                <h1>comments</h1>
                <?php $comments = $post->comments->where('approved' , 1); ?>
                @if(count($comments) == 0)
                    <h3>There is not comments </h3>
                @else
                    @foreach($comments as $comment)
                        <h4>
                                <?php echo($comment->name) ?>
                        </h4>
                        <p>
                                <?php echo($comment->body) ?>
                        </p>
                    @endforeach
                @endif
            </div>

            <div class="col-md-4">
                <div class="position-sticky" style="top: 2rem;">
                    <div class="p-4 mb-3 bg-body-tertiary rounded">
                        <h4 class="fst-italic">About</h4>
                        <p class="mb-0">Customize this section to tell your visitors a little bit about your
                            publication,
                            writers, content, or something else entirely. Totally up to you.</p>
                    </div>

                    <div>
                        <h4 class="fst-italic">Recent posts</h4>
                        <ul class="list-unstyled">
                            <li>
                                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                                   href="#">
                                    <svg class="bd-placeholder-img" width="100%" height="96"
                                         xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                         preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <rect width="100%" height="100%" fill="#777"/>
                                    </svg>
                                    <div class="col-lg-8">
                                        <h6 class="mb-0">Example blog post title</h6>
                                        <small class="text-body-secondary">January 15, 2023</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                                   href="#">
                                    <svg class="bd-placeholder-img" width="100%" height="96"
                                         xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                         preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <rect width="100%" height="100%" fill="#777"/>
                                    </svg>
                                    <div class="col-lg-8">
                                        <h6 class="mb-0">This is another blog post title</h6>
                                        <small class="text-body-secondary">January 14, 2023</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                                   href="#">
                                    <svg class="bd-placeholder-img" width="100%" height="96"
                                         xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                         preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <rect width="100%" height="100%" fill="#777"/>
                                    </svg>
                                    <div class="col-lg-8">
                                        <h6 class="mb-0">Longer blog post title: This one has multiple lines!</h6>
                                        <small class="text-body-secondary">January 13, 2023</small>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="p-4">
                        <h4 class="fst-italic">Archives</h4>
                        <ol class="list-unstyled mb-0">
                            <li><a href="#">March 2021</a></li>
                            <li><a href="#">February 2021</a></li>
                            <li><a href="#">January 2021</a></li>
                            <li><a href="#">December 2020</a></li>
                            <li><a href="#">November 2020</a></li>
                            <li><a href="#">October 2020</a></li>
                            <li><a href="#">September 2020</a></li>
                            <li><a href="#">August 2020</a></li>
                            <li><a href="#">July 2020</a></li>
                            <li><a href="#">June 2020</a></li>
                            <li><a href="#">May 2020</a></li>
                            <li><a href="#">April 2020</a></li>
                        </ol>
                    </div>

                    <div class="p-4">
                        <h4 class="fst-italic">Elsewhere</h4>
                        <ol class="list-unstyled">
                            <li><a href="#">GitHub</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Facebook</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
