<x-Layout>
    <!--====================================
=            Single Article            =
=====================================-->
    <div class="d-flex flex-column min-vh-100 mt-2">

        <section class="section blog-single">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 m-auto">
                        <!-- Single Post -->
                        <article class="single-post">
                            <!-- Post title -->
                            <div class="post-title text-center">
                                <h1>{{$blog->title}}</h1>
                                <!-- Tags -->
                                <ul class="list-inline post-tag">
                                    <li class="list-inline-item">
                                        <img src="{{ $blog->user->profile_img == 'default.png'
                            ? '/images/icons/defaultProfile.png'
                            : '/storage/public/userPhotos/' . $blog->user->profile_img }}"
                                             alt="{{$blog->user->profile_img }}}}">
                                    </li>
                                    <li class="list-inline-item">
                                        <span>{{ $blog->user->name . ' ' . $blog->user->surname }}</span>
                                    </li>
                                    <li class="list-inline-item">
                                        <span>{{ Carbon\Carbon::now()->translatedFormat('F j, Y') }}</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- Post body -->
                            <div class="post-body">
                                <!-- Feature Image -->
                                <div class="feature-image">
                                    <img class="img-fluid" src="/storage/public/blogsImage/{{$blog->photo_preview}}"
                                         alt="{{$blog->photo_preview}}">
                                </div>

                                {!! $blog->content !!}


                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-Layout>
