<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Přidat boxera</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    
    <link rel="stylesheet" href="/public/css/styles.css">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Seznam</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Přepnout navigaci">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="../../views/records/boxrec_create.php">Přidat boxera</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../controllers/boxrec_list.php">Výpis boxerů</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                        <h2>Přidat nového boxera</h2>
                    </div>
                    <div class="card-body">
                        <form action="../../controllers/BoxRecController.php" method="post" enctype="multipart/form-data">
                            
                            <div class="mb-3">
                                <label for="name" class="form-label">Jméno: <span class="text-danger">*</span></label>
                                <input type="text" id="name" name="name" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="surname" class="form-label">Přijmení: <span class="text-danger">*</span></label>
                                <input type="text" id="surname" name="surname" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="birthday" class="form-label">Narození (rrrr-mm-dd): <span class="text-danger">*</span></label>
                                <input type="text" id="birthday" name="birthday" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="gender" class="form-label">Pohlaví: <span class="text-danger">*</span></label>
                                <input type="text" id="gender" name="gender" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="division" class="form-label">Váhová kategorie: <span class="text-danger">*</span></label>
                                <input type="text" id="division" name="division" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="wins" class="form-label">Počet výher: <span class="text-danger">*</span></label>
                                <input type="number" id="wins" name="wins" class="form-control" step="1" required>
                            </div>

                            <div class="mb-3">
                                <label for="losses" class="form-label">Počet proher: <span class="text-danger">*</span></label>
                                <input type="number" id="losses" name="losses" class="form-control" step="1" required>
                            </div>

                            <div class="mb-3">
                                <label for="ties" class="form-label">Počet remíz: <span class="text-danger">*</span></label>
                                <input type="number" id="ties" name="ties" class="form-control" step="1" required>
                            </div>

                            <div class="mb-3">
                                <label for="images" class="form-label">Obrázky (můžete nahrát více):</label>
                                <input type="file" id="images" name="images[]" class="form-control" multiple accept="image/*">
                            </div>

                            <button type="submit" class="btn btn-success w-100">Uložit údaje</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    

</body>
</html>