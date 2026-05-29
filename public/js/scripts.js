$(document).ready(function () {
    const params = new URLSearchParams(window.location.search);
    if (params.has('level')) {
        getContentLevel(params.get('level'),true);
    }
    if(params.has('level')&&params.has('lection')&&params.has('resource')){
        loadResource(params.get('resource'),params.get('level'),params.get('lection'));
    }
}
);

function getContentLevel(level,keepresource=false) {
    const url = new URL(window.location.href);
    $.ajax({
        url: "contentbylevel/" + level, success: function (result) {
            url.searchParams.set('level', level);
            if(!keepresource){
                url.searchParams.delete('lection');
                url.searchParams.delete('resource');
            }
            window.history.pushState({}, '', url);
            $("#levelcontent").html(result)
        }
    });
}
function loadResource(resource,level,lection){
    const url = new URL(window.location.href);
    const queryUrl= "getresource/" + resource+"?level="+level+"&lection="+lection;
    $.ajax({
        url: queryUrl, success: function (result) {
            url.searchParams.set('resource', resource);
            url.searchParams.set('level', level);
            url.searchParams.set('lection', lection);
            window.history.pushState({}, '', url);
            $("#resourcecontent").html(result)
        }
    });
}