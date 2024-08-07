<div class="container-fluid ml-mr-5 borda mb-5 p-4 mt-5">
    <div class="row mr-5 ml-5">
        <div class="col-md-6">
            <div class="text-center mb-4 mt-5">
                <img src="contate.png" alt="Imagem de contato" class="img-fluid">
            </div>
        </div>
        <div class="col-md-6 mt-5">
            <div class="text-center">
                <h1 style="color:#640b64;">Entre em Contato</h1>
                <form name="formContato" method="post" onsubmit="return confirmSubmission(event)">
                    <div class="form-group">
                        <label for="nome" class="text-white mt-3 mb-3">Digite seu nome completo:</label>
                        <input type="text" class="form-control form-control-lg" name="nome" id="nome" required
                            placeholder="Nome completo">
                    </div>
                    <div class="form-group">
                        <label for="email" class="text-white mb-3 mt-3">Digite seu e-mail:</label>
                        <input type="email" class="form-control form-control-lg" name="email" id="email" required
                            placeholder="Digite um e-mail válido">
                    </div>
                    <button type="submit" class="btn btn-success bg-purple btn-lg btn-block mt-3">Enviar
                        Mensagem</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>

<script>
  function confirmSubmission(event) {
    const sucesso = ("Enviado com sucesso");
    const confirmation = confirm("Tem certeza que deseja enviar esta mensagem?");
    if (!confirmation) {
      event.preventDefault(); 
      alert("Enviado com sucesso!");
    }
    return confirmation;
  }
</script>