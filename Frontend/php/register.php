<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/register.css">

    <title>Regisztráció</title>
</head>

<body>

    <!-- id="modalSignin" átírva -->
    <div class="modal modal-sheet position-static d-block  p-4 py-md-5" tabindex="-1" role="dialog" id="register">
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-4 shadow">
                <div class="modal-header p-5 pb-4 border-bottom-0" style="padding-top: 43px;">
                    <h1 class="fw-bold mb-0 fs-2">
                        <span style="vertical-align: inherit;">Regisztráció</span>
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Bezárás"></button>
                </div>

                <div class="modal-body p-5 pt-0">
                    <form>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control rounded-3" id="floatingInput" placeholder="vezeteknev keresztnev">
                            <label for="floatingInput">
                                <span style="vertical-align: inherit;">Teljes név</span>
                            </label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control rounded-3" id="floatingInput" placeholder="felhasznalonev">
                            <label for="floatingInput">
                                <span style="vertical-align: inherit;">Felhasználónév</span>
                            </label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control rounded-3" id="floatingInput" placeholder="nev@example.com">
                            <label for="floatingInput">
                                <span style="vertical-align: inherit;">Email cím</span>
                            </label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Jelszo">
                            <label for="floatingPassword">
                                <span style="vertical-align: inherit;">Jelszó</span>
                            </label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Jelszo">
                            <label for="floatingPassword">
                                <span style="vertical-align: inherit;">Jelszó újra</span>
                            </label>
                        </div>
                        <button class="w-100 mb-2 btn btn-lg rounded-3 btn-danger" type="submit">
                            <span style="vertical-align: inherit;">Regisztráció</span>
                        </button>
                        <small class="text-body-secondary">
                            <span style="vertical-align: inherit;">A Regisztráció gombra kattintva elfogadja a felhasználási feltételeket.</span>
                        </small>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>