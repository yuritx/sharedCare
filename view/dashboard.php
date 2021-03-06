<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
      <title>SharedCare Dashboard</title>

    <!-- Bootstrap core CSS -->
	
	<link rel="stylesheet" href="../view/css/reset.css"> <!-- CSS reset -->
	
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/time.css"> 

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Shared Care</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Idosos
                </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                  Familiares
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  Agenda detalhada
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Informações Pessoais
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Relatórios</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Financeiro
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Produtivo
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Feedback de Familiares
                </a>
              
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>
          </div>

                  
		   <!-- Bootstrap core JavaScript
    ================================================== -->
    
	
	
		

	

<ul class="timeline" id="timeline">
  <li class="li complete">
    <div class="timestamp">
      <span class="author">Abhi Sharma</span>
      <span class="date">11/15/2014<span>
    </div>
    <div class="status">
      <h6> Shift Created </h6>
    </div>
  </li>
  <li class="li complete">
    <div class="timestamp">
      <span class="author">PAM Admin</span>
      <span class="date">11/15/2014<span>
    </div>
    <div class="status">
      <h6> Email Sent </h6>
    </div>
  </li>
  <li class="li complete">
    <div class="timestamp">
      <span class="author">Aaron Rodgers</span>
      <span class="date">11/15/2014<span>
    </div>
    <div class="status">
      <h6> SIC Approval </h6>
    </div>
  </li>
  <li class="li">
    <div class="timestamp">
      <span class="author">PAM Admin</span>
      <span class="date">TBD<span>
    </div>
    <div class="status">
      <h6> Shift Completed </h6>
    </div>
  </li>
 </ul>      
			
		<!-- .cd-timeline-navigation -->
	           <!-- .timeline -->

	

	
	
	

		  <h2>Idosos</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>Registro</th>
                  <th>Idade</th>
                  <th>Doença Principal</th>
                  <th>Proxima Atividade</th>
                </tr>
              </thead>
              <tbody>
                <tr>
				<?php  
					require '../model/IdosoDTO.php';
					$count = 0;
					$aux = new IdosoDTO;
					$listaIdosos = $aux -> getIdoso(1);
					while ($count < sizeof($listaIdosos)){
					
						$idoso = $listaIdosos[$count];
						$date = new DateTime($idoso-> data_nascimento_idoso);
						$atual = new DateTime( date('Y/m/d'));
						$interval = $date->diff($atual); 
						$dif = $interval->format( '%Y Anos');
						$doenca= $idoso -> doenca_principal;
						if($doenca == null){
							$doenca = "Não Informada";
						}
						
						echo"	
							<td> $idoso->nome_idoso </td>
							<td> $idoso->registro_idoso</td>
							<td> $dif</td>
							<td>$doenca</td>
							<td>sit</td>
							</tr> ";
						$count++;
						}
				?>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
 
  
  </body>
</html>
