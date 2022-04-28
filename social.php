<!doctype html>
<html lang="en">
<head>
 
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <link rel="stylesheet" href="css/styles.css">
 <title>Login
 </title>
 </head>
 <body>
     
     <!-- Optional JavaScript -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 </body>

 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg navbar-light bg-warning">
 <a class="navbar-brand" href="/BET-NOW/index.phpindex.php">
 <img src="assets/b-n.jpeg" width="30" class="d-inline-block align-top" alt="logo" class="img-fluid">
 <span style="font-family:Times New Roman; color:ForestGreen;">
 Bet-Now
 </span>
 </a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
 </button>

 <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
     <li class="nav-item">
         <a class="nav-link" href="index.php" style="font-family:Times New Roman;">LIVE </a>
     </li>
     <li class="nav-item">
         <a class="nav-link" href="football.php">Football</a>
     </li>
     <li class="nav-item">
         <a class="nav-link" href="volleyball.php">Volleyball</a>
     </li>
     <li class="nav-item">
         <a class="nav-link" href="lottery.php">Lottery</a>
     </li>
     <li class="nav-item">
         <a class="nav-link" href="horce-race.php">Horse Race</a>
     </li>
     <li class="nav-item">
         <a class="nav-link" href="editors.php">Editors</a>
     </li>
     <li class="nav-item active">
         <a class="nav-link" href="social.php">Social <span class="sr-only">(current)</span></a>
     </li>
     </ul>

     <div class="dropdown">
     <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right:2px;">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
          <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
         </svg>
         <span class="badge badge-light">3</span>
     </button>
     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
         <a class="dropdown-item"> Remzi liked your post</a>
         <a class="dropdown-item"> Deniz liked your betslip </a>
         <a class="dropdown-item"> Arman liked your comment</a>
     </div>
     </div>
    
     <div class="dropdown">
     <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        My Account
     </button>
     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
         <a class="dropdown-item" href="profile.php">Profile</a>
         <a class="dropdown-item" href="credit-account.php">Wallet</a>
         <a class="dropdown-item" href="friends.php">Friends</a>
         <a class="dropdown-item" href="my-betslips.php">My Betslips</a>
         <a class="dropdown-item" href="my-tickets.php">My Tickets</a>
     </div>
     </div>
     <a class="btn btn-danger" href="logout.php" role="button" style="margin-left:2px;">Logout</a>
     </div>

   </div>
 </nav>

 <main>
 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container bootstrap snippets bootdey">
<div class="col-md-8">
  <div class="box box-widget">
    <div class="box-header with-border">
      <div class="user-block">
        <img class="img-circle" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="User Image">
        <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
        <span class="description">Shared publicly - 7:30 PM Today</span>
      </div>
      <div class="box-tools">
      <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="" data-original-title="Mark as read">
        <i class="fa fa-circle-o"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">
      <p>Far far away, behind the word mountains, far from the
      countries Vokalia and Consonantia, there live the blind
      texts. Separated they live in Bookmarksgrove right at</p>

      <p>the coast of the Semantics, a large language ocean.
      A small river named Duden flows by their place and supplies
      it with the necessary regelialia. It is a paradisematic
      country, in which roasted parts of sentences fly into
      your mouth.</p>

      <div class="attachment-block clearfix">
        <img class="attachment-img" src="https://via.placeholder.com/400x300/" alt="Attachment Image">
        <div class="attachment-pushed">
        <h4 class="attachment-heading"><a href="http://www.lipsum.com/">Lorem ipsum text generator</a></h4>
        <div class="attachment-text">
        Description about the attachment can be placed here.
        Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href="#">more</a>
        </div>
        </div>
      </div>
      <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
      <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
      <span class="pull-right text-muted">45 likes - 2 comments</span>
    </div>
    <div class="box-footer box-comments">
      <div class="box-comment">
        <img class="img-circle img-sm" src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="User Image">
        <div class="comment-text">
          <span class="username">
          Maria Gonzales
          <span class="text-muted pull-right">8:03 PM Today</span>
          </span>
          It is a long established fact that a reader will be distracted
          by the readable content of a page when looking at its layout.
        </div>
      </div>
      <div class="box-comment">
        <img class="img-circle img-sm" src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="User Image">
        <div class="comment-text">
          <span class="username">
          Nora Havisham
          <span class="text-muted pull-right">8:03 PM Today</span>
          </span>
          The point of using Lorem Ipsum is that it has a more-or-less
          normal distribution of letters, as opposed to using
          'Content here, content here', making it look like readable English.
        </div>
      </div>
    </div>
    <div class="box-footer">
      <form action="#" method="post">
        <img class="img-responsive img-circle img-sm" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Alt Text">
        <div class="img-push">
          <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
        </div>
      </form>
    </div>
  </div>
