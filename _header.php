<?php include('_head.php'); ?>

    <nav class="navbar--menu navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">

        <div class="navbar-header">
          <a href="index.php" class="navbar-brand">
            <img src="img/overseas-medical-small.png" alt="Overseas Xpress">
          </a>
        </div>
        <?php $is_styleguide =false;
        if ( !$is_styleguide ) { ?>
        <?php include('_search.php'); ?>

        <ul class="navbar-nav navbar-right nav">
          <?php if(isset($is_switchtoggle) && $is_switchtoggle) {?>
            <li class="menu__switch">
              <label class="switchtoggle">
                <input type="checkbox">
                <span class="switchtoggle__label">Client</span>
                <span class="switchtoggle__handle"></span>
                <span class="switchtoggle__label">Agent</span>
              </label>
            </li>
          <?php }?>

          <!--<a class="search__detail"  data-content-source="#searchdetails1">lolo</a>-->

          <?php if(isset($is_select) && $is_select) {?>
          <li class="menu__mylinks dropdown">
            <div class=" navbar-form navbar-left" id="">
              <div id="select_header" class=" inputgroup--search  input-group">
                <select id="select_ini" name="forma" onchange=nav(this.value) class="form-control" >
                    <label class="search__icon input-group-addon" for="search__input" id="search__icon"><span class="ion-ios-search ion"></span></label>
                    <option id="ini" value="0" >All Destinations...</option>
                    <option value="1"  <?php if(isset($destination_select)&&$destination_select==1) echo "selected='selected'";?> ><a  href="index.php">Cayman Isla</a> </option>
                    <option value="2" <?php if(isset($destination_select)&&$destination_select==2) echo "selected='selected'";?>>New Orleans</option>
                  </select>
              </div>
            </div>
          </li>
          <?php }?>
          <li class="menu__myquotes dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> My Quotes <span class="ion-ios-arrow-down ion"></span></a>
            <div class="dropdownmenu--myquotes dropdown-menu">
              <h2 class="dropdown__header">Recently Viewed Itineraries</h2>
              <ul class="list-unstyled">
                <li class="media">
                  <a href="quote.php" class="media-body media-middle">
                    <span class="itinerary__person">May, Jonathan</span> <br>
                    <small class="itinerary__id"># 014881</small>
                  </a>
                  <span class="media-right media-middle text-right">
                    <a href="itinerary.php" class="itinerary__link btn-link btn">View Itinerary</a>
                  </span>
                </li>
                <li class="media">
                  <a href="quote.php" class="media-body media-middle">
                    <span class="itinerary__person">Elsworth, Barbara</span> <br>
                    <small class="itinerary__id"># 014881</small>
                  </a>
                  <span class="media-right media-middle text-right">
                    <a href="itinerary.php" class="itinerary__link btn-link btn">View Itinerary</a>
                  </span>
                </li>
              </ul>
              <div class="dropdown__buttons">
                <a href="quotes.php" class="btn-default btn-sm btn">View all Quotes</a>
                <a href="browse.php" class="btn-warning btn-sm btn">Build New Itinerary</a>
              </div>
            </div>
          </li>
          <?php if(isset($is_avatar) && $is_avatar) {?>
              <li class="menu__mylinks dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="http://placehold.it/40x40" alt="avatar" class="img-circle"></a>
                <ul class="dropdown-menu">
                  <li><a href="quotes.php">My Quotes</a></li>
                  <li><a href="account.php#profile">Profile</a></li>
                  <li><a href="account.php#commission">Commission Rates</a></li>
                  <li><a href="login.php">Log Out</a></li>
                </ul>
              </li>
            <?php } ?>
          <li class="menu__mylinks dropdown">
            <a href="index.php" class="navbar-brand">
              <img src="img/start.png" alt="Overseas Xpress">
            </a>
          </li>
        </ul>
        <?php } ?>
      </div>
    </nav>