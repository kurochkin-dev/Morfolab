<?php
include('header.php');
?>

    <section class="authorization">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="form__auth_block_content">
                        <div class="form__auth_block">
                            <form class="form__auth_style" action="#" method="post">
                                <div class="form__line">
                                    <h3 class="form__title">Вход</h3>
                                    <input class="reg form__mail auth" type="email" name="auth_email" placeholder="Email *" required>
                                    <input class="reg form__pass auth" type="password" name="auth_pass" placeholder="Пароль *" required>
                                    <div class="btn__wrap">
                                        <button class="form__auth_btn" type="submit" name="form_auth_submit">Далее
                                        </button>
                                    </div>
                                    <hr class="form__reg_line">
                                    <p class="form__reg_subtitle">Или войти через соцсети<br>В ДАННЫЙ МОМЕНТ ВРЕМЕННО НЕ
                                        ДОСТУПНО</p>
                                    <p class="form__reg_question">Еще не зарегистрированы? <a class="form__reg_link"
                                                                                              href="page-signup.php">Зарегистрироваться</a>
                                    </p>
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