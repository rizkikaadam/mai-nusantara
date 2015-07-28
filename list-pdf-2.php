<?php
$menu=$_GET['menu'];
/*if ($_GET['blog']=="list-univ")
{
    $menu="List Peserta Mahasiswa Arsitektur Indonesia";
}*/
?>
<div class="two_third first">
        <!-- ############################################## awal content di tengah ################################################## -->
    <h1 class="nospace">Kumpulan <?php echo ucwords($menu); ?></h1>
    <div class="divider2"></div>
    <!-- ## KONTEN LIST ## -->
    
        <!-- ## tabel ## -->
            <section>
                        <article class="clear push20">
                            <div class="imgl"><img src="images/demo/80x80.gif" alt=""></div>
                            <h2 class="nospace"><a href="?isi=detail-pdf&menu=<?php echo"$menu";?>&id=id">JUDUL</a></h2>
                            <p>Deskripsi singkat ... <a href="?blog=detail-pdf">Read More &raquo;</a></p>
                            <div class="divider2"></div>
                        </article>
            </section>
        <!-- ## tabel ## -->
        <!-- ######################################################### awal pagination ####################################### -->
            <nav class="pagination">
                <ul>
                  <li class="prev"><a href="#">&laquo; Previous</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li class="splitter"><strong>&hellip;</strong></li>
                  <li><a href="#">6</a></li>
                  <li class="current"><strong>7</strong></li>
                  <li><a href="#">8</a></li>
                  <li class="splitter"><strong>&hellip;</strong></li>
                  <li><a href="#">14</a></li>
                  <li><a href="#">15</a></li>
                  <li class="next"><a href="#">Next &raquo;</a></li>
                </ul>
              </nav>
         <!-- ######################################################### akhir pagination ####################################### -->
                
    <!-- ## KONTEN LIST ## -->
    
    <!-- #### -->
    <div class="clear"></div>
        <!-- ############################################akhir content di tengah#################################################### -->
</div>