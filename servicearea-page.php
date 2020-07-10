<style>
	@import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
	p,
	h1,
	a{
		font-family: "Roboto";
		margin:0;
	}
	.service-area{
		width: 100%;
		min-height: 60vh;
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
	}
	.page-center{
		margin-bottom: 100px;
		max-width: 500px;
		width: 60%;
	}
	.login-container{
		position: relative;
		background-color: var(--gray);
		border-radius: 10px;
		min-height: 20vh;
		padding: var(--regMargin);
		width: 100%;
		z-index: 10;
	
	}
	.login-button{
		background-color: red;
		color: white;
		width: 100%;
		text-align: center;
		padding: 5px;
		padding-left: 15px;
		padding-right: 15px;
		border-radius: 4px;
		font-size: 15px;
		white-space: nowrap;
		font-weight: 700;
		margin-top: 40px;
	}
	.login-button:hover{
		color: white;
	}
	form,
	input{
		width: 100%;
	}

	.input-field:focus{
		outline: 1px solid #1A1184;
	}
	input[type=text] {
		border: 1px solid #1A1184;
		border-radius: 5px;
		height: 40px;
		font-size: 16px;
		margin-bottom: 20px;
	}
	.input-field-description{
		margin-bottom: 10px;
	
	}
	.password-reset{
		text-align: center;
	}
	.reset-link{
		color: #2AAAE2;
	}


	@media only screen and (max-width: 600px) {
		.page-center{
			margin-bottom: 100px;
			width: 90%;
		}
	}

</style>
<?php /* Template Name: servicearea-page */ ?>


<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package THERMASRL
 */
get_header();
?>

	<main id="primary" class="service-area">
		<?php
		while ( have_posts() ) :
			the_post();
		?>
			
		<div class="page-center">
        
			<form class="login-container" action="welcome.php" method="post">
					<p class="input-field-description">username</p>
					<input class="input-field"  type="text" name="username"><br>
					<p class="input-field-description">password</p>
					<input class="input-field" type="text" name="password"><br>
					<p class="password-reset">Perso la password? <a class="reset-link" href=""> Recuperala</a></p>
					<button class="login-button" type="submit">Effetua login</button>
			</form>
        
		  
		   	<p>Utilizza i tuoi dati per effettuare il login. Se non ricordi i dati per accedere puoi chiedere al tuo amministratore di condominio di resettarli.
			<a class="admin-link" href="">Accesso admin</a> </p>

		</div>


			<?php
		endwhile; // End of the loop.
		
		?>

	</main><!-- #main -->

<?php

get_footer();
