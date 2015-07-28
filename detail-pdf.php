<?php
$id=$_GET['id'];
$menu=$_GET['menu'];
?>
<div class="two_third first">
    <h1 class="nospace"> Judul <?php echo "$id"; ?></h1>
    <div class="divider2"></div>
    <article class="clear push20">
        <div class="imgl"><img src="images/demo/80x80.gif" alt=""></div>
        <h2 class="nospace"><a href="#">Info</a></h2>
    </article>
    <p>Deskripsi singkat ...</p>
    <div class="clear columncolor">
        <p class="emphasise">Priview PDF or priview image</p>
    </div>
    <?php 
        if($menu!="sejarah arsitektur")
        {
            echo"<a href='' class='button medium gradient black rnd8'><span class='icon-download-alt icon-2x'></span>&nbsp;Download</a>";
        }
    ?>    
</div>