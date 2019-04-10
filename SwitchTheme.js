var $j = jQuery.noConflict();
$j(document).ready(function(){
  let themeMode = localStorage.getItem('themeMode');

      if( themeMode == null )
        {
          $j('#setCssClass').removeAttr('class');
          $j('.toggleFocus').removeAttr('checked');
          $j('.themeModeLabel').html('Light Mode');
        }
        else if ( themeMode == 'dark' )
        {
          $j('#setCssClass').attr('class','dark');
          $j('.toggleFocus').attr('checked','checked');
          $j('.themeModeLabel').html('Dark Mode');
        }
        else if (themeMode == 'light')
        {
          $j('#setCssClass').removeAttr('class');
          $j('.toggleFocus').removeAttr('checked');
          $j('.themeModeLabel').html('Light Mode');
        }

      
      

      $j('#toggleThemeMode').click(function(){
        let theme_mode = localStorage.getItem('themeMode');
        

        if( theme_mode == null )
        {
          localStorage.setItem('themeMode','dark');
          $j('#setCssClass').attr('class','dark');
          $j('.themeModeLabel').html('Dark Mode');


        }
        else if ( theme_mode == 'dark' )
        {
          localStorage.setItem('themeMode','light');
          $j('#setCssClass').removeAttr('class');
          $j('.themeModeLabel').html('Light Mode');
          
        }
        else if (theme_mode == 'light')
        {
          localStorage.setItem('themeMode','dark');
          $j('#setCssClass').attr('class','dark');
          $j('.themeModeLabel').html('Dark Mode');

          

        }
        
    });

      

  });

  
