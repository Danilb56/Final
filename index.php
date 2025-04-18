<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Доставка еды</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Нав -->
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Еда</a>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#menu">Меню</a></li>
                <li class="nav-item"><a class="nav-link" href="login.php">Вход</a></li>
                <li class="nav-item"><a class="nav-link" href="register.php">Регистрация</a></li>
                <li class="nav-item"><a class="nav-link" href="feedback.php">Обратная связь</a></li>
            </ul>
        </div>
    </nav>

    <!-- Уведомление -->
    <div class="container">
        <div id="alert" class="alert alert-success d-none">Заказ оформлен</div>
    </div>

    <!-- Преимущества -->
    <div class="container my-3">
        <h3 class="text-center">Почему мы?</h3>
        <div class="row">
            <div class="col-md-6"><div class="card"><div class="card-body">Быстрая доставка</div></div></div>
            <div class="col-md-6"><div class="card"><div class="card-body">Вкусная еда</div></div></div>
        </div>
    </div>

    <!-- Меню -->
    <div class="container my-3" id="menu">
        <h3 class="text-center">Меню</h3>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5>Пицца</h5>
                        <p>200₽</p>
                        <input type="number" min="0" value="0" class="form-control w-50" data-price="200">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5>Суши</h5>
                        <p>150₽</p>
                        <input type="number" min="0" value="0" class="form-control w-50" data-price="150">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5>Бургер</h5>
                        <p>120₽</p>
                        <input type="number" min="0" value="0" class="form-control w-50" data-price="120">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5>Салат</h5>
                        <p>100₽</p>
                        <input type="number" min="0" value="0" class="form-control w-50" data-price="100">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5>Суп</h5>
                        <p>80₽</p>
                        <input type="number" min="0" value="0" class="form-control w-50" data-price="80">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5>Десерт</h5>
                        <p>90₽</p>
                        <input type="number" min="0" value="0" class="form-control w-50" data-price="90">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Заведения -->
    <div class="container my-3">
        <h3 class="text-center">Заведения</h3>
        <select id="type-filter" class="form-select w-50 mb-2">
            <option value="">Тип</option>
        </select>
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

    <!-- Итог -->
    <div class="container my-3">
        <h3 class="text-center">Итог</h3>
        <p class="text-center"><span id="total">0₽</span></p>
        <button class="btn btn-primary d-block mx-auto" data-bs-toggle="modal" data-bs-target="#modal">Заказать</button>
    </div>

    <!-- Модальное окно -->
    <div class="modal fade" id="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Ваш заказ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p id="modal-items"></p>
                    <p id="modal-total"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="confirm-order">ОК</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Футер -->
    <footer class="bg-light text-center py-2">
        <p>Еда © 2025</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>