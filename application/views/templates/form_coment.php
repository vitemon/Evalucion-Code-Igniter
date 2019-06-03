    <div class="container">
        <div class="col s12 center">
        <h4>Contacto</h4>
        </div>
        <div class="row">
            <?php echo validation_errors(); ?>
            <?php echo form_open('pages/view'); ?>
        <div class="row">
            <div class="input-field col s6">
                <input name="first_name" id="first_name" type="text" class="validate"/>
                <label for="first_name">Nombre</label>
            </div>
            <div class="input-field col s6">
                <input name="last_name" id="last_name"  type="text" class="validate"/>
                <label for="last_name">Apellidos</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input name="email" id="email"  type="email" class="validate"/>
                <label for="email">Correo Electrónico</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <textarea name="textarea" id="textarea"  class="materialize-textarea" data-length="250"></textarea>
                <label for="textarea">Comentario</label>
            </div>
        </div>
            <div class="col s2 right">
                <button class="btn waves-effect waves-light" type="submit" name="action" value="Submit"> Submit
                <i class="material-icons right"> send </i></button> 
            </div>
            </form>
        </div>
    </div>