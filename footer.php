</div>
<script src="//cdn.jsdelivr.net/npm/medium-editor@latest/dist/js/medium-editor.min.js"></script>
<script>
    let editor = new MediumEditor('.editable', {
        buttonLabels: 'fontawesome'
    });
    const toggleThemeBtn = document.querySelector('.toggle-theme');
    toggleThemeBtn.addEventListener('click', e => document.querySelector('body').classList.toggle('dark'));
</script>
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
                let post_card = `
                <div class="row posts">
                    <div class="col-md-12 col-12">
                        <div class="row">
                            <div class="col-md-1">
                                <img class="blog-item-author-avatar" src="${card.author_image}">
                            </div>
                            <div class="col-md-11 col-12">
                                <div class="row blog-main-item">
                                    <div class="col-md-3 col-12">
                                        <div class="row">
                                            <img src="assets/img/wall.jpg" class="img-fluid post-img" alt="Profile Image">
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-12">
                                    <div class="markedcontent${i}"></div>
                                        <div class="row post-footer">
                                            <div class="col-md-8 col-7">
                                                <a href="#">
                                                <span class="badge badge-primary">Tech</span>
						</a>
						<a href="#">
                                                <span class="badge badge-primary">AI</span>
						</a>
						<a href="#">
                                                <span class="badge badge-primary">Academic</span>
						</a>
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <p class="post-date">${card.post_timestamp}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-5 text-right">
                                                <a href="/blog-detail.php"><i class="far fa-comment-alt post-icon chat-icon"></i></i></a>
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
        })
        .catch(function(error) {
            console.log(error);
        });
</script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="SwitchTheme.js"></script>
</body>
</html>
