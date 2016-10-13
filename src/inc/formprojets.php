

    <div class="row all_blsp">
      <div class="col-xs-offset-1 col-xs-10 col-md-offset-2 col-md-8">
        <form  method="post" action="formtreat.php">
          <div class="form-group">
            <label for="Nom et prenom">Nom et prenom</label>
            <input type="text" class="form-control" name="nomcomplet" required>
          </div>
          <div class="form-group">
            <label for="Nom du projet">Société ou Nom de votre projet :</label>
            <input type="text" class="form-control" name="nomprojet" required>
          </div>
          <div class="form-group">
            <label for="Fonction">Ma fonction :</label>
            <select name="statut" class="form-control" required>
              <option>Fondateur</option>
              <option>Porteur de projet</option>
              <option>Dirigeant</option>
              <option>Autre</option>
            </select>
          </div>
          <div class="form-group">
            <label for="Secteur d'activité">Mon secteur d'activité :</label>
            <select name="secteur" class="form-control" required>
              <option>Agroalimentaire</option>
              <option>Banque/Assurance</option>
              <option>BTP</option>
              <option>Chimie</option>
              <option>Commerce</option>
              <option>Multimédia</option>
              <option>Automobile</option>
              <option>Informatique / Télécoms</option>
              <option>Electronique</option>
              <option>Industrie pharmaceutique</option>
              <option>Métallurgie</option>
              <option>Textiles</option>
              <option>Service aux entreprises</option>
              <option>Autres...</option>
            </select>
          </div>


            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control"  name="email" required>
            </div>
            <div class="form-group">
              <label for="Ville">Ville</label>
              <input type="text" class="form-control" name="ville" required>
            </div>
            <div class="form-group">
              <label for="Pays">Pays</label>
              <select name="Pays" class="form-control" required>
                <option>France</option>
                <option>Europe</option>
                <option>Reste du monde</option>
              </select>
            </div>
            <div>
            <button type="submit" class="btn btn-default">Envoyer</button>
            </div>
        </form>
      </div>
    </div>


