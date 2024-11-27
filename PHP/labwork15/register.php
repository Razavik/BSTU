<?php
require_once 'includes/config.php';
require_once 'includes/header.php';
?>

<div class="register-form">
    <h2>Регистрация</h2>
    <form action="process_register.php" method="POST">
        <div class="form-group">
            <label for="fullname">ФИО:</label>
            <input type="text" id="fullname" name="fullname" required>
            <span class="error"></span>
        </div>

        <div class="form-group">
            <label for="login">Логин:</label>
            <input type="text" id="login" name="login" required>
            <small class="hint">Минимум 6 символов, русские или английские буквы и цифры</small>
            <span class="error"></span>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <small class="hint">Минимум 2 символа до @, домен .io запрещен</small>
            <span class="error"></span>
        </div>

        <div class="form-group">
            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" required>
            <small class="hint">Минимум 12 символов, 4 части через тире, части не начинаются с цифры</small>
            <span class="error"></span>
        </div>

        <div class="form-group">
            <label for="password_confirm">Повторить пароль:</label>
            <input type="password" id="password_confirm" name="password_confirm" required>
            <span class="error"></span>
        </div>

        <div class="form-group">
            <label for="phone">Номер телефона:</label>
            <input type="tel" id="phone" name="phone" placeholder="+375(29)XXX-XX-XX" required>
            <small class="hint">Формат: +375(29)XXX-XX-XX</small>
            <span class="error"></span>
        </div>

        <div class="form-group captcha">
            <label for="captcha">Решите пример:</label>
            <div id="captcha-operation"></div>
            <input type="number" id="captcha" name="captcha_answer" required>
            <input type="hidden" name="captcha_correct" id="captcha_correct">
            <span class="error"></span>
        </div>

        <button type="submit" class="btn">Зарегистрироваться</button>
    </form>
    <p>Уже есть аккаунт? <a href="login.php">Войти</a></p>
</div>

<?php require_once 'includes/footer.php'; ?>
