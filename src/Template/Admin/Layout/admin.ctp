<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Junipurr | Dashboard</title>
<?php echo $this->Html->css('bootstrap.min');?>
<?php echo $this->Html->css('/font-awesome/css/font-awesome');?>
<?php echo $this->Html->css('animate.css');?>
<?php echo $this->Html->css('style.css');?>
</head>
<body>
    <div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <?php echo $this->Html->image('profile_small.jpg',['alt'=>'image','class'=>'rounded-circle']);?>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold">David Williams</span>
                            <span class="text-muted text-xs block">Art Director <b class="caret"></b></span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                            <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                            <li><a class="dropdown-item" href="mailbox.html">Mailbox</a></li>
                            <li class="dropdown-divider"></li>
                            <li><?php echo $this->Html->link('Logout','/admin/logout',['class' => 'dropdown-item']);?></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>               
                <li>
                    <a href="layouts.html"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
                </li>
                <!--<li>
                    <a href="layouts.html"><i class="fa fa-diamond"></i> <span class="nav-label">Layouts</span></a>
                </li>-->
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Products</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="graph_flot.html">Index</a></li>
                        <li><a href="graph_morris.html">Add Product</a></li>
                    </ul>
                </li>
                <!--<li>
                    <a href="mailbox.html"><i class="fa fa-envelope"></i> <span class="nav-label">Mailbox </span><span class="label label-warning float-right">16/24</span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="mailbox.html">Inbox</a></li>
                        <li><a href="mail_detail.html">Email view</a></li>
                        <li><a href="mail_compose.html">Compose email</a></li>
                        <li><a href="email_template.html">Email templates</a></li>
                    </ul>
                </li>
                <li>
                    <a href="metrics.html"><i class="fa fa-pie-chart"></i> <span class="nav-label">Metrics</span>  </a>
                </li>
                <li>
                    <a href="widgets.html"><i class="fa fa-flask"></i> <span class="nav-label">Widgets</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Forms</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="form_basic.html">Basic form</a></li>
                        <li><a href="form_advanced.html">Advanced Plugins</a></li>
                        <li><a href="form_wizard.html">Wizard</a></li>
                        <li><a href="form_file_upload.html">File Upload</a></li>
                        <li><a href="form_editors.html">Text Editor</a></li>
                        <li><a href="form_autocomplete.html">Autocomplete</a></li>
                        <li><a href="form_markdown.html">Markdown</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-desktop"></i> <span class="nav-label">App Views</span>  <span class="float-right label label-primary">SPECIAL</span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="profile.html">Profile</a></li>
                        <li><a href="profile_2.html">Profile v.2</a></li>
                        <li><a href="contacts_2.html">Contacts v.2</a></li>
                        <li><a href="projects.html">Projects</a></li>
                        <li><a href="project_detail.html">Project detail</a></li>
                        <li><a href="activity_stream.html">Activity stream</a></li>
                        <li><a href="teams_board.html">Teams board</a></li>
                        <li><a href="social_feed.html">Social feed</a></li>
                        <li><a href="clients.html">Clients</a></li>
                        <li><a href="full_height.html">Outlook view</a></li>
                        <li><a href="vote_list.html">Vote list</a></li>
                        <li><a href="file_manager.html">File manager</a></li>
                        <li><a href="calendar.html">Calendar</a></li>
                        <li><a href="issue_tracker.html">Issue tracker</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="article.html">Article</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="timeline.html">Timeline</a></li>
                        <li><a href="pin_board.html">Pin board</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Other Pages</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="search_results.html">Search results</a></li>
                        <li><a href="lockscreen.html">Lockscreen</a></li>
                        <li><a href="invoice.html">Invoice</a></li>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="login_two_columns.html">Login v.2</a></li>
                        <li><a href="forgot_password.html">Forget password</a></li>
                        <li><a href="register.html">Register</a></li>
                        <li><a href="404.html">404 Page</a></li>
                        <li><a href="500.html">500 Page</a></li>
                        <li><a href="empty_page.html">Empty page</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-globe"></i> <span class="nav-label">Miscellaneous</span><span class="label label-info float-right">NEW</span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="toast_notifications.html">Notification</a></li>
                        <li><a href="nestable_list.html">Nestable list</a></li>
                        <li><a href="agile_board.html">Agile board</a></li>
                        <li><a href="timeline_2.html">Timeline v.2</a></li>
                        <li><a href="diff.html">Diff</a></li>
                        <li><a href="pdf_viewer.html">PDF viewer</a></li>
                        <li><a href="i18support.html">i18 support</a></li>
                        <li><a href="sweetalert.html">Sweet alert</a></li>
                        <li><a href="idle_timer.html">Idle timer</a></li>
                        <li><a href="truncate.html">Truncate</a></li>
                        <li><a href="password_meter.html">Password meter</a></li>
                        <li><a href="spinners.html">Spinners</a></li>
                        <li><a href="spinners_usage.html">Spinners usage</a></li>
                        <li><a href="tinycon.html">Live favicon</a></li>
                        <li><a href="google_maps.html">Google maps</a></li>
                        <li><a href="datamaps.html">Datamaps</a></li>
                        <li><a href="social_buttons.html">Social buttons</a></li>
                        <li><a href="code_editor.html">Code editor</a></li>
                        <li><a href="modal_window.html">Modal window</a></li>
                        <li><a href="clipboard.html">Clipboard</a></li>
                        <li><a href="text_spinners.html">Text spinners</a></li>
                        <li><a href="forum_main.html">Forum view</a></li>
                        <li><a href="validation.html">Validation</a></li>
                        <li><a href="tree_view.html">Tree view</a></li>
                        <li><a href="loading_buttons.html">Loading buttons</a></li>
                        <li><a href="chat_view.html">Chat view</a></li>
                        <li><a href="masonry.html">Masonry</a></li>
                        <li><a href="tour.html">Tour</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-flask"></i> <span class="nav-label">UI Elements</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="icons.html">Icons</a></li>
                        <li><a href="draggable_panels.html">Draggable Panels</a></li> <li><a href="resizeable_panels.html">Resizeable Panels</a></li>
                        <li><a href="buttons.html">Buttons</a></li>
                        <li><a href="video.html">Video</a></li>
                        <li><a href="tabs_panels.html">Panels</a></li>
                        <li><a href="tabs.html">Tabs</a></li>
                        <li><a href="notifications.html">Notifications & Tooltips</a></li>
                        <li><a href="helper_classes.html">Helper css classes</a></li>
                        <li><a href="badges_labels.html">Badges, Labels, Progress</a></li>
                    </ul>
                </li>

                <li>
                    <a href="grid_options.html"><i class="fa fa-laptop"></i> <span class="nav-label">Grid options</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-table"></i> <span class="nav-label">Tables</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="table_basic.html">Static Tables</a></li>
                        <li><a href="table_data_tables.html">Data Tables</a></li>
                        <li><a href="table_foo_table.html">Foo Tables</a></li>

                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-shopping-cart"></i> <span class="nav-label">E-commerce</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="ecommerce_products_grid.html">Products grid</a></li>
                        <li><a href="ecommerce_product_list.html">Products list</a></li>
                        <li><a href="ecommerce_product.html">Product edit</a></li>
                        <li><a href="ecommerce_product_detail.html">Product detail</a></li>
                        <li><a href="ecommerce-cart.html">Cart</a></li>
                        <li><a href="ecommerce-orders.html">Orders</a></li>
                        <li><a href="ecommerce_payments.html">Credit Card form</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-picture-o"></i> <span class="nav-label">Gallery</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="basic_gallery.html">Lightbox Gallery</a></li>
                        <li><a href="slick_carousel.html">Slick Carousel</a></li>
                        <li><a href="carousel.html">Bootstrap Carousel</a></li>

                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">Menu Levels </span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li>
                            <a href="#">Third Level <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>

                            </ul>
                        </li>
                        <li><a href="#">Second Level Item</a></li>
                        <li>
                            <a href="#">Second Level Item</a></li>
                        <li>
                            <a href="#">Second Level Item</a></li>
                    </ul>
                </li>
                <li>
                    <a href="css_animation.html"><i class="fa fa-magic"></i> <span class="nav-label">CSS Animations </span><span class="label label-info float-right">62</span></a>
                </li>
                <li class="landing_link">
                    <a target="_blank" href="landing.html"><i class="fa fa-star"></i> <span class="nav-label">Landing Page</span> <span class="label label-warning float-right">NEW</span></a>
                </li>
                <li class="special_link">
                    <a href="package.html"><i class="fa fa-database"></i> <span class="nav-label">Package</span></a>
                </li>-->
            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome to Junipurr Admin</span>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.html" class="dropdown-item">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="float-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <a href="profile.html" class="dropdown-item">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="float-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <a href="grid_options.html" class="dropdown-item">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="float-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notifications.html" class="dropdown-item">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>

                <li>   
                    <a href="logout">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>
            <div class="wrapper wrapper-content">
        <div class="row">
                    <div class="col-lg-3">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <div class="ibox-tools">
                                    <span class="label label-success float-right">Monthly</span>
                                </div>
                                <h5>Income</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">40 886,200</h1>
                                <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                                <small>Total income</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <div class="ibox-tools">
                                    <span class="label label-info float-right">Annual</span>
                                </div>
                                <h5>Orders</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">275,800</h1>
                                <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i></div>
                                <small>New orders</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <div class="ibox-tools">
                                    <span class="label label-primary float-right">Today</span>
                                </div>
                                <h5>visits</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">106,120</h1>
                                <div class="stat-percent font-bold text-navy">44% <i class="fa fa-level-up"></i></div>
                                <small>New visits</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <div class="ibox-tools">
                                    <span class="label label-danger float-right">Low value</span>
                                </div>
                                <h5>User activity</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">80,600</h1>
                                <div class="stat-percent font-bold text-danger">38% <i class="fa fa-level-down"></i></div>
                                <small>In first month</small>
                            </div>
                        </div>
            </div>
        </div>
        <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Orders</h5>
                                <div class="ibox-tools">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-xs btn-white active">Today</button>
                                        <button type="button" class="btn btn-xs btn-white">Monthly</button>
                                        <button type="button" class="btn btn-xs btn-white">Annual</button>
                                    </div>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <div class="row">
                                <div class="col-lg-9">
                                    <div class="flot-chart">
                                        <div class="flot-chart-content" id="flot-dashboard-chart"></div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <ul class="stat-list">
                                        <li>
                                            <h2 class="no-margins">2,346</h2>
                                            <small>Total orders in period</small>
                                            <div class="stat-percent">48% <i class="fa fa-level-up text-navy"></i></div>
                                            <div class="progress progress-mini">
                                                <div style="width: 48%;" class="progress-bar"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <h2 class="no-margins ">4,422</h2>
                                            <small>Orders in last month</small>
                                            <div class="stat-percent">60% <i class="fa fa-level-down text-navy"></i></div>
                                            <div class="progress progress-mini">
                                                <div style="width: 60%;" class="progress-bar"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <h2 class="no-margins ">9,180</h2>
                                            <small>Monthly income from orders</small>
                                            <div class="stat-percent">22% <i class="fa fa-bolt text-navy"></i></div>
                                            <div class="progress progress-mini">
                                                <div style="width: 22%;" class="progress-bar"></div>
                                            </div>
                                        </li>
                                        </ul>
                                    </div>
                                </div>
                                </div>

                            </div>
                        </div>
                    </div>


                <div class="row">
                    <div class="col-lg-4">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Messages</h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                    <a class="close-link">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content ibox-heading">
                                <h3><i class="fa fa-envelope-o"></i> New messages</h3>
                                <small><i class="fa fa-tim"></i> You have 22 new messages and 16 waiting in draft folder.</small>
                            </div>
                            <div class="ibox-content">
                                <div class="feed-activity-list">

                                    <div class="feed-element">
                                        <div>
                                            <small class="float-right text-navy">1m ago</small>
                                            <strong>Monica Smith</strong>
                                            <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</div>
                                            <small class="text-muted">Today 5:60 pm - 12.06.2014</small>
                                        </div>
                                    </div>

                                    <div class="feed-element">
                                        <div>
                                            <small class="float-right">2m ago</small>
                                            <strong>Jogn Angel</strong>
                                            <div>There are many variations of passages of Lorem Ipsum available</div>
                                            <small class="text-muted">Today 2:23 pm - 11.06.2014</small>
                                        </div>
                                    </div>

                                    <div class="feed-element">
                                        <div>
                                            <small class="float-right">5m ago</small>
                                            <strong>Jesica Ocean</strong>
                                            <div>Contrary to popular belief, Lorem Ipsum</div>
                                            <small class="text-muted">Today 1:00 pm - 08.06.2014</small>
                                        </div>
                                    </div>

                                    <div class="feed-element">
                                        <div>
                                            <small class="float-right">5m ago</small>
                                            <strong>Monica Jackson</strong>
                                            <div>The generated Lorem Ipsum is therefore </div>
                                            <small class="text-muted">Yesterday 8:48 pm - 10.06.2014</small>
                                        </div>
                                    </div>


                                    <div class="feed-element">
                                        <div>
                                            <small class="float-right">5m ago</small>
                                            <strong>Anna Legend</strong>
                                            <div>All the Lorem Ipsum generators on the Internet tend to repeat </div>
                                            <small class="text-muted">Yesterday 8:48 pm - 10.06.2014</small>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <div>
                                            <small class="float-right">5m ago</small>
                                            <strong>Damian Nowak</strong>
                                            <div>The standard chunk of Lorem Ipsum used </div>
                                            <small class="text-muted">Yesterday 8:48 pm - 10.06.2014</small>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <div>
                                            <small class="float-right">5m ago</small>
                                            <strong>Gary Smith</strong>
                                            <div>200 Latin words, combined with a handful</div>
                                            <small class="text-muted">Yesterday 8:48 pm - 10.06.2014</small>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="ibox ">
                                    <div class="ibox-title">
                                        <h5>User project list</h5>
                                        <div class="ibox-tools">
                                            <a class="collapse-link">
                                                <i class="fa fa-chevron-up"></i>
                                            </a>
                                            <a class="close-link">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ibox-content table-responsive">
                                        <table class="table table-hover no-margins">
                                            <thead>
                                            <tr>
                                                <th>Status</th>
                                                <th>Date</th>
                                                <th>User</th>
                                                <th>Value</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><small>Pending...</small></td>
                                                <td><i class="fa fa-clock-o"></i> 11:20pm</td>
                                                <td>Samantha</td>
                                                <td class="text-navy"> <i class="fa fa-level-up"></i> 24% </td>
                                            </tr>
                                            <tr>
                                                <td><span class="label label-warning">Canceled</span> </td>
                                                <td><i class="fa fa-clock-o"></i> 10:40am</td>
                                                <td>Monica</td>
                                                <td class="text-navy"> <i class="fa fa-level-up"></i> 66% </td>
                                            </tr>
                                            <tr>
                                                <td><small>Pending...</small> </td>
                                                <td><i class="fa fa-clock-o"></i> 01:30pm</td>
                                                <td>John</td>
                                                <td class="text-navy"> <i class="fa fa-level-up"></i> 54% </td>
                                            </tr>
                                            <tr>
                                                <td><small>Pending...</small> </td>
                                                <td><i class="fa fa-clock-o"></i> 02:20pm</td>
                                                <td>Agnes</td>
                                                <td class="text-navy"> <i class="fa fa-level-up"></i> 12% </td>
                                            </tr>
                                            <tr>
                                                <td><small>Pending...</small> </td>
                                                <td><i class="fa fa-clock-o"></i> 09:40pm</td>
                                                <td>Janet</td>
                                                <td class="text-navy"> <i class="fa fa-level-up"></i> 22% </td>
                                            </tr>
                                            <tr>
                                                <td><span class="label label-primary">Completed</span> </td>
                                                <td><i class="fa fa-clock-o"></i> 04:10am</td>
                                                <td>Amelia</td>
                                                <td class="text-navy"> <i class="fa fa-level-up"></i> 66% </td>
                                            </tr>
                                            <tr>
                                                <td><small>Pending...</small> </td>
                                                <td><i class="fa fa-clock-o"></i> 12:08am</td>
                                                <td>Damian</td>
                                                <td class="text-navy"> <i class="fa fa-level-up"></i> 23% </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="ibox ">
                                    <div class="ibox-title">
                                        <h5>Small todo list</h5>
                                        <div class="ibox-tools">
                                            <a class="collapse-link">
                                                <i class="fa fa-chevron-up"></i>
                                            </a>
                                            <a class="close-link">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ibox-content">
                                        <ul class="todo-list m-t small-list">
                                            <li>
                                                <a href="#" class="check-link"><i class="fa fa-check-square"></i> </a>
                                                <span class="m-l-xs todo-completed">Buy a milk</span>

                                            </li>
                                            <li>
                                                <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                                <span class="m-l-xs">Go to shop and find some products.</span>

                                            </li>
                                            <li>
                                                <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                                <span class="m-l-xs">Send documents to Mike</span>
                                                <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 mins</small>
                                            </li>
                                            <li>
                                                <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                                <span class="m-l-xs">Go to the doctor dr Smith</span>
                                            </li>
                                            <li>
                                                <a href="#" class="check-link"><i class="fa fa-check-square"></i> </a>
                                                <span class="m-l-xs todo-completed">Plan vacation</span>
                                            </li>
                                            <li>
                                                <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                                <span class="m-l-xs">Create new stuff</span>
                                            </li>
                                            <li>
                                                <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                                <span class="m-l-xs">Call to Anna for dinner</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ibox ">
                                    <div class="ibox-title">
                                        <h5>Transactions worldwide</h5>
                                        <div class="ibox-tools">
                                            <a class="collapse-link">
                                                <i class="fa fa-chevron-up"></i>
                                            </a>
                                            <a class="close-link">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ibox-content">

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <table class="table table-hover margin bottom">
                                                    <thead>
                                                    <tr>
                                                        <th style="width: 1%" class="text-center">No.</th>
                                                        <th>Transaction</th>
                                                        <th class="text-center">Date</th>
                                                        <th class="text-center">Amount</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td class="text-center">1</td>
                                                        <td> Security doors
                                                            </td>
                                                        <td class="text-center small">16 Jun 2014</td>
                                                        <td class="text-center"><span class="label label-primary">$483.00</span></td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">2</td>
                                                        <td> Wardrobes
                                                        </td>
                                                        <td class="text-center small">10 Jun 2014</td>
                                                        <td class="text-center"><span class="label label-primary">$327.00</span></td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">3</td>
                                                        <td> Set of tools
                                                        </td>
                                                        <td class="text-center small">12 Jun 2014</td>
                                                        <td class="text-center"><span class="label label-warning">$125.00</span></td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">4</td>
                                                        <td> Panoramic pictures</td>
                                                        <td class="text-center small">22 Jun 2013</td>
                                                        <td class="text-center"><span class="label label-primary">$344.00</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">5</td>
                                                        <td>Phones</td>
                                                        <td class="text-center small">24 Jun 2013</td>
                                                        <td class="text-center"><span class="label label-primary">$235.00</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">6</td>
                                                        <td>Monitors</td>
                                                        <td class="text-center small">26 Jun 2013</td>
                                                        <td class="text-center"><span class="label label-primary">$100.00</span></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-lg-6">
                                                <div id="world-map" style="height: 300px;"></div>
                                            </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                </div>
        <div class="footer">
            <div class="float-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Example Company &copy; <?php echo date("Y");?>
            </div>
        </div>
        </div>
    </div>

    <!-- Mainly scripts -->
    <?php echo $this->Html->script('jquery-3.1.1.min');?>
    <?php echo $this->Html->script('popper.min');?>
    <?php echo $this->Html->script('bootstrap');?>           
    <?php echo $this->Html->script('plugins/metisMenu/jquery.metisMenu');?>
    <?php echo $this->Html->script('plugins/slimscroll/jquery.slimscroll.min');?>
    <!-- Flot -->
    <?php echo $this->Html->script('plugins/flot/jquery.flot');?>
    <?php echo $this->Html->script('plugins/flot/jquery.flot.tooltip.min');?>
    <?php echo $this->Html->script('plugins/flot/jquery.flot.spline');?>
    <?php echo $this->Html->script('plugins/flot/jquery.flot.resize');?>
    <?php echo $this->Html->script('plugins/flot/jquery.flot.pie');?>
    <?php echo $this->Html->script('plugins/flot/jquery.flot.symbol');?>
    <?php echo $this->Html->script('plugins/flot/jquery.flot.time');?>
    <!-- Peity -->
    <?php echo $this->Html->script('plugins/peity/jquery.peity.min');?>
    <?php echo $this->Html->script('demo/peity-demo');?>
    <!-- Custom and plugin javascript -->
    <?php echo $this->Html->script('inspinia');?>
    <?php echo $this->Html->script('plugins/pace/pace.min');?>
    <!-- jQuery UI -->
    <?php echo $this->Html->script('plugins/jquery-ui/jquery-ui.min');?>
    <!-- Jvectormap -->
    <?php echo $this->Html->script('plugins/jvectormap/jquery-jvectormap-2.0.2.min');?>
    <?php echo $this->Html->script('plugins/jvectormap/jquery-jvectormap-world-mill-en');?>
    <!-- EayPIE -->
    <?php echo $this->Html->script('plugins/easypiechart/jquery.easypiechart');?>
    <!-- Sparkline -->
    <?php echo $this->Html->script('plugins/sparkline/jquery.sparkline.min');?>
    <!-- Sparkline demo data  -->
    <?php echo $this->Html->script('demo/sparkline-demo');?>
    <script>
        $(document).ready(function() {
            $('.chart').easyPieChart({
                barColor: '#f8ac59',
//                scaleColor: false,
                scaleLength: 5,
                lineWidth: 4,
                size: 80
            });

            $('.chart2').easyPieChart({
                barColor: '#1c84c6',
//                scaleColor: false,
                scaleLength: 5,
                lineWidth: 4,
                size: 80
            });

            var data2 = [
                [gd(2012, 1, 1), 7], [gd(2012, 1, 2), 6], [gd(2012, 1, 3), 4], [gd(2012, 1, 4), 8],
                [gd(2012, 1, 5), 9], [gd(2012, 1, 6), 7], [gd(2012, 1, 7), 5], [gd(2012, 1, 8), 4],
                [gd(2012, 1, 9), 7], [gd(2012, 1, 10), 8], [gd(2012, 1, 11), 9], [gd(2012, 1, 12), 6],
                [gd(2012, 1, 13), 4], [gd(2012, 1, 14), 5], [gd(2012, 1, 15), 11], [gd(2012, 1, 16), 8],
                [gd(2012, 1, 17), 8], [gd(2012, 1, 18), 11], [gd(2012, 1, 19), 11], [gd(2012, 1, 20), 6],
                [gd(2012, 1, 21), 6], [gd(2012, 1, 22), 8], [gd(2012, 1, 23), 11], [gd(2012, 1, 24), 13],
                [gd(2012, 1, 25), 7], [gd(2012, 1, 26), 9], [gd(2012, 1, 27), 9], [gd(2012, 1, 28), 8],
                [gd(2012, 1, 29), 5], [gd(2012, 1, 30), 8], [gd(2012, 1, 31), 25]
            ];

            var data3 = [
                [gd(2012, 1, 1), 800], [gd(2012, 1, 2), 500], [gd(2012, 1, 3), 600], [gd(2012, 1, 4), 700],
                [gd(2012, 1, 5), 500], [gd(2012, 1, 6), 456], [gd(2012, 1, 7), 800], [gd(2012, 1, 8), 589],
                [gd(2012, 1, 9), 467], [gd(2012, 1, 10), 876], [gd(2012, 1, 11), 689], [gd(2012, 1, 12), 700],
                [gd(2012, 1, 13), 500], [gd(2012, 1, 14), 600], [gd(2012, 1, 15), 700], [gd(2012, 1, 16), 786],
                [gd(2012, 1, 17), 345], [gd(2012, 1, 18), 888], [gd(2012, 1, 19), 888], [gd(2012, 1, 20), 888],
                [gd(2012, 1, 21), 987], [gd(2012, 1, 22), 444], [gd(2012, 1, 23), 999], [gd(2012, 1, 24), 567],
                [gd(2012, 1, 25), 786], [gd(2012, 1, 26), 666], [gd(2012, 1, 27), 888], [gd(2012, 1, 28), 900],
                [gd(2012, 1, 29), 178], [gd(2012, 1, 30), 555], [gd(2012, 1, 31), 993]
            ];

            var dataset = [
                {
                    label: "Number of orders",
                    data: data3,
                    color: "#1ab394",
                    bars: {
                        show: true,
                        align: "center",
                        barWidth: 24 * 60 * 60 * 600,
                        lineWidth:0
                    }

                }, {
                    label: "Payments",
                    data: data2,
                    yaxis: 2,
                    color: "#1C84C6",
                    lines: {
                        lineWidth:1,
                            show: true,
                            fill: true,
                        fillColor: {
                            colors: [{
                                opacity: 0.2
                            }, {
                                opacity: 0.4
                            }]
                        }
                    },
                    splines: {
                        show: false,
                        tension: 0.6,
                        lineWidth: 1,
                        fill: 0.1
                    },
                }
            ];

            var options = {
                xaxis: {
                    mode: "time",
                    tickSize: [3, "day"],
                    tickLength: 0,
                    axisLabel: "Date",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: 'Arial',
                    axisLabelPadding: 10,
                    color: "#d5d5d5"
                },
                yaxes: [{
                    position: "left",
                    max: 1070,
                    color: "#d5d5d5",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: 'Arial',
                    axisLabelPadding: 3
                }, {
                    position: "right",
                    clolor: "#d5d5d5",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: ' Arial',
                    axisLabelPadding: 67
                }
                ],
                legend: {
                    noColumns: 1,
                    labelBoxBorderColor: "#000000",
                    position: "nw"
                },
                grid: {
                    hoverable: false,
                    borderWidth: 0
                }
            };

            function gd(year, month, day) {
                return new Date(year, month - 1, day).getTime();
            }

            var previousPoint = null, previousLabel = null;

            $.plot($("#flot-dashboard-chart"), dataset, options);

            var mapData = {
                "US": 298,
                "SA": 200,
                "DE": 220,
                "FR": 540,
                "CN": 120,
                "AU": 760,
                "BR": 550,
                "IN": 200,
                "GB": 120,
            };

            $('#world-map').vectorMap({
                map: 'world_mill_en',
                backgroundColor: "transparent",
                regionStyle: {
                    initial: {
                        fill: '#e4e4e4',
                        "fill-opacity": 0.9,
                        stroke: 'none',
                        "stroke-width": 0,
                        "stroke-opacity": 0
                    }
                },

                series: {
                    regions: [{
                        values: mapData,
                        scale: ["#1ab394", "#22d6b1"],
                        normalizeFunction: 'polynomial'
                    }]
                },
            });
        });
    </script>
</body>
</html>