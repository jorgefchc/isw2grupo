<div class="row">
    <div class="col-lg-12">
        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="adm_menu.php">WebSite</a>

            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                
                <ul class="nav navbar-nav navbar-right">
                    <a class="navbar-brand" href="adm_menu.php"><?php echo $_SESSION['user']; ?></a>

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="../cn/nLogout.php">
                            <i class="fa fa-power-off fa-fw"></i>
                        </a>
                    </li>
                </ul>
          </div>
        </nav>
    </div>
</div>