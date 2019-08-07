<div class="container">
    <div class="row bg-light">
        <div class="col-md-6">
            <form class="form-signin">
                <div class="text-center mb-4">
                    <h1 class="h3 mb-3 font-weight-normal">Registraciona forma</h1>
                </div>
                <div class="form-label-group">
                    <input type="text" id="tbName" class="form-control" placeholder="Unesite vaše ime" required autofocus>
                    <label for="tbName">Ime</label>
                </div>
                <div class="form-label-group">
                    <input type="text" id="tbSurname" class="form-control" placeholder="Unesite vaše prezime" required autofocus>
                    <label for="tbName">Prezime</label>
                </div>
                <div class="form-label-group">
                    <input type="text" id="tbEmail" class="form-control" placeholder="Unesite e-mail adresu" required autofocus>
                    <label for="inputEmail">E-mail adresa</label>
                </div>
                <div class="form-label-group">
                    <input type="password" id="tbPasswd" class="form-control" placeholder="Unesite vašu lozinku" required>
                    <label for="inputPassword">Lozinka</label>
                </div>
                <div class="form-label-group">
                    <input type="password" id="tbRepPasswd" class="form-control" placeholder="Ponovo unesite vašu lozinku" required>
                    <label for="inputPassword">Ponovljena lozinka</label>
                </div>
                <button id="btnRegister" class="btn btn-lg btn-success btn-block" type="button">Register</button>
            </form>
        </div>
        <div class="col-md-6">
            <form class="form-signin">
                <div class="text-center mb-4">
                    <h1 class="h3 mb-3 font-weight-normal">Forma za logovanje</h1>
                </div>

                <div class="form-label-group">
                    <input type="email" id="tbEmail" class="form-control" placeholder="Unesite e-mail adresu" required autofocus>
                    <label for="inputEmail">E-mail adresa</label>
                </div>

                <div class="form-label-group">
                    <input type="password" id="tbPasswd" class="form-control" placeholder="Lozinka" required>
                    <label for="inputPassword">Lozinka</label>
                </div>
                <button id="btnLogin" class="btn btn-lg btn-primary btn-block" type="button">Login</button>
            </form>
        </div>
    </div>
</div>