function showToast(title,information, type_number, time){
    type = ['success','info','warning','error'];
    $.toast({
        heading: title,
        text: information,
        icon: type[type_number],
        loader: true,        // Change it to false to disable loader
        loaderBg: '#F2E41B',  // To change the background
        showHideTransition: 'slide',
        hideAfter: time, //toast some ao exibir msg, false fica ate usuario clicar
        position: 'bottom-right'

    })
}
