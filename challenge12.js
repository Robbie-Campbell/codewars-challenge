function checkAttributeAndConvertToArrIfString(attribute) {
  if (typeof attribute === 'string') {
    return attribute.split("");
  }  
  return attribute;
}

function checkIfValueIsUniqueInOrder(index, iterable) {
  if (index == 0) {
    return iterable[index];
  }
  else if (iterable[index] != iterable[index - 1]) {
    return iterable[index];
  }
  return null;
}

var uniqueInOrder=function(iterable){
  let uniqueNumbersInOrder = [];
  iterable = checkAttributeAndConvertToArrIfString(iterable);
  for (let index = 0; index < iterable.length; index++) {
    let currentValue = checkIfValueIsUniqueInOrder(index, iterable);
    if (currentValue != null) {
      uniqueNumbersInOrder.push(currentValue);
    }
  }
  return uniqueNumbersInOrder;
}

/*
    Implement the function unique_in_order which takes as argument a sequence and returns a list of items without any elements with the same value next to each other and preserving the original order of elements.

    For example:

    uniqueInOrder('AAAABBBCCDAABBB') == ['A', 'B', 'C', 'D', 'A', 'B']
    uniqueInOrder('ABBCcAD')         == ['A', 'B', 'C', 'c', 'A', 'D']
    uniqueInOrder([1,2,2,3,3])       == [1,2,3]
*/