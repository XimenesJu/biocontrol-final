/**
 * User-AgentHelper
 * 
 * Identifica o navegador e insere atributo no document
 */
(function() {

    let isIe = (
        navigator.userAgent.indexOf("MSIE ") > -1 || navigator.userAgent.indexOf("Trident/") > -1
    );

    let isEdge = navigator.userAgent.indexOf("Edge/") > -1;

    let doc = document.documentElement;        

    if(isIe) doc.setAttribute('data-isie', true);
    if(isEdge) doc.setAttribute('data-edge', true);
    
})();