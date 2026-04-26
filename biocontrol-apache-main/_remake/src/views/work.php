<?php require_once'includes/header.php' ?>

<main class="page-contact">

<?php $bgImg= 'assets/images/home-banner-bg-xs.jpg';$title = 'teste';  $text='teste texto'; include'includes/secondary_header.php' ?>
  

    <div class="container section-top">

        <div class="site-titles mb-5 invisible" data-scrollclass="animate__animated animate__fadeInUp">
            <h2 class="title">
                Cadastre
            </h2>

            <div class="subtitle">
                seu currículo
            </div>
        </div>

        <form action="form-test.php"
            method="post"
            class="contato-form validate-alta send-validation"
            autocomplete="off"
            data-msgsending="Enviando..."
            data-msgismail="Insira um endereço de e-mail válido."
            data-required="Este campo é obrigatório."
            data-msgsuccess="Mensagem enviada com sucesso! Obrigado."
            data-msgerror="Ocorreu um erro, tente novamente mais tarde."
            data-grecaptcha="6Lf8ELAbAAAAAMbnxjhK3w8qSb73VMW3SNDSdTfl">

            <input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}"/>
            <input type="hidden" name="current_url" value="{{ URL::current() }}">

            <div class="row">
            
                <div class="col-12 col-md-6">
                    <div class="form-group mb-5">
                        <input type="text" name="nome" id="nome" class="form-control validate" required>
                        <label for="nome">Nome</label>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="form-group mb-5">
                        <input type="email" name="email" id="email" class="form-control validate" required>
                        <label for="email">E-mail</label>
                    </div>
                </div>

                <div class="col-12 col-md-5">
                    <div class="form-group mb-5">
                        <input type="text" name="phone" id="phone" class="form-control validate phoneMask" required>
                        <label for="phone">Telefone</label>
                    </div>
                </div>

                <div class="col-12 col-md-2">
                    <div class="form-group mb-5">
                        <select id="state" name="state" class="custom-select validate" required>
                            <option value="">UF</option>
                            <option value="AC">AC</option>
                            <option value="AL">AL</option>
                            <option value="AP">AP</option>
                            <option value="AM">AM</option>
                            <option value="BA">BA</option>
                            <option value="CE">CE</option>
                            <option value="DF">DF</option>
                            <option value="ES">ES</option>
                            <option value="GO">GO</option>
                            <option value="MA">MA</option>
                            <option value="MT">MT</option>
                            <option value="MS">MS</option>
                            <option value="MG">MG</option>
                            <option value="PA">PA</option>
                            <option value="PB">PB</option>
                            <option value="PR">PR</option>
                            <option value="PE">PE</option>
                            <option value="PI">PI</option>
                            <option value="RJ">RJ</option>
                            <option value="RN">RN</option>
                            <option value="RS">RS</option>
                            <option value="RO">RO</option>
                            <option value="RR">RR</option>
                            <option value="SC">SC</option>
                            <option value="SP">SP</option>
                            <option value="SE">SE</option>
                            <option value="TO">TO</option>
                        </select>
                    </div>
                </div>

                <div class="col-12 col-md-5">
                    <div class="form-group mb-5">
                        <input type="text" name="city" id="city" class="form-control validate" required>
                        <label for="city">Cidade</label>
                    </div>
                </div>

                <div class="col-12 col-md-7">
                    <div class="form-group mb-5">
                        <select id="interest" name="interest" class="custom-select validate" required>
                            <option value="">Área de interesse</option>
                            <option value="Lorem">Lorem</option>
                            <option value="Dolor sit">Dolor sit</option>
                        </select>
                    </div>
                </div>

                <div class="col-12 col-md-5">
                    <div class="form-group mb-5">
                        <div class="form-control input-file">
                            <input type="file" name="curricullum" id="curricullum" class="form-control validate" required>
                            <label for="curricullum">Anexar Currículo</label>

                            <div class="file-info"></div>

                            <div class="icon">
                                <i class="fas fa-fw fa-file-upload"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 mb-4">
                    <div class="form-group">
                        <textarea name="mensagem" id="mensagem" rows="8" class="form-control validate" required></textarea>
                        <label for="mensagem">Mensagem</label>
                    </div>
                </div>

                <div class="col-12 col-lg-10">
                    <div class="custom-control custom-radio">
                        <input type="radio" id="policy-check" name="policycheck" class="custom-control-input validate" required>

                        <label class="custom-control-label normal-label small" for="policy-check">
                            Declaro que li e concordo com os termos de
                            <a href="policy.php" target="_blank" class="text-underline">política de cookies</a>
                            e
                            <a href="policy.php" target="_blank" class="text-underline">privacidade</a>
                            deste site.<br>

                            Sendo assim, autorizo o tratamento dos meus dados com atenção ás finalidades específicas nos mencionados termos.
                        </label>
                    </div>
                </div>

                <div class="text-right col-12 col-lg-2">
                    <button type="submit" class="btn btn-secondary">
                        Enviar
                        <i class="fas fa-fw fa-angle-right"></i>
                    </button>
                </div>
            </div>

            <div class="feedback mt-3"></div>

        </form>
    </div>

</main>

<?php require_once'includes/footer.php' ?>

<script src="https://www.google.com/recaptcha/api.js"></script>
