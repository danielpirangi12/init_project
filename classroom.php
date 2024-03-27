<?php
  require_once("template/header_classroom.php");
  require_once("dao/UserDAO.php");
  


  $userDao = new UserDAO($conn, $BASE_URL);

  $userData = $userDao->verifyToken(true);



?>

<main  class="container-fluid">

<!-- <button class="page-btn" data-page="downloads.php">Downloads Page</button>
<button class="page-btn" data-page="profile.php">Outra Page</button>
<button class="page-btn" data-page="videos.php">Mais Uma Page</button>
<div >


</div> -->

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div id="paginas" class="jumbotron">

        testes Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta praesentium in, fuga facere pariatur quibusdam! Iure commodi ut obcaecati cum, nostrum nisi architecto nemo assumenda dignissimos quos in incidunt. Voluptatem ratione maxime beatae autem exercitationem amet ab quasi ullam ipsam? Ullam sint quia accusantium! Assumenda ipsum libero temporibus voluptates, laboriosam praesentium. Delectus officiis, atque perferendis libero corrupti similique, qui debitis quisquam quos veniam ratione eos ullam doloribus voluptates repudiandae at recusandae repellendus, consectetur nemo voluptatem repellat ea. Deserunt eveniet id tempora aperiam recusandae necessitatibus natus, rerum quisquam obcaecati voluptatem, adipisci minima ratione dolorem, corrupti eos consequatur consequuntur laboriosam ex beatae! Magni sint illum odio pariatur aliquid facere itaque nulla voluptate, atque molestias dolorem natus! Obcaecati aspernatur tenetur quas illo. Voluptas ut dicta harum temporibus placeat nostrum tempore aut sint adipisci nam corporis neque, animi earum eum voluptatem excepturi accusamus! Id accusantium voluptatibus impedit aspernatur itaque totam, magni animi esse! Consectetur dignissimos quas provident ut voluptatibus minus atque facere! Tempore sapiente illum error ipsa facere dolore necessitatibus ut eaque quam labore, numquam cupiditate minus consequuntur fugit accusamus similique eligendi dolorum, praesentium assumenda expedita dolor dicta! Nemo optio eaque ducimus, sunt in error, odio dolor excepturi illo totam consectetur fugit quasi commodi.
				
			</div>
		</div>
	</div>
</div>

</main>

<?php
  require_once("template/footer_classroom.php");
?>