</div>
</div>
 </main>
</html>

<style>
    body{
    margin-top:20px;
    background-color: #ecf0f5;
}
.box-widget {
    border: none;
    position: relative;
}
.box {
    position: relative;
    border-radius: 3px;
    background: #ffffff;
    border-top: 3px solid #d2d6de;
    margin-bottom: 20px;
    width: 100%;
    box-shadow: 0 1px 1px rgba(0,0,0,0.1);
}
.box-header.with-border {
    border-bottom: 1px solid #f4f4f4;
}
.box-header {
    color: #444;
    display: block;
    padding: 10px;
    position: relative;
}
.user-block img {
    width: 40px;
    height: 40px;
    float: left;
}
.user-block .username {
    font-size: 16px;
    font-weight: 600;
}
.user-block .description {
    color: #999;
    font-size: 13px;
}
.user-block .username, 
.user-block .description, 
.user-block .comment {
    display: block;
    margin-left: 50px;
}
.box-header>.box-tools {
    position: absolute;
    right: 10px;
    top: 5px;
}
.btn-box-tool {
    padding: 5px;
    font-size: 12px;
    background: transparent;
    color: #97a0b3;
}
.box-body {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    padding: 10px;
}
.pad {
    padding: 10px;
}
.box .btn-default {
    background-color: #f4f4f4;
    color: #444;
    border-color: #ddd;
}
.box-comments {
    background: #f7f7f7 !important;
}
.box-footer {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    border-top: 1px solid #f4f4f4;
    padding: 10px;
    background-color: #fff;
}
.box-comments .box-comment:first-of-type {
    padding-top: 0;
}
.box-comments .box-comment {
    padding: 8px 0;
    border-bottom: 1px solid #eee;
}
.img-sm, 
.box-comments .box-comment img, 
.user-block.user-block-sm img {
    width: 30px !important;
    height: 30px !important;
}
.img-sm, .img-md, 
.img-lg, .box-comments .box-comment img, 
.user-block.user-block-sm img {
    float: left;
}
.box-comments .comment-text {
    margin-left: 40px;
    color: #555;
}
.box-comments .username {
    color: #444;
    display: block;
    font-weight: 600;
}
.box-comments .text-muted {
    font-weight: 400;
    font-size: 12px;
}
.img-sm+.img-push {
    margin-left: 40px;
}
.box .form-control {
    border-radius: 0;
    box-shadow: none;
    border-color: #d2d6de;
}
.attachment-block {
    border: 1px solid #f4f4f4;
    padding: 5px;
    margin-bottom: 10px;
    background: #f7f7f7;
}
.attachment-block .attachment-img {
    max-width: 100px;
    max-height: 100px;
    height: auto;
    float: left;
}
.attachment-block .attachment-pushed {
    margin-left: 110px;
}
.attachment-block .attachment-heading {
    margin: 0;
}
.attachment-block .attachment-heading .h4, .attachment-block .attachment-heading h4 {
    font-size: 18px;
}
.attachment-block .attachment-text {
    color: #555;
}
</style>