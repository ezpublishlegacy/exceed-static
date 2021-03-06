

<section class="eze-table">
    <h1>All content <button class="btn btn-primary" id="example" rel="popover" data-placement="bottom" data-content="And here's some amazing content. It's very engaging. right?" data-original-title="A Title">Create new <span class="caret"></span></button></h1>
    <section class="eze-table-actions">
        <input type="checkbox" class="check-all" />
        <div class="batch">
            <button class="btn disabled">Publish selected</button>
            <button class="btn disabled">Delete selected</button>
        </div>
        <div class="table-toggles">
            <div class="sort-by">
                <h2>Sort by</h2>
                <div class="btn-group" data-toggle="buttons-radio">
                    <button type="button" class="btn active">Date</button>
                    <button type="button" class="btn">Author</button>
                    <button type="button" class="btn">Content type</button>
                </div>
                <!-- <img class="active" src="img/24x24/Ordered list 24x24b.png" alt="" />
                <img src="img/24x24/Thumbnails 24x24.png" alt="" /> -->
            </div>
            <div class="show-content-toggle">
                <h2>Show</h2>
                <div class="btn-group" data-toggle="buttons-radio">
                    <button type="button" class="btn active">Published</button>
                    <button type="button" class="btn">My drafts</button>
                </div>
            </div>
        </div>
    </section>

    <section class="eze-filters-wrap">
        <form class="form-search">
            <div class="input-prepend">
                <span class="add-on"><i class="icon-search"></i></span><input type="text" placeholder="Type to search">
            </div>
        <div class="eze-filters">
            <p class="description">Last edit date</p><select class="chzn-select"><option>All time</option><option>Last week</option><option>Last month</option></select>
            <p class="description">Content type</p><select class="chzn-select"><option>All content types</option><option>Article</option><option>Page</option></select>
            <p class="description">With status</p><select class="chzn-select"><option>All statuses</option><option>Published</option><option>Edited</option><option>Drafts</option></select>
            <p class="description">By author</p><select class="chzn-select"><option>All authors</option><option>2</option></select>
            <!-- <p class="description">From location</p><select class="chzn-select"><option>All locations</option><option>Mobile</option><option>iPad</option><option>Web</option></select>

            <h2 style="font-size:12px;margin:10px 0 5px 0;line-height:12px">Saved searches</h2>
                <span class="label">Grillsandwich</span> <span class="label">Fårikål</span> <span class="label">MatPrat</span> -->
        </div>
        </form>
    </section>

    <section class="eze-table-content">
        <div class="loading-wrap hide"><img src="images/loader.gif" height="32px" width="32px" /></div>
        <div class="eze-inner">
        <div>
            <h2 class="group-header">Today</h2>
            <ul class="items">
            <?php foreach (range(1, 2) as $index) { ?>
                <li class="item clearfix">
                    <!-- <label class="check"><input type="checkbox"></label> -->
                    <div class="thumb">
                        <img class="class-icon" src="img/48x48/Globe alt 48x48.png" alt="" />
                    </div>
                    <h2><a href="#">Grillsandwich with chicken timian and a mix of greens and really really long stuff over here hrer heeeere.</a></h2>
                    <p>
                        <!--<span class="label label-success">Published</span> 13:30 by Trude Henrichsen, in Norwegian and English<br /> -->
                        <img src="img/16x16/Globe alt 16x16.png" alt="" /> World news article<!--, published in /presse/nyheter/flere-vil-spise-sunt/ and <span class="other-locations" title="first tooltip">3 other locations</span>-->
                    </p>
                    <div class="actions">
                        <div class="well well-small option-controller">
                            <label><input type="checkbox" /> Relate this content</label>
                        </div>
                    </div>
                </li>
            <?php } ?>
            </ul>
        </div>
        <div>
            <h2 class="group-header">Yesterday</h2>
            <ul>
            <?php foreach (range(1, 10) as $index) { ?>
                <li class="item clearfix">
                    <label class="check"><input type="checkbox"></label>
                    <div class="thumb">
                        <img src="img/thumb2.jpg" alt="">
                    </div>
                    <h2><a href="#">Grillsandwich with chicken timian and a mix of greens</a></h2>
                    <p>
                        <span class="label label-success">Published</span> 28. Mar. 2012 by Trude Henrichsen <span class="label label-info">You edited</span> 05. Oct. 2012<br />
                        <img src="img/16x16/Globe alt 16x16.png" alt="" /> World news article, published in <span class="other-locations" title="first tooltip">3 other locations</span> <a href="#">View this page</a>
                    </p>
                </li>
            <?php } ?>
            </ul>
        </div>
        <div class="loading-bar">Loading more…</div>
        </div>
    </section>





</section>




