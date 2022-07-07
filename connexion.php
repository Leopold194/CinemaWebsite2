<?php 
session_start();
if (isset($_POST["connexion"])){
    if (!empty($_POST["username"]) AND !empty($_POST["password"])){
        $pseudo_def = "admin";
        $mdp_def = "admin1234";

        $pseudo_in_login = htmlspecialchars($_POST["username"]);
        $mdp_in_login = htmlspecialchars($_POST["password"]);

        if($pseudo_in_login == $pseudo_def AND $mdp_in_login == $mdp_def){
            $_SESSION["mdp"] = $mdp_in_login;
            header('Location: index.html');
        }else {
            echo "Nom d'utilisateur ou mot de passe incorrect";
        }
    }
    else {
        echo "Veuillez remplir les données";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tableau de Bord CinéFalaise</title>
        <meta charset='utf-8'>
        <link rel="stylesheet" type="text/css" href="css/connexion.css" />
        <link rel="icon" type="image/png" sizes="16x16" href="logo/logo_cine.webp"/>
        <meta name="google" value="notranslate" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <script src="js/nav.js" defer></script>
    </head>
    <body>
        <header>
			<nav class="menu" role="navigation">
				<div class="menu_left"><a href="index.html"><img src="logo/logo_cine.webp" alt="Logo"></a></div>
				<div class="menu_right">
					<ul>
						<li><a href="index.html">HOME</a></li>
						<li class="menu_deroulant">
							<a href="#">PROGRAMME</a>
							<ul class="sous_menu" id="programm">
								<li><a href="#" class="first">Cette Semaine</a></li>
								<li><a href="#">Semaine Suivante</a></li>
							</ul>
						</li>
						<li class="menu_deroulant"> 
							<a href="#">ANIMATIONS</a>
							<ul class="sous_menu" id="partner">
								<li><a href="anim_macao.html" class="first" id="long">En Partenariat avec MaCaO 7ème Art</a></li>
								<li><a href="#">Autre</a></li>
							</ul>
						</li>
						<li><a href="rate.html">TARIFS</a></li>
						<li><a href="animation.html">ENTRACT'ANIMATION</a></li>
						<li><a href="partners.html">PARTENAIRES</a></li>
						<li><a href="contact.html">CONTACTS</a></li>
						<li><a href="#" target="_blank" class="prog">PROGRAMME COMPLET (PDF)</a></li>
						<div class="network">
							<li><a href="https://www.facebook.com/EntractAnimation/" target="_blank"><img src="logo/facebook.webp" alt="facebook"></a></li>
							<li><a href="https://www.instagram.com/cinefalaise/" target="_blank"><img src="logo/instagram.webp" alt="instagram"></a></li>
						</div>
					</ul>
					<div class="burger">
						<span></span>
					</div>
				</div>
			</nav>
		</header>
        <section class="content">
            <div class="title1">
                <p>─────────────</p>
				<h1>CONNEXION</h1>
				<p>─────────────</p>
            </div>
            <div class="form">
                <form method="POST" action="">
                    <p>Nom d'utilisateur :</p>
                    <input type="text" name="username" autocomplete="off" class="input1">
                    <p>Mot de passe :</p>
                    <input type="password" name="password" class="input2">
                    <br>
                    <output></output>
                    <button type="submit" name="connexion" class="button1">CONNEXION</button>
                </form>
            </div>
        </section>
    </body>
</html>