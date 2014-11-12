<!doctype html>
<html lang="en">
  <head>
    <?= View::make('partials.header')?>
  </head>
  <body>
    <div class="container">
      <h3 class="text-info">Feature focus: Posts and comment board (facebook-like)</h3>
      <hr>
      <div class="row">
        <div class="col-lg-12">
          <h4 class="text-muted">Update status</h4>
        </div>
        <div class="col-lg-11">
          <textarea class="form-control" rows="3" placeholder="What's on your mind?" autofocus="true" ></textarea>
        </div>
        <div class="col-lg-1">
          <a class="btn btn-info btn-sm pull">Post</a>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="well bg-info">
          This is my first post!!
          <small class="text-muted">by anonymous on Nov 4th at 5:30pm</small>
          <hr>
          This is a response
          <small class="text-muted">by anonymous on Nov 4th at 5:35pm</small>
          <hr>
          <input type="text" class="form-control" placeholder="Write a comment">
          <a class="btn btn-link btn-xs">Reply</a>
        </div>
        <div class="well bg-info">
          This is my second post!!
          <small class="text-muted">by anonymous on Nov 4th at 5:40pm</small>
          <hr>
          This is another response
          <small class="text-muted">by anonymous on Nov 4th at 5:45pm</small>
          <hr>
          <input type="text" class="form-control" placeholder="Write a comment">
          <a class="btn btn-link btn-xs">Reply</a>
        </div>
      </div>
    </div>
    <?= View::make('partials.footer') ?>
  </body>
</html>
