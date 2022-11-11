

function password_length(event) {

    const bar = document.getElementById('password-length');

    var length = event.target.value.length;
    bar.className = ""

    if (length <5){
        bar.classList.add('weak');
    } else if (length >=5 && length < 10) {
        bar.classList.add('medium')
    } else if (length >= 10) {
        bar.classList.add('strong')
    }
}

bar.addEventListener(password_length)