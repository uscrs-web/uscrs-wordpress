
        <div class="span4">

          <!--
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Who are we?</li>
              <li><a href="about.html">About us</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="meet.html">Meet the team</a></li>
              <li class="nav-header">What do we do?</li>
              <li><a href="#">Media</a></li>
              <li><a href="#">Vehicle</a></li>
            </ul>
          </div>

          <div class="well">
            <h6>Twitter feed</h6>
            &nbsp;
            <ul class="unstyled">
              <li><i>About 30 seconds ago.</i> @sagargp duuuuuuude</li>
              <li>&nbsp;</li>
              <li><i>2 days ago.</i> This wet test is so exciting! #LovingLife</li>
              <li>&nbsp;</li>
              <li><i>10 days ago.</i> Having a blast at the open house! #Really</li>
              <li>&nbsp;</li>
              <li><i>Beginning of time.</i> What exactly is going on? #existenceIsWeird</li> 
            </ul>
          </div> 
          -->

          <?php if (is_sidebar_active('primary_widget_area')): ?>
          <div id="primary" class="well sidebar-nav">
            <ul class="nav nav-list">
              <?php dynamic_sidebar('primary_widget_area'); ?>
            </ul>
          </div>
          <?php endif; ?>

          <?php if (is_sidebar_active('secondary_widget_area')): ?>
          <div id="secondary" class="sidebar-nav well">
            <ul class="nav nav-list">
            <?php dynamic_sidebar('secondary_widget_area'); ?>
            </ul>
          </div>
          <?php endif; ?>

        </div>
