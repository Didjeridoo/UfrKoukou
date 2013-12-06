<div class="container">
    <div class="col-lg-12">
        <?= form_open('user/register', array('class' => 'form')) ?>
            <div class="form-group">
                <label for="username">Email address</label>
                <input type="text" name="username" class="form-control" id="username" placeholder="Nom d'utilisateur">
                <?= form_error('username') ?>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                <?= form_error('email') ?>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Mot de passe">
                <?= form_error('password') ?>
            </div>
            <div class="form-group">
                <label for="password_confirm">Confirmation du mot de passe</label>
                <input type="password" name="password_confirm" class="form-control" id="password_confirm" placeholder="Confirmation du mot de passe">
                <?= form_error('password_confirm') ?>
            </div>
            <input type="submit" value="Envoyer">
        </form>
    </div>
    <?php if ($this->auth->loggedin()): ?>
        <a href="<?= site_url("user/logout"); ?>">Déconnexion</a>
    <?php else: ?>
        <div class="col-lg-12">
            <?= form_open('user/login', array('class' => 'form')) ?>
            <div class="form-group">
                <label for="username">Email address</label>
                <input type="text" name="username" class="form-control" id="username" placeholder="Nom d'utilisateur">
                <?= form_error('username') ?>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Mot de passe">
                <?= form_error('password') ?>
            </div>
            <input type="submit" value="Envoyer">
            </form>
        </div>
    <?php endif; ?>
</div>