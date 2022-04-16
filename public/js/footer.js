$(function(){
    //mascar para dinheiro
    $('.maskMoney').mask('000.000.000.000.000,00', {reverse:true});
    $('.maskPhone').mask('(00) 0 0000-0000', {reverse:false});


    //showToast
    Livewire.on('footer_showToast',(msg_toast) => {
        showToast(msg_toast.title, msg_toast.information, msg_toast.type, msg_toast.time);
    });
});
