<?php $this->load->view('header'); ?>

  	<div id="pjax-container">

	    <?php $this->load->view('menu'); ?>

	    <main role="main" class="container">

			<div class="starter-template">
				<h1>Page <?= $info; ?></h1>
				<p class="lead">Hello from page <?= $info; ?></p>
			</div>

	    </main><!-- /.container -->

	  </div><!-- /#pjax-container -->

<?php $this->load->view('footer'); ?>