$(document).ready(function(){
  let themeMode = localStorage.getItem('themeMode');

      if( themeMode == null )
        {
          $('#setCssClass').removeAttr('class');
          $('.toggleFocus').removeAttr('checked');
          $('.themeModeLabel').html('Light Mode');
        }
        else if ( themeMode == 'dark' )
        {
          $('#setCssClass').attr('class','dark');
          $('.toggleFocus').attr('checked','checked');
          $('.themeModeLabel').html('Dark Mode');
        }
        else if (themeMode == 'light')
        {
          $('#setCssClass').removeAttr('class');
          $('.toggleFocus').removeAttr('checked');
          $('.themeModeLabel').html('Light Mode');
        }

      
      

      $('#toggleThemeMode').click(function(){
        let theme_mode = localStorage.getItem('themeMode');
        

        if( theme_mode == null )
        {
          localStorage.setItem('themeMode','dark');
          $('#setCssClass').attr('class','dark');
          $('.themeModeLabel').html('Dark Mode');

            $.ajax({
              type: "POST",
              url:"themeSwitcher.php",
              data:{"themeMode":'dark'},
              success: function(data){
                console.log(data);
              }
          });

        }
        else if ( theme_mode == 'dark' )
        {
          localStorage.setItem('themeMode','light');
          $('#setCssClass').removeAttr('class');
          $('.themeModeLabel').html('Light Mode');
          $.ajax({
            type: "POST",
            url:"themeSwitcher.php",
            data:{"themeMode":'light'},
            success: function(data){
              console.log(data);
            }
        });
        }
        else if (theme_mode == 'light')
        {
          localStorage.setItem('themeMode','dark');
          $('#setCssClass').attr('class','dark');
          $('.themeModeLabel').html('Dark Mode');

          $.ajax({
            type: "POST",
            url:"themeSwitcher.php",
            data:{"themeMode":'dark'},
            success: function(data){
              console.log(data);
            }
        });

        }
        
    });

      

  });

  
