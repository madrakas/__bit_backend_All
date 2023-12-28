<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Create</title>
</head>
<body>

    <?php require __DIR__ . '/parts/nav.php' ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h2>Create</h2>
                <div class="card">
                    <div class="card-body">
                        <form action="http://localhost/bit/crud/store.php" method="post">
                            <div class="mb-3">
                                <label class="form-label">Amount:</label>
                                <input id="input" type="range" class="form-range" name="amount" min="0" max="1000">
                                <p id="value"></p>

                            </div>
                            <button type="submit" class="btn btn-outline-primary">Create</button>
                        </form>                            
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
                                    const value = document.querySelector("#value");
                                const input = document.querySelector("#input");
                                value.textContent = input.value;
                                input.addEventListener("input", (event) => {
                                value.textContent = event.target.value;
                                });
</script>
</body>
</html>