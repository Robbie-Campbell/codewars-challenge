def get_the_first_letter_and_numbers_from_list_items(arr):
    return [x[:1] for x in arr], [x.split(' ')[1] for x in arr]

def convert_data_into_dict(letters, numbers):
    return_dict = dict()
    for letter, number in zip(letters, numbers):
        if letter in return_dict:
            return_dict[letter] = int(number) + int(return_dict[letter])
        else:
            return_dict[letter] = int(number)
    return return_dict

def convert_cleaned_data_into_string_format(cleaned_data, wanted_data):
    if sum(cleaned_data.values()) == 0:
        return ''
    return_arr = []
    for x in wanted_data:
        number = cleaned_data.get(x) if cleaned_data.get(x) != None else 0
        return_arr.append("({} : {})".format(x, number))
    return ' - '.join(return_arr)

def stock_list(listOfArt, listOfCat):
    letters, numbers = get_the_first_letter_and_numbers_from_list_items(listOfArt)
    cleaned_data = convert_data_into_dict(letters, numbers)
    return convert_cleaned_data_into_string_format(cleaned_data, listOfCat)

'''
    Description:
    A bookseller has lots of books classified in 26 categories labeled A, B, ... Z. Each book has a code c of 3, 4, 5 or more characters. The 1st character of a code is a capital letter which defines the book category.

    In the bookseller's stocklist each code c is followed by a space and by a positive integer n (int n >= 0) which indicates the quantity of books of this code in stock.

    For example an extract of a stocklist could be:

    L = {"ABART 20", "CDXEF 50", "BKWRK 25", "BTSQZ 89", "DRTYM 60"}.
    or
    L = ["ABART 20", "CDXEF 50", "BKWRK 25", "BTSQZ 89", "DRTYM 60"] or ....
    You will be given a stocklist (e.g. : L) and a list of categories in capital letters e.g :

    M = {"A", "B", "C", "W"} 
    or
    M = ["A", "B", "C", "W"] or ...
    and your task is to find all the books of L with codes belonging to each category of M and to sum their quantity according to each category.

    For the lists L and M of example you have to return the string (in Haskell/Clojure/Racket a list of pairs):

    (A : 20) - (B : 114) - (C : 50) - (W : 0)
    where A, B, C, W are the categories, 20 is the sum of the unique book of category A, 114 the sum corresponding to "BKWRK" and "BTSQZ", 50 corresponding to "CDXEF" and 0 to category 'W' since there are no code beginning with W.

    If L or M are empty return string is "" (Clojure and Racket should return an empty array/list instead).

    Note:
    In the result codes and their values are in the same order as in M.
'''