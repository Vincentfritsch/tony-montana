
function login(){
    var demo = window.confirm('Are you Tony ?')
    console.log(demo)
    var mdp = 'azerty'
    var essai = window.prompt('Enter the password !')
    while(essai!=mdp)
    {
        alert('Bad pass Dude!!')
        var essai = window.prompt('Enter the password !')
    }
    alert('Welcome Tony!!')

}
