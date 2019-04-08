<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="assets/css/theme1.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/landing-page.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>Blog Detail</title>
    <style>
        .margin-right-h {
            margin-right: .5rem; 
        }
        .margin-right-1 {
            margin-right: 1rem;
        }
        .mt--p3 {
            margin-top: -.3rem;
        }
        body {
            background-color: #07223e !important;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            color: #fffeee;
        }



        div.main-container {
            padding: 2rem 5rem 0;
            max-width: 1680px;
            margin: 0 auto;
        }
        @media screen and (max-width: 768px) {
            div.main-container {
                padding: 1.5rem;
            }
        }


        /* ============================
        Post Heading Section
        ============================= */
        div.heading .logo-holder {
            font-size: 25px;
            color: #3667E7;
            margin-bottom: 2.5rem;
        }
        div.heading .heading-content {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-bottom: 2rem;
        }
        div.heading .heading-content .post-title{
            max-width: 550px;
            font-size: 45px;
        }
        div.heading .heading-content .post-date{
            font-weight: 300;
            margin-top: .75rem;
            font-size: 14px;
        }
        div.heading .heading-content button.favorite{
            margin-top: 5px;
            background: transparent;
            border: none;
            outline: none;
        }


        /* ============================
        Image Banner Section
        ============================= */
        div.banner {
            margin-bottom: 2rem;
            width: 100%;
            height: 450px;
        }
        div.banner img {
            height: 100%;
            width: 100%;
            object-fit: cover;
        }


        /* ============================
        Main Post Content
        ============================= */
        div.post-content {
            margin-bottom: 2rem;
        }
        div.post-content::after {
            content: "";
            display: block;
            clear: both;
        }
        div.post-content p {
            margin-bottom: 2rem;
        }
        div.post-content .post-image-left {
            max-width: 750px;
            height: 600px;
            float: left;
            object-fit: cover;
            margin-right: 2rem;
            margin-bottom: 1rem;
        }
        @media screen and (max-width: 992px) {
            div.post-content .post-image-left {
                max-width: 100%;
                width: 100%;
                height: 600px;
                margin-right: 0;
                margin-bottom: 2rem;
            }
        }


        /* ============================
        Post Engagement Section
        ============================= */
        div.engagement {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 2rem;
        }
        div.engagement button {
            background: transparent;
            border: none;
            outline: none;
            color: #ffffff;
        }


        /* ============================
        Post Tags Section
        ============================= */
        ul.post-tags {
            display: flex;
            flex-wrap: wrap;
        }
        ul.post-tags a {
            color: #000000;
            background: #AECDEE;
            border-radius: 5px;
            font-size: 13px;
            font-weight: 600;
            display: block;
            padding: .5rem 1.2rem;
            margin-right: 1rem;
            margin-bottom: 2rem;
        }
        ul.post-tags a:hover {
            opacity: .7;
        }


        
        div.pagination {
            width: 100%;
            display: flex;
            align-items: center;
        }
        div.pagination button{
            width: 50%;
            text-align: center;
            background-color: #04274c;
            border: none;
            outline: none;
            color: #3667E7;
            padding: .75rem 0;
            display: flex;
            align-items: baseline;
            justify-content: center;
        }
        div.pagination button:hover {
            opacity: .7;
        }


        /* ============================
        Comment Section
        ============================= */

        div.comment_section{
            max-width: 600px;
            margin: 3rem auto;
            width: 100%;
        }
        @media screen and (max-width: 768px) {
            div.comment_section{
                padding: 0 1.5rem;
            }
        }

    </style>
</head>

