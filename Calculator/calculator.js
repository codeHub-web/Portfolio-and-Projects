const outPutScreen = document.getElementById('screen');




const showNum = (x) =>{
  if(outPutScreen.value.includes(x)){
    if(x == '+' || x == '-' || x == '/' || x == '*'){
        outPutScreen.value.pop();
    }
  }
  outPutScreen.value += x;
}


const add = () =>{

}

const divide = () =>{

}

const subtract = () =>{

}

const multiply = () =>{

}
const backSpace = () =>{
   let expression = outPutScreen.value;
   let numArray;

   numArray = expression.split(''); //split values to array

   //numArray[numArray.length - 1] = '';  //sets last value in array to to empty
   numArray.pop(); //pops last value from array
   outPutScreen.value = numArray.join(''); //outputs joined version of array

}


const calculate = () =>{
    let expression = outPutScreen.value;
    let answer = 0;

    if (expression.includes('+')){
       let numbers = expression.split('+');
       answer = parseFloat(numbers[0]) + parseFloat(numbers[1]);
       outPutScreen.value = (answer);     
    }else if(expression.includes('-')){
       let numbers = expression.split('-');
       answer = parseFloat(numbers[0]) - parseFloat(numbers[1]);
       outPutScreen.value = answer;
    }else if(expression.includes('*')){
        let numbers = expression.split('*');
        answer = parseFloat(numbers[0]) * parseFloat(numbers[1]);
        outPutScreen.value = answer;
    }else if(expression.includes('/')){
        let numbers = expression.split('/');
        answer = parseFloat(numbers[0]) / parseFloat(numbers[1]);
        outPutScreen.value = answer;
    }
    
}

const clearDisplay = () =>{
    outPutScreen.value = '';

}




 

