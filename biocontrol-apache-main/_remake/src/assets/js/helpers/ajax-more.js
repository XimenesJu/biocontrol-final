/*!
 * 
 * @author Victor Sato
 * 
 * @author Vander Amorin
 * http://vanderamorin.com
 * 
 * @notes
 * O retorno do conteúdo precisa ser em HTML, pronto para ser inserido na página
 * 
 * @param data-ajax-more
 * url a ser requisitada
 * 
 * @param data-page
 * o numero da páginação
 * 
 * @param data-destiny (opcional)
 * seletor CSS do elemento onde será injetado o retorno da requisição
 * 
 * @param data-loading-text
 * Texto que irá aparecer no botão enquanto a requisição está sendo feita
 * 
 */

$(function() {

    const ajaxMore = $('[data-ajax-more]');

    if(!ajaxMore.length) return false;

    $(() => ajaxGo(ajaxMore));

    ajaxMore.on('click', function(e) {
        e.preventDefault();

        ajaxGo($(this));
    });

    function ajaxGo(e) {

        const el = e;

        const theUrl = el.data('ajaxMore'),
              page = parseInt(el.attr('data-page')),
              destiny = $(el.data('destiny')) || $('.ajax-destiny');

        const btnState = {
            initialText: el.html(),
            loadingText: el.data('loadingText')
        }

        el.html(btnState.loadingText);

        $.ajax({
            url: theUrl +'?page='+ page,
            method: 'get',
            dataType: 'html',
            success: function (res) {

                if(res == '') {
                    el.hide();
                    return;
                }

                destiny.append(res);
                el.attr('data-page', page + 1);
                el.html(btnState.initialText);
            }
        });
    }

});