document.addEventListener('DOMContentLoaded', function() {
    // Генерация капчи
    function generateCaptcha() {
        const num1 = Math.floor(Math.random() * 10) + 10; // двузначное число
        const num2 = Math.floor(Math.random() * 10) + 10;
        const num3 = Math.floor(Math.random() * 90) + 10;
        const result = num1 * num2 + num3;
        
        const captchaOperation = document.getElementById('captcha-operation');
        const captchaCorrect = document.getElementById('captcha_correct');
        
        if (captchaOperation && captchaCorrect) {
            captchaOperation.textContent = `${num1} × ${num2} + ${num3} = ?`;
            captchaCorrect.value = result;
        }
    }

    // Валидация логина
    function validateLogin(login) {
        const minLength = 6;
        const pattern = /^[а-яёa-z0-9]+$/i;
        const consecutiveChars = /(.)\1{2,}/;
        
        if (login.length < minLength) {
            return 'Логин должен содержать не менее 6 символов';
        }
        
        if (!pattern.test(login)) {
            return 'Логин может содержать только русские, английские буквы и цифры';
        }
        
        if (consecutiveChars.test(login)) {
            return 'Логин не может содержать 3 одинаковых символа подряд';
        }
        
        return '';
    }

    // Валидация email
    function validateEmail(email) {
        const parts = email.split('@');
        if (parts[0].length < 2) {
            return 'Имя почты должно содержать не менее 2 символов';
        }
        
        if (parts[1].endsWith('.io')) {
            return 'Использование домена .io запрещено';
        }
        
        return '';
    }

    // Валидация пароля
    function validatePassword(password) {
        const parts = password.split('-');
        if (parts.length !== 4) {
            return 'Пароль должен содержать 4 части, разделенные символом "-"';
        }
        
        if (password.length < 12) {
            return 'Пароль должен содержать не менее 12 символов';
        }
        
        for (let part of parts) {
            if (part.length === 0 || /^\d/.test(part)) {
                return 'Каждая часть пароля не может начинаться с цифры';
            }
        }
        
        return '';
    }

    // Валидация телефона
    function validatePhone(phone) {
        const pattern = /^\+375\(29\)\d{3}-\d{2}-\d{2}$/;
        if (!pattern.test(phone)) {
            return 'Неверный формат номера телефона. Используйте формат: +375(29)XXX-XX-XX';
        }
        return '';
    }

    // Обработка формы
    const form = document.querySelector('form');
    if (form) {
        generateCaptcha();

        form.addEventListener('submit', function(e) {
            let hasErrors = false;
            
            // Очистка предыдущих ошибок
            document.querySelectorAll('.error').forEach(error => error.textContent = '');
            
            // Валидация логина
            const loginError = validateLogin(form.login.value);
            if (loginError) {
                document.querySelector('#login + .error').textContent = loginError;
                hasErrors = true;
            }
            
            // Валидация email
            const emailError = validateEmail(form.email.value);
            if (emailError) {
                document.querySelector('#email + .error').textContent = emailError;
                hasErrors = true;
            }
            
            // Валидация пароля
            const passwordError = validatePassword(form.password.value);
            if (passwordError) {
                document.querySelector('#password + .error').textContent = passwordError;
                hasErrors = true;
            }
            
            // Проверка совпадения паролей
            if (form.password.value !== form.password_confirm.value) {
                document.querySelector('#password_confirm + .error').textContent = 'Пароли не совпадают';
                hasErrors = true;
            }
            
            // Валидация телефона
            const phoneError = validatePhone(form.phone.value);
            if (phoneError) {
                document.querySelector('#phone + .error').textContent = phoneError;
                hasErrors = true;
            }
            
            // Проверка капчи
            const captchaAnswer = parseInt(form.captcha_answer.value);
            const correctAnswer = parseInt(form.captcha_correct.value);
            if (captchaAnswer !== correctAnswer) {
                document.querySelector('#captcha + .error').textContent = 'Неверный ответ';
                hasErrors = true;
                generateCaptcha();
            }
            
            if (hasErrors) {
                e.preventDefault();
            }
        });
    }
});
