
function AddRemoveClass(id=undefined, add=undefined, remove=undefined){
    if (typeof id !== 'undefined'){
        if (typeof add !== 'undefined'){
            $(id).addClass(add);
        }
        if (typeof remove !== 'undefined'){
            $(id).removeClass(remove);
        }
        if ((typeof add !== 'undefined') && (typeof remove !== 'undefined')){
            $(id).addClass(add);
            $(id).removeClass(remove);
        }
    }
    
}

if (screen.width >= 768){
}
if (screen.width >= 1024){
   jQuery(function () {
        jQuery(window).scroll(function () {
            if (jQuery(this).scrollTop() > 200) {
                AddRemoveClass('header', 'header-menor')
                AddRemoveClass('.linha', 'linha-menor')
            }else{
                AddRemoveClass('header', undefined, 'header-menor')
                AddRemoveClass('.linha', undefined, 'linha-menor')
            }
        });
   });
}
 