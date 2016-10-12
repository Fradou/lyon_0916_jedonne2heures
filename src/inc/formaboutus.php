

    <div class="row all_blsp">
      <div class="col-xs-offset-1 col-xs-7 col-md-offset-2 col-md-8">
        <form  method="post" action="formtreat.php">
          <div class="form-group">
            <label for="Nom et prenom">Nom et prenom</label>
            <input type="text" class="form-control" name="nomcomplet" required>
          </div>
          <div class="form-group">
            <label for="Société">Société (facultatif)</label>
            <input type="text" class="form-control" name="societe" >
          </div>
          <div class="form-group">
            <label for="Email">Votre email</label>
            <input type="email" class="form-control"  name="email" required>
          </div>
          <div class="form-group">
            <label for="Sujet">Sujet</label>
            <input type="text" class="form-control" name="sujet" required>
          </div>
          <div class="form-group">
              <label for="Message">Message</label>
              <textarea class="form-control" rows="5" id="message"></textarea>
          </div>
          <div>
          <button type="submit" class="btn btn-default">Envoyer</button>
          </div>
        </form>
      </div>
    </div>

