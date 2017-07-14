<html>
  <body>
    <?php
      include('config/init.php');
      $red = '#cc210e';
      $yellow ='#fffd91';
      $blue = '#488daf';
      $orange = '#e0a81a';
      $purple = '#955da3';
      $green = '#99b580';

      function AddColors($color1, $color2){
        global $red;
        global $yellow;
        global $blue;
        global $orange;
        global $purple;
        global $green;

        if($color1==$red && $color2==$yellow){
          $color = $orange;
        }
        elseif($color1==$red && $color2==$blue){
          $color = $purple;
        }
        elseif($color1==$yellow && $color2==$blue){
          $color = $green;
        }
        elseif($color1==$color2){
          $color = $color1;
        }
        elseif($color1==$yellow && $color2==$red){
          $color = $orange;
        }
        elseif($color1==$blue && $color2==$red){
          $color = $purple;
        }
        elseif($color1==$blue && $color2==$yellow){
          $color = $green;
        }
        return $color;
      }

      if(isset($_REQUEST['color1'])){
        $combo = AddColors($_REQUEST['color1'], $_REQUEST['color2']);
      }
      else{
        $combo = 'white';
      }
      echo "
        <style>
          body {
            padding: 22%;
            text-align: center;
            background-color: $combo;
          }
        </style>
        <form action='' method='get'>
          <select name='color1' />
            <option name=$red value=$red /> Red
            <option name=$yellow value=$yellow /> Yellow
            <option name='$blue' value='$blue' /> Blue
          </select>
          <select name='color2' />
            <option name=$red value=$red /> Red
            <option name=$yellow value=$yellow /> Yellow
            <option name='$blue' value='$blue' /> Blue
          </select> <br>
          <input name='submitForm' type='submit' />
        </form>
      ";
    ?>
  </body>
</html>
