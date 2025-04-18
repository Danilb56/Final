<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Нав -->
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Админ</a>
            <a class="nav-link" href="index.php">На сайт</a>
        </div>
    </nav>

    <!-- Уведомление -->
    <div class="container">
        <div id="alert" class="alert alert-success d-none">Заведение добавлено</div>
    </div>

    <!-- Поиск -->
    <div class="container my-3">
        <form id="search">
            <div class="input-group">
                <input type="text" id="name" class="form-control" placeholder="Название">
                <button class="btn btn-primary" type="submit">Найти</button>
            </div>
        </form>
    </div>

    <!-- Таблица -->
    <div class="container my-3">
        <button class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#modal">Добавить</button>
        <table class="table">
            <thead>
                <tr>
                    <th>Название</th>
                    <th>Тип</th>
                </tr>
            </thead>
            <tbody id="table"></tbody>
        </table>
    </div>

    <!-- Модальное окно -->
    <div class="modal fade" id="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Добавить заведение</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="form">
                        <div class="mb-2">
                            <label class="form-label">Название</label>
                            <input type="text" id="add-name" class="form-control" required>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Тип</label>
                            <input type="text" id="add-type" class="form-control" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="add()">Сохранить</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Футер -->
    <footer class="bg-light text-center py-2">
        <p>Админ © 2025</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>