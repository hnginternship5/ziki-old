</div>



</body>
</html>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="SwitchTheme.js"></script>
<?php 

if(isset($_SESSION['themeMode'] ) && $_SESSION['themeMode'] =='dark' )
 {
   echo '<script>
          localStorage.setItem("themeMode","dark")
   </script>';
 }
 
?>
