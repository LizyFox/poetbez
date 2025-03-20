<? /** Задать вопрос */ ?>
<div class="form__question">
    <div class="modal fade" id="ask-form" tabindex="-1" aria-labelledby="form__question" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title h2 mb-0" id="form__question">Задать вопрос</p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3 needs-validation" method="POST">
                        <div class="col-12">
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="ask-form_name" placeholder="Имя*" name="first_name">
                                <div class="invalid-feedback">
                                    Введите Ваше имя
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control" id="ask-form_surname" placeholder="Фамилия" name="last_name">
                        </div>
                        <div class="col-12">
                            <div class="input-group has-validation">
                                <span class="input-group-text" id="ask_email">@</span>
                                <input type="email" class="form-control" id="ask-form_email" aria-describedby="ask_email" placeholder="mail@example.com*" name="email">
                                <div class="invalid-feedback">
                                    Введите Вашу почту для связи
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-group has-validation">
                                <textarea class="form-control" id="ask-form_question" rows="3" placeholder="Ваш вопрос*" name="question"></textarea>
                                <div class="invalid-feedback">
                                    Задайте Ваш вопрос
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <p class="necessery-check mb-2">* - обязательные поля</p>
                            <p class="privacy-check">Нажимая кнопку "Отправить", Вы соглашаетесь с <a href="/privacy/" target="_blank" class="text-decoration-underline">политикой конфиденциальности</a></p>
                        </div>
                        <div class="col-12 text-center">
                            <button class="btn" type="submit">Отправить</button>
                        </div>
                    </form>
                    <div class="form-success">
                        <p class="h2 text-center">Благодарим за обращение!</p>
                        <p class="text-center">Наши организаторы ответят в ближайшее время</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<? /** Задать вопрос */ ?>
