            <div class="col-md-4">
              <div class="card categories-widget mb-5" style="width: 100%;">
                <div class="card-header">
                  <h3 class="text-center"><strong>Categories</strong></h3>
                </div>
                <ul class="list-group list-group-flush">
                  @foreach ($categories as $category)
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="{{ route('latestArticles', [app()->getLocale() , $category->slug]) }}"> {{ $category->title }}</a>
                    <span class="badge badge-primary badge-pill">{{ $category->posts->count() }}</span>
                  </li>
                  @endforeach
                </ul>
              </div>

              <!-- <div class="card tags-widget mb-5" style="width: 100%;">
                <div class="card-header">
                  <h3 class="text-center"><strong>Tags</strong></h3>
                </div>
                <ul class="tags">
                  @foreach ($tags as $tag)
                    <li><a href="{{ route('tag', [app()->getLocale() , $tag->slug]) }}">{{ $tag->name }}</a></li>
                  @endforeach
                </ul>
              </div> -->

              <div class="card-header border popular-posts">
                <h3 class="text-center"><strong>Popular posts</strong></h3>
              </div>
              @foreach($popularPosts as $post)
              <div class="card popular-posts bg-dark text-white mb-4">
                @if($post->image_thumb_url)
                <img src="{{ $post->image_thumb_url }}" class="card-img" alt="{{ route('blog.show', [app()->getLocale() ,$post->category->slug, $post->slug]) }}">
                @endif
                <div class="card-img-overlay">
                  <h5 class="card-title text-center"><a href="{{ route('blog.show', [app()->getLocale() ,$post->category->slug, $post->slug]) }}"><strong>{{ $post->title }}</strong></a></h5>
                  <p class="card-text text-center"><a href="{{ route('blog.show', [app()->getLocale() ,$post->category->slug, $post->slug]) }}">{{ $post->excerpt }}</a></p>
                  <p class="card-text text-center">{{ $post->date }}</p>
                </div>
              </div>
              @endforeach

            </div>
