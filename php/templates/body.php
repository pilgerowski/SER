
<body>

<div class="wrapper">
    <div class="sidebar" data-color="orange" data-image="assets/img/sidebar-6.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="./index.php" class="simple-text">
                	<img src="assets/img/logo.png" /></br>
                    <small>Sistema de Eventos de Rua</small>
                </a>
            </div>

            <ul class="nav">
<?php include("templates/menu.php");
?>            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"><?php echo $GLOBALS['itensMenu'][$GLOBALS['action']]; ?></a>
                </div>
                <div class="collapse navbar-collapse">
<!-- 
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <p>Conta</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p>Sair</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
-->                    
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card ">
                        	<?php include("./templates/actions/{$GLOBALS['action']}.php")?>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="index.php">
                                Inicial
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> EbtG Team
                </p>
            </div>
        </footer>

    </div>
</div>


