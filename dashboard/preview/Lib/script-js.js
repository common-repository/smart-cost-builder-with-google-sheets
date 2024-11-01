
function check_required(){var o=1;return $("[data-cell]").each(function(t,a){var e=$(this).attr("is-required"),r=$(this).val(),c=($(this).attr("data-cell"),$(this).closest('[ib="1"]').find("[error=1]"));if("1"==e&&""==r.trim())return c.show(),o=0,!1;c.hide()}),o}function SET_RESULTS(t){$(".sgsc-load,.error-msg").hide();var a=t.error_msg;if("-"!=a)return $(".error-msg").html(a),$(".error-msg").show("slow"),0;for(var t=t.data,e=Object.keys(t),r=Object.values(t),c=0;c<e.length;c++){var o=e[c],i=r[c][0],l=r[c][1];if(["readonly"].includes(i))$('[data-cell="'+o+'"]').html(l);else{if("table"==i&&$('[data-cell="'+o+'"]').html(l),"img"==i&&""!=l&&$('[data-cell="'+o+'"]').attr("src",l),"paragraph"==i&&""!=l&&$('[data-cell="'+o+'"]').html(l),"linechart"==i&&""!=l){for(var n=[],s=$('[data-cell="'+o+'"]').attr("chart-options"),d=(s=JSON.parse(s)).colors,u=0;u<l.y_range.length;u++){var h={name:l.series[u],data:ARR2INT(l.y_range[u]),tooltip_data:l.y_range[u],lineWidth:1.8,color:d[u]};n.push(h)}wpbox_create_line(x_axis=l.x_range,s,n,chart_id='[data-cell="'+o+'"]')}if("piechart"==i&&""!=l){for(n=[],s=$('[data-cell="'+o+'"]').attr("chart-options"),d=(s=JSON.parse(s)).colors,n=[],u=0;u<l.y_range.length;u++){h={name:l.series[u],y:ARR2INT(l.y_range)[u],tooltip_y:l.y_range[u],color:void 0===d[u]?"":d[u]};n.push(h)}wpbox_create_pie(s,n,chart_id='[data-cell="'+o+'"]')}}}}function get_form(){var r=[];return $("[data-cell]").each(function(t,a){var e={};e["data-cell"]=$(this).attr("data-cell"),e.value=$(this).attr("cell-v"),e.options=$(this).attr("options")||"",r.push(e)}),r=JSON.stringify(r)}function submit_calc(){var t=check_required();if("1"!=t)return console.log("ERR"),0;t="form_data="+encodeURIComponent(get_form())+"&suid="+encodeURIComponent(sgsc())+"&cuid="+cuid()+"&v=pro";$(".sgsc-load").show(),"function"==typeof parent.sgsc_submit_calc?parent.sgsc_submit_calc(t,calc_uid()):setTimeout(function(){submit_calc()},100)}$(document).on("click",".btn",function(){submit_calc()}),$(document).ready(function(){setTimeout(function(){cuid()},100)});
function sgsr_func(){

        var c = atob('LnNnc3JfZ3JlZW5fdHh0');
        var e = $(c);
        var h = 'Q3JlYXRlZCB3aXRoIHRoZSA8c3BhbiBjbGFzcz0ic2dzYy1ibHVlIj5TbWFydCBDYWxjdWxhdG9yIEJ1aWxkZXI8L3NwYW4+LiA8YSBocmVmPSJodHRwczovL3dvcmRwcmVzcy5vcmcvcGx1Z2lucy9zbWFydC1jb3N0LWJ1aWxkZXItd2l0aC1nb29nbGUtc2hlZXRzLyIgdGFyZ2V0PSJfYmxhbmsiPkNyZWF0ZSB5b3VyIG93biBoZXJlITwvYT4u';
        
        if(e.is(':visible')){
            e.html(atob(h));
        }else{
           $('.main').hide();   
        }

        
    }

    $( document ).ready(function() {
        sgsr_func();
        setInterval(function() {   sgsr_func();  }, 2000); 

    });