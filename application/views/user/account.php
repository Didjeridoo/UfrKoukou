<br>
<div class="row-fluid">
    <div class="col-lg-6">
        <div class="well">
            <?= form_open('user/account', array('class' => 'form')) ?>
                <div class="form-group">
                    <label for="address">Adresse</label>
                    <input type="text" name="address" class="form-control disabled" id="address" value="<?= $userdata['address'] ?>" placeholder="Truc" disabled>
                </div>
                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="text" name="age" class="form-control disabled" id="age" value="<?= $userdata['age'] ?>" disabled>
                </div>
                <div class="form-group <?php if (form_error('firstname')) echo "has-error"; ?>">
                    <label for="firstname">Nom</label>
                    <input type="text" name="firstname" class="form-control disabled" id="firstname" value="<?= $userdata['firstname'] ?>" placeholder="Nom" disabled>
                </div>
                <div class="form-group">
                    <label for="lastname">Prénom</label>
                    <input type="text" name="lastname" class="form-control disabled" id="lastname" value="<?= $userdata['lastname'] ?>" placeholder="Prénom" disabled>
                </div>
            </form>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="well">
            <?= form_open('user/account', array('class' => 'form')) ?>
                <div class="form-group">
                    <label for="password <?php if (form_error('password')) echo "has-error"; ?>">Mot de passe</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Mot de passe">
                    <?= form_error('password') ?>
                </div>
                <div class="form-group <?php if (form_error('address')) echo "has-error"; ?>">
                    <label for="address">Adresse</label>
                    <input type="text" name="address" class="form-control" id="address" placeholder="Truc">
                    <?= form_error('address') ?>
                </div>
                <div class="form-group <?php if (form_error('age')) echo "has-error"; ?>">
                    <label for="age">Age</label>
                    <input type="text" name="age" class="form-control" id="age" placeholder="Age">
                    <?= form_error('age') ?>
                </div>
                <div class="form-group <?php if (form_error('firstname')) echo "has-error"; ?>">
                    <label for="firstname">Nom</label>
                    <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Nom">
                    <?= form_error('firstname') ?>
                </div>
                <div class="form-group <?php if (form_error('lastname')) echo "has-error"; ?>">
                    <label for="lastname">Prénom</label>
                    <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Prénom">
                    <?= form_error('lastname') ?>
                </div>
                <input class="btn btn-danger" type="submit" value="Envoyer">
            </form>
        </div>
    </div>
</div>