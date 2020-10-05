/** Calculate the sum
 *  @param {Array} input
 */

const hitungsum = (input) => {
    if (toString.call(input) !== '[object Array]')
        return false;
    var total = 0;
    for (var i = 0; i < input.length; i++) {
        if (isNaN(input[i])) {
            continue
        }
        total += Number(input[i])
    }
    return total;
}

var data = [
   1,  4,  9, 16,  25,
  36, 49, 64, 81, 100
]


console.log(hitungsum(data))
