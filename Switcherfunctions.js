        $(document).ready(function(){
          ///jquery version used and source= cdn
          //https://code.jquery.com/jquery-3.3.1.js
            // this event listener should pop up a modal for confirmation  to toggles the 
            // dark mode button to light like YES AND NO BUTTON
            $('#dark').click(function(){
                $('.modal').toggle('#myModal');
            });

            // when the user clicks on yes this 
            // sends an ajax request to a php script to set a session
            // for the theme selected,for this button will toggle dark mode to light
            $('#toggleToLightMode').click(function(){

                $.ajax({
                    type: "POST",
                    url:"themeSwitcher.php",
                    data:{"themeMode":'light'},
                    success: function(data){

                      
                      $('ul').toggleClass('active');
                      //on success the page reloads for php to  check
                    //   for sessions isset and do it's normal changes 
                      window.location='settings.php';

                    }
                });
                
            });

            // this event listener should pop up a modal for confirmation  to toggles the 
            // light mode button to dark like YES AND NO BUTTON

            $('#light').click(function(){
                $('.modal').toggle('#myModal');
            });
            ///this should close the modal when they click on no
            $('#close').click(function(){
                $('.modal').toggle('#myModal');
            });

            // when the user clicks on yes this 
            // sends an ajax request to a php script to set a session
            // for the theme selected,for this button will toggle dark mode to light
            $('#toggleToDarkMode').click(function(){
              $.ajax({
                    type: "POST",
                    url:"themeSwitcher.php",
                    data:{"themeMode":'dark'},
                    success: function(data){

                      
                      $('ul').toggleClass('active');
                       //on success the page reloads for php to  check
                    //   for sessions isset and do it's normal changes
                      window.location='index.php';

                    }
                });  
            });
            

        });

        
