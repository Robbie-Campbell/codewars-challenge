def digital_root(n):
    number = [char for char in str(n)]
    running_total = 0
    for n in number:
        running_total += int(n)
    if len(str(running_total)) > 1:
        return digital_root(running_total)
    else:
        return running_total