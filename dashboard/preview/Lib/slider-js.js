
function cuid(){return"function"==typeof parent.sgsc_cuid?parent.sgsc_cuid():"-"}function UPDATE_VAL(t,a){var r=$('[data-cell="input-'+a+'"]'),n=r.attr("data-format"),i=r.attr("data-unit"),e=r.attr("data-ul"),a=FORMAT_SYM(r.attr("data-decimal"));r.attr("cell-v",t),e=("US"==n?FORMAT_NUM:FORMAT_NUM_EU)(t,currencySymbol=i,decimalPlaces=a,symbolPosition=e),r.val(e)}function GET_VAL(t){var a=$('[data-cell="input-'+t+'"]'),t=a.attr("data-format"),a=(a.attr("data-unit"),a.attr("data-ul"),a.val()),a=("US"==t?FORMAT_SYM:FORMAT_SYM_EU)(a);return a}function UPDATE_RANGE(t,a,r){let n=$("[range-slider='"+t+"']").data("ionRangeSlider");n.update({from:a,max:r})}$("[range-slider]").each(function(t,a){var r=$(this).attr("range-slider"),n=$('[data-cell="input-'+r+'"]'),i=FORMAT_SYM(n.attr("data-min")),e=FORMAT_SYM(n.attr("data-max")),d=FORMAT_SYM(n.attr("data-from")),n=FORMAT_SYM(n.attr("data-step"));UPDATE_VAL(d,r),$(this).ionRangeSlider({skin:"round",grid:0,min:i,max:e,step:n,from:d,prettify_separator:",",prefix:"",postfix:"",onFinish:function(t){},onChange:function(t){UPDATE_VAL(t.from,r)}})}),$(document).on("change",'[data-cell][is-slider="1"]',function(){var t=$(this).attr("data-cell");v=GET_VAL(t);var a=FORMAT_SYM($(this).attr("data-max"));v<a||(a=v),UPDATE_RANGE(t,v,a)});

