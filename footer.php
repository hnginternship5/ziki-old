</div>
<script src="//cdn.jsdelivr.net/npm/medium-editor@latest/dist/js/medium-editor.min.js"></script>
<script>
    let editor = new MediumEditor('.editable', {
        buttonLabels: 'fontawesome'
    });
</script>
<?php if (isset($_GET['id'])) {?>
  <script>
  const $ = document.querySelector.bind(document)
      function readTextFile(file, div)
      {
          var rawFile = new XMLHttpRequest();
          rawFile.open("GET", file, false);
          rawFile.onreadystatechange = function ()
          {
              if(rawFile.readyState === 4)
              {
                  if(rawFile.status === 200 || rawFile.status == 0)
                  {
                      var allText = rawFile.responseText;
                      $(`.markedcontent${div}`).innerHTML = allText;
                  }
              }
          }
          rawFile.send(null);
      }
        post = "<?php echo $_GET['id']; ?>";
          const url = "<?php echo "{$site_url}/Single_post.php?post="; ?>" + post;
          fetch(url)
          .then((resp) => resp.json())
          .then(function(data) {
              console.log(data)
              let res = data.result;
              for (let i = 0; i < res.length; i++) {
                  let card = res[i];
                  console.log(card);

                  let post_card = `
                  <div class="blog-details-date font-weight-light mb-5 px-5">
                  <img class="blog-item-author-avatar" src="${card.author_image}">  <span> ${card.post_timestamp}</span>
                  </div>
                  <div class="blog-details-banner">
                      <img src="${card.post_image}" alt="" class="img-fluid">
                      <div class="blog-details-image-description mt-2 mb-5 font-weight-light text-center">

                      </div>
                  </div>
                  <div class="blog-details-content">
                  <div class="markedcontent${i}"></div>
                  </div>
                  `;
                  $('.feeds').innerHTML += post_card;
                  readTextFile(card.markdown_url, i);
              }
          })
          .catch(function(error) {
              console.log(error);
          });
  </script>
<?php } else {?>

<script>
const $ = document.querySelector.bind(document)
    function readTextFile(file, div)
    {
        var rawFile = new XMLHttpRequest();
        rawFile.open("GET", file, false);
        rawFile.onreadystatechange = function ()
        {
            if(rawFile.readyState === 4)
            {
                if(rawFile.status === 200 || rawFile.status == 0)
                {
                    var allText = rawFile.responseText;
                    $(`.markedcontent${div}`).innerHTML = allText;
                }
            }
        }
        rawFile.send(null);
    }
        const url = "<?php echo "{$site_url}/post.php" ?>";
        fetch(url)
        .then((resp) => resp.json())
        .then(function(data) {
            console.log(data)
            let res = data.result;
            for (let i = 0; i < res.length; i++) {
                let card = res[i];
                console.log(card);
                let post_card = `
                <div class="row posts">
                    <div class="col-md-12 col-12">
                        <div class="row">
                            <div class="col-md-1">
                                <img class="blog-item-author-avatar" src="${card.author_image}">
                            </div>
                            <div class="col-md-11 col-12">
                                <div class="row blog-item-main">
                                    <div class="col-md-3 col-12">
                                        <div class="row">
                                            <img src="${card.post_image}" class="img-fluid post-img" alt="Profile Image">
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-10">
                                    <a href="/blog.php?id=${card.id}">
                                        <div class="markedcontent${i}"></div>
                                    </a>
                                        <div class="row post-footer">
                                            <div class="col-md-8 col-7">


						</a>
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <p class="post-date">${card.post_timestamp}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-5 text-right">
                                                <a href="/blog.php?id=${card.id}"><i class="far fa-comment-alt post-icon chat-icon"></i></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-1"></div> -->
                </div>
                `;
                $('.feeds').innerHTML += post_card;
                readTextFile(card.markdown_url, i);
            }
            $('.load-more').remove();
        })
        .catch(function(error) {
            console.log(error);
        });
</script>
<?php  }?>
<script>
// Switch logo and Rss Image when dark mode is turned on
  if(document.getElementById("bodySwitch").className == 'dark'){
    document.getElementById("logoImage").src="assets/img/ziki-light.png";
    document.getElementById("subscribeImage").src="assets/img/subscribeLight.png";
  }
</script>
<?php if (!isset($_SESSION['name'])) {
 include 'auth.php';

} ?>
<script src="/assets/js/site.js"></script>
</body>
</html>
