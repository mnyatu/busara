
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>Cpl</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Cpanel</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
                        
            <li>
                <a href="<?=  base_url()?>index.php/cpanel/news/"> Add News</a>
            </li>
            
            <li>
                <a href="<?=  base_url()?>index.php/cpanel/product/"> Add Products</a>
            </li>
            
            <li>
                <a href="<?=  base_url()?>index.php/cpanel/fixture/"> Add Fixtures</a>
            </li>
            
            <li>
                <a href="<?=  base_url()?>index.php/cpanel/leguetable/"> Add Legue Table</a>
            </li>
            
            <li>
                <a href="<?=  base_url()?>index.php/cpanel/player/"> Add Players</a>
            </li>
            
            <li>
                <a href="<?=  base_url()?>index.php/cpanel/legend/"> Add Legends</a>
            </li>
            
            <li>
                <a href="<?=  base_url()?>index.php/cpanel/coach/"> Add Coaches</a>
            </li>
            
            <li>
                <a href="<?=  base_url()?>index.php/cpanel/forum/"> Forum</a>
            </li>
            
            <li>
                <a href="<?=  base_url()?>index.php/cpanel/discussion/"> Discussions</a>
            </li>
            
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
       
        <!-- Main content -->
        <section class="content">
          
            <div class="row">
                <div class="col-sm-12">
                    <div class="thumbnail">
                        <h3 class="h3 text-center text-info">Add a Player</h3>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-12">
                    <div class="thumbnail">
                        
                        <form action="<?=  base_url()?>index.php/cpanel/player/" method="post" enctype="multipart/form-data">
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <input name="name" type="text" required class="form-control" placeholder="name">
                                </div>
                                
                                <div class="col-md-6">
                                    <input name="player_position" type="text" required class="form-control" placeholder="player position">
                                </div>
                            </div>
                            <p></p>
                            <div class="row">
                                
                                <div class="col-md-4">
                                    <input name="games_played" type="text" required class="form-control" placeholder="games played">
                                </div>
                                
                                <div class="col-md-4">
                                    <input name="total_goals" type="text" required class="form-control" placeholder="total goals">
                                </div>
                                
                                <div class="col-md-4">
                                    <input name="appearances" type="text" required class="form-control" placeholder="player appearances">
                                </div>
                            </div>
                            <p></p>
                            <div class="row">
                                <div class="col-md-12">
                                    <input name="player_image" type="file" required class="form-control" placeholder="player image">
                                </div>
                            </div>
                            <p></p>
                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                    <textarea name="desription" class="form-control">
                                        
                                    </textarea>
                                </div>
                            </div>
                            
                            <p></p>
                            <button type="submit" class="btn btn-info btn-block">Add To System</button>
                            <p></p>
                        </form>
                        
                    </div>
                </div>
            </div>
            
        </section><!-- /.content -->
        
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <strong>
            Copyright &copy; 2015 <a href="http://ewaks.com">Ewaks Technologies</a>.
        </strong> 
          All rights reserved.
      </footer>

    </div><!-- ./wrapper -->

