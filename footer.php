</div>

<script src="//cdn.jsdelivr.net/npm/medium-editor@latest/dist/js/medium-editor.min.js"></script>
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
        //const url = 'http://localhost:8000/post.php'; //uncomment if you want to test locally
        const url = 'https://ziki.hng.tech/post.php';
        fetch(url)
        .then((resp) => resp.json())
        .then(function(data) {
            console.log(data)
            let res = data.result;
            for (let i = 0; i < res.length; i++) {
                let card = res[i];
                console.log(card);
                let post_card = `<div class="row mx-0 mt-md-4 blog-item-wrapper">
                        <div class="d-flex flex-row px-0 blog-item">
                            <div class="blog-item-author-avatar-wrapper">
                                <img class="blog-item-author-avatar" src="assets/img/naomi.png">
                            </div>
                            <div class="blog-item-main d-flex flex-row">
                                <div class="blog-item-img-wrapper">
                                    <img class="blog-item-img" src="assets/img/wall.jpg">
                                </div>
                                <div class="d-flex flex-column blog-item-main-content">
                                    <div class="markedcontent${i}"></div>
                                    <div class="row d-flex flex-row align-items-center justify-content-between mx-0">
                                        <div class="d-flex flex-row align-items-center">
                                            <div class="blog-item-tag-wrapper">
                                                <p class="blog-item-tag text-center">Javascript</p>
                                            </div>
                                            <div class="blog-item-tag-wrapper">
                                                <p class="blog-item-tag text-center">Tech</p>
                                            </div>
                                            <div class="blog-item-tag-wrapper">
                                                <p class="blog-item-tag text-center">Hotels</p>
                                            </div>
                                            <a href="#"><p class="blog-item-more_action ">Read More</p></a>
                                        </div>

                                        <div class="d-flex flex-row align-items-center">
                                            <img class="blog-item-action" src="assets/img/heart-filled.svg">
                                            <img class="blog-item-action" src="assets/img/comment.svg">
                                        </div>
                                    </div>
                                    <p class="blog-item-date">${card.post_timestamp} </p>
                                </div>
                            </div>
                        </div>
                        </div>`;
                $('.post-section').innerHTML += post_card;
                readTextFile(card.markdown_url, i);
            }
        })
        .catch(function(error) {
            console.log(error);
        });
        //$('body').style.background = '#ff1212'
    </script>
<script>
let editor = new MediumEditor('.editable', {
    buttonLabels: 'fontawesome'
});

</script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="SwitchTheme.js"></script>
</body>
</html>


