<div>
    <div class="form-label">
        <label for="surname">
            <span>Фамилия</span>
            <input type="text" id="surname" name="surname">
        </label>
    </div>
    <div class="form-label">
        <label for="name">
            <span>Имя</span>
            <input type="text" id="name" name="name">
        </label>
    </div>
</div>
<div>
    <label>Выберите время</label>
    <div class="form-check">
        <input id="time1" type="radio" name="time" value="9.00-10.00">
        <label for=time1>9.00-10.00</label>
    </div>
    <div class="form-check">
        <input id="time2" type="radio" name="time" value="10.30-11.30">
        <label for=time2>10.30-11.30</label>
    </div>
    <div class="form-check">
        <input id="time3" type="radio" name="time" value="12.00-13.00">
        <label for=time3>12.00-13.00</label>
    </div>
    <div class="form-check">
        <input id="time4" type="radio" name="time" value="14.00-15.00">
        <label for=time4>14.00-15.00</label>
    </div>
    <div class="form-check">
        <input id="time5" type="radio" name="time" value="15.30-16.30">
        <label for=time5>15.30-16.30</label>
    </div>
    <div class="form-check">
        <input id="time6" type="radio" name="time" value="17.00-18.00">
        <label for=time6>17.00-18.00</label>
    </div>
    <label>Выберите форму контроля</label>
    <div class="form-check">
        <input id="form_control_1" type="checkbox" name="control" value="тест">
        <label for="form_control_1">тест</label>
    </div>
    <div class="form-check">
        <input id="form_control_2" type="checkbox" name="control" value="собеседование">
        <label for="form_control_2">собеседование</label>
    </div>
    <div class="form-check">
        <input id="form_control_3" type="checkbox" name="control" value="доклад">
        <label for="form_control_3">доклад</label>
    </div>
    <div class="form-check">
        <input id="form_control_4" type="checkbox" name="control" value="контрольная работа">
        <label for="form_control_4">контрольная работа</label>
    </div>
    <div>
        <label for="select_lesson">Выберите нужный предмет</label>
        <select class="form-select form-select-sm" name="select_lesson" id="select_lesson">
            <option value="sub1">Алгебра</option>
            <option value="sub2">Геометрия</option>
            <option value="sub3">История</option>
            <option value="sub4">География</option>
            <option value="sub5">Физика</option>
            <option value="sub6">Химия</option>
        </select><br>
    </div>
    <label for="info">Дополнительная информация</label>
    <textarea class="mb-3" name="info" id="info" col="20" rows="10" style="width:100%;"></textarea>
    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="check()">Отправить</button>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Подтверждение</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="form_script.php" method="POST">
                    <div class="modal-body result">
                        <p>Заполните все поля.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отменить</button>
                        <button type="submit" class="btn btn-primary" name="sendFormContent" id="send">Подтвердить запись</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function check() {
            let surname = document.querySelector("#surname").value;
            let name = document.querySelector("#name").value;
            let time = '';
            let control = '';
            let inputLessons = document.querySelector("#select_lesson");
            let lesson = inputLessons.options[inputLessons.selectedIndex].text;
            let comment = document.querySelector("#info").value;
            let inputsTime = document.querySelectorAll('input[type="radio"]');
            let inputsControl = document.querySelectorAll('input[type="checkbox"]');
            inputsTime.forEach(input => {
                if (input.checked) {
                    time = input.value;
                }
            });
            inputsControl.forEach(input => {
                if (input.checked) {
                    control = input.value;
                }
            });
            console.log(typeof(comment));
            console.log(comment);
            if (surname != "" && name != "" && time != "" && control != "") {
                let markup = 'Error';
                if (comment != '') {
                    markup = `
                                    Уважаемый ${name}! <br>
                                    Ждем вас на экзамен по дисциплине "${lesson}" в ${time}. <br>
                                    Экзамен пройдет в форме "${control}". <br>
                                    Cпасибо за комментарий: ${comment} <br>  
                                    
                                        <input type="hidden" name="surname" value="${surname}">
                                        <input type="hidden" name="name" value="${name}">
                                        <input type="hidden" name="time" value="${time}">
                                        <input type="hidden" name="control" value="${control}">
                                        <input type="hidden" name="lesson" value="${lesson}">
                                        <input type="hidden" name="comment" value="${comment}">
                                     `;
                } else {
                    markup = `
                                    Уважаемый ${name}! <br>
                                    Ждем вас на экзамен по дисциплине "${lesson}" в ${time}. <br>
                                    Экзамен пройдет в форме "${control}". <br>
                                    
                                        <input type="hidden" name="surname" value="${surname}">
                                        <input type="hidden" name="name" value="${name}">
                                        <input type="hidden" name="time" value="${time}">
                                        <input type="hidden" name="control" value="${control}">
                                        <input type="hidden" name="lesson" value="${lesson}">
                                        <input type="hidden" name="comment" value="${comment}">
                                      `;
                }
                document.querySelector("#send").style.display = 'block';
                document.querySelector(".result > p").innerHTML = markup;
            } else {
                document.querySelector("#send").style.display = 'none';
            }
        }
    </script>
    <button id="toggle-btn">Показать список</button>
    <ul class="list-group my-2" id="list" style="display: none;">
    </ul>
    <script>
        const toggleBtn = document.getElementById("toggle-btn");
        const list = document.getElementById("list");
        toggleBtn.addEventListener("click", function() {
            if (toggleBtn.textContent === "Показать список") {
                list.style.display = "block";
                toggleBtn.innerHTML = "Спрятать список";
            } else {
                list.style.display = "none";
                list.textContent = "";
                toggleBtn.innerHTML = "Показать список";
            }
        });
        (function () {
            document.querySelector("#toggle-btn").addEventListener("click", event=>{
                event.preventDefault();
                if (event.target.textContent == "Спрятать список") {
                    fetch('form_ajax.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                            'credentials': 'same-origin',
                            'X-Requested-With': 'XMLHttpRequest'
                        },
                        body: `users`
                    })
                    .then(function (resp) {
                        return resp.text();
                    })
                    .then(function (data) {
                        list.insertAdjacentHTML("beforeend", "<h4>Список участников:</h4>");
                        if(data == ""){
                            list.insertAdjacentHTML("beforeend", "<p>Список участников пуст.</p>");
                        } 
                        else {
                            list.insertAdjacentHTML("beforeend", data);
                        }
                        console.log(data);
                    }) 
                }
            });
        })();
    </script>
</div>