

    <div class="row all_blsp">
      <div class="col-xs-offset-1 col-xs-7 col-md-offset-2 col-md-8">
        <form  method="post" action="formtreat.php">
          <div class="form-group">
            <label for="Nom et prenom">Nom et prenom</label>
            <input type="text" class="form-control" name="nomcomplet" >
          </div>
          <div class="form-group">
            <label for="Statut">Je suis</label>
            <select name="statut" class="form-control">
              <option>Etudiant</option>
              <option>Salarié</option>
              <option>Entre 2 jobs</option>
              <option>Indépendant</option>
              <option>A la retraite</option>
              <option>Anarchiste</option>
            </select>
          </div>
          <div class="form-group">
            <label for="Temps à donner">Je désire donner</label>
            <select name="tempsadonner" class="form-control">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
            </select>
          </div>
          <div class="form-group">
            <label for="email">Votre email</label>
            <input type="email" class="form-control"  name="email">
          </div>
          <div class="form-group">
            <label for="Ville">Ville</label>
            <input type="text" class="form-control" name="ville">
          </div>
          <div class="form-group">
            <label for="Pays">Pays</label>
            <select name="Pays" class="form-control">
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