<body>
<div class="main-container">
    <div class="heading">
        <h1 class="logo-holder">Homepage</h1>
        <div class="heading-content">
            <div>
                <h2 class="post-title">The effect of culture on design trends</h2>
                <div class="post-date">3rd, April 2019</div>
            </div>
            <button class="favorite">
                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21.8296 27.3C21.5763 27.3 21.3546 27.2367 21.1329 27.11L14.0079 22.4867L6.88293 27.11C6.4396 27.395 5.8696 27.3634 5.45793 27.0784C5.04626 26.7617 4.85626 26.2234 4.98293 25.7167L7.23126 17.8L0.549596 12.1634C0.169596 11.8467 0.0112583 11.3084 0.169592 10.8017C0.327925 10.3267 0.771258 9.97836 1.27793 9.91502L9.2896 9.34505L12.8996 1.46004C13.1213 1.0167 13.5646 0.731689 14.0396 0.731689C14.5463 0.731689 14.9896 1.0167 15.1796 1.46004L18.7896 9.34505L26.8013 9.91502C27.3079 9.94669 27.7513 10.295 27.9096 10.8017C28.0679 11.2767 27.9096 11.815 27.5296 12.1634L20.8479 17.8L23.0963 25.7167C23.2546 26.2234 23.0646 26.7617 22.6213 27.0784C22.3679 27.205 22.1146 27.3 21.8296 27.3Z" fill="#FBBB00"/>
                </svg>
            </button>
        </div>
    </div>
    
    <div class="banner">
        <img src="/uploads/blog-details.png" alt="">
    </div>

    <div class="post-content">
        <p> 
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        
        <img src="/uploads/blog-details.png" alt="" class="post-image-left">

        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Post Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in Post"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in Post"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in Post"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in Post"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
        </p>

        <p>
            Post"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in Post"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in Post"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in Post"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
        </p>
    </div>

    <div class="after_content">

        <div class="engagement">
            <div class="d-flex">
                <button class="margin-right-1">
                    <span class="margin-right-h">             
                        <svg width="26" height="21" viewBox="0 0 36 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M35.0404 5.96919C33.3265 2.34788 29.7317 0 25.8442 0C21.9567 0 19.4486 1.63158 17.9856 3.38254C16.5226 1.63158 14.0145 0 10.1271 0C6.23958 0 2.64471 2.34788 0.930872 5.96919C-0.824763 9.74968 -0.0723506 13.9281 2.97911 17.1912C10.2943 25.0308 16.7734 30.5623 16.857 30.6021C17.1914 30.8806 17.5676 31 17.9856 31C18.4036 31 18.7798 30.8806 19.1142 30.6021C19.1978 30.5623 25.6352 24.991 32.9921 17.1912C36.0854 13.9281 36.8378 9.74968 35.0404 5.96919Z" fill="#F14336"/>
                        </svg>   
                    </span>
                    <span>513<span>
                </button>
                <button>
                    <span class="margin-right-h">             
                        <svg width="25" height="25" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M42.5104 8.33337H7.51042C6.59375 8.33337 5.84375 9.08337 5.84375 10V31.2917C5.84375 32.2084 6.59375 32.9167 7.51042 32.9167H27.0938V40C27.0938 40.7084 27.6354 41.3334 28.2604 41.5834C28.4688 41.6667 28.6771 41.6667 28.8854 41.6667C29.3854 41.6667 29.8438 41.4584 30.1771 41.0834L37.0938 32.9167H42.5104C43.4271 32.9167 44.1771 32.2084 44.1771 31.2917V10C44.1771 9.08337 43.4271 8.33337 42.5104 8.33337ZM40.8438 29.5834H36.3437C35.8437 29.5834 35.3021 29.8334 34.9688 30.1667L30.4271 35.4167V31.25C30.4271 30.3334 29.8438 29.5417 28.9271 29.5417H9.17708V11.6251H40.8438V29.5834ZM13.5937 17.5C13.5937 16.5834 14.3437 15.8334 15.2604 15.8334H27.3437C28.2604 15.8334 29.0104 16.5834 29.0104 17.5C29.0104 18.4167 28.2604 19.1667 27.3437 19.1667H15.2604C14.3437 19.1667 13.5937 18.4167 13.5937 17.5ZM31.8854 18.7917C31.5938 18.5 31.3854 18.0417 31.3854 17.6251C31.3854 17.1667 31.5521 16.75 31.8854 16.4584C32.2188 16.125 32.6354 15.9584 33.0521 15.9584C33.5104 15.9584 33.9271 16.125 34.2187 16.4584C34.5104 16.75 34.7188 17.2084 34.7188 17.6251C34.7188 18.0834 34.5521 18.5 34.2187 18.7917C33.8854 19.125 33.4688 19.2917 33.0521 19.2917C32.6354 19.2501 32.2188 19.0834 31.8854 18.7917Z" fill="#3667E7"/>
                        </svg>
                    </span>
                    <span>50</span>
                </button>
            </div>

            <button>
                <span class="margin-right-h">Subscribe </span>
                <i class=" fa fa-rss" aria-hidden="true"></i>
            </button>
        </div>

        <ul class="post-tags">
            <li><a href="">JavaScript</a></li>
            <li><a href="">Tech</a></li>
            <li><a href="">Hotels</a></li>
        </ul>

        <div class="pagination">
            <button type="button">
                <span class="margin-right-h">  
                    <svg width="10" height="15" viewBox="0 0 10 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.25 1.75L7.5 0L0 7.5L7.5 15L9.25 13.25L3.5 7.5L9.25 1.75Z" fill="currentColor"/>
                    </svg>
                </span>
                <span>Previous</span>
            </button>
            <button type="button">
                <span class="margin-right-h">Next</span>
                <span class="mt--p3">                    
                    <svg width="10" height="15" viewBox="0 0 10 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 1.75L1.75 0L9.25 7.5L1.75 15L0 13.25L5.75 7.5L0 1.75Z" fill="currentColor"/>
                    </svg>
                </span>
            </button>
        </div>
    </div>
</div>

<div id="disqus_thread" class="comment_section"></div>
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
</body>
</html>
