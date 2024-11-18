<?php require 'header.php'; ?>

<main>


<h1 class="mt-5 mx-5">Gestion de Genres :</h1>
<table class="container table table-bordered table-striped text-center mt-5 mb-5">
      <thead class="table-primary">
        <tr>
          <th class="col-2">Nom</th>
          <th class="col-2">Description</th>
          <th class="col-4">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Bla</td>
          <td>Bla Bla</td>
          
          <td>
            <button type="button" class="btn btn-warning btn-sm">Modifier</button>
            <button type="button" class="btn btn-danger btn-sm">Supprimer</button>
          </td>
        </tr>
        <tr>
          <td>Exemple</td>
          <td>Auteur 2</td>
         
          <td>
            <button type="button" class="btn btn-warning btn-sm">Modifier</button>
            <button type="button" class="btn btn-danger btn-sm">Supprimer</button>
          </td>
        </tr>
      </tbody>
    </table>

    <div class="container mt-5 col-4" >
        <div class="d-flex flex-column gap-2">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addgenreModal">Ajouter un Genre </button>
       
        </div>
  </div>


  <!-- Modal1 -->
  <div class="modal fade" id="addgenreModal" tabindex="-1" aria-labelledby="addgenreModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addBookModalLabel">Ajouter un Genre</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="bookTitle" class="form-label">Nom</label>
              <input type="text" class="form-control" id="bookTitle" placeholder="Entrez le nom du genre" required>
            </div>
            <div class="mb-3">
              <label for="bookAuthor" class="form-label">Description</label>
              <input type="text" class="form-control" id="bookAuthor" placeholder="Entrez la description du genre" required>
            </div>
            
           
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
          <button type="button" class="btn btn-primary">Ajouter</button>
        </div>
      </div>
    </div>
  </div>


</main>



<?php require 'footer.php'; ?>