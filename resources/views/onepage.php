



  <!-- app -->
    <?php

  include('simple_html_dom.php');

  // $file=file_g
      $ch = curl_init();

      curl_setopt($ch,CURLOPT_URL,"https://4d13.com/");
      curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

      $html=curl_exec($ch);

      // $the_html=$html->getElementsByClassName("result-container");
      
      var_dump($html);
      
    ?>
