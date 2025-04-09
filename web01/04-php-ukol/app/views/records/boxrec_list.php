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
        <!--<h2>Výpis boxerů</h2>-->
        <?php if(!empty($boxrec)): ?>
            <!--<h3>Hrubý výpis</h3>-->
            <?php //var_dump($boxrec); ?>
            <!--<h3>Lepší výpis boxerů</h3>-->
            <pre><?php //print_r($boxrec); ?></pre>
            <h3>Tabulkový výpis boxerů</h3>
            <table class="table table-bordered table-hover">
                <thead class="table-primary">
                    <tr>
                        <th>Jméno</th>
                        <th>Přijmení</th>
                        <th>Datum narození</th>
                        <th>Pohlaví</th>
                        <th>Váhová kategorie</th>
                        <th>Výhry</th>
                        <th>Prohry</th>
                        <th>Remízy</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($boxrec as $record): ?>
                        <tr>
                        <td><?= htmlspecialchars($record['name'])?></td>
                        <td><?= htmlspecialchars($record['surname'])?></td>
                        <td><?= htmlspecialchars($record['birthday'])?></td>
                        <td><?= htmlspecialchars($record['gender'])?></td>
                        <td><?= htmlspecialchars($record['division'])?></td>
                        <td><?= htmlspecialchars($record['wins'])?></td>
                        <td><?= htmlspecialchars($record['losses'])?></td>
                        <td><?= htmlspecialchars($record['ties'])?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>


            </table>


        <?php else: ?>
            <div class="alert alert-info">Žádný boxer nebyl nalezen</div>
        <?php endif;?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>
</html>