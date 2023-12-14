<!DOCTYPE html>
<html>
<head>
    <script>
        function checkFields() {
            var elements = document.getElementById("myForm").elements;
            var allFilled = true;

            // Проверка заполнения полей
            for (var i = 0; i < elements.length; i++) {
                if (elements[i].value.length == 0) {
                    allFilled = false;
                    break;
                }
            }

            // Включение кнопки
            document.getElementById('submitBtn').disabled = !allFilled;
        }

        function checkPasswords() {
            var allCorrect = true;

            // Проверка пароля на соответствие требованиям
            var password = document.getElementById("password").value;
            var passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;
            if (!passwordRegex.test(password)) {
                alert("Пароль должен содержать минимум восемь символов, по крайней мере одну букву, одну цифру и один специальный символ");
                allCorrect = false;
            }

            // Проверка совпадения паролей
            var passwordConfirmation = document.getElementById("password_confirmation").value;
            if (password !== passwordConfirmation) {
                alert("Пароли не совпадают");
                allCorrect = false;
            }

            return allCorrect;
        }
    </script>

    <script>
        function checkPasswords() {
            var allCorrect = true;

            // Проверка пароля на соответствие требованиям
            var password = document.getElementById("password").value;
            var passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;
            if (!passwordRegex.test(password)) {
                alert("Пароль должен содержать минимум восемь символов, по крайней мере одну букву, одну цифру и один специальный символ");
                allCorrect = false;
            }

            // Проверка совпадения паролей
            var passwordConfirmation = document.getElementById("password_confirmation").value;
            if (password !== passwordConfirmation) {
                alert("Пароли не совпадают");
                allCorrect = false;
            }

            if (allCorrect) {
                document.getElementById("myForm").submit();
            }
        }
    </script>

    <title>Регистрация</title>
</head>
<body>
    <div class="container">
        <h2>Регистрация</h2>
        <form method="POST" action="{{ route('register') }}" id="myForm" onsubmit="event.preventDefault(); return checkPasswords();">
            @csrf

            <div class="form-group">
                <label for="name">Никнейм:</label>
                <input type="text" name="name" id="name" required oninput="checkFields()">
            </div>

            <div class="form-group">
                <label for="email">Почта:</label>
                <input type="email" name="email" id="email" required oninput="checkFields()">
            </div>

            <div class="form-group">
                <label for="password">Пароль:</label>
                <input type="password" name="password" id="password" required oninput="checkFields()">
            </div>

            <div class="form-group">
                <label for="password_confirmation">Повторите пароль:</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required oninput="checkFields()">
            </div>

            <input type="submit" id="submitBtn" value="Зарегистрировать" disabled>
        </form>
    </div>
</body>
</html>
