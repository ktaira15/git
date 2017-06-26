

<html>
  <body>
    <?php
    #DEFUNCT, REFER TO COLORCALC.PHP
    include('config/init.php');
      //color calculator with two drop down lists with same colors (red, yellow, blue) amd a submit button--when you submit, background of page becomes combined color
    if(isset($_REQUEST['orange'])){
      //do i put echo before function here if i define CSS bg color in function itself? or will it do it automatically with how i have it formatted now
      orange($_REQUEST['red'], $_REQUEST['yellow']);
    }
    elseif(isset($_REQUEST['purple'])){
      purple($_REQUEST['red'], $_REQUEST['blue']);
    }
    elseif (isset($_REQUEST['green'])){
      green($_REQUEST['yellow'], $_REQUEST['blue']);
    }
    else {
      echo "Sorry, pick one more color!";
    }
#i think i might have to do if statements for if two of the same color was selected, unsure if sufficient to just define

    $red = red; #won't let me do "background-color:" like in CSS, won't accept the colon--unsure what to do. Do I need separate stylesheet? Style tag sufficient? Seems like it isn't.
    $yellow = yellow;
    $blue = blue;

    function orange($red, $yellow){


      #CSS would go here? or in if statements? Unsure if this looks right ..... OR WOULD I HAVE TO DO THIS AS A DIV WITH HTML??? consider
      #Like pretty sure I need a separate CSS stylesheet (or at least I will down the line) and have to integrate it somehow
    }
    function purple($red, $blue){
      #CSS would go here? or in if statements
    }
    function green($yellow, $blue){
      #CSS would go here? or in if statements
    }
    function red($red){

    }
    function yellow($yellow){

    }
    function blue($blue){

    }

    #couldn't get select to have a different name other than first option
    echo "
      <form action='' method='get'>
        <select>
          <option value='red' /> Red
          <option value='yellow' /> Yellow
          <option value='blue' /> Blue
        </select>
        <select>
          <option value='red' /> Red
          <option value='yellow' /> Yellow
          <option value='blue' /> Blue
        </select> <br>
        <input name='submitForm' type='submit' />
      </form>
    ";
    ?>
  </body>
</html>
