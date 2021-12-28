function alertSuccess(text,time = TIME_ALERT){
    $.notify({
        icon:"far fa-check-circle",
        message: text
    },{
        delay:time,
        offset:{x:15,y:15},
        type: 'success',
    })
}
function alertInfo(text,time = TIME_ALERT){
    $.notify({
        icon:"far fa-check-circle",
        message: text
    },{
        delay:time,
        offset:{x:15,y:15},
        type: 'info',
    })
}
function alertWarning(text,time = TIME_ALERT){
    $.notify({
        icon:"far fa-exclamation",
        message: text
    },{
        delay:time,
        offset:{x:15,y:15},
        type: 'warning',
    })
}
function alertDanger(text,time = TIME_ALERT){
    $.notify({
        icon:"far fa-exclamation-triangle",
        message: text
    },{
        delay:time,
        offset:{x:15,y:15},
        type: 'danger',
    })
}

//AJAX_CALL_API
async function ajaxGet(url){
    let rs = null;
    await $.ajax({
        type: 'GET',
        dataType: "json",
        url: URL_API + url,
        timeout: 30000,
        cache: false,
        success: function(result){
            if(result.success === true){
                rs = result.data;
            }
        }
    })
    return rs;
}
async function ajaxPut(url,data){
    let rs= null;
    await $.ajax({
        type: 'PUT',
        data: JSON.stringify(data),
        dataType: "json",
        url: URL_API + url,
        timeout: 30000,
        cache: false,
        success: function(result){
            if(result.success === true){
                rs = result.data;
            }
        }
    })
    return rs;
}
async function ajaxPost(url,data){
    let rs= null;
    await $.ajax({
        type: 'POST',
        data: JSON.stringify(data),
        dataType: "json",
        url: URL_API + url,
        timeout: 30000,
        cache: false,
        success: function(result){
            if(result.success === true){
                rs = result.data;
            }
        }
    })
    return rs;
}
async function ajaxDelete(url,data){
    let rs= null;
    await $.ajax({
        type: 'DELETE',
        data: JSON.stringify(data),
        dataType: "json",
        url: URL_API + url,
        timeout: 30000,
        cache: false,
        success: function(result){
            if(result.success === true){
                rs = result.data;
            }
        }
    })
    return rs;
}