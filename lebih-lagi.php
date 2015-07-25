<?php
$menu=$_GET['menu'];
?>
<div class="two_third first">
        <!-- ############################################## awal content di tengah ################################################## -->
    <h1 class="nospace"><?php echo strtoupper($menu); ?></h1>
    <div class="divider2"></div>
      <!-- ################################################# awal list terbaru ############################################### -->
		  <div class="toggle-wrapper"><a href="javascript:void(0)" class="toggle-title orange"><span>Terbaru <?php echo ucwords($menu); ?></span></a>
			<div class="toggle-content" style="display:block;">
				<article class="clear push20">
					<div class="imgl"><img src="images/demo/80x80.gif" alt=""></div>
					<h2 class="font-medium nospace"><a href="#">Headline Text</a></h2>
					<p class="nospace">Integer imperdiet vestibulum leo ut tincidunt in sagittis.</p>
				</article>
			</div>
		  </div>
      <!-- ######################################################### akhir list terbaru ####################################### -->
		</div>
        <!-- #### -->
        <div class="clear"></div>
        <!-- ############################################akhir content di tengah#################################################### -->
</div>