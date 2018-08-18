 <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">WEB2 St@re</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sobre.php">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contato.php">Contato</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="carrinho.php">Carrinho</a>
            </li>
			
			<form role="search" method="post" action="busca.php">
			<div class="search-control">
				<input type="search" id="site-search" name="busca_text"
					   placeholder="Search the site..."
					   aria-label="Search through site content">
				<button type="submit">Search</button>
			</div>
			</form>	
          </ul>
        </div>
      </div>
    </nav>