<!-- Subreddit Search Well -->
<div class="well" style="margin-top: 30px;">
    <h4>Search {{ $post->subreddit->name }}</h4>
    <div class="input-group">
        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
    </div>
    <!-- /.input-group -->
</div>

<!-- Side Widget Well -->
<div class="well">
    <h4>About {{ $post->subreddit->name }}</h4>
    <p>{{ $post->subreddit->description }}</p>
</div>

<!-- Subreddit Moderators Well -->
<div class="well">
    <h4>Moderators Of {{ $post->subreddit->name }}</h4>
    <div class="row">
        <div class="col-lg-6">
            <ul class="list-unstyled">
                <li>{!!  link_to_route('profile_path', $post->subreddit->user->name, $post->subreddit->user->name) !!}</li>

            </ul>
        </div>
        <!-- /.col-lg-6 -->
        <div class="col-lg-6">
            <ul class="list-unstyled">
            </ul>
        </div>
        <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->
</div>