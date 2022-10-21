window.addEventListener('load', () => {
    const inout1 = document.getElementById('inpt1');
    const inout2 = document.getElementById('inpt2');
    const parrafo = document.getElementById('parrafo');

    class operaciones{
        constructor(num1,num2) {
            this.num1 = num1;
            this.num2 = num2;
            this.suma = num1 + num2;
            this.resta = num1 - num2;
            this.multiplicacion = num1 * num2;
        }
        sumar(){
            return `La suma de el numero ${this.num1} y el numero ${this.num2} es de: ${this.suma}`;
        }
        resta(){
            return `La resta de el numero ${this.num1} y el numero ${this.num2} es de: ${this.resta}`;
        }
        multiplicacion(){
            return `La multiplicacion de el numero ${this.num1} y el numero ${this.num2} es de: ${this.multiplicacion}`;
        }
    }

    const mostrar = () =>{
        (()=>{
            let radio1 = document.getElementById('radio1');

            radio1.addEventListener('click', ()=>{
                let texto = "";
                if(inout1.value.length < 1 || inout2.value.length < 1) {
                    texto = "Rellene todos los campos gracias.";
                } else {
                    return operaciones.sumar();
                }
                if(true) {
                    parrafo.innerHTML = texto;
                }
            }, false)
        })();

        (()=>{
            let radio2 = document.getElementById('radio2');

            radio2.addEventListener('click', ()=>{
                let texto = "";
                if(inout1.value.length < 1 || inout2.value.length < 1) {
                    texto = "Rellene todos los campos gracias.";
                } else {
                    return operaciones.resta();
                }
                if(true) {
                    parrafo.innerHTML = texto;
                }
            }, false)
        })();
}

    primera = new operaciones(2,4);
    primera.mostrar();
    console.log(primera.sumar());
});