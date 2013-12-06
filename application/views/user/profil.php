<br>
<div class="row-fluid">
    <div class="col-lg-6">
        <div class="well">
            <?= form_open('user/account', array('class' => 'form')) ?>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Mot de passe">
                <?= form_error('password') ?>
            </div>
            <div class="form-group">
                <label for="address">Adresse</label>
                <input type="text" name="address" class="form-control" id="address" placeholder="Truc">
                <?= form_error('address') ?>
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="text" name="age" class="form-control" id="age" placeholder="Age">
                <?= form_error('age') ?>
            </div>
            <div class="form-group">
                <label for="firstname">Nom</label>
                <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Nom">
                <?= form_error('firstname') ?>
            </div>
            <div class="form-group">
                <label for="lastname">Prénom</label>
                <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Prénom">
                <?= form_error('lastname') ?>
            </div>
            <input type="submit" value="Envoyer">
            </form>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="well">
            <?= form_open('user/account', array('class' => 'form')) ?>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Mot de passe">
                    <?= form_error('password') ?>
                </div>
                <div class="form-group">
                    <label for="address">Adresse</label>
                    <input type="text" name="address" class="form-control" id="address" placeholder="Truc">
                    <?= form_error('address') ?>
                </div>
                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="text" name="age" class="form-control" id="age" placeholder="Age">
                    <?= form_error('age') ?>
                </div>
                <div class="form-group">
                    <label for="firstname">Nom</label>
                    <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Nom">
                    <?= form_error('firstname') ?>
                </div>
                <div class="form-group">
                    <label for="lastname">Prénom</label>
                    <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Prénom">
                    <?= form_error('lastname') ?>
                </div>
                <input type="submit" value="Envoyer">
            </form>
        </div>
    </div>
</div>