<?php
include('header.php');
?>

    <section class="registration">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="form__auth_block_content">
                        <div class="form__auth_block">
                            <form class="form__auth_style" id="myForm" action="#" method="POST">
                                <div class="form__line">
                                    <h3 class="form__title_reg">Регистрация</h3>
                                    <div class="tab">
                                        <input class="reg" placeholder="Фамилия *" name="lname" required>
                                        <input class="reg" placeholder="Имя *" name="fname" required>
                                        <input class="reg" placeholder="Отчество (при наличии)" name="mname">
                                    </div>
                                    <div class="tab">
                                        <input class="reg reg__date" type="date" min="1920-01-01" max="2030-01-01"
                                               name="date" placeholder="Дата рождения *" required>
                                        <input class="reg" type="text" name="address" placeholder="Адрес">
                                        <select class="reg form__role" name="select">
                                            <option value="value1" selected>Пациент</option>
                                            <option value="value2">Ученик</option>
                                            <option value="value3">Практикующий специалист</option>
                                        </select>
                                    </div>
                                    <div class="tab">
                                        <input class="reg" placeholder="Email *" name="email" required>
                                        <input class="reg" placeholder="Телефон *" name="phone" required>
                                        <div class="pass__block">
                                            <div class="pass__wrap_one">
                                                <input class="reg__pass" placeholder="Пароль *" name="password"
                                                       type="password" required>
                                            </div>
                                            <div class="pass__wrap_two">
                                                <input class="reg__pass_repeat" placeholder="Повторите пароль *"
                                                       name="repeat_password" type="password" required>
                                            </div>
                                        </div>
                                        <div class="radio__wrap">
                                            <label class="custom__radio" for="radio">
                                                <input checked id="radio" class="reg__radio" type="radio">
                                                <p class="reg__radio_text">&nbsp;&nbsp;Согласен на обработку <a
                                                            class="form__reg_link" href="">персональных данных</a></p>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="btn__block" style="overflow:auto;">
                                        <div style="float:right; margin-top: 5px;">
                                            <button type="button" class="previous btn__reg">Назад</button>
                                            <button type="button" class="next btn__reg">Далее</button>
                                            <button type="button" class="submit btn__reg">Готово</button>
                                        </div>
                                    </div>
                                    <hr class="form__reg_line">
                                    <div class="step__bar">
                                        <div class="step__wrap">
                                            <span class="step__one step">01</span>
                                        </div>
                                        <div class="step__wrap">
                                            <span class="step__two step">02</span>
                                        </div>
                                        <div class="step__wrap">
                                            <span class="step__three step">03</span>
                                        </div>
                                    </div>
                                    <p class="form__reg_subtitle">Или зарегистрироваться через соцсети<br>В ДАННЫЙ МОМЕНТ
                                        ВРЕМЕННО НЕ
                                        ДОСТУПНО</p>
                                    <p class="form__reg_question">У вас уже есть аккаунт? <a class="form__reg_link"
                                                                                             href="page-login.php">Войти</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
<?php
include('footer.php');
?>