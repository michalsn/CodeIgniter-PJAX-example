			<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>

	      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
	        <ul class="navbar-nav mr-auto">
	          <li class="nav-item <?= $this->uri->rsegment(2) === 'index' ? 'active' : ''; ?>">
	            <a class="nav-link" href="<?= site_url('/'); ?>">Home</a>
	          </li>
	          <li class="nav-item <?= $this->uri->rsegment(2) === 'page' && $this->uri->rsegment(3) === '1' ? 'active' : ''; ?>">
	            <a class="nav-link" href="<?= site_url('welcome/page/1'); ?>">Page 1</a>
	          </li>
	          <li class="nav-item <?= $this->uri->rsegment(2) === 'page' && $this->uri->rsegment(3) === '2' ? 'active' : ''; ?>">
	            <a class="nav-link" href="<?= site_url('welcome/page/2'); ?>">Page 2</a>
	          </li>
	          <li class="nav-item <?= $this->uri->rsegment(2) === 'page' && $this->uri->rsegment(3) === '3' ? 'active' : ''; ?>">
	            <a class="nav-link" href="<?= site_url('welcome/page/3'); ?>">Page 3 (redirect to home)</a>
	          </li>
	          <li class="nav-item <?= $this->uri->rsegment(2) === 'page' && $this->uri->rsegment(3) === '4' ? 'active' : ''; ?>">
	            <a class="nav-link" href="<?= site_url('welcome/page/4'); ?>">Page 4</a>
	          </li>
	          <li class="nav-item <?= $this->uri->rsegment(2) === 'page' && $this->uri->rsegment(3) === '5' ? 'active' : ''; ?>">
	            <a class="nav-link" href="<?= site_url('welcome/page/5'); ?>">Page 5 (force reload)</a>
	          </li>
	        </ul>
	      </div>
	    </nav>