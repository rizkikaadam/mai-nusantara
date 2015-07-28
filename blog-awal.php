<?php
$menu=$_GET['menu'];
?>
<div class="two_third first">
        <!-- ############################################## awal content di tengah ################################################## -->
    <h1 class="nospace"><?php echo strtoupper($menu); ?></h1>
    <div class="divider2"></div>
        <section class="main_slider">
          <div class="rslides_container clear">
            <ul class="rslides clear" id="rslides">
              <li><img src="images/demo/slider/1.jpg" alt=""></li>
              <li><img src="images/demo/slider/2.jpg" alt=""></li>
              <li><img src="images/demo/slider/3.jpg" alt=""></li>
            </ul>
          </div>
        </section>
        <!-- #### -->
        <article class="clear push50">
          <div class="one_half first"><img src="images/demo/1200x400.gif" alt=""></div>
          <div class="one_half">
            <h2 class="nospace">Headline Text</h2>
            <p>Integer imperdiet vestibulum leo ut tincidunt. In sagittis diam ut leo convallis vel rutrum mauris ullamcorper.</p>
            <footer><a href="#">Read More &raquo;</a></footer>
          </div>
        </article>
		<article class="clear push50">
          <div class="one_half first"><img src="images/demo/1200x400.gif" alt=""></div>
          <div class="one_half">
            <h2 class="nospace">Headline Text</h2>
            <p>Integer imperdiet vestibulum leo ut tincidunt. In sagittis diam ut leo convallis vel rutrum mauris ullamcorper.</p>
            <footer><a href="#">Read More &raquo;</a></footer>
          </div>
        </article>
        <article class="clear">
          <div class="one_half first"><img src="images/demo/1200x400.gif" alt=""></div>
          <div class="one_half">
            <h2 class="nospace">Headline Text</h2>
            <p>Integer imperdiet vestibulum leo ut tincidunt. In sagittis diam ut leo convallis vel rutrum mauris ullamcorper.</p>
            <footer><a href="#">Read More &raquo;</a></footer>
          </div>
        </article>
		
        <!-- #### -->
        <div class="divider2"></div>
        <div class="clear">
      <!-- ################################################# awal list terbaru ############################################### -->
		  <div class="toggle-wrapper"><a href="javascript:void(0)" class="toggle-title orange"><span>Terbaru <?php echo ucwords($menu); ?></span></a>
			<div class="toggle-content" style="display:block;">
				<article class="clear push20">
					<div class="imgl"><img src="images/demo/80x80.gif" alt=""></div>
                    <h2 class="nospace"><a href="#">JUDUL</a></h2>
					<header>
                      <div class="blog-post-meta">
                        <ul>
                          <li class="blog-post-date">
                            <time datetime="2000-04-06T08:15+00:00"><strong>Completed:</strong> 6<sup>th</sup> April 2000</time>
                          </li>
                          <li class="blog-post-cats"><a href="#">Category 1</a>, <a href="#">Category 2</a></li>
                        </ul>
                      </div>
                    </header>
					<p>Deskripsi singkat ... <a href="#">Read More &raquo;</a></p>
				</article>
                <div class="divider2"></div>
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
			</div>
		  </div>
      <!-- ######################################################### akhir list terbaru ####################################### -->
		</div>
        <!-- #### -->
        <div class="clear"></div>
        <!-- ############################################akhir content di tengah#################################################### -->
</div>