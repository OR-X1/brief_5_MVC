<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


</head>
<body>

<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">


                    <div class="card">
							<div class="card-body">
								<div class="m-sm-4">

						<div class="text-center mt-4">
							<h1 class="h2">Register Now</h1>
						</div><br>


									<form action="http://localhost/www/brief%205%20MVC/page/register/register" method="post">
										<div class="mb-4">
											<label class="form-label">name</label>
											<input class="form-control form-control-lg" type="text" name="nom" placeholder="name"/>
										</div>
                                        <div class="mb-4">
											<label class="form-label">Last name</label>
											<input class="form-control form-control-lg" type="text" name="prenom" placeholder="Last name"/>
										</div>
                                        <div class="mb-4">
											<label class="form-label">Email</label>
											<input class="form-control form-control-lg" type="text" name="email" placeholder="Email"/>
										</div>
										<div class="mb-4">
											<label class="form-label">Password</label>
											<input class="form-control form-control-lg" type="password" name="pwd" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;"/>
										</div>

										<div class="form-group mb-4">
										<label class="form-label">Matiere</label>
											<select name="matiere" class="form-control">
												<option selected>-- Matiere --</option>

												<?php foreach($matieres as $m) { ?>
												<option value="<?php echo $m['id'] ?>"><?php echo $m['libelle'] ?></option>
												<?php } ?>

											</select>
										</div>
										
										<div class="col-lg-6 login-btm login-button ">
											
											<button name="submit" class="btn btn-success ">Register</button>
											<p>Already have an account? <a href="http://localhost/www/brief%205%20MVC/page/" class="text-primary ">Login</a></p>
										</div>

										<div>
											<!--  -->
										</div>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>
    
</body>
</html>