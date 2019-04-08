`<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Not Found</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <style>
        body{
            background-color: #ffffff;
            font-family: 'Roboto', sans-serif;
        }
        .warning-text{
            font-size: 5vw;
            line-height: 3vw;
            font-weight: bolder;
           text-align: center;
        }
        .second-text{
            font-size: 5vw;
            line-height: 2vw;
            font-weight: bolder;
            text-align: center;
        }

        .return-button{
            background-color: blue;
            padding: 23px;
            padding-left: 50px;
            padding-right: 50px;
            position: absolute;
            top:65%;
            left: 34%;
            right: 34%;
            border-radius: 10px;
            font-size: 90%;
            line-height: 30px;
            font-weight: bold;
            color:#ffffff;
            width: 25%;
            text-align: center; 
        }
        
        @media all and (max-width:30em){
         .return.button{
          display:block;
          margin:0.4em auto;
          left: 25%;
         }

        @media only screen and (max-width: 600px) {
        .return.button {
          left: 25%;
        }
        }
            
        }

        /* Place the navbar at the bottom of the page, and make it stick */
        .navbar {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: #ffffff;
        color: white;
        text-align: center;

        }

/* Style the links inside the navigation bar */
.navbar a {
  display: inline-block;
  color: blue;
  text-align: center;
  padding: 14px 10px;
  text-decoration: none;
  font-size: 17px;
  
}

/* Change the color of links on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

.left-vector{
position: absolute;
left: 49.89%;
right: 29.58%;
top: 46.11%;
bottom: 37.05%;


}

.right-vector{
    position: absolute;
left: 41.79%;
right: 41.72%;
top: 41.08%;
bottom: 44.4%;

}

.top-vector{
    position: absolute;
left: 51.60%;
right: 48.5%;
top: 43.82%;
bottom: 53.62%;
}

.top-left-vector{
    position: absolute;
left: 48.75%;
right: 46.27%;
top: 39.44%;
bottom: 58.18%;

}

.top-middle-vector{
    position: absolute;
left: 50.7%;
right: 45.65%;
top: 39.59%;
bottom: 57.33%;
}
    </style>
</head>
<body>
    <p class="warning-text">Oops! Loooks like that page doesn't</p>  
    <p class="second-text">exist</p><br><br>
    
    <span class="left-vector"><svg width="75" height="85" viewBox="0 0 152 153" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M47.1705 78.0186L32.1359 62.9837C30.3813 61.2291 27.4914 61.2291 25.7368 62.9837L2.06688 86.688C0.965951 87.7893 0.34668 89.2683 0.34668 90.8509C0.34668 92.3991 0.965951 93.9128 2.06688 95.0145L40.6337 133.581C52.8815 145.829 69.1546 152.572 86.4598 152.572C103.765 152.572 120.038 145.829 132.286 133.581L133.008 132.859C145.256 120.61 151.999 104.338 151.999 87.0324C151.999 69.7275 145.256 53.4541 133.008 41.2066L94.4071 2.67418C93.3062 1.57325 91.8269 0.953979 90.2443 0.953979C88.6961 0.953979 87.1823 1.57325 86.081 2.67418L65.6107 23.1445C63.8561 24.8995 63.8561 27.7891 65.6107 29.5437L80.6452 44.5779C82.4002 46.3332 85.2898 46.3332 87.0447 44.5779L90.2443 41.3787L111.575 62.7091C125.027 76.1611 125.027 98.0076 111.575 111.494L110.852 112.217C97.3999 125.669 75.5534 125.669 62.0671 112.217L40.7366 90.8863L47.1701 84.4524C48.9595 82.6631 48.9595 79.8072 47.1705 78.0186Z" fill="#C4C4C4"/>
        </svg>
    </span>

         <span class="right-vector"><svg width="65" height="70" viewBox="0 0 126 132" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M99.4619 44.6441H120.724C123.235 44.6441 125.231 42.6143 125.231 40.1372V6.62771C125.231 5.07953 124.612 3.56576 123.511 2.46483C122.41 1.3639 120.93 0.744629 119.347 0.744629H64.8171C47.5119 0.744629 31.2388 7.48781 18.991 19.7356C6.74318 31.9834 0 48.2565 0 65.5617V66.5594C0 83.8643 6.74318 100.138 18.991 112.386C31.2388 124.633 47.5119 131.376 64.8171 131.376H119.382C120.93 131.376 122.443 130.757 123.545 129.656C124.646 128.555 125.265 127.076 125.265 125.493V96.5253C125.265 94.0135 123.235 92.0184 120.758 92.0184H99.4963C96.9845 92.0184 94.989 94.0475 94.989 96.5253V101.032H64.8512C45.7913 101.032 30.3784 85.5848 30.3784 66.5594V65.5617C30.3784 46.5023 45.8258 31.0889 64.8512 31.0889H94.989V40.1716C94.955 42.6487 96.9845 44.6441 99.4619 44.6441Z" fill="#C4C4C4"/>
            </svg></span>

            <span class="top-vector"><svg width="30" height="9" viewBox="0 0 59 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.12748 25.1544C2.46923 29.4893 6.42569 32.4136 10.9674 32.4136C11.9995 32.4136 13.0316 32.2416 14.029 31.932L50.7724 20.5099C56.2086 18.8241 59.2702 13.0098 57.55 7.60836C56.2086 3.27346 52.2521 0.349121 47.7105 0.349121C46.6784 0.349121 45.6462 0.521144 44.6485 0.83078L7.90506 12.2185C2.46924 13.9043 -0.558319 19.7186 1.12748 25.1544Z" fill="#C4C4C4"/>
                </svg></span>
                
                <span class="top-left-vector"><svg width="8" height="30" viewBox="0 0 33 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.5893 7.25924C19.2479 2.92434 15.2914 0 10.7501 0C9.71797 0 8.68585 0.17202 7.68813 0.481656C2.2523 2.16745 -0.809302 7.98172 0.876149 13.4176L12.2983 50.161C13.64 54.4959 17.5965 57.4202 22.1378 57.4202C23.1699 57.4202 24.202 57.2482 25.1998 56.9386C27.8489 56.1129 29.9819 54.3239 31.2893 51.8812C32.5622 49.4385 32.8374 46.6518 32.0118 44.0027L20.5893 7.25924Z" fill="#C4C4C4"/>
                    </svg></span>

                    <span class="top-middle-vector"><svg width="10" height="30" viewBox="0 0 39 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M33.1447 1.48844C31.6654 0.697149 30.014 0.284302 28.3629 0.284302C24.5097 0.284302 21.0005 2.38294 19.2111 5.78894L1.28667 39.8489C-1.36244 44.8719 0.563834 51.1334 5.62156 53.7825C7.10093 54.5738 8.75268 54.9866 10.4037 54.9866C14.257 54.9866 17.7658 52.888 19.5552 49.482L37.48 15.4221C38.7526 12.9794 39.0282 10.1926 38.2025 7.54354C37.3761 4.92884 35.5874 2.76139 33.1447 1.48844Z" fill="#C4C4C4"/>
                        </svg></span>
                        
                    
    <span class="return-button">Return to Homepage</span>

    <footer class="navbar">
            <a href="#home" class="active">My blogs</a>&nbsp;&nbsp;&nbsp;
            <a href="#news">Settings</a>&nbsp;&nbsp;&nbsp;
            <a href="#contact">Privacy</a>&nbsp;&nbsp;&nbsp;
            <a href="#terms">Terms & Conditions</a>
    </footer>
</body>
</html>