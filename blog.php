
<?php
$title = "Blog Post";
include 'header.php';
require_once "config.php";
 ?>
      <div class="container-fluid blog-details-fluid">
    <div class="blog-details-main-container">
      <div class="header-logo mt-3 mb-5 px-5">
        <a href="./timeline.php"><img class="" src="assets/img/zikilogo.png" id="logoImage"></a>
      </div>
      <div class="blog-details">
        <div class="blog-details">
          <div class="blog"></div>
          
          <div class="blog-tools px-5 d-flex justify-content-between">
            <div class="fav-comment ml-5 px-5">
              <span><a href=""><img src="./assets/img/heart-filled.svg" alt=""></a></span>
              <sup class="fav-comment-count">513</sup>

              <span> <a href=""><img src="./assets/img/comment.svg" alt=""></a></span>
              <sup class="fav-comment-count">50</sip>

            </div>

            <div class="subscribe mr-5 px-5">
              Subscribe <span> <a href=""><img src="./assets/img/rss-symbol.svg" id="subscribeImage" alt=""></a> </span>
            </div>
          </div>

          <div class="tag-btns-area p-5">
            <a href="" class="btn btn-tags">Javscript</a>
            <a href="" class="btn btn-tags">Tech</a>
            <a href="" class="btn btn-tags">Hotels</a>
          </div>

          <div class="prev-next px-5 py-2 d-flex ">
              <div class="prev font-weight-bold text-center">
                <span class="mr-2"> <  </span> Previous
              </div>
              <div class="next font-weight-bold text-center">
                Next
                <span class="ml-2"> >  </span>
              </div>
          </div>
        </div>
    </div>
    <div id="disqus_thread" class="blog-details-comment_section"></div>
    <script>
        /**
        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

        var disqus_config = function () {
        // this.page.url = "";  // Replace PAGE_URL with your page's canonical URL variable
        // this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };

        (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://ziki-hng-tech.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();

    </script>

    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

    <script src="./assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./assets/js/main.js"></script>
    <script id="dsq-count-scr" src="//ziki-1.disqus.com/count.js" async></script>

<?php include 'footer.php'; ?>
