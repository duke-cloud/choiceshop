//calculating a collection of enteries

var calc ={};
calc.numbers = [];
calc.input = function(arg){
  if(arg ==="+"){
    var sum =0;
  for(var i=0;i <calc.numbers.length;i++){
    sum =sum + calc.numbers[i];
  }console.log(sum);
}else if(arg==="*"){
  product =1;
  for(var i=0;i<calc.numbers.length;i++){
    product = product * calc.numbers[i];
  }console.log(product);
}else{
  console.log(calc.numbers.push(arg));
}console.log(calc.numbers);

}
