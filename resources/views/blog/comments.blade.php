<section id="article-comments" class="article-comments mb-5">
  <h3 class="text-center mb-4"><i class="fa fa-comments"></i> {{ $post->commentsNumber('Comment') }}</h3>
    @foreach($postComments as $comment)
      <div class="article-comment-body border p-3 mb-1">
        <div class="comment-user-meta mb-3">
          <h5><strong>{{ $comment->author_name }}</strong> &nbsp <small>{{ $comment->date }}</small></h5>
        </div>
        <div class="comment-body-text pl-4">
          {!! $comment->body_html !!}
        </div>
      </div>
    @endforeach
    <div class="comments-pagination d-flex justify-content-center mt-3">
      {!! $postComments->links() !!}
    </div>
</section>

<section class="post-comment">
  <div class="row">
    <div class="col-md-12">
      <h2 class="mb-5">Leave a comment</h2>
      @if(session('message'))
          <div class="alert alert-info">
              {{ session('message') }}
          </div>
      @endif
      {!! Form::open(['route' => ['blog.comments', $post->slug]]) !!}
              <label class="mb-4" for="name">Name</label>
              {!! Form::text('author_name', null, ['class' => 'form-control mb-4']) !!}
              @if($errors->has('author_name'))
                  <span class="help-block">
                      <strong>{{ $errors->first('author_name') }}</strong>
                  </span>
              @endif
              <label class="mb-4" for="email">Email</label>
              {!! Form::text('author_email', null, ['class' => 'form-control mb-4']) !!}
              @if($errors->has('author_email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('author_email') }}</strong>
                  </span>
              @endif
          <!-- <div class="form-group">
              <label for="website">Website</label>
              {!! Form::text('author_url', null, ['class' => 'form-control']) !!}
          </div> -->
              <label class="mb-4" for="comment">Comment</label>
              {!! Form::textarea('body', null, ['row' => 6, 'class' => 'form-control mb-4']) !!}
              @if($errors->has('body'))
                  <span class="help-block">
                      <strong>{{ $errors->first('body') }}</strong>
                  </span>
              @endif
                  <button type="submit" class="btn btn-lg btn-success mb-5">Submit</button>
      {!! Form::close() !!}
    </div>
  </div>
</section>
