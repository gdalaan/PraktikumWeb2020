function insert(num) {
    document.form.screen.value = document.form.screen.value + num;
}

function sqrt(){
    document.form.screen.value = Math.pow(document.form.screen.value, 2);
}

function equal(){
    var exp = document.form.screen.value;
    if(exp){
        document.form.screen.value = eval(exp);
    }
}

function clean(){
    document.form.screen.value = "";
}

function back(){
    var exp = document.form.screen.value;
    document.form.screen.value = exp.substring(0, exp.length-1);
}
