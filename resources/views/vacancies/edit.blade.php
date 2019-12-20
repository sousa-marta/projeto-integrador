<!-- Página com formulário para edição de uma vaga -->
<!-- modal para adicionar vaga -->
<div class="modal fade" id="admin-add-opportunity-modal" tabindex="-1" role="dialog" aria-labelledby="admin-add-opportunity-modal" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="admin-add-opportunity-modal">Adicionar/Editar Vaga</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </header>
      <main class="modal-body">
        <form action="/vacancies" method="post" class="row">
          @csrf
          <div class="form-group col-md-6">
            <label for="opportunityName">Nome da vaga</label>
            <input type="text" class="form-control" name="name" id="opportunityName" placeholder="Nome da vaga" required>
          </div>
          <div class="form-group col-md-6">
            <label for="opportunityState">Status da vaga</label>
            <select class="col-lg-12 form-control" name="state" id="opportunityState" required>
              <option value="" selected disabled>Selecione o status da vaga</option>
              <option value="aberta">aberta</option>
              <option value="incompleta">incompleta</option>
              <option value="fechada">fechada</option>
            </select>
          </div>
          <input type="hidden" name="state" value="aberta">
          <div class="form-group col-md-4">
            <label for="opportunityCategory">Categoria</label>
            <select class="col-lg-12 form-control" name="category" id="opportunityCategory" required>
              <option value="" selected disabled>Selecione a categoria</option>
              @foreach ($categories as $category)
              echo "<option value='{{ $category->id }}'>{{ $category->name }}</option>";
              @endforeach
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="opportunityCompany">Empresa</label>
            <select class="col-lg-12 form-control" name="company" id="opportunityCompany" required>
              <option value="" selected disabled>Selecione a empresa</option>
              @foreach ($companies as $company)
              echo "<option value='{{ $company->id }}'>{{ $company->name }}</option>";
              @endforeach
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="opportunityLocation">Cidade</label>
            <select class="col-lg-12 form-control" name="location" id="opportunityLocation" required>
              <option value="" selected disabled>Selecione o local da vaga</option>
              @foreach ($locations as $location)
              echo "<option value='{{ $location->id }}'>{{ $location->city }}</option>";
              @endforeach
            </select>
          </div>
          <div class="form-group col-12">
            <label for="opportunityDescription">Descrição</label>
            <textarea type="text" class="form-control" name="description" id="opportunityDescription" placeholder="Descrição" required></textarea>
          </div>
          <div class="form-group col-md-4">
            <label for="companyEmail">E-mail para envio de CV</label>
            <input type="email" class="form-control" name="email" id="companyEmail" placeholder="E-mail" required>
          </div>
          <div class="form-group col-md-4">
            <label for="companyPhone">Telefone</label>
            <input type="tel" class="form-control" name="phone" id="companyPhone" placeholder="11 12345-1234" pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" required>
            <small><strong>Formato:</strong> 11 12345-1234</small>
          </div>
          <div class="form-group col-md-4">
            <label for="wage">Salário</label>
            <input type="number" class="form-control" name="wage" id="wage" placeholder="Salário" required>
          </div>
      </main>
      <footer class="modal-footer modal-footer-bg-color justify-content-center">
        <button type="submit" class="btn btn-primary">Adicionar/Editar</button>
      </footer>
      </form>
    </dialog>
  </div>
</div>