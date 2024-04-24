<DOCTYPE html>
<html>
<head>
<title>Рукописные текста</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h1 id="header">Рукописные текста</h1>
<div id="row">
    <div id="settings">
        <div id="settings_header">
            <h2>Настройки</h2>
        </div>
            <hr>
            <div id="settings_content">
            <textarea id="text" rows="10" cols="50"></textarea>
            <div id="filter">
                <p>Выберите шрифт: <br>
                    <select id="font">
                        <option value="Montekky">Montekky</option>
                        <option value="Eskal">Eskal</option>
                        <option value="Lorenco">Lorenco</option>
                        <option value="Abram">Abram</option>
                        <option value="Benvolio">Benvolio</option>
                    </select>
                </p>
                <p>Выберите цвет: <br>
                    <select id="color">
                        <option value="1">Синий</option>
                        <option value="2">Черный</option>
                    </select>
                </p>
                <button id="convert">Конвертировать</button>

            </div>
        </div>

        <hr id="second_part">
        <div id="inputs">
            <div id="first_inputs">
                <p>
                    Размер шрифта: <br>
                    <input id="fontSize" type="range" min="1" max="70" step="1" value="50"> <br>
                </p>
                <p>
                    Расстояние меджу словами (px): <br>
                    <input id="wordSpace" type="range" min="0" max="100" step="1" value="50"> <br>
                </p>
                <p>
                    Расстояние между строками: <br>
                    <input type="range" min="0" max="100" step="1" value="50">
                </p>
                <p>
                    Повернуть весь текст (px): <br>
                    <input type="range" min="0" max="100" step="1" value="50"> <br>
                </p>
            </div>

            <div id="second_inputs">
                <p>
                    Отступ сверху (px): <br>
                    <input type="range" min="0" max="100" step="1" value="50"> <br>
                </p>
                <p>
                    Отступ с левого края (px): <br>
                    <input type="range" min="0" max="100" step="1" value="50"> <br>
                </p>
                <p>
                    Отступ с левого края для <br> каждой четной страницы (px): <br>
                    <input type="range" min="0" max="100" step="1" value="50"> <br>
                </p>
                <p>
                    Отступ с правого края (em): <br>
                    <input type="range" min="0" max="100" step="1" value="50"> <br>
                </p>
            </div>
        </div>


    </div>

    <div id="preview">
        <div id="text_preview" style="line-height: 2.32em; padding-top: 8px; margin-left: 0px; font-family: Abram; line-height: 1em"">

        </div>
    </div>
        <button id="save">Сохранить</button>
    </div>
</div>

<script src="script.js"></script>


</body>
</html>
