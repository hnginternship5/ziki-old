<?php
$title ="Welcome";
include 'header.php';

//require_once "config.php";
$link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] .  $_SERVER['REQUEST_URI'];
$site = (isset($site_url)) ? $site_url : die("please provide your site url in the config.php file.") ;
$site_address = ($link == $site) ? $site : die("Your url is not the same as the url installed in the config.php file");

?>

<!-- code BELOW this line -->

<p>Pre-login blog page</p> <!-- delete this -->

<!-- code ABOVE this line -->

<script>
const $ = document.querySelector.bind(document)

function readTextFile(file, div) {
  var rawFile = new XMLHttpRequest();
  rawFile.open("GET", file, false);
  rawFile.onreadystatechange = function () {
    if (rawFile.readyState === 4) {
      if (rawFile.status === 200 || rawFile.status == 0) {
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
.then(function (data) {
  console.log(data)
  let res = data.result;
  for (let i = 0; i < res.length; i++) {
    let card = res[i];
    console.log(card);
    let post_card = `
    <div class="row posts pb-3">
    <div class="col-md-1">
    <img class="blog-item-author-avatar" src="${card.author_image}">
    </div>
    <div class="col-md-11">
    <div class="row blog-item-main">
    <div class="col-md-3">
    <img src="${card.post_image}" class="img-fluid post-img" alt="Profile Image">
    </div>

    <div class="col-md-9">
    <a href="/blog.php?id=${card.id}">
    <div class="markedcontent${i}"></div>
    </a>
    <div class="row post-footer mt-1">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex justify-content-end">
    <a role = "button" data-toggle="modal"
    data-target="#exampleModalCenter"><i class="far fa-comment-alt post-icon chat-icon"></i></i></a>
    </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <p class="post-date">${card.post_timestamp}</p>
      </div>
    </div>
  </div>
</div>
</div>
<!-- <div class="col-md-1"></div> -->
</div>
`;
$('.posts-area').innerHTML += post_card;
readTextFile(card.markdown_url, i);
}
$('.load-more').remove();
})
.catch(function (error) {
  console.log(error);
});
//$('body').style.background = '#ff1212'
</script>

<?php include 'footer.php'; ?>
