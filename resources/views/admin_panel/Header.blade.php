<nav class="navbar navbar-expand fixed-top be-top-header">
  <div class="container-fluid">
    <div class="be-navbar-header"><a class="navbar-brand" href="index.html"></a>
    </div>
    <div class="page-title"><span>Dashboard</span></div>
    <div class="be-right-navbar">
      <ul class="nav navbar-nav float-right be-user-nav">
        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button"
            aria-expanded="false"><img src="images/avatar.png" alt="Avatar"><span class="user-name">Túpac
              Amaru</span></a>
          <div class="dropdown-menu" role="menu">
            <div class="user-info">
              <div class="user-name">Túpac Amaru</div>
              <div class="user-position online">Available</div>
            </div><a class="dropdown-item" href="pages-profile.html"><span
                class="icon mdi mdi-face"></span>Account</a><a class="dropdown-item" href="#"><span
                class="icon mdi mdi-settings"></span>Settings</a><a class="dropdown-item" href="pages-login.html"><span
                class="icon mdi mdi-power"></span>Logout</a>
          </div>
        </li>
      </ul>
      <ul class="nav navbar-nav float-right be-icons-nav">
        <li class="nav-item dropdown"><a class="nav-link be-toggle-right-sidebar" href="#" role="button"
            aria-expanded="false"><span class="icon mdi mdi-settings"></span></a></li>
        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button"
            aria-expanded="false"><span class="icon mdi mdi-notifications"></span><span class="indicator"></span></a>
          <ul class="dropdown-menu be-notifications">
            <li>
              <div class="title">Notifications<span class="badge badge-pill">3</span></div>
              <div class="list">
                <div class="be-scroller-notifications">
                  <div class="content">
                    <ul>
                      <li class="notification notification-unread"><a href="#">
                          <div class="image"><img src="images/avatar2.png" alt="Avatar"></div>
                          <div class="notification-info">
                            <div class="text"><span class="user-name">Jessica Caruso</span> accepted your invitation
                              to join the team.</div><span class="date">2 min ago</span>
                          </div>
                        </a></li>
                      <li class="notification"><a href="#">
                          <div class="image"><img src="images/avatar3.png" alt="Avatar"></div>
                          <div class="notification-info">
                            <div class="text"><span class="user-name">Joel King</span> is now following you</div>
                            <span class="date">2 days ago</span>
                          </div>
                        </a></li>
                      <li class="notification"><a href="#">
                          <div class="image"><img src="images/avatar4.png" alt="Avatar"></div>
                          <div class="notification-info">
                            <div class="text"><span class="user-name">John Doe</span> is watching your main
                              repository</div><span class="date">2 days ago</span>
                          </div>
                        </a></li>
                      <li class="notification"><a href="#">
                          <div class="image"><img src="images/avatar5.png" alt="Avatar"></div>
                          <div class="notification-info"><span class="text"><span class="user-name">Emily
                                Carter</span> is now following you</span><span class="date">5 days ago</span></div>
                        </a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="footer"> <a href="#">View all notifications</a></div>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button"
            aria-expanded="false"><span class="icon mdi mdi-apps"></span></a>
          <ul class="dropdown-menu be-connections">
            <li>
              <div class="list">
                <div class="content">
                  <div class="row">
                    <div class="col"><a class="connection-item" href="#"><img src="images/github.png"
                          alt="Github"><span>GitHub</span></a></div>
                    <div class="col"><a class="connection-item" href="#"><img src="images/bitbucket.png"
                          alt="Bitbucket"><span>Bitbucket</span></a></div>
                    <div class="col"><a class="connection-item" href="#"><img src="images/slack.png"
                          alt="Slack"><span>Slack</span></a></div>
                  </div>
                  <div class="row">
                    <div class="col"><a class="connection-item" href="#"><img src="images/dribbble.png"
                          alt="Dribbble"><span>Dribbble</span></a></div>
                    <div class="col"><a class="connection-item" href="#"><img src="images/mail_chimp.png"
                          alt="Mail Chimp"><span>Mail Chimp</span></a></div>
                    <div class="col"><a class="connection-item" href="#"><img src="images/dropbox.png"
                          alt="Dropbox"><span>Dropbox</span></a></div>
                  </div>
                </div>
              </div>
              <div class="footer"> <a href="#">More</a></div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="be-left-sidebar">
  <div class="left-sidebar-wrapper"><a class="left-sidebar-toggle" href="#">Dashboard</a>
    <div class="left-sidebar-spacer">
      <div class="left-sidebar-scroll">
        <div class="left-sidebar-content">
          <ul class="sidebar-elements">
            <li class="divider">Menu</li>
            {{-- active class --}}
            <li class=""><a href="index.html"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a>
            </li>
            <li class=""><a href="/admin/category"><i class="icon mdi mdi-home"></i><span>Manage Categories</span></a>
            </li>
            <li class=""><a href="/admin/category"><i class="icon mdi mdi-home"></i><span>Manage Eatables</span></a>
            </li>
            <li class=""><a href="/admin/category"><i class="icon mdi mdi-home"></i><span>Manage Orders</span></a>
            </li>
            <li class=""><a href="/admin/category"><i class="icon mdi mdi-home"></i><span>Settings</span></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>