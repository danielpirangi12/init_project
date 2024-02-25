// confirm('Este site usa cookies e tecnologias afins, que são pequenos arquivos ou trechos de texto baixados para um aparelho quando o visitante acessa um site ou app. Para saber como ver os cookies deixados no seu aparelho, confira Os cookies que o Squarespace usa.')


// // PRIMITIVOS
// let nome = 'Daniel'                 /*String*/
// let mumero = 1                      /*Number*/
// let usuarioVerifcicacao = true      /*Boolean*/
// let pessoa = null                   /*Null*/
// let telefone = undefined            /*Undefined(será definido pelo proprio sistema quando não identificar)*/

// ====================== OPERADOR LÓGICOS ====================================

    // ==  Igualdade       a == b     (verdadeiro se a for igual a b)
    // === Idêntico        a === b    (verdadeiro se a for idêntico a b)
    // !=  Diferente       a != b     (verdadeiro se a for diferente de b)
    // !== Não idêntico    a !== b    (Verdadeiro se a for diferente de b)
    // <   Menor que       a < b      (Verdadeiro se a for menor que b)
    // >   Maior que       a > b      (Verdadeiro se a for maior que b)
    // <   Menor igual que a <= b     (Verdadeiro se a for menor igual a b) 
    // >   Maior igual que a >= b     (Verdadeiro se a for maior igual a b)

    //     =================== && =====================
    //     const a = 2
    //     const b = 2

    //     console.log(a === b && a <= b) // V e V = V
    //     console.log(a === b && a < b)  // V e F = F
    //     console.log(a < b && a === b)  // F e V = F
    //     console.log(a > b && a < b)    // F e F = F

    //     =================== OU =====================
    //     const a = 2
    //     const b = 2

    //     console.log(a === b || a <= b)   // V e V = V
    //     console.log(a === b || a < b)    // V e F = V
    //     console.log(a < b || a === b)    // F e V = V
    //     console.log(a > b || a < b)      // F e F = F

    //     ================== NOT =====================
    //      const a = 2
    //      const b = 2

    //      console.log(!(a === b))  // TRUE = FALSE
    //      console.log(!(a < b))    // FALSE = TRUE
    //      console.log(!(a == b))   // TRUE = FALSE

//=============================================================================

// ==================== OPERADOR MATEMÁTICOS ==================================

    //      let primeiroValor = 5
    //      let segundoValor = 2

    //      console.log(primeiroValor + segundoValor) //Soma
    //      console.log(primeiroValor - segundoValor) //Subtração
    //      console.log(primeiroValor / segundoValor) //Divisão
    //      console.log(primeiroValor * segundoValor) //Multiplicação
    //      console.log(primeiroValor % segundoValor) //Resto da Divisão


// ==================== LAÇO DE REPETIÇÃO =====================================

    //      =========== FOR =============
    //      for(let i = 0; i < 10; i++){
    //           console.log(i)
    //      }

    //      =========== WHILE ===========

    //      let a = 10
    //      let b = 15

    //      while(a < b){
    //          console.log('Incrementando a variável ' + a)a++;
    // }


    //      ========= DO WHILE ===========

    //      var i = 1

    //      do{
    //          console.log('Entrou ' + i)
    //          i++
    //        }while(i <= 5)

// ===================== CONDIDIONAIS ========================================

    //      =============== IF (SE) ====================

    //      let nomeFilme = 'Batman'
 
    //      if(nomeFilme === 'Vingadores'){
    //          console.log('É o filme dos vingadores')
    //      }
    //      else if(nomeFilme === 'Batman'){
    //          console.log('É Um Filme da DC')
    //      }
    //      else{
    //          console.log('É outro Filme')
    //      }

    //      ============ OPERADOR TERNÁRIO =============

    //      true ? console.log('Condição verdadeira') : console.log('Condição   Falsa')

    //      nomeFilme === 'Vingadores' ? console.log('É um filme dos vingadores') : console.log("Outro Filme")


    //      let nomeFilme = "Vingadores"    

    //      switch(nomeFilme){
    //          case 'Vingadores':
    //              console.log('É UM FILME DOS VINGADORES')
    //              break
    //      case 'Batman vs Super-homem':
    //              console.log('É um Filme da DC')
    //              break
    //          default:
    //              console.log('É um outro filme')
    //              break
    //      }

    //      let avaliacaoFilme = 4
    
    //      switch(avaliacaoFilme){
    //          case 1:
    //          case 2:
    //              console.log('Filme Ruim')
    //              break
    //          case 3:
    //          case 4:
    //              console.log('Filme Bom')
    //              break
    //          case 5:
    //              console.log('Filmes Ótimo')
    //              break
    //          default:
    //              console.log('Nota inválida')
    //              break
    //      }


