<?php
$title = "Blog Details";
include 'header.php';
?>

<!-- code BELOW this line -->

<p>Blog Details Page</p> <!-- delete this -->

<!-- code ABOVE this line -->

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
<script>
// Switch logo and Rss Image when dark mode is turned on
  if(document.getElementById("bodySwitch").className == 'dark'){
    document.getElementById("logoImage").src="assets/img/ziki-light.png";
    document.getElementById("subscribeImage").src="assets/img/subscribeLight.png";
  }
</script>
<script src="./assets/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="./assets/js/main.js"></script>
<script id="dsq-count-scr" src="//ziki-1.disqus.com/count.js" async></script>

<?php include 'footer.php'; ?>
