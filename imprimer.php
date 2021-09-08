<?php
<div class="imprimer">
      	<input id="impression" name="impression" type="submit" onclick="imprimer_page()" value="Exporter en pdf " />
      </div>
 
       <script type="text/javascript">
            function imprimer_page(){
            window.print();
             }
        </script>
         <PHP header('Expires: 0');
          header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
          header('Pragma: public');
          ?>