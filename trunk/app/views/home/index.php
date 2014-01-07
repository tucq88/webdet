<header>
    <h1>
        <a href="javascript:void(0)">Hello World</a>
    </h1>
    <p class="lead">
        <small>A tiny introduction</small>
    </p>
</header>
<nav class="navbar navbar-default">
    <div class="navbar-header visible-xs">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#top-menu">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        
        <a class="navbar-brand" href="#" id="current-menu"></a>
    </div>
    
    
    <div class="collapse navbar-collapse" id="top-menu">
        <ul class="nav navbar-nav nav-filter">
            <li class="active"><a href="javascript:void(0)" class="menu-item" data-filter="*">Show All</a></li>
            <li><a href="javascript:void(0)" class="menu-item" data-filter=".cate-2">Menu 2</a></li>
            <li><a href="javascript:void(0)" class="menu-item" data-filter=".cate-3">Menu 3</a></li>
            <li><a href="javascript:void(0)" class="menu-item" data-filter=".cate-4">Menu 4</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="javascript:void(0)" class="suggest-btn">Suggest Tool</a></li>
        </ul>
    </div>
</nav>
<div id="main-content">
    <div id="tool-container" class="row">
        <?php for($i = 1; $i <= 15; ++$i):?>
<!--             col-lg-3 col-md-6 col-xs-12  -->
        <div class="category-block col-lg-3 col-md-6 col-xs-12 cate-<?php echo rand(2, 4)?>">
            <div class="panel panel-default"> 
                <div class="panel-heading">Category</div>
                <div class="panel-body list-group">
                    <?php for($j = 1; $j <= rand(5, 15); ++$j):?>
                        <a href="javascript:void(0)" class="list-group-item"><img src="http://www.google.com/s2/favicons?domain=http://vnexpress.net" alt="" class="tool-favicon"/>Lorem ipsum dolor</a>
                    <?php endfor;?>
                </div>
            </div>
        </div>
        <?php endfor;?>
    </div>
    
<!--         ul.tool-pack>li*8>.panel.panel-default>.panel-heading{Heading}+.panel-body.list-group>a.list-group-item[href=#]*4>img.tool-favicon[data-src=holder.js/24x24/sky]Loremipsumdolor+{Lorem ipsum dolor} -->
    
    <div class="suggest-block well well-lg">
        <h3 class="text-center">Help us increase the list</h3>
        <p class="text-center"><a href="javascript:void(0)" class="btn btn-default suggest-btn">Suggest New Tool</a></p>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="tool-detail">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Placeat aliquam repudiandae ratione debitis praesentium voluptate 
                    quam nostrum similique ut nam quos eveniet iste voluptatibus odit 
                    adipisci eius quisquam illo sapiente.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    
    <div class="modal fade" id="suggest-tool">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="flip-container">
                    <div class="flip-panel front">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Suggest New Tool</h4>
                        </div>
                        <div class="modal-body">
                            <form action="get" id="suggest-form">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae soluta autem enim praesentium ut amet est! Nostrum aperiam quos error ipsum ducimus rerum ex quisquam assumenda dolore rem itaque ut!</p><br>
                                <div class="form-group"><input class="form-control" autofocus="autofocus" placeholder="URL"/></div>
                                <div class="form-group"><input class="form-control" placeholder="Title"/></div>
                                <div class="form-group"><textarea rows="10" cols="" class="form-control" id="suggest-description" placeholder="Description"></textarea></div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary btn-submit-suggest" >Submit</button>
                        </div>
                    </div>
                    <div class="flip-panel back">
                        <div class="modal-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quas accusantium eligendi atque itaque est velit tempore officiis aperiam vel aut sunt nulla veritatis officia blanditiis magnam soluta! Ratione corrupti.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quas accusantium eligendi atque itaque est velit tempore officiis aperiam vel aut sunt nulla veritatis officia blanditiis magnam soluta! Ratione corrupti.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quas accusantium eligendi atque itaque est velit tempore officiis aperiam vel aut sunt nulla veritatis officia blanditiis magnam soluta! Ratione corrupti.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quas accusantium eligendi atque itaque est velit tempore officiis aperiam vel aut sunt nulla veritatis officia blanditiis magnam soluta! Ratione corrupti.</p>
                            <hr>
                            <div class="text-center">
                                <a href="javascript:void(0)" class="btn btn-default btn-reset-modal" data-dismiss="modal">Close</a>
                            </div>  
                        </div>
                    </div>
                </div>
                <div style="width: 100%; height: 100%;background-color: #ccc; display: none;" id="bg-loader">
                    <div style="top: 50%; right: 50%;position: absolute;">
                        <img src="img/ajax-loader.gif" alt="ajax-loader"/>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>