          <div class="search-area">
            <div id="sb-search" class="sb-search" role="search">
              <form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <input class="sb-search-input" placeholder="<?php echo esc_attr( _e('Search Here...','wpf-flaty') );?>" type="text" name="s" id="search">
                <input class="sb-search-submit" type="hidden" name="post_type" value="post"/>
                <span class="sb-icon-search"></span>
              </form>
			  
            </div>
          </div>