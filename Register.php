<!DOCTYPE html>
<html>
<head>
	<title>PruebasWEB</title>
	<link href="css/Stilo.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amaranth" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
</head>
	<body>
		  	<form>
              <div class="info" style="margin-top: 30px;">
                  <h1>Formato de Registro de Paciente</h1>
                  <div class="contentform">
                      <div class="leftcontact">
                          <div class="form-group">
                              <p>Usuario<span>*</span></p>
                              <span class="icon-case"><i class="fa fa-male"></i></span>
                              <input type="text" name="nom" id="nom" />
                              <div class="validation"></div>
                          </div>

                          <div class="form-group">
                              <p>Nombre(s) <span>*</span></p>
                              <span class="icon-case"><i class="fa fa-user"></i></span>
                              <input type="text" name="prenom" id="prenom" data-rule="required" />
                              <div class="validation"></div>
                          </div>

                          <div class="form-group">
                              <p>Apellido(s) <span>*</span></p>
                              <span class="icon-case"><i class="fa fa-envelope-o"></i></span>
                              <input type="text" name="email" id="email" data-rule="email" />
                              <div class="validation"></div>
                          </div>

                          <div class="form-group">
                              <p>E-mail <span>*</span></p>
                              <span class="icon-case"><i class="fa fa-location-arrow"></i></span>
                              <input type="email" name="adresse" id="adresse" data-rule="required" />
                              <div class="validation"></div>
                          </div>

                          <div class="form-group">
                              <p>Direccion <span>*</span></p>
                              <span class="icon-case"><i class="fa fa-map-marker"></i></span>
                              <input type="text" name="postal" id="postal" data-rule="required" />
                              <div class="validation"></div>
                          </div>
                      </div>
                      <div class="rightcontact">
                          <div class="form-group">
                              <p>Ciudad <span>*</span></p>
                              <span class="icon-case"><i class="fa fa-building-o"></i></span>
                              <input type="text" name="ville" id="ville" data-rule="required" />
                              <div class="validation"></div>
                          </div>

                          <div class="form-group">
                              <p>Numero <span>*</span></p>
                              <span class="icon-case"><i class="fa fa-phone"></i></span>
                              <input type="text" name="phone" id="phone" data-rule="maxlen:10" />
                              <div class="validation"></div>
                          </div>

                          <div class="form-group">
                              <p>Fecha Ingreso <span>*</span></p>
                              <span class="icon-case"><i class="fa fa-info"></i></span>
                              <input type="text" name="fonction" id="fonction" data-rule="required" />
                              <div class="validation"></div>
                          </div>
                          <div class="form-group">
                              <p>Notas <span>*</span></p>
                              <span class="icon-case"><i class="fa fa-comments-o"></i></span>
                              <textarea name="message" rows="14" data-rule="required"></textarea>
                              <div class="validation"></div>
                          </div>
                      </div>
                  </div>
                  <button type="submit" class="bouton-contact">Registrar</button>

                  </form>	
	</body>
</html>
