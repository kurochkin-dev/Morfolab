<?php
include('header.php');
?>

<section class="coop-offer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="form__auth_block_content">
                    <div class="form__auth_block">
                        <form class="form__auth_style" id="myForm" action="#" method="POST">
                            <div class="form__line">
                                <h3 class="form__title_reg">Коммерческое предложение</h3>
                                <div class="tab">
                                    <input class="reg" placeholder="Название *" name="lname" required>
                                    <input class="reg" placeholder="Юридическое название *" name="fname" required>
                                </div>
                                <div class="tab">
                                    <input class="reg reg__date" type="text" name="text" placeholder="Контактное лицо *" required>
                                    <div class="contact__block">
                                        <div class="contact__wrap_one">
                                            <input class="reg contact__field" placeholder="Номер телефона *" name="phone" required>
                                        </div>
                                        <div class="contact__wrap_two">
                                            <input class="reg contact__field" placeholder="Email" name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab">
                                    <select class="reg form__role" name="select">
                                        <option value="value1" selected>Медицинские отделения *</option>
                                        <option value="value2">Ученик</option>
                                        <option value="value3">Практикующий специалист</option>
                                    </select>
                                    <select class="reg form__role" name="select">
                                        <option value="value1" selected>Виды исследований *</option>
                                        <option value="value2">Ученик</option>
                                        <option value="value3">Практикующий специалист</option>
                                    </select>
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
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<?php
include('footer.php');
?>