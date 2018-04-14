<?php 

  $is_styleguide = true;

?>

<?php include('_head.php'); ?>

  <style>
    .well {
      position: relative;
      background: none;
      padding-bottom: 40px;
    }
      .well:after {
        content: 'Example';
        font-size: 10px;
        display: block;
        position: absolute;
        bottom: 0;
        right: 0;
        width: 100%;
        padding: 5px;
        background: #eee;
      }
  </style>

  <main class="main container-fluid">

    <!-- <div class="welcome"> -->
      <p class="welcome__p h3 text-warning">OverseasXpress</p>
      <h1 class="welcome__title">Style Guide</h1>
    <!-- </div> -->

    <div class="alert-warning alert">
      <span class="">Please read the README for important notes.</span>
    </div>

    <div class="col-sm-10 col-md-7">

      <h2>Text</h2>
        <h1>h1 Tenetur voluptatem quia accusamus, explicabo pariatur necessitatibus. Asperiores provident fuga commodi aut, excepturi unde dolore eum, quae ipsum iure nostrum maiores aliquam.</h1>
        <h2>h2 Voluptate quam aspernatur ullam illo vel deleniti rerum repellat eius accusantium dicta eligendi dolore a, perspiciatis, dolorem? Voluptatem vero rerum veniam, aut.</h2>
        <h3>h3 Illo sit, inventore voluptatem ea tempore expedita dolor molestias, aut earum quidem architecto deleniti beatae eum ab quas, iste culpa sequi vitae.</h3>
        <h4>h4 Magni provident ut nemo voluptatibus. Ipsum maxime similique voluptate numquam molestias inventore eius dicta, veritatis odit fugit id nihil, adipisci repellendus corrupti!</h4>
        <h5>h5 Pariatur laboriosam dolorum deserunt cum quae magni? Tempora architecto, deserunt voluptate unde rem quis ad cupiditate nihil animi quidem. Illum explicabo, ratione.</h5>
        <h6>h6 Culpa dolores, veniam asperiores delectus dignissimos vel rem tenetur reiciendis recusandae facilis voluptates ratione magnam maxime. Id, in nesciunt quos quia fuga.</h6>

        <p>This is a paragraph vitae quam quis, quidem maxime eum saepe neque in obcaecati explicabo, error beatae quia eaque ex? Commodi a deserunt dolores!</p>

        <p><a href="#">This is a link</a></p>

        <p class="text-muted">Muted</p>
        <p class="text-warning">Warning</p>
        <p class="text--yellow">text--yellow</p>
        <p><small>Small text Animi cumque fugit voluptates officiis laboriosam veritatis voluptate eum officia sapiente tenetur voluptatem enim ipsam, provident, quisquam obcaecati amet architecto a doloribus.</small></p>
        <p><big>Big text Enim impedit neque voluptatum, iure, pariatur consectetur! Officia dignissimos odit nam reprehenderit repudiandae voluptatibus inventore consequuntur sequi, illum vitae enim voluptatem eos?</big></p>

        <p class="text--xs--center"><code>text--xs--center</code> center-aligned in XS breakpoint</p>
        <p class="text--sm--right"><code>text--sm--right</code> center-aligned in SM &amp; up breakpoints</p>

      <hr>

      <h2>.small--upper</h2>
        <p>It was important to have a custom class for this specific text style, as it's used in a lot of headers, as well as <code>label</code> and <code>th</code>.</p>
        <div class="well">
          <h3 class="small--upper">This is a Small Uppercase Heading</h3>
          <p><label class="small--upper">It is also used in labels</label></p>
          <table class="table">
            <thead>
              <tr>
                <th>As</th>
                <th>Well</th>
                <th>As</th>
                <th>Tables</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>100</td>
                <td>200</td>
                <td>300</td>
                <td>400</td>
              </tr>
            </tbody>
          </table>
        </div>

      <hr>

      <h2>Tables</h2>
        <p>Speaking of tables</p>
        <ul>
          <li>table--middle: vertically align all cells</li>
          <li>table--outerth: use a border around tbody but not thead</li>
          <li>table--dense: small padding on all cells</li>
        </ul>

      <hr>

      <h2>Forms</h2>
        <p>This is a basic form with default Bootstrap classes:</p>
        <div class="well">
          <p>
            <label for="ex1" class="small--upper control-label">Form Label</label>
            <input id="ex1" type="text" class="form-control" placeholder="Placeholder">
          </p>
          <p>
            <select name="" id="" class="form-control">
              <option value="">Select Option</option>
            </select>
          </p>
        </div>
        <p>This is a custom form with custom classes. <code>.input--select</code> removes the browser styling of a select element and adds a dropdown triangle icon as a background image using a data SVG.</p>
        <div class="well">
          <p>
            <label for="ex2" class="small--upper control-label">Form Label</label>
            <input id="ex2" type="text" class="input--underline form-control" placeholder="Placeholder">
          </p>
          <p>
            <select name="" id="" class="input--select form-control">
              <option value="">Select Option</option>
            </select>
          </p>
        </div>
        <p>Complex form groups</p>
        <ul>
          <li>inputgroup--underline, inputgroup--select</li>
          <li>inputgroup--search</li>
          <li>inputgroup--number</li>
          <li>inputgroup--date</li>
          <li>inputgroup--vertical</li>
          <li>btngroup--separate</li>
          <li>btngroup--checkvisible</li>
          <li>switchtoggle</li>
        </ul>
        <div class="well">
          <div class="form-group">
            <p>An input group with an add-on:</p>
            <div class="inputgroup--underline input-group">
              <input id="ex3" type="text" class="form-control input--underline" placeholder="$0.00">
              <label for="ex3" class="input-group-addon">USD</label>
            </div>
          </div>
          <div class="form-group">
            <p>A switch that checks a checkbox:</p>
            <label class="switchtoggle">
              <input type="checkbox" checked>
              <span class="switchtoggle__label">On</span>
              <span class="switchtoggle__handle"></span>
              <span class="switchtoggle__label">Off</span>
            </label>
          </div>
          <div class="form-group">
            <p>A button group for sorting products:</p>
            <div class="btn-group" data-toggle="buttons">
              <label class="sorting__btn btn--underline btn-sm btn"><input type="radio" name="sort"> Price</label>
              <label class="sorting__btn btn--underline btn-sm btn active"><input type="radio" name="sort"> Rating</label>
              <label class="sorting__btn btn--underline btn-sm btn"><input type="radio" name="sort"> Hotel Name</label>
              <label class="sorting__btn btn--underline btn-sm btn"><input type="radio" name="sort"> Availability</label>
            </div>
          </div>
        </div>
        <p>3rd-party form inputs:</p>
        <ul>
          <li>Dateprangeicker</li>
          <li>Rangeslider</li>
        </ul>

      <hr>

      <h2>Buttons</h2>
        <p>Note: btn without the -sizing class is the same as MD except for padding</p>
        <p>
          <button type="button" class="btn-primary btn-lg btn">Primary LG</button>
          <button type="button" class="btn-primary btn-md btn">Primary MD</button>
          <button type="button" class="btn-primary btn-sm btn">Primary SM</button>
          <button type="button" class="btn-primary btn">Primary</button>
          <button type="button" class="btn-primary btn-xs btn">Primary XS</button>
        </p>
        <p>
          <button type="button" class="btn-warning btn-lg btn">Primary LG</button>
          <button type="button" class="btn-warning btn-md btn">Primary MD</button>
          <button type="button" class="btn-warning btn-sm btn">Primary SM</button>
          <button type="button" class="btn-warning btn">Primary</button>
          <button type="button" class="btn-warning btn-xs btn">Primary XS</button>
        </p>
        <p>
          <button type="button" class="btn-default btn-lg btn">Primary LG</button>
          <button type="button" class="btn-default btn-md btn">Primary MD</button>
          <button type="button" class="btn-default btn-sm btn">Primary SM</button>
          <button type="button" class="btn-default btn">Primary</button>
          <button type="button" class="btn-default btn-xs btn">Primary XS</button>
        </p>

        <p><code>.btn--yellow</code> A custom class specifically for this button:</p>
        <div class="well">
          <button type="button" class="sorting__refresh btn--refresh btn--yellow btn-default btn"><span class="ion-android-sync ion"></span> Refresh All Prices</button>
        </div>

      <hr>

      <h2>Material Design Icons</h2>
        <p>Note: sometimes Android icons from Ionicons are used also.</p>
        <table class="table">
          <thead>
            <tr>
              <th>keyword</th>
              <th>entity</th>
              <th>icon</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>explore</td>
              <td>e87a</td>
              <td><span class="md-explore mdicon">&#xe87a;</span></td>
            </tr>
            <tr>
              <td>hotel</td>
              <td>e53a</td>
              <td><span class="md-hotel mdicon">&#xe53a;</span></td>
            </tr>
            <tr>
              <td>directions_car</td>
              <td>e531</td>
              <td><span class="md-directions_car mdicon">&#xe531;</span></td>
            </tr>
            <tr>
              <td>swap_horiz</td>
              <td>e8d4</td>
              <td><span class="md-swap_horiz mdicon">&#xe8d4;</span></td>
            </tr>
            <tr>
              <td>remove</td>
              <td>e15d</td>
              <td><span class="md-remove_circle_outline mdicon">&#xe15d;</span></td>
            </tr>
            <tr>
              <td>add circle outline</td>
              <td>e148</td>
              <td><span class="md-add_circle_outline mdicon">&#xe148;</span></td>
            </tr>
            <tr>
              <td>edit</td>
              <td>e3c9</td>
              <td><span class="md-edit mdicon">&#xe3c9;</span></td>
            </tr>
            <tr>
              <td>delete</td>
              <td>e872</td>
              <td><span class="md-delete mdicon">&#xe872;</span></td>
            </tr>
            <tr>
              <td>content_copy</td>
              <td>e14d</td>
              <td><span class="md-content_copy mdicon">&#xe14d;</span></td>
            </tr>
            <tr>
              <td>content_copy</td>
              <td>e14d</td>
              <td><span class="md-content_copy mdicon">&#xe14d;</span></td>
            </tr>
            <tr>
              <td>place</td>
              <td>e55f</td>
              <td><span class="md-place mdicon">&#xe55f;</span></td>
            </tr>
            <tr>
              <td>error</td>
              <td>e001</td>
              <td><span class="md-error mdicon">&#xe001;</span></td>
            </tr>
            <tr>
              <td>sync</td>
              <td>e627</td>
              <td><span class="md-sync mdicon">&#xe627;</span></td>
            </tr>
            <tr>
              <td>spa</td>
              <td>eb4c</td>
              <td><span class="md-spa mdicon">&#xeb4c;</span></td>
            </tr>
            <tr>
              <td>pool</td>
              <td>eb48</td>
              <td><span class="md-pool mdicon">&#xeb48;</span></td>
            </tr>
            <tr>
              <td>fitness_center</td>
              <td>eb43</td>
              <td><span class="md-fitness_center mdicon">&#xeb43;</span></td>
            </tr>
            <tr>
              <td>wifi</td>
              <td>e63e</td>
              <td><span class="md-wifi mdicon">&#xe63e;</span></td>
            </tr>
            <tr>
              <td>beach</td>
              <td>eb3e</td>
              <td><span class="md-beach mdicon">&#xeb3e;</span></td>
            </tr>
            <tr>
              <td>access_time</td>
              <td>e192</td>
              <td><span class="md-access_time mdicon">&#xe192;</span></td>
            </tr>
          </tbody>
        </table>

      <hr>

      <h2>Nav Tabs</h2>
        <ul>
          <li>navtabs--icon</li>
          <li>navtabs--lg</li>
        </ul>

      <hr>

      <h2>Carousel</h2>
        <ul>
          <li>carousel--product</li>
          <li>carousel--nearby</li>
          <li>carousel--addnearby</li>
        </ul>

      <hr>

      <h2></h2>
      
    </div>    

  </main>

<?php include('_footer.php'); ?>