// ===================== FUNÇÕES ========================================


    //      function soma(num1, num2){
    //          console.log(num1 + num2)
    //      }
    //      soma (3, 6)



    //      function soma(num1, num2){
    //          return num1 + num2
    //      }

    //      let resultadoDaSoma = soma(1, 4)
    //          console.log(resultadoDaSoma)

    //      soma()


    //      function soma(num1, num2){
    //          return num1 + num2
    //      }

    //      let resultadoDaSoma = soma(1, 4)
    //             console.log(resultadoDaSoma)

    //      resultadoDaSoma = soma(resultadoDaSoma, 10)
    //             console.log(resultadoDaSoma)


    //      function incentiverQuester(nomeQuester){
    //          alert('Muito bem ' + nomeQuester + ' , você chegou ao JS, continue assim!')
    // }
    
    //      incentiverQuester('Daniel')



// =============================================================================
// =============================================================================
// =============================================================================

//=== EXERCICIO 1 ===========

// const nomeDoUsuario = prompt('Digite Seu Nome: ')
// alert('Seja bem vindo, ' + nomeDoUsuario + '!')


//=== EXERCICIO 2 ===========

// const boletoPago = true

// if(boletoPago){
//     alert('O boleto está pago')
// }
// else if(boletoPago === false){
// alert('Boleto Não está pago')
// }

//=== EXERCICIO 3 ===========

// const confirmacaoDeHospedagem = confirm('Seja bem vindo(a), aventureiro(a)! Gostaria de pagar R$50,00 para passar a noite na nossa hospedagem?')

// if (confirmacaoDeHospedagem) {
//     alert('Ótimo! Nós temos as melhores camas de toda região')
// }
// else{
//     alert('Que pena! Você parecia ua pessoa mais legal')
// }


// true ? alert('Ótimo! Nós temos as melhores camas de toda região') : alert('Que pena! Você parecia ua pessoa mais legal')

//=== EXERCICIO 4 ===========

    // for(let i = 0; i <= 10; i++){
    //     console.log('O número atual é ' + i);
    // }

//=== EXERCICIO 5 ===========

        // for(let i = 0; i <= 10; i++){
        //     const dobro = i * 2
        //     console.log('O dobro de ' + i +' é ' + dobro);
        // }


// =============================================================================
// =============================================================================
// =============================================================================

// ================ HOSTING===========================
//         ORDEM DE EXECUÇÃO DA VARIAVEL
// var pais //declaração
// pais = 'Brasil' //atribuição

// console.log(pais)

// ============ FUNÇÕES ANÔNIMAS ===================== 
//        FUNÇÕES INVOCADAS EM VARIAVEIS

// let resultadoDaSoma = function(numero1, numero2){
//     return numero1 + numero2
// }

// console.log(resultadoDaSoma(12, 5))


// ============== ARROW FUNCTION =====================
//               FUNÇÕES REDUZIDAS

// let resultadoDaSoma = (numero1, numero2) => {
//     return numero1 + numero2
// }

// let resultadoDaSoma = (numero1, numero2) => numero1 + numero2


// console.log(resultadoDaSoma(12, 5))

// const incentivarQuester = nomeQueter => console.log('Parabéns ' + nomeQueter + '! Você chegou ao módulo de JS intermediário.')
// incentivarQuester('Roberto')

// ============== HIGHER ORDER FUNCTION =====================
//          ORDEM SUPERIOR DE FUNÇÕES (CALLBACK)

const calcularAnoDeNascimento = function (idade, mesDeNascimento, imprimir){
    const mesAtual = 2
    let anoDeNascimento = 2024 - idade
    if(mesDeNascimento > mesAtual) anoDeNascimento --
    imprimir(anoDeNascimento)
}

let imprimirAnoDeNascimento = anoDeNascimento =>{
    console.log('Seu ano de nascimento é:' + anoDeNascimento)
}

calcularAnoDeNascimento(29, 12,imprimirAnoDeNascimento)  