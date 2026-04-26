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

    <div class="form-wrapper">
    
        <div>
            <div class="form-group">
                <input type="text" name="nome" id="nome" class="form-control validate" required>
                <label for="nome">Nome</label>
            </div>
        </div>

        <div >
            <div class="form-group">
                <input type="email" name="email" id="email" class="form-control validate" required>
                <label for="email">E-mail</label>
            </div>
        </div>

        <div class="">
            <div class="form-group">
                <input type="text" name="phone" id="phone" class="form-control validate phoneMask" required>
                <label for="phone">Telefone</label>
            </div>
        </div>

        <div class="form-city">
            <div class="form-group">
                <input type="text" name="city" id="city" class="form-control validate" required>
                <label for="city">Cidade</label>
            </div>
            <div class="form-group">
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

        <div class="">
            
        </div>

        <div class="">
            <div class="form-group">
                <input type="text" name="company" id="company" class="form-control validate" required>
                <label for="company">Empresa</label>
            </div>
        </div>

        <?php if(strstr($_SERVER['REQUEST_URI'], 'contact.php')): ?>
        <div class="">
            <div class="form-group">
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
        <?php endif ?>

        <div class="">
            <div class="form-group">
                <textarea name="mensagem" id="mensagem" rows="8" class="form-control validate" required></textarea>
                <label for="mensagem">Mensagem</label>
            </div>
        </div>

        <div class="">
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

        <div class="text-right">
            <button type="submit" class="btn btn-secondary">
                Enviar
                <i class="fas fa-fw fa-angle-right"></i>
            </button>
        </div>
    </div>

    <div class="feedback mt-3"></div>

</form>

<script src="https://www.google.com/recaptcha/api.js?render=6Lf8ELAbAAAAAMbnxjhK3w8qSb73VMW3SNDSdTfl"></script>
