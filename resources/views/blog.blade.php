<x-Layout>
    <!--================================
=            Page Title            =
=================================-->
    <div class="d-flex flex-column min-vh-100 mt-2">
        <section class="post-grid section mt-4 pt-0">
            <div class="container">
                <div class="row">
                    @forelse($blogs as $blog)
                        <div class="col-lg-4 col-md-6">
                            <!-- Post -->
                            <article class="post-sm">
                                <!-- Post Image -->
                                <div class="post-thumb">
                                    <a href="{{ route('blog_single', $blog->id) }}">
                                        <img class="w-100"
                                             src="/storage/public/blogsImage/{{$blog->photo_preview}}"
                                             alt="{{$blog->photo_preview}}">
                                    </a>
                                </div>
                                <!-- Post Title -->
                                <div class="post-title">
                                    <h3>
                                        <a href="{{ route('blog_single', $blog->id) }}">
                                            {{$blog->title}}
                                        </a>
                                    </h3>
                                </div>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <ul class="list-inline post-tag">
                                        <li class="list-inline-item">
                                            <img src="{{ $blog->user->profile_img == 'default.png'
                            ? '/images/icons/defaultProfile.png'
                            : '/storage/public/userPhotos/' . $blog->user->profile_img }}"
                                                 alt="author-thumb">
                                        </li>
                                        <li class="list-inline-item">
                                            <span>{{ $blog->user->name . ' ' . $blog->user->surname }}</span>
                                        </li>
                                        <li class="list-inline-item">
                                            {{ Carbon\Carbon::now()->translatedFormat('F j, Y') }}
                                        </li>
                                    </ul>
                                </div>
                                <!-- Post Details -->
                                <div class="post-details">
                                    <p>{{ $blog->description }}</p>
                                </div>
                            </article>
                        </div>
                    @empty
                        <p>Нет доступных блогов.</p>
                    @endforelse

                    <div class="col-12">
                        <!-- Pagination -->
                        <nav class="pagination-nav">
                            <ul class="pagination">
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true"><i class="ti-angle-right"></i></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layout>
