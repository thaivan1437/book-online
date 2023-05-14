function files_cachedCss(fileName) {
    
    var link = document.createElement('link');

    link.rel = 'stylesheet';
    link.href = window.base_url + "/assets/" + fileName;
    $("head").prepend(link);
   
}

function files_cachedScript( fileName, options ) {

    options = $.extend( options || {}, {
      dataType: 'script',
      cache: true,
      url: window.base_url + "/assets/" + fileName
    });

    return jQuery.ajax( options );
}


$(window).on("load", function() {
    //css xep cao nhat override phia duoi
    files_cachedCss("css/style.css");
    files_cachedCss("css/bootstrap.min.css");
    files_cachedCss("font/font-awesome-4.2.0/css/font-awesome.css");
    files_cachedCss("css/mdb.min.css");
    files_cachedCss("js/menu/menumaker.css");
    files_cachedCss("js/slick/slick.css");
    files_cachedCss("js/slick/slick-theme.css");

    files_cachedScript('js/lazyload/lazyload.min.js');
    files_cachedScript('js/menu/menumaker.js');
    files_cachedScript('js/popper.min.js');
    files_cachedScript('js/bootstrap.min.js');
    files_cachedScript('js/mdb.min.js');
    files_cachedScript('js/slick/slick.min.js').then(function() {
        files_cachedScript('js/script.js');
    });
    
    
});