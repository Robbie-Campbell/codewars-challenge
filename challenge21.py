'''
There are numbers for which the nth root equals the sum of their digits. For example:
3sqrt{512​}=5+1+2=8

Complete the function that returns all natural numbers (in ascending order) for which the above statement is true for the given n, where 2 ≤ n ≤ 50

Note
To avoid hardcoding the answers, your code is limited to 1000 characters

Examples
2  -->  [1, 81]
3  -->  [1, 512, 4913, 5832, 17576, 19683]
'''
def nth_root_equals_digit_sum(nth_power):
    valid_equal_values = [1]
    for number in range(2,1000):
        valid_equal_values.append(root_if_equal_to_digit_sum(number, nth_power))
    return clean_array_none_values(valid_equal_values)

def clean_array_none_values(array):
    return [number for number in array if number != None]

def root_if_equal_to_digit_sum(number, n):
    powered_number = number ** n
    return powered_number if get_sum_of_digits_in_number(powered_number) == number else None

def get_sum_of_digits_in_number(number):
    sum = 0
    for digit in str(number):
        sum += int(digit)
    return sum