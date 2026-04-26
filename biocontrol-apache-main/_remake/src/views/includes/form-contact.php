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

        <?php if(strstr($_SERVER['REQUEST_URI'], 'products-details.php')): ?>
            <div class="col-12 col-md-6">
        <?php elseif(strstr($_SERVER['REQUEST_URI'], 'cultures-detail.php')): ?>
            <div class="col-12 col-md-6">
        <?php elseif(strstr($_SERVER['REQUEST_URI'], 'plague-detail.php')): ?>
            <div class="col-12 col-md-6">
        <?php else: ?>
            <div class="col-12">
        <?php endif; ?>
                <div class="form-group mb-5">
                    <input type="text" name="company" id="company" class="form-control validate" required>
                    <label for="company">Empresa</label>
                </div>
            </div>


        <?php if(strstr($_SERVER['REQUEST_URI'], 'products-details.php')): ?>
            <div class="col-12 col-md-6">
                <div class="form-group mb-5">
                    <select id="subject" name="subject" class="custom-select validate" required>
                        <option value="">Assunto</option>
                        <option>Sugestão</option>
                        <option>Elogio</option>
                        <option>Reclamação</option>
                        <option>Onde encontrar</option>
                        <option>Sugestão</option>
                        <option>Caixa de mensagens</option>
                    </select>
                </div>
            </div>
        <?php elseif(strstr($_SERVER['REQUEST_URI'], 'cultures-detail.php')): ?>
            <div class="col-12 col-md-6">
                <div class="form-group mb-5">
                    <select id="subject" name="subject" class="custom-select validate" required>
                        <option value="">Assunto</option>
                        <option>Sugestão</option>
                        <option>Elogio</option>
                        <option>Reclamação</option>
                        <option>Onde encontrar</option>
                        <option>Sugestão</option>
                        <option>Caixa de mensagens</option>
                    </select>
                </div>
            </div>
        <?php elseif(strstr($_SERVER['REQUEST_URI'], 'plague-detail.php')): ?>
            <div class="col-12 col-md-6">
                <div class="form-group mb-5">
                    <select id="subject" name="subject" class="custom-select validate" required>
                        <option value="">Assunto</option>
                        <option>Sugestão</option>
                        <option>Elogio</option>
                        <option>Reclamação</option>
                        <option>Onde encontrar</option>
                        <option>Sugestão</option>
                        <option>Caixa de mensagens</option>
                    </select>
                </div>
            </div>
        <?php else: ?>
            
        <?php endif; ?>


        <?php if(strstr($_SERVER['REQUEST_URI'], 'product-details.php')): ?>
            <div class="col-12 col-md-6">
                <div class="form-group mb-5">
                    <input type="text" name="culture" id="culture" class="form-control validate" required>
                    <label for="phone">Cultura</label>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group mb-5 form-control custom-check-form">
                    <label class="normal-label custom-label" for="">Já Usou produtos biológicos?</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label normal-label custom-label" for="inlineRadio1">Sim</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label normal-label custom-label" for="inlineRadio2">Não</label>
                    </div>
                </div>
            </div>
        <?php elseif(strstr($_SERVER['REQUEST_URI'], 'cultures-detail.php')): ?>
            <div class="col-12 col-md-6">
                <div class="form-group mb-5">
                    <input type="text" name="culture" id="culture" class="form-control validate" required>
                    <label for="phone">Cultura</label>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group mb-5 custom-check-form">
                    <label class="normal-label" for="">Já Usou produtos biológicos?</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label normal-label" for="inlineRadio1">Sim</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label normal-label" for="inlineRadio2">Não</label>
                    </div>
                </div>
            </div>
        <?php elseif(strstr($_SERVER['REQUEST_URI'], 'plague-detail.php')): ?>
            <div class="col-12 col-md-6">
                <div class="form-group mb-5 custom-check-form">
                    <input type="text" name="culture" id="culture" class="form-control validate" required>
                    <label for="phone">Cultura</label>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group mb-5 custom-check-form">
                    <label class="normal-label" for="">Já Usou produtos biológicos?</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input form-control" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label normal-label" for="inlineRadio1">Sim</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input form-control" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label normal-label" for="inlineRadio2">Não</label>
                    </div>
                </div>
            </div>
        <?php else: ?>
            
        <?php endif; ?>



        <?php if(strstr($_SERVER['REQUEST_URI'], 'product-details.php')): ?>
            <div class="col-12">
                <div class="form-group mb-5 form-control">
                    <label class="normal-label custom-label" style="margin-right: 20px;">Área: </label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label normal-label custom-label" for="inlineRadio1">0 A 50HA</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label normal-label custom-label" for="inlineRadio2">50 A 100HA</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label normal-label custom-label" for="inlineRadio2">100 A 500HA</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label normal-label custom-label" for="inlineRadio2">+ de 500HA</label>
                    </div>
                </div>
            </div>
        <?php elseif(strstr($_SERVER['REQUEST_URI'], 'cultures-detail.php')): ?>
            <div class="col-12 col-md-6">
                <div class="form-group mb-5">
                    <label class="normal-label" for="">Já Usou produtos biológicos?</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label normal-label" for="inlineRadio1">Sim</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label normal-label" for="inlineRadio2">Não</label>
                    </div>
                </div>
            </div>
        <?php elseif(strstr($_SERVER['REQUEST_URI'], 'plague-detail.php')): ?>
            <div class="col-12 col-md-6">
                <div class="form-group mb-5">
                    <label class="normal-label" for="">Já Usou produtos biológicos?</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input form-control" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label normal-label" for="inlineRadio1">Sim</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input form-control" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label normal-label" for="inlineRadio2">Não</label>
                    </div>
                </div>
            </div>
        <?php else: ?>
            
        <?php endif; ?>
                

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

<script src="https://www.google.com/recaptcha/api.js?render=6Lf8ELAbAAAAAMbnxjhK3w8qSb73VMW3SNDSdTfl"></script>
