// 1...
var clientes = [
  {
    id: 1,
    nome: "Luis Santos Silveira",
    idade: 18
  },
  {
    id: 2,
    nome: "Ricardo Lopes Alves",
    idade: 30
  },
  {
    id: 3,
    nome: "Gustavo Silva Junior",
    idade: 26
  }
];

function getName (){
  
  clientes.map((item) =>{
    let nameArr = item.nome.split(' ')
  
    console.log(`"${nameArr[nameArr.length - 1]}, ${nameArr[0]}"`)
  }
  )
}
getName()

// 2...
function formatNumber() {
  var numero = "5(1)9-876-543-21";

  var cleanNumber = numero.replace(/\D/g, "");

  var numeroFormatado = cleanNumber.replace(/^(\d{2})(\d{5})(\d{4})$/, "($1) $2-$3");
  console.log(numeroFormatado);

}
formatNumber()


// 3...
`
  a função é: c
  a função é: d
  a função é: a
`


// 4...
`Ocorre o erro na funcão d() onde não é chamado o metodo resolve(), concluindo que a tarefa não sera concluida`