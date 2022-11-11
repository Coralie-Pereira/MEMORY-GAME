const password_checker = document.querySelector('.password-checker');
const password = document.querySelector('#mdp');
const progress_bar = document.querySelector('.bar');
let weak = document.querySelector('#weak')
let medium = document.querySelector('#medium')
let strong = document.querySelector('#strong')


mdp.onkeyup = () => {
    
    checkPasswordStrength(mdp.value)
}
function checkPasswordStrength(mdp) {
    let strength = 0;
    
    if (mdp.match(/(?=.{0,})/))
    strength=0;

    if (mdp.match(/(?=.{1,})/))
    strength=1;

    if ((mdp.match(/(?=.*[A-Z])/)) && (mdp.match(/(?=.{8,})/)) && (mdp.match(/(?=.*[0-9])/)))
    strength=2;

    if ((mdp.match(/(?=.*[A-Z])/)) && (mdp.match(/(?=.{8,})/)) && (mdp.match(/(?=.*[0-9])/)) && (mdp.match(/(?=.*[`!@#$%^&*])/)))
    strength=3

    console.log(strength);
    if(strength ==0 ) progress_bar.style.cssText = `width : 0%; background-color: unset;`;
    if(strength ==0 )weak.style.cssText = `opacity : 0%;`;
    if(strength ==0 )medium.style.cssText = `opacity : 0%;`;
    if(strength ==0 )strong.style.cssText = `opacity : 0%;`; 
   
    if(strength ==1 ) progress_bar.style.cssText = `width : 33%; background-color: red;`;
    if(strength ==1 ) weak.style.cssText = `opacity : 100%; color: red;`;
    if(strength ==1 ) medium.style.cssText = `opacity : 0%;`;
    if(strength ==1 ) strong.style.cssText = `opacity : 0%;`;


    if(strength ==2 ) progress_bar.style.cssText = `width : 66%; background-color: orange;`;
    if(strength ==2 )weak.style.cssText = `opacity : 0%;`;
    if(strength ==2 )medium.style.cssText = `opacity : 100%; color: orange;`; 
    if(strength ==2 )strong.style.cssText = `opacity : 0%;`;

    
    if(strength ==3 ) progress_bar.style.cssText = `width : 100%; background-color: green;`;
    if(strength ==3 )weak.style.cssText = `opacity : 0%;`;
    if(strength ==3 ) medium.style.cssText = `opacity : 0%;`;
    if(strength ==3 )strong.style.cssText = `opacity : 100%; color: green;`;

console.log(weak);

}
