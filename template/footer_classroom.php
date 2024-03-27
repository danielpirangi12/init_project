
<!--==========================================script====================================================-->


  <!------ js bootstrap CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

  <!------ jquery CDNJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>

  <!------ CARREGAR PAGINAS EM LOCAL ESPECIFICO DA CLASSROM SEM DAR REFRESH  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
      <script>
          $(".page-btn").click(function(){
            var page = $(this).data("page");
            $("#paginas").load(page);
        });
      </script>

<!------ BLOQUEAR TECLA F5 PARA PAGINA NÃO ATUALIZAR -->
  <script type="text/javascript">
    function disableF5(e) { if ((e.which || e.keyCode) == 116 || (e.which || e.keyCode) == 82) e.preventDefault(); };
      $(document).ready(function(){
          $(document).on("keydown", disableF5);
    });
  </script>

<!------ MENSAGEM AO CLICAR NO REFRESH DA PÁGINA -->
  <script type="text/javascript">
    window.onbeforeunload = function() {
        return "Tem a certeza que quer sair da pagina?";
        }
  </script>

</body>
</html>
