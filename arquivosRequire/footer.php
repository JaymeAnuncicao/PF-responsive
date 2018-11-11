<footer id="footerGeral" class="page-footer font-small mdb-color blue darken-4 pt-4">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-4">
            <form class="text-center pb-5">
                <p class="h4 mb-4">Fale Conosco</p>
                <input type="text" class="z-depth-1 form-control mb-2" placeholder="Nome">
                <input type="email" class="z-depth-1 form-control mb-2" placeholder="E-mail">
                <input type="text" class="z-depth-1 form-control mb-2" placeholder="Assunto">
                <div class="form-group">
                    <textarea class="z-depth-1 form-control rounded" id="exampleFormControlTextarea2" rows="3" placeholder="Mensagem"></textarea>
                </div>
                <button class="press press-round z-depth-1 press-black d-block col-12" type="submit">Enviar</button>
            </form>
        </div>
        <div class="col-5 frame1">
          <div class="embed-responsive embed-responsive-16by9 mt-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.3035620199566!2d-38.36107408517817!3d-12.952416990868475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x71619d554ac69e9%3A0xe7ba275c3a11c5d3!2sR.+Calazans+Neto%2C+Salvador+-+BA!5e0!3m2!1sen!2sbr!4v1541856467250" width="500" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col frame2">
          <div class="embed-responsive embed-responsive-16by9 mt-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.3035620199566!2d-38.36107408517817!3d-12.952416990868475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x71619d554ac69e9%3A0xe7ba275c3a11c5d3!2sR.+Calazans+Neto%2C+Salvador+-+BA!5e0!3m2!1sen!2sbr!4v1541856467250" width="500" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="https://praxisjr.com.br" target="_blank">Desenvolvido por Praxis - Empresa Jr.</a>
    </div>
</footer>

  <?php
    
    if(isset($_POST['nome'], $_POST['email'], $_POST['mensagem'])){
      $nome = $_POST['nome'];
      $email = $_POST['email'];
      $mensagem = $_POST['mensagem'];

      $connec = db_connect();

      $query = 'INSERT INTO contato (nome, email, mensagem) VALUES (:nome, :email, :mensagem);';
      $stmt = $connec->prepare($query);
      $stmt->bindValue(':nome', $nome);
      $stmt->bindValue(':email', $email);
      $stmt->bindValue(':mensagem', $mensagem);
      $stmt->execute();
    }

  ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.13/js/mdb.min.js"></script>


  

