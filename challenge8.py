def is_prime(n):
    return not True in [True if n % x == 0 else False for x in range(2, n - 1)] if n >= 2 else False