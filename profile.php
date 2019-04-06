<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Blog Task</title>
  <link rel="stylesheet" href="css/theme1.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
</head>

<body>
  <div class="container">
    <div class="header"></div>
    <div class="mainContainer">
      <div class="sidebar">
        <div>
          <div>
            <img class="profileImage" src="./uploads/profile.png" alt="profile image" />
          </div>
          <div class="profileInfo">
            <h1>Paul Jephtah</h1>
            <p>UX Designer | Product Designer | Frontend Newbie</p>
            <span class="profileAbout">I am kinda weird in a very good way... I design for survival</span>
            <div class="socialIcons">
              <a href="#"><i class="fab fa-github"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-facebook"></i></a>
            </div>
          </div>
        </div>
        <div class="navigation">
          <p><a href="#">About</a></p>
          <p><a href="#">My Blogs</a></p>
          <p><a href="#">Other Publication</a></p>
          <p><a href="#">Contact</a></p>
        </div>
        <div class="quick-links">
          <p><a href="#">English (US)</a></p>
          <p><a href="#">Privacy</a></p>
          <p><a href="#">Terms of Use</a></p>
          <p><a href="#">Contact</a></p>
          <p><a href="#">Advertise with us</a></p>
        </div>
      </div>
      <div class="main">
        <div class="createPost">
          <form action="">
            <label for="" class="postInput-label">What's on your mind?</label>
            <br />
            <input class="postInput" type="text" required spellcheck="true" />
            <div class="postInput-footer">
              <div class="postIcons">
                <i class="fas fa-image"></i>
                <i class="fas fa-video"></i>
                <i class="far fa-smile-wink"></i>
              </div>
              <button class="postButton">Post</button>
            </div>
          </form>
        </div>
        <div class="sort-section">
          <hr />
          <span>
            sort by:
            <select name="sort" id="sort">
              <option value="1">Recent</option>
              <option value="2">Trending</option>
              <option value="3">Old to new</option>
            </select></span>
        </div>
        <div class="post">
          <div>
            <img class="profileImage" src="./uploads/profile.png" alt="profile image" />
          </div>
          <div class="postDetails">
            <h1>Jollof Rice War</h1>
            <h3>Sunday Raji</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro, unde. Magnam quia reprehenderit sequi
              nostrum voluptate accusantium maiores eveniet aspernatur laudantium amet exercitationem quae, sit optio
              vitae ad officiis animi.
            </p>
            <div class="postFooter">
              <div class="postDate">25th April 2018</div>
              <div class="postActions">
                <button><i class="fas fa-thumbs-up"></i>Like</buton>
                  <button><i class="fas fa-comment-alt"></i>Comment</button>
              </div>
            </div>
          </div>
        </div>
        <button class="morePosts">See more</button>
      </div>
    </div>
    <div class="footer">
      <p>Designed by Jeffgraphics (c) 2019 Quadrant, All Rights Reserved</p>
    </div>
  </div>
</body>

</html>